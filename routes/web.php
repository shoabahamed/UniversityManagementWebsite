<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\isAdmin;
use App\Http\Middleware\isLoggedIn;
use App\Models\Notice;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return view('faculties');
})->name('faculties');

Route::get('/notice', function () {
    $notices = Notice::latest()->take(30)->get();
    return view('notice', ["notices"=> $notices]);
})->name('notice');

Route::get('/loginPage', [UserController::class, "showLoginPage"])->name('loginPage')->middleware("isLoggedIn");

Route::post('/login', [UserController::class, 'userLogin']);
Route::post("/logout", [UserController::class, 'userLogout']);





Route::get('/student-dashboard', function(){
    return view('student-dashboard');
})->name('student-dashboard');


// adming dashboard
Route::get('/admin-dashboard', [AdminDashboardController::class, "getAdminDashBoard"])->name('admin-dashboard')->middleware("isAdmin");


Route::prefix('/admin-dashboard')->group(function () {
    Route::get('/add-new-notice-page', [AdminDashboardController::class, 'addNewNoticePage'])->name('add-new-notice-page');
    Route::post('/add-new-notice', [AdminDashboardController::class, 'addNewNotice'])->name('add-new-notice');
    Route::post('/register', [AdminDashboardController::class, 'userRegister'])->name('user-register');

})->middleware('isAdmin');


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
            return view('cse');
        })->name('cse');

    });

});





Route::get('/test', function () {
    return view('test');
});

Route::post('/upload-image', [ImageController::class, 'upload'])->name('uploadImage');




