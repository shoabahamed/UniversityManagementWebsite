<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

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
        $request->validate([
            'title' => ['required'],
            'pdf' => ['required', 'file', 'mimes:pdf'],
        ]);

        $title = strip_tags($request->input('title'));
    
        // Store the uploaded PDF file in the public/assets/notice directory
        $pdf = $request->file('pdf');
        $pdfName = $pdf->getClientOriginalName(); // Keep the original name of the PDF file
        $pdf->move(public_path('assets/pdf/notice'), $pdfName);

        // Create a new Notice record with only the filename
        Notice::create([
            'title' => $title,
            'file_path' => $pdfName,
        ]);

        return redirect('admin-dashboard')->with('success', 'Notice added successfully.');
    }

    public function userRegister(Request $request){
        $incominFields = $request->validate([
            'roll'=> ['required'],
            'password' => ['required']
        ]);
        
        $incominFields['is_admin'] = 0;
        $incominFields['password'] = bcrypt($incominFields['password']);
        User::create($incominFields);

        return redirect('/admin-dashboard');
        
    }
    
}
