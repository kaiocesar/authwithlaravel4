<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

/**
 * Rotas padrões do modulo "default"
 */
Route::get('/',function(){
  return View::make('default.home');
});



/**
 * Group routes authentication
 *  @todo A palavra "painel" é um prefixo para identificar tudo oque for da parte administrativa.
 */
define('PREFIX_ADM', 'painel');

Route::group(array('before'=>'auth'), function(){
  Route::get('/'.PREFIX_ADM, ['as'=>'home', function(){ return View::make(PREFIX_ADM.'.home'); }]);
  Route::get('/'.PREFIX_ADM.'/users', 'UserController@index');
  Route::get('/'.PREFIX_ADM.'/posts', 'PostController@index');
});




/**
 * Rotes authentication
 */
Route::get('/login', array('as' => 'login', function() {
  if (Auth::check()):
    return Redirect::route('dash')->with("flash_notice", "You are successfully logged in.");
  endif;
  return View::make(PREFIX_ADM.'.login');
}))->before('guest');


Route::post('login', array('before'=>'csrf', function() {
  $user = array(
    'username' => Input::get('username'),
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



