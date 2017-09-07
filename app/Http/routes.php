<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


use App\User;

Route::group(['middleware' => ['web']], function() {

    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

    Route::post('/signin', [
        'uses' => 'UserController@postSignIn',
        'as' => 'signin'
    ]);

    Route::get('/dashboard', [
        'uses' => 'UserController@getDashboard',
        'as' => 'dashboard'
    ]);

    Route::get('/homepage', [
        'uses' => 'UserController@getHomepage',
        'as' => 'homepage'
    ]);

    Route::get('/signup', function () {
        return view('signup');
    })->name('signup');

    Route::post('/adduser', [
        'uses' => 'UserController@postAddNewUser',
        'as' => 'user.add'
    ]);

    Route::get('/logout', [
        'uses' => 'UserController@getLogout',
        'as' => 'logout'
    ]);





    Route::get('/inbox', [
        'uses' => 'MessageController@getInbox',
        'as' => 'inbox'
    ]);

    Route::get('/outbox', [
        'uses' => 'MessageController@getOutbox',
        'as' => 'outbox'
    ]);

    Route::get('/newmessage',[
        'uses' => 'MessageController@getNewMessage',
        'as' => 'message.new'
    ]);

    Route::post('/sendmessage',[
        'uses' => 'MessageController@postSendMessage',
        'as' => 'message.send'
    ]);

    Route::get('/viewmessage/{message_id}', [
        'uses' => 'MessageController@getViewMessage',
        'as' => 'message.view'
    ]);

    Route::get('/home', [
        'uses' => 'UserController@getHome',
        'as' => 'home'
    ]);




    Route::get('/service', [
        'uses' => 'ServiceController@getAddService',
        'as' => 'service'
    ]);

    Route::post('/addservice', [
        'uses' => 'ServiceController@postAddService',
        'as' => 'service.add'
    ]);

    Route::get('/services', [
        'uses' => 'ServiceController@getServices',
        'as' => 'services'
    ]);

    Route::post('/editservices', [
        'uses' => 'ServiceController@postEditServices',
        'as' => 'services.edit'
    ]);

    Route::get('/deleteservice/{id}', [
       'uses' => 'ServiceController@getDeleteService',
        'as' => 'service.delete'
    ]);

    Route::get('/editservice/{id}', [
        'uses' => 'ServiceController@getEditService',
        'as' => 'service.edit'
    ]);

    Route::post('/editservice', [
        'uses' => 'ServiceController@postEditService',
        'as' => 'service.post.edit'
    ]);
});