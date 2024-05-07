<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function getAdminDashBoard(){
        $notices = Notice::latest()->take(10)->get();
        return view('admin-dashboard', ["notices"=> $notices]);
    }

    public function addNewNoticePage(){
        return view('add-new-notice-page');
    }
    public function addNewNotice(Request $request){
        $incomingFields = $request->validate([
            'title' => ['required'],
            'file_path' => ['required']
        ]);
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['file_path'] = strip_tags($incomingFields['file_path']);

        Notice::create($incomingFields);

        return redirect('admin-dashboard');
    }
}
