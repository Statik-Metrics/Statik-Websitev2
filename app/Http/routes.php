<?php
use SocialNorm\Exceptions\ApplicationRejectedException;
use SocialNorm\Exceptions\InvalidAuthorizationCodeException;
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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('github/authorize', function() {
	return SocialAuth::authorize('github');
});

Route::get('github/login', function() {
	try {
		SocialAuth::login('github', function($user, $details){
			$user->name = $details->nickname;
			$user->email = $details->email;
		});
	} catch (ApplicationRejectedException $e) {
		//Rejected
	} catch (InvalidAuthorizationCodeException $e) {
		//Errored
	}
	$user = Auth::user();
	return Redirect::intended();
});
