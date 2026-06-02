<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrialStudentController;
use App\Models\TrialStudent;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect()->route('trial-students.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function(){
    Route::get('/trial-students',[TrialStudentController::class,'index'])->name('trial-students.index');
    Route::get('/trial-students/create',[TrialStudentController::class,'create'])->name('trial-students.create');
    Route::post('/trial-students',[TrialStudentController::class,'store'])->name('trial-students.store');
    Route::get('/trial-students/{trialStudent}',[TrialStudentController::class,'show'])->name('trial-students.show');
});