<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentDashboardController extends Controller
{
    public function getStudentDashboard(){
        $user = User::find(auth()->user()->id);
        $userDetails = $user->userDetails;
        return view('student-dashboard', ['userDetails'=>$userDetails, 'user'=>$user]);
    }

    public function showuserUpdatePage(User $user, Request $request){
        $userDetails = $user->userDetails;
        return view('update-student-profile', ['user'=>$user, 'userDetails'=>$userDetails]);
    }

    public function updateStudentUser(User $user, Request $request){

        $request->validate([
            'email' => 'required|email',
            'image_path' => 'image|mimes:jpeg,png,jpg,gif',
            'mobile_no' => 'required',
            'address' => 'required'
        ]);

        $userDetail = $user->userDetails;


        $imageName = $userDetail->image_path;
        if ($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $imageName = $image->getClientOriginalName(); 
            $image->move(public_path('assets/images/users'), $imageName);
        }
        
        $userDetail->email = $request->input('email', $userDetail->email);
        $userDetail->image_path = $imageName;
        $userDetail->name = $userDetail->name ;
        $userDetail->father_name = $userDetail->father_name;
        $userDetail->mother_name = $userDetail->mother_name;
        $userDetail->mobile_no = $request->input('mobile_no', $userDetail->mobile_no);
        $userDetail->address = $request->input('address', $userDetail->address);
        $userDetail->hall_name = $userDetail->hall_name;
        $userDetail->blood_group = $userDetail->blood_group;
        $userDetail->gender = $userDetail->gender;
        $userDetail->user_id = $userDetail->user_id ;
        $userDetail->save();


        return redirect("student-dashboard")->with('success', 'Studnet updated successfully.');
    }

}
