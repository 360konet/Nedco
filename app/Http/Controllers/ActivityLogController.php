<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use Illuminate\Http\Request;

class ActivityLogController extends Controller
{
    //
    public function index()
{
    $activityLogs = ActivityLog::orderBy('created_at', 'desc')->paginate(10); // Adjust the query as needed
    return view('admin.users.users', compact('activityLogs'));
}

}
