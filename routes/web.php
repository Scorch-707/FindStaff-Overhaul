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

//login
Route::get('/login','LoginController@home');
Route::post('/login/prelogin','LoginController@validateUsers');
Route::get('/login/postlogin','LoginController@postLogin');
Route::get('/logout','LoginController@logout');
Route::post('/login/validateUsers','LoginController@validateUsers');
Route::get('/tlogin','LoginController@thome');
Route::post('/login/tvalidateUsers','LoginController@tvalidateUsers');

//User Authentication
Route::group(['middleware' => ['access']], function() {
    Route::get('/home','HomeController@index')->name('home.index');

    Route::get('/utilities/employee_type_data','EmployeeTypesController@index')->name('employee_type.index');
    Route::resource('utilities/employee_type', 'EmployeeTypesController');
    Route::resource('utilities/employees', 'EmployeesController');

    //Datatables
    Route::get('/employeeData', 'DatatablesController@employee_datatable')->name('employee.data');
    Route::get('/admin/etData/{isActive?}', 'DatatablesController@et_datatable')->name('et.data');
    Route::get('/utilities/emData', 'DatatablesController@employee_datatable')->name('em.data');

    //Employee Type
    Route::put('/utilities/employee_type_reactivate/{id}','EmployeeTypesController@reactivate');

    //Employee
    Route::resource('/employees/newemployee', 'EmployeesController');
    Route::post('/StoreEmployee', 'EmployeesController@store')->name('EmployeeSave');
    Route::post('/storeUser', 'EmployeesController@store_user')->name('UserStore');
    Route::put('/update_user/{id?}', 'EmployeesController@updateUser')->name('update_user');
    Route::get('utilities/employees/{employee_id}/view', 'EmployeesController@view_employee', function ($from_new = null) {
      return $from_new;});
});
