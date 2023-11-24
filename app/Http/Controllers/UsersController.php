<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Session;
use App\Models\ActivityLog;

class UsersController extends Controller
{
    //

    public function users(){
        $users = User::all();
        $sessions = Session::all();
        $activityLogs = ActivityLog::orderBy('created_at', 'desc')->paginate(10);
        
        return view('admin.users.users', compact('users', 'sessions','activityLogs'));
    }
    

public function deleteuser($id){
    $deleteuser=User::find($id);
    $deleteuser->delete();
    return redirect('/users');
}

public function getOnlineUserCount()
{
    return DB::table(config('session.table'))->count();
}

public function getLoggedInUsers()
{
    return DB::table(config('session.table'))
        ->distinct()
        ->select(['users.id', 'users.name', 'users.email'])
        ->whereNotNull('user_id')
        ->leftJoin('users', config('session.table') . '.user_id', '=', 'users.id')
        ->get();
}

public function getActiveUsersInLastMinutes(int $minutes)
{
    return DB::table(config('session.table'))
        ->distinct()
        ->select(['users.id', 'users.name', 'users.email'])
        ->whereNotNull('user_id')
        ->where('sessions.last_activity', '>', Carbon::now()->subMinutes($minutes)->getTimestamp())
        ->leftJoin('users', config('session.table') . '.user_id', '=', 'users.id')
        ->get();
}

// public function useractivity(){
//     $activity = new UserActivity([
//         'user_id' => auth()->user()->id,
//         'activity_type' => 'login', 
//         'description' => 'User logged in', 
//     ]);
    
//     $activity->save();
// }


public function performXYZAction()
{
    // Your code for performing the XYZ action goes here

    // Log the activity
    $activityLog = new ActivityLog();
    $activityLog->user_id = Auth::user()->id;
    $activityLog->activity = 'User performed XYZ action';
    $activityLog->save();

    // Rest of your code
}


}
