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

Route::get('/', 'HomeController@index');
Route::get('/{id}', 'PrefectureController@change')->name('prefecture.change')->where('id', '[0-9]+');

Route::get('genre', 'Homecontroller@insert')->name('genre.insert');

Auth::routes(['verify' => true]);
/*public function auth()
    {
        // Authentication Routes...
        $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
        $this->post('login', 'Auth\LoginController@login');
        $this->post('logout', 'Auth\LoginController@logout')->name('logout');

        // Registration Routes...
        $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        $this->post('register', 'Auth\RegisterController@register');

        // Password Reset Routes...
        $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        $this->post('password/reset', 'Auth\ResetPasswordController@reset');
    } */

Route::get('mypage', 'MyPageController@show')->name('mypage.show');
Route::get("reset/{token}", "UserController@reset");

Route::get('profile/create', 'ProfileController@showCreateForm')->name('profile');
Route::post('profile/create', 'ProfileController@create')->name('profile.create');
Route::get('profile/show/{id}', 'ProfileController@show')->name('profile.show');
Route::get('profile/edit', 'ProfileController@showEditForm');
Route::get('/profile/{prefecture_id}/cities', 'CityController@getCityList')->name('cities.get');
Route::post('profile/edit/{id}', 'ProfileController@edit')->name('profile.edit');

Route::get('/category', 'CategoryController@edit');
Route::post('/category', 'CategoryController@up')->name('category.edit');

Route::get('circles/new', 'CircleController@showCreateForm');
Route::post('circle/new', 'CircleController@create')->name('circle.create');
Route::get('circle/{id}', 'CircleController@show')->name('circle.show');
Route::get('circle/{id}/circle_menu', 'CircleController@showCircleMenu')->name('circle.menu');
Route::get('/circle/{id}/edit', 'CircleController@showEditForm');
Route::get('/getCircleGenres/{id}', 'CircleController@getCircleGenres');
Route::post('/circle/{id}/edit', 'CircleController@edit')->name('circle.edit');
Route::delete('/circle/{id}/delete', 'CircleController@delete')->name('circle.delete');

//サークル一覧・探す
Route::get('/search/{pref_id}', 'Circlecontroller@search')->name('circle.search');
Route::get('/{category_id}/{pref_name}', 'Circlecontroller@categorySearch');
Route::get('/search/{prefecture_name}/{genre_id}');

Route::get('/home', 'HomeController@index')->name('home');


