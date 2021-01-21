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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/main', function () {
    return view('index');
});

Route::post('/type_two_data_insert','TypetworegisterController@create');
Route::get('/type_two_data_insert','TypetworegisterController@createform');
Route::get('/type_two_patients_list','TypetworegisterController@type_two_patient_list');
Route::post('/delete_type_two_patient','TypetworegisterController@delete_type_two_patient');

Route::get('/type_two_patient_detail/{id}','TypetworegisterController@type_two_patient_detail');






//follow up route
Route::get('/type_two_followup_insert','TypetwofollowupController@type_two_followup_insert_form');
Route::post('/type_two_followup_insert','TypetwofollowupController@type_two_followup_insert');
Route::get('/type_two_followup_list','TypetwofollowupController@type_two_followup_list');
Route::get('/type_two_followup_detail/{id}','TypetwofollowupController@type_two_followup_detail');

Route::post('/delete_type_two_followup','TypetwofollowupController@delete_type_two_followup');