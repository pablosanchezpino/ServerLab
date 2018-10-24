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

Route::get('/', 'HomeController@index')->name('home');

// Rutas para Login  LogOut
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::post('registerAdmin','Auth\RegisterController@createAdmin');
/* Route::post('register', 'Auth\RegisterController@register');
 */
// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('resetPassword','Auth\ResetPasswordController@resetPass')->name('passwordreset');

// Ruta Home
Route::get('/home', 'HomeController@index')->name('home');

Route::get('led', 'HomeController@getLed')->name('arduino.getLed');
Route::get('led/ON', 'ArduinoController@ledOn')->name('arduino.ledOn');
Route::get('led/OFF', 'ArduinoController@ledOff')->name('arduino.ledOff');

Route::get('moveTo', ['as' => 'arduino.moveTo', 'uses' => 'HomeController@getMove']);
Route::get('moveTo/{dir}', ['as' => 'arduino.moveNowTo', 'uses' => 'ArduinoController@moveTo']);

Route::get('moveTo2/{dir}', ['as' => 'arduino.moveNowTo2', 'uses' => 'MarkController@moveTo']);

Route::get('moveTo2',[
    'as' => 'arduino.moveTo2',
    'uses' => 'HomeController@getMove2'
]);

Route::get('agregarAdmin',[
    'as' => 'arduino.addAmin',
    'middelware' => 'auth',
    'uses' => 'HomeController@addAdmin'
]);
Route::get('admins',[
    'as' => 'arduino.admins',
    'middelware' => 'auth',
    'uses' => 'HomeController@admins'
]);
Route::get('admin/{id}',['as' => 'arduino.editAdmin','middelware' => 'auth','uses' => 'HomeController@editAdmin'], function ($id) {

});
Route::put('editarAdmin',[
    'as' => 'arduino.editAdmin',
    'middelware' => 'auth',
    'uses' => 'HomeController@updateAdmin'
]);
Route::get('deleteAdmin/{id}',[
    'as' => 'arduino.deleteAdmin',
    'middelware' => 'auth',
    'uses' => 'HomeController@deleteAdmin'
]);

Route::get('changePass',[
    'as' => 'arduino.changePassword',
    'middelware' => 'auth',
    'uses' => 'HomeController@changePass'
]);

Route::put('updatePass',[
    'as' => 'arduino.updatePass',
    'middelware' => 'auth',
    'uses' => 'HomeController@updatePass'
]);

Route::post('createRobot',[
    'as' => 'arduino.create',
    'middelware' => 'auth',
    'uses' => 'RobotController@create'
]);
Route::get('addRobot',[
    'as' => 'arduino.addRobot',
    'middelware' => 'auth',
    'uses' => 'RobotController@addRobot'
]);

Route::get('robots',[
    'as' => 'arduino.robots',
    'middelware' => 'auth',
    'uses' => 'RobotController@index'
]);

Route::get('robot/{id}',['as' => 'arduino.editRobot','middelware' => 'auth','uses' => 'RobotController@editRobot'], function ($id) {

});
Route::put('editarRobot',[
    'as' => 'arduino.editRobot',
    'middelware' => 'auth',
    'uses' => 'RobotController@update'
]);

Route::get('deleteRobot/{id}',[
    'as' => 'arduino.deleteRobot',
    'middelware' => 'auth',
    'uses' => 'RobotController@deleteRobot'
]);

Route::post('/pusher/auth', 'HomeController@authenticate');
