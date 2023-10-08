<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExcelContorller;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;


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

Route::get('/', [AdminController::class, 'index'])->name('login');
Route::post('admin-login', [AdminController::class, 'adminLogin'])->name('login.admin');
Route::get('registration', [AdminController::class, 'registration'])->name('register-admin');
Route::post('admin-registration', [AdminController::class, 'adminRegistration'])->name('register.admin');
Route::get('signout', [AdminController::class, 'signOut'])->name('signout');



Route::middleware('auth.checked')->group(function()
{
    Route::get('dashboard', [AdminController::class, 'dashboard']);

    Route::get('dashboard/exam/create', [ExamController::class, 'create'])->name('exam.create');
    Route::post('exam', [ExamController::class, 'store'])->name('exam.store');
    Route::get('dashboard/exam', [ExamController::class, 'index'])->name('exam.index');
    Route::delete('exam/{id}',[ExamController::class,'destroy'])->name('exam.destory');


    Route::get('dashboard/question/create/{id}', [QuestionController::class, 'create'])->name('question.create');
    Route::post('question', [QuestionController::class, 'store'])->name('question.store');

});




Route::get('start_quiz/{id}',[QuizController::class,'start_quiz'])->name('quiz.start');
Route::post('quiz/result',[QuizController::class,'quiz_result'])->name('quiz.result');
Route::get('quiz/list',[QuizController::class,'quiz_list'])->name('quiz.list');


Route::get('/import-questions', [ExcelContorller::class,'show']);
Route::post('/import-questions', [ExcelContorller::class,'import']);

Route::get('/result',[ResultController::class,'index'])->name('result.index');
Route::get('result/export/', [ResultController::class, 'export'])->name('result.export');
Route::get('result/export/pdf', [ResultController::class, 'exportpdf'])->name('result.export.pdf');

