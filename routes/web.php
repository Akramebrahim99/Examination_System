<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],function(){

Route::get('/', 'Auth\LoginController@index')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('auth.login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('register', 'Auth\RegisterController@index')->name('register');
Route::post('storedata', 'Auth\RegisterController@store')->name('store.data');


Route::group(['prefix' => 'admin'],function(){
    Route::get('index','Admin\AdminController@index')->name('admin.index');

    Route::get('show_teachers','Admin\ManageTeacherController@index')->name('show.teachers');
    Route::post('add_teacher','Admin\ManageTeacherController@store')->name('add.teacher');
    Route::get('delete_teacher/{id}','Admin\ManageTeacherController@destroy')->name('delete.teacher');

    Route::get('show_courses','Admin\ManageCourseController@index')->name('show.courses');
    Route::post('add_course','Admin\ManageCourseController@store')->name('add.course');
    Route::get('delete_course/{id}','Admin\ManageCourseController@destroy')->name('delete.course');

    Route::get('show_courseToteacher','Admin\ManageCourseController@showTeacher')->name('show.course.teacher');
    Route::post('add_courseToteacher','Admin\ManageCourseController@addteacher')->name('add.course.teacher');
    Route::get('delete_courseToteacher/{course_id}','Admin\ManageCourseController@destorycourseToteacher')->name('delete.course.teacher');

    
    Route::get('studentreqcourse/{course_id}','Admin\ManageStudentController@studentsrequestCourse')->name('admin.studentreq.course');
    Route::get('acceptstudentreq/[twoid]','Admin\ManageStudentController@acceptstudent')->name('admin.studentreq.accept');
    Route::get('rejectstudentreq/[twoid]','Admin\ManageStudentController@rejectstuudednt')->name('admin.studentreq.reject');
    Route::get('studentreg/{course_id}','Admin\ManageStudentController@studentreg')->name('admin.studentreg');
    Route::get('deletstd/[twoid]','Admin\ManageStudentController@deletestd')->name('admin.deletestd');
});

Route::group(['prefix' => 'student'],function(){
    Route::get('index','Student\StudentController@index')->name('student.index');
    Route::get('exam','Student\StudentController@exam')->name('student.exam');
    Route::get('result','Student\StudentController@result')->name('student.result');
    Route::get('courses','Student\StudentController@course')->name('student.courses');
    Route::get('requestedcourses','Student\StudentController@requestedcourses')->name('student.requstedcourses');
    Route::get('deletestudentreq/{course_id}','Student\StudentController@deletereq')->name('studentreq.delete');
    Route::get('profile','Student\StudentController@profile')->name('student.profile');
    Route::get('editprofile','Student\StudentController@editprofile')->name('student.editprofile');
    Route::get('courserequest/{course_id}','Student\StudentController@addcourse')->name('student.request');
    Route::get('getexam/{course_id}','Student\StudentController@getexam')->name('student.getexam');
    Route::post('correctexam','Student\StudentController@correectexam')->name('student.correectexam');
    Route::post('editstudentprofile','Student\StudentController@editstudentprofile')->name('student.editstudentprofile');
});


Route::group(['prefix' => 'teacher'],function(){
    Route::get('index','Teacher\TeacherController@index')->name('teacher.index');
    Route::get('exam','Teacher\TeacherController@exams')->name('teacher.exam');
    Route::get('addscreen','Teacher\TeacherController@examscreen')->name('teacher.exam.screen');
    Route::get('courses','Teacher\TeacherController@course')->name('teacher.courses');
    Route::get('profile','Teacher\TeacherController@profile')->name('teacher.profile');
    Route::get('editprofile','Teacher\TeacherController@editprofile')->name('teacher.editprofile');
    Route::get('addexam/{course_id}','Teacher\TeacherController@addexam')->name('teacher.addexam');
    Route::get('showexams','Teacher\TeacherController@showexams')->name('teacher.showexams');
    Route::post('addmmcqquestion/{course_id}','Teacher\TeacherController@addMcqQuestion')->name('teacher.addMcqQuestion');
    Route::post('addtfquestion/{course_id}','Teacher\TeacherController@addTFQuestion')->name('teacher.addTFQuestion');
    Route::post('addessayquestion/{course_id}','Teacher\TeacherController@addEssayQuestion')->name('teacher.addEssayQuestion');
    Route::get('deletequestion/{question_id}','Teacher\TeacherController@deletequestion')->name('teacher.deletequestion');
    Route::get('editquestion/{question_id}','Teacher\TeacherController@editquestion')->name('teacher.editquestion');
    Route::post('editquestioninfo/{question_id}','Teacher\TeacherController@editquestioninfo')->name('teacher.editquestioninfo');
    Route::get('getessay/{course_id}','Teacher\TeacherController@getessay')->name('teacher.getessay'); 
    Route::get('markessayquestion/{question_id}','Teacher\TeacherController@markessayquestion')->name('teacher.markessayquestion');
    Route::post('addmarkessayquestion/{question_id}','Teacher\TeacherController@addmarkessayquestion')->name('teacher.addmarkessayquestion');
    Route::post('editteacherprofile','Teacher\TeacherController@editteacherprofile')->name('teacher.editteacherprofile');
    Route::get('showstudentsresults/{course_id}','Teacher\ManageStudentController@showstudentsresults')->name('teacher.showstudentsresults');
    Route::get('showexportexcel/{course_id}','Teacher\ManageStudentController@exportexcel')->name('teacher.exportexcel');
    Route::get('editcourse/{course_id}','Teacher\TeacherController@editcourse')->name('teacher.editcourse');
    Route::post('editcourseinfo/{course_id}','Teacher\TeacherController@editcourseinfo')->name('teacher.editcourseinfo');

});
});
