<?php

use App\Models\User;
use App\Models\Notice;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Middleware\isAdmin;
use App\Http\Middleware\isLoggedIn;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\StudentDashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $notices = Notice::latest()->take(6)->get();
    return view('home', ["notices"=> $notices]);
})->name("home");

Route::get('/faqs', function () {
    return view('faqs');
})->name("faqs");

Route::get('/welcome', function () {
    return view('welcome');
})->name("welcome");

Route::get('/vc-message', function () {
    return view('vc-message');
})->name('vc-message');

Route::get('/faculties', function () {
    $eeeDean = Teacher::where('is_dean', 1)
                           ->where('dean_faculty', 'eee')
                           ->first();

    $ceDean = Teacher::where('is_dean', 1)
                          ->where('dean_faculty', 'ce')
                          ->first();

    $meDean = Teacher::where('is_dean', 1)
                          ->where('dean_faculty', 'me')
                          ->first();

    return view('faculties', ['eeeDean' => $eeeDean, 'ceDean'=>$ceDean, 'meDean'=>$meDean]);
})->name('faculties');

Route::get('/notice', function () {
    $notices = Notice::latest()->take(30)->get();
    return view('notice', ["notices"=> $notices]);
})->name('notice');

Route::get('/loginPage', [UserController::class, "showLoginPage"])->name('loginPage')->middleware("isLoggedIn");

Route::post('/login', [UserController::class, 'userLogin']);
Route::post("/logout", [UserController::class, 'userLogout']);




// student dashboard
Route::get('/student-dashboard', function(){
    return view('student-dashboard');
})->name('student-dashboard')->middleware('isStudent');

Route::prefix('/student-dashboard')->middleware(["isStudent"])->group(function () {
    Route::get('', [StudentDashboardController::class, "getStudentDashBoard"])->name('admin-dashboard');
    Route::get('/update-user-information-page/{user}', [StudentDashboardController::class, "showuserUpdatePage"])->name('update-user-information-page');
    Route::post('/update-student-user/{user}', [StudentDashboardController::class, "updateStudentUser"])->name('update-student-user');
});


// admin dashboard

Route::prefix('/admin-dashboard')->middleware(["isAdmin"])->group(function () {
    Route::get('', [AdminDashboardController::class, "getAdminDashBoard"])->name('admin-dashboard');
    Route::get('/add-new-notice-page', [AdminDashboardController::class, 'addNewNoticePage'])->name('add-new-notice-page');
    Route::post('/add-new-notice', [AdminDashboardController::class, 'addNewNotice'])->name('add-new-notice');
    Route::post('/register', [AdminDashboardController::class, 'userRegister'])->name('user-register');
    Route::get('/add-new-teacher-page', [AdminDashboardController::class, "addNewTeacherPage"])->name('add-new-teacher-page');
    Route::post('/add-new-teacher', [AdminDashboardController::class, "addNewTeacher"])->name('add-new-teacher');
    Route::get('/update-teacher-page/{teacher}', [AdminDashboardController::class, "updateTeacherPage"])->name('update-teacher-page');
    Route::post('/update-teacher/{teacher}', [AdminDashboardController::class, "updateTeacher"])->name('update-teacher');
    Route::get('/delete-teacher/{teacher}', [AdminDashboardController::class, "deleteTeacher"])->name('delete-teacher');
    Route::post('/course-register', [AdminDashboardController::class, "courseRegister"])->name('course-register');

});


Route::prefix('/about')->group(function () {

    Route::get('/gallery', function () {
        return view('gallery');
    })->name('gallery');
    Route::get('/history', function () {
        return view('history');
    })->name('history');

});


Route::prefix('/facilities')->group(function () {
    Route::get('/student-welfare', function () {
        return view('student-welfare');
    })->name('student-welfare');

    Route::get('/guest-house', function () {
        return view('guest-house');
    })->name('guest-house');

    Route::get('/medical-center', function () {
        return view('medical-center');
    })->name('medical-center');
});



Route::prefix('/administration')->group(function () {
    Route::prefix('/office-of-provosts')->group(function () {
        Route::get('/fuzlul-hall', function () {
            return view('fuzlul-hall');
        })->name('fuzlul-hall');

        Route::get('/lalon-hall', function () {
            return view('fuzlul-hall');
        })->name('lalon-hall');

        Route::get('/rashid-hall', function () {
            return view('fuzlul-hall');
        })->name('rashid-hall');

        Route::get('/umor-hall', function () {
            return view('fuzlul-hall');
        })->name('umor-hall');

        Route::get('/kaja-hall', function () {
            return view('fuzlul-hall');
        })->name('kaja-hall');

        Route::get('/bongo-hall', function () {
            return view('fuzlul-hall');
        })->name('bongo-hall');

        Route::get('/rokeya-hall', function () {
            return view('fuzlul-hall');
        })->name('rokeya-hall');

    });

});


Route::prefix('/academic')->group(function () {
    Route::prefix('/eee')->group(function () {
        Route::get('/cse', function () {
            $Head = Teacher::where('is_head', 1)
            ->where('head_department', 'Department of Computer Science and Engineering')
            ->first();
            return view('cse', ['Head'=>$Head]);
        })->name('cse');
        Route::get('/ce', function () {
            $Head = Teacher::where('is_head', 1)
            ->where('head_department', 'Department of Civil Engineering')
            ->first();
            return view('ce', ['Head'=>$Head]);
        })->name('ce');
        Route::get('/me', function () {
            $Head = Teacher::where('is_head', 1)
            ->where('head_department', 'Department of Mechanical Engineering')
            ->first();
            return view('me', ['Head'=>$Head]);
        })->name('me');
    });

});



Route::get('/test', function () {
    return view('test');
});






