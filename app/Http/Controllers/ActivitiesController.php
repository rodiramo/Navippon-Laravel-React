<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Category;
use App\Models\Budget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class ActivitiesController extends Controller
{
    public function index()
    {
        $activities = Activity::all();

        return view('activities.index', [
            'activities' => $activities,
        ]);
    }

    public function view(int $id)
    {
        $activity = Activity::findOrFail($id);
        $budget = Budget::all();
        return view('activities.view', [
            'activity' => $activity,
            'budget' => $budget,
        ]);
    }

    public function formNew()
    {
        $categories = Category::orderBy('name')->get();
        $budget = Budget::all();
        return view('activities.form-new', [
            'categories' => $categories,
            'budget' => $budget,
        ]);
    }

    public function processNew(Request $request)
    {
        $data = $request->except(['_token']);

        $request->validate(Activity::validationRules(), Activity::validationMessages());

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadImage($request);
        }

        try {
            DB::transaction(function () use ($data) {
                $activity = Activity::create($data);
                $activity->categories()->attach($data['category_id'] ?? []);
            });

            return redirect()
                ->route('activities.index')
                ->with('message.success', 'The activity <b>' . e($data['title']) . '</b> was successfully added!');
        } catch (\Exception $e) {
            \Log::error('Error adding activity: ' . $e->getMessage());
            return redirect()
                ->route('activities.formNew')
                ->withInput()
                ->with('message.error', 'The activity <b>' . e($data['title']) . '</b> could not be saved. Please try again.')
                ->with('message.type', 'danger');
        }
    }

    public function formUpdate(int $id)
    {
        $activity = Activity::findOrFail($id);
        $categories = Category::orderBy('name')->get();

        return view('activities.form-update', [
            'activity' => $activity,
            'categories' => $categories,
        ]);
    }

    public function processUpdate(Request $request, int $id)
    {
        $activity = Activity::findOrFail($id);

        $request->validate(Activity::validationRules(), Activity::validationMessages());

        $data = $request->except(['_token']);

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadImage($request);
        }

        try {
            DB::transaction(function () use ($activity, $data) {
                $activity->update($data);
                $activity->categories()->sync($data['category_id'] ?? []);
            });
        } catch (\Exception $e) {
            \Log::error('Error updating activity: ' . $e->getMessage());
            return redirect()
                ->route('activities.formUpdate', ['id' => $id])
                ->withInput()
                ->with('message.error', 'An error occurred while updating the activity. Please try again later.')
                ->with('message.type', 'danger');
        }

        return redirect()
            ->route('activities.index')
            ->with('message.success', 'The activity <b>' . e($activity->title) . '</b> was successfully updated.');
    }

    public function confirmDelete(int $id)
    {
        return view('activities.delete', [
            'activity' => Activity::findOrFail($id),
        ]);
    }

    public function processDelete(int $id)
    {
        $activity = Activity::findOrFail($id);

        try {
            DB::transaction(function () use ($activity) {
                $activity->categories()->detach();
                $activity->delete();
            });
        } catch (\Exception $e) {
            return redirect()
                ->route('activities.confirmDelete', ['id' => $id])
                ->withInput()
                ->with('message.error', 'The activity <b>' . e($activity->title) . '</b> could not be deleted. Please try again later.')
                ->with('message.type', 'danger');
        }

        return redirect()
            ->route('activities.index')
            ->with('message.success', 'The activity <b>' . e($activity->title) . '</b> was successfully deleted.');
    }

    protected function uploadImage(Request $request): string
    {
        $image = $request->file('image');
        $title = $request->input('title');

        $imageName = date('YmdHis_') . \Str::slug($title) . "." . $image->guessExtension();

        $image->storeAs('imgs', $imageName);

        return $imageName;
    }
}
