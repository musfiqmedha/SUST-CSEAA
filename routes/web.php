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




// Route::get('committees', function () {
//     return view('show.showcom');
// });

Route::get('tour', function () {
    return view('tour');
});


Route::get('offer', 'ScholarshipController@index');
Route::post('scholars', 'ScholarshipController@store');
Route::get('showscholar', 'ScholarshipController@showScholar');







Route::resource('photo', 'PhotoController');
Route::get('photos','PhotoController@create');
Route::post('photos','PhotoController@store');
Route::get('galary','PhotoController@getPhoto');

Route::resource('executive', 'ExecutiveController');
Route::post('executives','ExecutiveController@store');

Route::resource('committee', 'CommitteeController');
Route::get('commit', 'CommitteeController@getcommittee');
Route::post('committees','CommitteeController@store');

Route::resource('pastleader', 'PastleaderController');
Route::post('leaders', 'PastleaderController@store');
Route::get('leader','PastleaderController@getLeader');


Route::resource('news', 'NewsController');
Route::post('news', 'NewsController@store');
Route::get('shownews', 'NewsController@getNews');




Route::resource('sports', 'SportController');
Route::post('sports', 'SportController@store');
Route::get('sport', 'SportController@getSport');


Route::resource('notice', 'NoticeController');
Route::post('notice', 'NoticeController@store');
Route::get('notices', 'NoticeController@getNotice');

Route::resource('general', 'GeneralmemberController');


Route::resource('gprofile', 'ProfileController');


Route::resource('gedit', 'EditProfileController');

Route::resource('alumni', 'AlumniController');



Route::get('edit', 'ProfileController@editProfile');
Route::get('aprofile', 'ProfileController@index');
Route::patch('/profile/update', 'ProfileController@update');



Route::resource('tour', 'TourController');
Route::post('tours', 'TourController@store');

Route::resource('event', 'EventController');
Route::post('events', 'EventController@store');
Route::get('showevent', 'EventController@getEvent');






Route::post('gedits', 'StudentController@store');


Route::post('contacts', 'ContactController@store');
Route::get('contact', 'ContactController@index');
Route::get('report', 'ContactController@getReport');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
