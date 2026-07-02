<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;



Route::get('/',[UserController::class,'welcome']);
Route::get('user-quiz-list/{id}/{category}',[UserController::class,'userQuizList']);
Route::get('start-quiz/{id}/{name}',[UserController::class,'startQuiz']);
// Route::view('user-signup','user-signup');
Route::post('user-signup',[UserController::class,'userSignup']);
Route::get('user-logout',[UserController::class,'userLogout']);
Route::get('user-signup-quiz',[UserController::class,'userSignupQuiz']);

Route::get('categories-list',[UserController::class,'categories']);


Route::get('user-login',function(){
    if(!session()->has('user')){
       return view('user-login');
    }else{
        return redirect('/');
    }
});
Route::get('user-signup',function(){
    if(!session()->has('user')){
       return view('user-signup');
    }else{
        return redirect('/');
    }
});
// Route::view('user-login','user-login');
Route::post('user-login',[UserController::class,'userLogin']);
Route::get('user-login-quiz',[UserController::class,'userLoginQuiz']);
Route::get('search-quiz',[UserController::class,'searchQuiz']);

Route::get('verify-user/{email}',[UserController::class,'verifyUser']);
Route::view('user-forgot-password','user-forgot-password');
Route::post('user-forgot-password',[UserController::class,'userForgotPassword']);
Route::get('user-forgot-password/{email}',[UserController::class,'userResetForgotPassword']);
Route::post('user-set-forgot-password',[UserController::class,'userSetForgotPassword']);



Route::middleware('CheckUserAuth')->group(function(){
    Route::get('user-details',[UserController::class,'userDetails']);
    Route::post('submit-next/{id}',[UserController::class,'submitAndNext']);
    Route::get('mcq/{id}/{name}',[UserController::class,'mcq']);
    Route::get('user-change-password',[UserController::class,'showChangePassword']);
    Route::post('user-change-password',[UserController::class,'changePassword']);
    Route::get('certificate/{id?}',[UserController::class,'certificate']);
    Route::get('download-certificate/{id?}',[UserController::class,'downloadCertificate']);
});

Route::view('admin-login','admin-login');

Route::post('admin-login',[AdminController::class,'login']);


Route::middleware('CheckAdminAuth')->group(function(){
    Route::get('dashboard',[AdminController::class,'dashboard']);
Route::get('admin-categories',[AdminController::class,'categories']);
Route::get('admin-logout',[AdminController::class,'logout']);
Route::post('add-category',[AdminController::class,'addCategory']);
Route::get('category/delete/{id}',[AdminController::class,'deleteCategory']);
Route::get('add-quiz',[AdminController::class,'addQuiz']);
Route::post('add-mcq',[AdminController::class,'addMCQs']);
Route::get('end-quiz',[AdminController::class,'endQuiz']);
Route::get('show-quiz/{id}/{quizName}',[AdminController::class,'showQuiz']);
Route::get('quiz-list/{id}/{category}',[AdminController::class,'quizList']);
});Route::get('about', function() {
    return view('about');
});
Route::get('contact', function() {
    return view('contact');
});
Route::post('contact-submit', function() {
    return redirect('contact')->with('message-success', 'Thank you for reaching out! Your message has been sent successfully.');
});
