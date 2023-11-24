<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Complains;


class IssueController extends Controller
{
    //
    public function issue(){
        $user = auth()->user();
        $myissues = $user->issue;

        $unfixed= $user->issue->where('status','Unfixed')->count();
        $pending= $user->issue->where('status','Pending')->count();
        $processing= $user->issue->where('status','Processing')->count();
        $complete= $user->issue->where('status','Fixed')->count();

        return view('admin.issue.issue',compact('complete','processing','pending','myissues','unfixed'));
    }

    public function addissue(Request $request){
        $complain=new Complains();
        $complain->user_id=$request->input('user_id');
        $complain->username=$request->input('username');
        $complain->email=$request->input('email');
        $complain->department=$request->input('department');
        $complain->ticketID=$request->input('ticketID');
        $complain->category=$request->input('category');
        $complain->description=$request->input('description');
        $complain->status = 'Pending';
        $complain->save();

        Session::flash('success', 'Complaint sent successfully.');
        return redirect('/issue');
    }
}
