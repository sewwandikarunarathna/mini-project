<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/doctors', 'HomeController@doctors')->name('doctors');
Route::get('/aboutus', 'HomeController@aboutus')->name('aboutus');
Route::get('/contactus', 'HomeController@contactus')->name('contactus');

// Route::get('/makeAppt', function () {
//     return view('patient.makeAppt');
// });

// Route::get('/channelDet', function () {
//     return view('patient.channelingDetails');
// });

// Route::get('/myAppt', function () {
//     return view('patient.myAppt');
// });

// Route::get('/myProfile', function () {
//     return view('patient.myProfile');
// });

// Route::get('/updateProfile', function () {
//     return view('patient.updateProfile');
// });

// Route::get('/changePassword', function () {
//     return view('changePassword');
// });

// Route::prefix('patient')->group(function(){
    Route::get('/makeAppt', 'PatientController@index')->name('patient.dashboard');
    Route::get('/channelDet', 'PatientController@channelingDetails')->name('patient.channelDet');
    Route::get('/myAppt', 'PatientController@myAppt')->name('patient.myAppt');
    Route::get('/myProfile', 'PatientController@myProfile')->name('patient.myProfile');
    Route::get('/updateProfile/{id}', 'PatientController@updateProfile')->name('patient.updateProfile');
    Route::post('/updateeachprofl', 'PatientController@updateeachprofl')->name('patient.updateeachprofl');
    Route::get('/changePassword', 'PatientController@changePassword')->name('patient.changePassword');

    //Route::post('/saveAppt', 'PatientController@createAppt');
// });
Route::post('/channelDet', 'SessionController@getCount');

    Route::post('/saveAppt', 'AppointmentController@createAppt');
    
    Route::post('/searchSession', 'SessionController@search');


Route::prefix('recep')->group(function(){
    Route::get('/login', 'Auth\ReceptionistLoginController@showLoginForm')->name('recep.login');
    Route::post('/login', 'Auth\ReceptionistLoginController@login')->name('recep.login.submit');
    Route::get('/apptDetails', 'ReceptionistController@index')->name('recep.dashboard');
    Route::get('/docDetails', 'ReceptionistController@docDetails')->name('recep.docDetails');
    Route::get('/dailySessions', 'ReceptionistController@dailySessions')->name('recep.dailySessions');
    Route::get('/channelDet', 'ReceptionistController@channelingDetails')->name('recep.channelDet');
    Route::get('/patientDetails', 'ReceptionistController@patientDetails')->name('recep.patientDetails');
    Route::get('/makeApptRecep', 'ReceptionistController@makeApptRecep')->name('recep.makeApptRecep');
    Route::get('/viewSessions/{id}', 'ReceptionistController@viewSessions')->name('recep.viewSessions');
    Route::get('/addSession/{id}', 'ReceptionistController@addSession')->name('recep.addSession');
    Route::post('/saveAppt', 'AppointmentController@createAppt');
    Route::get('/changePassword', 'ReceptionistController@changePassword')->name('recep.changePassword');
    Route::get('/updatePassword', 'ReceptionistController@updatePassword')->name('recep.changePassword');
    Route::get('/addPatient', 'ReceptionistController@addPatient')->name('recep.addPatient');
    Route::post('/searchSessionRecep', 'SessionController@searchRecep');

});

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/empRegister', 'AdminController@index')->name('admin.dashboard');
    Route::get('/doctorList', 'AdminController@doctors')->name('admin.doctrs');
    Route::get('/addEmp', 'AdminController@addEmployees')->name('admin.addEmp');
    Route::post('/saveEmp', 'AdminController@saveEmployee');
    Route::get('/updateEmp/{id}', 'AdminController@updateEmployees')->name('admin.updateEmp');
    Route::post('/updateeachemp', 'AdminController@updateeachemployee');
    Route::get('/addDoctor', 'AdminController@addDoctor')->name('admin.addDoctor');
    Route::post('/saveDoctor', 'AdminController@saveDoctor');
    Route::get('/updateDoctor/{id}', 'AdminController@updateDoctor')->name('admin.updateDoctor');
    Route::post('/updateeachdoctor', 'AdminController@updateeachdoctor')->name('admin.updateeachdoctor');
    Route::get('/patientList', 'AdminController@patientList')->name('admin.patientList');
    Route::get('/addPatient', 'AdminController@addPatient')->name('admin.addPatient');
    Route::get('/viewSession/{id}', 'AdminController@viewSession')->name('admin.viewSession');
   
});


Route::prefix('doc')->group(function(){
    Route::get('/login', 'Auth\DoctorLoginController@showLoginForm')->name('doc.login');
    Route::post('/login', 'Auth\DoctorLoginController@login')->name('doc.login.submit');
    Route::get('/mySessions', 'DoctorController@index')->name('doc.dashboard');
    Route::get('/appointments', 'DoctorController@appointments')->name('doc.appointments');
    Route::get('/patientProfl/{id}', 'DoctorController@patientProfl')->name('doc.patientProfl');
    Route::get('/updatePatientProfile/{id}', 'DoctorController@updatePatientProfile')->name('doc.updatePatientProfile');
    Route::post('/updateMedicalDetails', 'DoctorController@updateMedicalDetails')->name('doc.updateMedicalDetails');
    Route::get('/makeApptDoc', 'DoctorController@makeApptDoc')->name('doc.makeApptDoc');
    Route::get('/docProfile', 'DoctorController@docProfile')->name('doc.docProfile');
    Route::post('/saveAppt', 'AppointmentController@createAppt');
    Route::get('/changePassword', 'DoctorController@changePassword')->name('doc.changePassword');


});
