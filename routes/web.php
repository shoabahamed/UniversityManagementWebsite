<?php

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
    return view('home');
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
    return view('notice');
})->name('notice');


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
