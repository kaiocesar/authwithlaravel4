<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('before'=>'auth','as' => 'home', function() {
/*
  $user = new User;
  $user->email = "user";
  $user->password = Hash::make('senha');
  $user->save();

  exit;
  */

  return View::make('home');   
}));

Route::get('/admin', ['before' => 'auth', function(){ 
  return  "Welcome to admin area";
}]);


Route::get('/login', array('as' => 'login', function() {
 
  if (Auth::check()):
    return Redirect::route('dash')->with("flash_notice", "You are successfully logged in.");
  endif;

  return View::make('login');

}))->before('guest');


Route::post('login', array('before'=>'csrf', function() {
  $user = array(
    'email' => Input::get('username'),
    'password' => Input::get('password')
  );

  
  
  if (Auth::attempt($user)) {
     return Redirect::route('home')->with('flash_notice', 'You are successfully logged in.');
  }

  return Redirect::route('login')->with('flash_error','you username/password combination was incorrect')->withInput();

}));


Route::get('/logout', array('as'=>'logout', function(){
   Auth::logout();

   return Redirect::route('home')->with('flash_notice', 'you are sucessfully logged out.');
}))->before('auth');


Route::get('/profile', array('as'=>'profile', function(){ 
   return View::make('profile');
}))->before('auth');





// http://laravelbook.com/laravel-user-authentication/
