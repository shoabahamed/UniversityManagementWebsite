<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Notice;
use App\Models\Teacher;
use App\Models\UserDetail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;
use Illuminate\Foundation\Auth\User;

class AdminDashboardController extends Controller
{
    public function getAdminDashBoard(Request $request){
        $notices = Notice::latest()->take(10)->get();
        $teachersQuery = Teacher::query();
    
        // Filter based on role if selected
        if ($request->has('role') && in_array($request->role, ['deans', 'heads'])) {
            if ($request->role == 'deans') {
                $teachersQuery->where('is_dean', true);
            } elseif ($request->role == 'heads') {
                $teachersQuery->where('is_head', true);
            }
        }
    
        $teachers = $teachersQuery->latest()->take(10)->get();
    
        $selectedSection = $request->selected_section ?? 'Notice'; // Get the selected section's ID from the request, default to 'Notice'
    
        return view('admin-dashboard', ["notices"=> $notices, "teachers" => $teachers, "selectedSection" => $selectedSection]);
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


    public function addNewTeacherPage(){
        return view('add-new-teacher-page');
    }

    public function addNewTeacher(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'dept' => "required",
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif',
            'phone' => 'required',
            'fax' => 'required',
            'is_dean' => 'required',
            'is_head' => 'required',
            'role' => 'required'
        ]);
        

        $imageName = '';
        // Handle image upload
        if ($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $imageName = $image->getClientOriginalName(); 
            $image->move(public_path('assets/images/teachers'), $imageName);
        }

        $teacher = new Teacher();
        $teacher->name = $request->input('name');
        $teacher->dept = $request->input('dept');
        $teacher->image_path = $imageName;
        $teacher->is_head = $request->input('is_head');
        $teacher->is_dean = $request->input('is_dean');
        $teacher->role = $request->input('role');
        $teacher->email = $request->input('email');
        $teacher->phone = $request->input('phone');
        $teacher->fax = $request->input('fax');
        $teacher->dean_faculty = $request->input('dean_faculty', NULL);
        $teacher->head_department = $request->input('head_department', NULL);
        $teacher->save();


        return redirect('/admin-dashboard?selected_section=Teacher')->with('success', 'Teacher added successfully.');
    }

    public function updateTeacherPage(Teacher $teacher){
        return view("update-teacher-page", ['teacher'=>$teacher]);
    }

    public function updateTeacher(Teacher $teacher, Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'dept' => "required",
            'image_path' => 'image|mimes:jpeg,png,jpg,gif',
            'phone' => 'required',
            'fax' => 'required',
            'role' => 'required'
        ]);

        $imageName = $teacher->image_path;
        // Handle image upload
        if ($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $imageName = $image->getClientOriginalName(); 
            $image->move(public_path('assets/images/teachers'), $imageName);
        }
        
        $teacher->name = $request->input('name');
        $teacher->dept = $request->input('dept');
        $teacher->image_path = $imageName;
        $teacher->role = $request->input('role');
        $teacher->email = $request->input('email');
        $teacher->phone = $request->input('phone');
        $teacher->fax = $request->input('fax');

        if ($request->filled('is_dean') && $request->input('is_dean')==1) {
            #if is_dean is true that means that a normal teacher wants to be updated to dean
            $chosenFaculty = $request->input('dean_faculty');
            $currentDean = Teacher::where('is_dean', 1)
                                    ->where('dean_faculty', $chosenFaculty)
                                    ->first();
            $currentDean->is_dean = 0;
            $currentDean->dean_faculty = NULL;
            $currentDean->save();

        } 

        if ($request->filled('is_head') && $request->input('is_head')==1) {
            #if is_head is true that means that a normal teacher wants to be updated to head
            $chosenDepartment = $request->input('head_department');
            $currentHead = Teacher::where('is_head', 1)
                                    ->where('head_department', $chosenDepartment)
                                    ->first();
            $currentHead->is_head = 0;
            $currentHead->head_department = NULL;
            $currentHead->save();

        } 
        $teacher->is_head = $request->input('is_head', $teacher->is_head);
        $teacher->is_dean = $request->input('is_dean', $teacher->is_dean);
        $teacher->dean_faculty = $request->input('dean_faculty', $teacher->dean_faculty);
        $teacher->head_department = $request->input('head_department', $teacher->head_faculty);


        $teacher->save();

        return redirect('/admin-dashboard?selected_section=Teacher')->with('success', 'Teacher uploaded successfully.');
    }
    
    public function deleteTeacher(Teacher $teacher){
        $teacher->delete();
        return redirect('/admin-dashboard?selected_section=Teacher')->with('success', 'Teacher deleted successfully.');
    }


    public function courseRegister(Request $request){
        
        // Validate the incoming request data
        $validatedData = $request->validate([
            'course_dept' => 'required|string',
            'course_code' => 'required|string|max:4', // Adjust validation as needed
            'course_name' => 'required|string',
            'course_score' => 'required|numeric',
        ]);

        // Create and save the course
        $course = new Course();
        $course->course_dept = $validatedData['course_dept'];
        $course->course_code = $validatedData['course_code'];
        $course->course_name = $validatedData['course_name'];
        $course->course_score = $validatedData['course_score'];
        $course->save();

        $request->session()->flash('success', 'Course created successfully');

        return redirect('/admin-dashboard?selected_section=Course Reg');
    }

}
