<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function showLoginPage(){
        return view('loginPage');
    }



    public function userLogin(Request $request){
        $incominFields = $request->validate([
            'roll'=> ['required'],
            'password' => ['required']
        ]);

        if(auth()->attempt(['roll'=>$incominFields['roll'], 'password'=>$incominFields['password']])){
            $request->session()->regenerate();
            if(auth()->user()->is_admin == 1) return redirect('/admin-dashboard');
            else return redirect('/student-dashboard');
        }else{
            return redirect("/loginPage");
        }
    }

    public function userLogout(){
        auth()->logout();
        return redirect('/');
    }

}

