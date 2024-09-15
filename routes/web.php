<?php

use App\Http\Controllers\Auth\ForgotController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\ResetController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\GuestFeedbackController;
use App\Http\Controllers\GuestRegistrationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaffController;
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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')
        ->name('home.index');
});

Route::controller(GuestRegistrationController::class)->group(function () {
    Route::get('guest/registration', 'create')
        ->name('registration.create');
    Route::post('guest/registration/create', 'store')
        ->name('registration.store');
});

Route::controller(GuestFeedbackController::class)->group(function () {
    Route::get('guest/feedback', 'create')
        ->name('feedback.create');
    Route::post('guest/feedback/create', 'store')
        ->name('feedback.store');
});

Route::middleware('guest')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::controller(LoginController::class)->group(function () {
            Route::get('login', 'index')
                ->name('login.index');
            Route::post('login/authenticate', 'authenticate')
                ->name('login.authenticate');
        });

        Route::controller(ForgotController::class)->group(function () {
            Route::get('forgot-password', 'index')
                ->name('forgot.index');
            Route::post('forgot-password/send', 'send')
                ->name('forgot.send');
        });

        Route::controller(ResetController::class)->group(function () {
            Route::get('reset-password', 'index')
                ->name('reset.index');
            Route::post('reset-password/recovery', 'recovery')
                ->name('reset.recovery');
        });
    });
});

Route::middleware(['auth', 'verified', 'auth.session'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('dashboard', 'index')
            ->name('dashboard.index');
    });

    Route::controller(ExportController::class)->group(function () {
        Route::get('guests/export/{extension}', 'guests')
            ->name('export.guests');
        Route::get('staffs/export/{extension}', 'staffs')
            ->name('export.staffs');
        Route::get('departments/export/{extension}', 'departments')
            ->name('export.departments');
        Route::get('feedbacks/export/{extension}', 'feedbacks')
            ->name('export.feedbacks');
    });

    Route::resources([
        'guests' => GuestController::class,
        'staffs' => StaffController::class,
        'departments' => DepartmentController::class,
        'feedbacks' => FeedbackController::class,
    ]);

    Route::controller(ProfileController::class)->group(function () {
        Route::get('profile', 'edit')
            ->name('profile.edit');
        Route::put('profile/current', 'update')
            ->name('profile.update');
    });

    Route::prefix('auth')->group(function () {
        Route::delete('logout', LogoutController::class)
            ->name('logout');
    });
});
