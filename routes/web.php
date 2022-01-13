<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Http\Controllers\themeController;
use App\Http\Controllers\topicsController;
use App\Http\Controllers\LecturesController;
use App\Http\Controllers\DbConnectionController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

//User
Route::get('user-list',[themeController::class,'user_list'])->name('user-list');
Route::get('add-user',[themeController::class,'add_user'])->name('add-user');
Route::post('save-user',[themeController::class,'user_added'])->name('save-user');
Route::get('user-edit/{id}',[themeController::class,'user_edit_form'])->name('user-edit');
Route::post('user-edited',[themeController::class,'user_edit'])->name('user-edited');
//  user-edited{id}
// In form.blade.php {{url('user-edited').{{$item->id}}
Route::get('delete-user{id}',[themeController::class,'user_delete'])->name('delete-user'); 

//Laravel Topics
Route::get('topic-list',[topicsController::class,'topic_list'])->name('topic-list');
Route::get('add-topic',[topicsController::class,'add_topic'])->name('add-topic');
Route::post('save-topic',[topicsController::class,'save_topic'])->name('save-topic');
Route::get('topic-edit/{id}',[topicsController::class,'topic_edit_form'])->name('topic-edit');
Route::post('topic-edited',[topicsController::class,'topic_edited'])->name('topic-edited');
Route::get('delete-topic',[topicsController::class,'delete_topic'])->name('delete-topic');

// Lectures Topicwise Route
// Form Validation
Route::get('validation',[LecturesController::class,'validation_form']);
Route::post('validated',[LecturesController::class,'submit'])->name('validated');
// Route HTTP Client (API)
Route::get('http',[LecturesController::class,'httpClient']);
// File upload
Route::view('uploadfile','uploadfile');
Route::post('upload',[LecturesController::class,'upload_file']);
// MiddleWare Global
Route::view('noaccess','noaccess');
// Group Middleware
Route::group(['middleware'=>['groupmiddleware']],function(){
    Route::view('groupm','groupmiddleware');
});
// Route Middleware
Route::view('routem','routemiddleware')->middleware('routemid');
// Localization
Route::get('/local/{lang}', function($lang){
    App::setlocale($lang);
    return view('localprofile');
});
// Query Builder
Route::get('queryfetch',[LecturesController::class,'queryBuilderFetch']);
Route::get('queryfind',[LecturesController::class,'queryBuilderFind']);
Route::get('queryinsert',[LecturesController::class,'queryBuilderInsert']);
Route::get('queryupdate',[LecturesController::class,'queryBuilderUpdate']);
Route::get('querydelete',[LecturesController::class,'queryBuilderdelete']);
// Query Aggregate Methods
Route::get('querymethods',[LecturesController::class,'queryMethods']);
//Joins
Route::get('joins',[LecturesController::class,'joins']);
    //Table Employee
    Route::view('employee','addemployee')->name('employee');
    Route::post('add-employee',[themeController::class,'add_employee'])->name('add-employee');
// Mutator
Route::get('mutator',[LecturesController::class,'mutator']);
// One To One
Route::get('onetoone',[LecturesController::class,'oneToOne']);
// One To Many
Route::get('onetomany',[LecturesController::class,'oneToMany']);
// Fluent String
// $info = "this is a Fluent String-----------------------------------------------------------------";
//     $info = ucFirst($info) ;echo $info;
// Route Model Binding (minimum code)
Route::get('binding/{key:address}',[LecturesController::class,'binding']);
// Markdown Mail Template
Route::get('mail',[LecturesController::class,'mail']);

//Multiple Database Route
Route::get("muldb",[DbConnectionController::class,'dbConn']);
// Eloquent ORM 
    // Fetch
    Route::get('ormfetch',[LecturesController::class,'ormFetch']);
    // Insert from URL
    Route::get('orminsert',[LecturesController::class,'ormInsert']);
    // Update
    Route::get('ormupdate',[LecturesController::class,'ormUpdate']);
    // Delete
    Route::get('ormdelete',[LecturesController::class,'ormDelete']);