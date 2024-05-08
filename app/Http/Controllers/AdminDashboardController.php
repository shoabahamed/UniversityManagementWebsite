<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use App\Models\UserDetail;
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
        $rules = [
            'roll' => 'required|unique:users,roll',
            'password' => 'required',
            'email' => 'required|email|unique:userdetails,email',
            'name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'mobile_no' => 'required',
            'address' => 'required',
            'hall_name' => 'required',
            'blood_group' => 'required',
            'gender' => 'required',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif',
            'is_admin' => 'required|integer|min:0|max:1',
        ];

        $request->validate($rules);

        // Store datain 'users' table
        $user = new User();
        $user->roll = $request->input('roll');
        $user->password = bcrypt($request->input('password'));
        $user->is_admin = $request->input('is_admin');
        $user->save();

        $imageName = '';
        // Handle image upload
        if ($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $imageName = $image->getClientOriginalName(); 
            $image->move(public_path('assets/images/users'), $imageName);
        }

       // Store data in 'userdetails' table
        $userDetail = new UserDetail();
        $userDetail->email = $request->input('email');
        $userDetail->image_path = $imageName;
        $userDetail->name = $request->input('name');
        $userDetail->father_name = $request->input('father_name');
        $userDetail->mother_name = $request->input('mother_name');
        $userDetail->mobile_no = $request->input('mobile_no');
        $userDetail->address = $request->input('address');
        $userDetail->hall_name = $request->input('hall_name');
        $userDetail->blood_group = $request->input('blood_group');
        $userDetail->gender = $request->input('gender');
        $userDetail->user_id = $user->id;
        $userDetail->save();

        return redirect('/admin-dashboard');
        
    }
    
}
