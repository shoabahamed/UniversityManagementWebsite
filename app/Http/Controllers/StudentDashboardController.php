<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\RegCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentDashboardController extends Controller
{
    public function getStudentDashboard(){
        $user = User::find(auth()->user()->id);
        $userDetails = $user->userDetails;
        $departments = Course::distinct()->pluck('course_dept');

        // Retrieve all courses
        $courses = Course::all()->mapWithKeys(function ($course) {
            return [$course->id => ['name' => $course->course_name, 'department' => $course->course_dept]];
        });
        
        $user_id = Auth::id();
        $submittedCourses = RegCourse::where('user_id', $user_id)
            ->join('courses', 'reg_courses.course_id', '=', 'courses.id')
            ->select('courses.course_name', 'courses.course_code', 'courses.course_score', 'courses.course_dept', 'reg_courses.id')
            ->get();

        return view('student-dashboard', compact('userDetails', 'user', 'departments', 'courses', 'submittedCourses'));

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

    public function addUserCourse(Request $request){
        $request->validate([
            'department' => 'required',
            'course' => 'required',
        ]);
    
        // Check if the user has already registered for the selected course
        $existingCourse = RegCourse::where('user_id', auth()->user()->id)
            ->where('course_id', $request->course)
            ->first();

        if ($existingCourse) {
            // If the course already exists for the user, handle accordingly (e.g., display error message)
            return redirect()->back()->withErrors(['course' => 'You have already registered for this course.']);
        }


        // Create a new row in the regcourses table
        $regCourse = new RegCourse();
        $regCourse->user_id = auth()->user()->id;
        $regCourse->course_id = $request->course;
        $regCourse->save();
    
        $request->session()->flash('success', 'Query Operation successfully');

        return redirect('/student-dashboard?selected_section=Course Reg');
    }

    public function deleteUserCourse(RegCourse $regCourse, Request $request){
        $regCourse->delete();

        $request->session()->flash('success', 'Query Operation successfully');
        return redirect('/student-dashboard?selected_section=Show Course');
    }

}
