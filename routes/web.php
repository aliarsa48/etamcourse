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


Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/course', 'HomeController@kursus');

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/teacher', 'TeacherController@index')->name('teacher')->middleware('teacher');
Route::get('/course/{id}','CoursesController@coursedetail');

Route::middleware(['admin'])->group(function () {
// route dashboard admin
	Route::get('/admin/courses','AdminDashboardController@show');
	Route::get('/admin/courses/active','AdminDashboardController@active');
	Route::get('/admin/courses/nonverif','AdminDashboardController@nonverif');
	Route::get('/admin/courses/expired','AdminDashboardController@expired');
	Route::get('/admin/courses/{id}','AdminDashboardController@detailkursus');
	Route::get('/admin/courses/{id}/edit','AdminDashboardController@edit');
	Route::put('/admin/courses/{id}/update','AdminDashboardController@update');
	Route::get('/admin/courses/{id}/delete', 'AdminDashboardController@delete');
	// daftar user
	Route::get('/admin/teacher','AdminDashboardController@pemateri');
	Route::get('/admin/student','AdminDashboardController@murid');
	// merubah status kursus
	Route::put('/admin/courses/{id}/activate','AdminDashboardController@gantistatus');
	Route::put('/admin/courses/{id}/deactivate','AdminDashboardController@gantistatus');
	Route::put('/admin/courses/{id}/expired','AdminDashboardController@gantistatus');
	//confirmasi pembayaran student
	Route::get('/admin/payment','AdminDashboardController@studentpayment');
	Route::get('/admin/payment/{id}/accept','PaymentController@terima');
	//memberikan link pertemuan dan sisa jumlah pertemuan
	Route::get('/admin/courses/{id}/updatelink','CoursesController@updatelink');
	Route::put('/admin/courses/{id}/updatelink/update','CoursesController@pertemuan');
	// mengganti status kelas jika jumlah pertemuan sudah lewat
	Route::get('/admin/courses/finish','AdminDashboardController@kelasselesai');
	Route::get('/admin/payment/request','AdminDashboardController@permintaan');
	Route::get('/admin/payment/request/{id}','AdminDashboardController@kirimpencairan');
	Route::put('/admin/payment/request/{id}/kirimpencairan','AdminDashboardController@proseskirim');
	// kontak
	Route::get('/admin/contact', 'ContactController@show');
});

Route::middleware(['teacher'])->group(function () {
	//pembayaran untuk teacher
	Route::get('/teacher/payment','PaymentController@penghasilan');
	Route::get('/teacher/payment/history','PaymentController@riwayatpencairan'); 
	Route::post('/teacher/payment/{id}/request','PaymentController@request');
	Route::get('/teacher/payment/{id}','PaymentController@detailpenghasilan'); //harus dibawah
	Route::get('/myprofile','ProfileController@myprofile');
	Route::get('/myprofile/edit','ProfileController@edit');
	Route::put('/myprofile/edit/save','ProfileController@savechange');
	// route dashboard teacher
	Route::get('/teacher/add', function () {
	    return view('dashboard/addcourse');
	});
	Route::post('/addcourse','CoursesController@add')->middleware('teacher');
	Route::get('/teacher/courses','CoursesController@kursus')->middleware('teacher');
	Route::get('/teacher/courses/{id}','CoursesController@show')->middleware('teacher');
	Route::get('/teacher/courses/{id}/edit','CoursesController@edit')->middleware('teacher');
	Route::put('/teacher/courses/{id}/update','CoursesController@update');
	Route::get('/teacher/courses/{id}/delete', 'CoursesController@delete');
});

Route::middleware(['student'])->group(function () {
	Route::get('/student/','StudentDashboardController@mycourse');
	Route::get('/student/payment','StudentController@payment');
	Route::get('/student/payment/{id}','EnrollController@detailtagihan');
	Route::post('/student/payment/confirm','StudentController@confirm');
	Route::put('/student/payment/{id}/confirm','StudentController@payconfirm');
	Route::get('/student/payment/{id}/cancel','StudentController@cancel');
	Route::get('/student/courses/{id}','StudentDashboardController@kelas');
});

// kategori
Route::get('/categories/pengembangan-web','CoursesController@category1');
Route::get('/categories/database','CoursesController@category2');
Route::get('/categories/jaringan','CoursesController@category3');
Route::get('/categories/desain','CoursesController@category4');
Route::get('/categories/marketing','CoursesController@category5');

//enrolling kursus
Route::post('/enroll','EnrollController@store')->middleware('student');

//detail pembayaran
//Route::get('/payment/confirm','PaymentController@show');

//profile
Route::get('/profile/{id}','ProfileController@profile'); 

//pengaturan akun

// OZI

Route::get('/welcome', function () {
    return view('welcome');
});

//KELASS ONLINE

Route::get('/masuk', function () {
    return view('login');
});

Route::get('/regis', function () {
    return view('register');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});


Route::get('admissions', function () {
    return view('admissions');
});

Route::get('contact', function () {
    return view('contact');
});

//tambahan halaman ozi
Route::get('help', function () {
    return view('bantuan');
});
Route::get('team', function () {
    return view('team');
});
Route::get('syarat', function () {
    return view('syarat');
});
Route::get('kebijakan', function () {
    return view('kebijakan');
});

Route::post('/contact/send', 'ContactController@store');

