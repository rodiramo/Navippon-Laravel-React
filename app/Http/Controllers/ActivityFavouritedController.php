<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\ActivityFavourited;

class ActivityFavouriteController extends Controller
{
    public function processFavourite(Request $request, int $id)
    {
        $activity = Activity::findOrFail($id);

        if (!auth()->check()) {
            return redirect()->route('login')->with('message.error', 'Please log in to favourite an activity.');
        }

        $userId = auth()->id();

        if ($userId) {
            ActivityFavourited::create([
                'user_id' => $userId,
                'activity_id' => $activity->activity_id,
            ]);


            $favourites = ActivityFavourited::where('user_id', $userId)->get();

            return redirect()
                ->route('profile')
                ->with('message.success', 'The favouriting of <b>' . $activity->title . '</b> was successful.')
                ->with('favourites', $favourites);
        } else {
            return redirect()->route('login')->with('message.error', 'Please log in to favourite an activity.');
        }
    }

    public function confirmDelete(int $favouriteId)
    {
        $userId = auth()->id();

        try {
            $favourite = ActivityFavourited::where('user_id', $userId)
                ->where('id', $favouriteId)
                ->with('activity')
                ->firstOrFail();

            return view('profile.delete', compact('favourite'));
        } catch (\Exception $e) {
            \Log::error('Error confirming deletion: ' . $e->getMessage());

            return redirect()
                ->route('profile')
                ->with('message.error', 'An error occurred. Please try again later.')
                ->with('message.type', 'danger');
        }
    }

    public function processDelete(Request $request, int $favouriteId)
    {
        $userId = auth()->id();

        try {
            $favourite = ActivityFavourited::where('user_id', $userId)
                ->where('id', $favouriteId)
                ->firstOrFail();

            $activityTitle = $favourite->activity->title;

            $favourite->delete();

            return redirect()
                ->route('profile')
                ->with('message.success', 'Favourite for <b>' . $activityTitle . '</b> has been successfully removed.');
        } catch (\Exception $e) {
            \Log::error('Error deleting favourite: ' . $e->getMessage());

            return redirect()
                ->route('profile')
                ->with('message.error', 'An error occurred while removing the favourite. Please try again later.')
                ->with('message.type', 'danger');
        }
    }
}
