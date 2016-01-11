<?php
Route::get('/auth/social/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('/auth/social/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

get('home', function() {
	return Auth::user();
});

/*
https://github.com/laravel/socialite

http://laravel5-socialite.dev/auth/social/twitter
http://laravel5-socialite.dev/auth/social/twitter/callback

http://laravel5-socialite.dev/auth/social/github
http://laravel5-socialite.dev/auth/social/github/callback

http://laravel5-socialite.dev/auth/social/facebook
http://laravel5-socialite.dev/auth/social/facebook/callback

*/
