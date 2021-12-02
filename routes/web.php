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

Route::get('/changePassword', function () {
    return view('changePassword');
});

// Route::prefix('patient')->group(function(){
    Route::get('/makeAppt', 'PatientController@index')->name('patient.dashboard');
    Route::get('/channelDet', 'PatientController@channelingDetails')->name('patient.channelDet');
    Route::get('/myAppt', 'PatientController@myAppt')->name('patient.myAppt');
    Route::get('/myProfile', 'PatientController@myProfile')->name('patient.myProfile');
    Route::get('/updateProfile/{id}', 'PatientController@updateProfile')->name('patient.updateProfile');
    Route::post('/updateeachprofl', 'PatientController@updateeachprofl')->name('patient.updateeachprofl');
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
    Route::get('/patientDetails', 'ReceptionistController@patientDetails')->name('recep.patientDetails');
    Route::get('/makeApptRecep', 'ReceptionistController@makeApptRecep')->name('recep.makeApptRecep');
    Route::get('/viewSessions/{id}', 'ReceptionistController@viewSessions')->name('recep.viewSessions');
    Route::get('/addSession/{id}', 'ReceptionistController@addSession')->name('recep.addSession');
    Route::post('/saveAppt', 'AppointmentController@createAppt');

});

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/empRegister', 'AdminController@index')->name('admin.dashboard');
    Route::get('/doctorList', 'AdminController@doctors')->name('admin.doctrs');
    Route::get('/addEmp', 'AdminController@addEmployees')->name('admin.addEmp');
    Route::get('/updateEmp', 'AdminController@updateEmployees')->name('admin.updateEmp');
    Route::get('/addDoctor', 'AdminController@addDoctor')->name('admin.addDoctor');
    Route::post('/saveDoctor', 'AdminController@saveDoctor');
    Route::get('/updateDoctor/{id}', 'AdminController@updateDoctor')->name('admin.updateDoctor');
    Route::post('/updateeachdoctor', 'AdminController@updateeachdoctor')->name('admin.updateeachdoctor');
    Route::get('/patientList', 'AdminController@patientList')->name('admin.patientList');
    Route::get('/addPatient', 'AdminController@addPatient')->name('admin.addPatient');
   
});


Route::prefix('doc')->group(function(){
    Route::get('/login', 'Auth\DoctorLoginController@showLoginForm')->name('doc.login');
    Route::post('/login', 'Auth\DoctorLoginController@login')->name('doc.login.submit');
    Route::get('/mySessions', 'DoctorController@index')->name('doc.dashboard');
    Route::get('/appointments', 'DoctorController@appointments')->name('doc.appointments');
    Route::get('/patientProfl', 'DoctorController@patientProfl')->name('doc.patientProfl');
    Route::get('/updatePatientProfile', 'DoctorController@updatePatientProfile')->name('doc.updatePatientProfile');
    Route::get('/makeApptDoc', 'DoctorController@makeApptDoc')->name('doc.makeApptDoc');
    Route::get('/docProfile', 'DoctorController@docProfile')->name('doc.docProfile');
    Route::post('/saveAppt', 'AppointmentController@createAppt');

});


// Route::get('/empRegister', function () {
//     return view('admin.empRegister');
// });

// Route::get('/addEmp', function () {
//     return view('admin.addEmp');
// });

// Route::get('/updateEmp', function () {
//     return view('admin.updateEmp');
// });

// Route::get('/doctorList', function () { //doctors in interface
//     return view('admin.doctorList');
// });

// Route::get('/viewSessions', function () {
//     return view('viewSessions');
// });

// Route::get('/addSession', function () {
//     return view('addSession');
// });

// Route::get('/addDoctor', function () {
//     return view('admin.addDoctor');
// });

// Route::get('/updateDoctor', function () {
//     return view('admin.updateDoctor');
// });

// Route::get('/patientList', function () {
//     return view('admin.patientList');
// });

// Route::get('/addPatient', function () {
//     return view('admin.addPatient');
// });

// Route::get('/apptDetails', function () {
//     return view('receptionist.apptDetails');
// });

// Route::get('/docDetails', function () {
//     return view('receptionist.docDetails');
// });

// Route::get('/dailySessions', function () {
//     return view('receptionist.dailySessions');
// });

// Route::get('/patientDetails', function () {
//     return view('receptionist.patientDetails');
// });

// Route::get('/makeApptRecep', function () {
//     return view('receptionist.makeApptRecep');
// });

// Route::get('/mySessions', function () {
//     return view('doctor.mySessions');
// });

// Route::get('/appointments', function () {
//     return view('doctor.appointments');
// });

// Route::get('/patientProfl', function () {
//     return view('doctor.patientProfl');
// });

// Route::get('/updatePatientProfile', function () {
//     return view('doctor.updatePatientProfile');
// });

// Route::get('/makeApptDoc', function () {
//     return view('doctor.makeApptDoc');
// });

// Route::get('/docProfile', function () {
//     return view('doctor.docProfile');
// });