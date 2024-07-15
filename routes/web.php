<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PointageController;
use App\Http\Controllers\FingerDevicesControlller;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('attended/{user_id}', '\App\Http\Controllers\AttendanceController@attended' )->name('attended');
Route::get('attended-before/{user_id}', '\App\Http\Controllers\AttendanceController@attendedBefore' )->name('attendedBefore');
Auth::routes(['register' => false, 'reset' => false]);

Route::middleware(['auth','isAdmin'])->group(function () {
    Route::resource('/employees', '\App\Http\Controllers\EmployeeController');
    Route::resource('/employees', '\App\Http\Controllers\EmployeeController');
    Route::get('/employe_congé', '\App\Http\Controllers\EmployeeController@employe_congé');
    Route::get('/attendance', '\App\Http\Controllers\AttendanceController@index')->name('attendance');
  
    Route::get('/latetime', '\App\Http\Controllers\AttendanceController@indexLatetime')->name('indexLatetime');
    Route::get('/leave', '\App\Http\Controllers\LeaveController@index')->name('leave');
    Route::get('/overtime', '\App\Http\Controllers\LeaveController@indexOvertime')->name('indexOvertime');

    Route::get('/admin', '\App\Http\Controllers\AdminController@index')->name('admin');

    Route::resource('/type_employes','\App\Http\Controllers\Type_EmployesController');
    Route::resource('/schedule', '\App\Http\Controllers\ScheduleController');
    

    Route::get('/check', '\App\Http\Controllers\CheckController@index')->name('check');
    Route::get('/sheet-report', '\App\Http\Controllers\CheckController@sheetReport')->name('sheet-report');
    Route::post('check-store','\App\Http\Controllers\CheckController@CheckStore')->name('check_store');

    Route::get('/demande_congeé','\App\Http\Controllers\DemandeCongeController@index')->name("demande_congeé");
    Route::post('/demande_congeé/accepter/{id}','\App\Http\Controllers\DemandeCongeController@accepter');
    Route::post('/demande_congeé/refuser/{id}','\App\Http\Controllers\DemandeCongeController@refuser');

    Route::get('/historique_congé','\App\Http\Controllers\DemandeCongeController@historique')->name('historique');
    Route::delete('/historique_congé/delete/{id}','\App\Http\Controllers\DemandeCongeController@delete_historique');
});

Route::get('/verifier_demande/{hash}','\App\Http\Controllers\DemandeCongeController@verification')->name('verf');
Route::get('/verifier_demande','\App\Http\Controllers\DemandeCongeController@verification_reponse')->name('verf');
Route::post('/verifier_demande_accepter/{id_dem}','\App\Http\Controllers\DemandeCongeController@verification_valider');


Route::middleware(['auth','isEmp'])->group(function () {
  Route::get('/employer', [EmployeeController::class, 'EmployeeIU'])->name('EmployeeIU.index');
  Route::any('/Pointer', [PointageController::class, 'Pointer'])->name('pointer');
  Route::get('/demande_congeé/ajouter','\App\Http\Controllers\DemandeCongeController@ajouter');
});
  
  
 Route::get('/leave/assign', function () {
   return view('attendance_leave_login');
 })->name('leave.login');

Route::post('/leave/assign', '\App\Http\Controllers\LeaveController@assign')->name('leave.assign');
