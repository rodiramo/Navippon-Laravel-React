<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ActivityFavourited;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function userList()
    {
        $users = User::all();

        return view('admin.userlist', ['users' => $users]);
    }

    public function viewUserFavouritesActivities($userId)
    {
        $user = User::findOrFail($userId);
        $favouriteActivities = ActivityFavourited::where('user_id', $user->user_id)->get();

        return view('admin.favouriteActivitiesList', ['user' => $user, 'favouriteActivities' => $favouriteActivities]);
    }
}
