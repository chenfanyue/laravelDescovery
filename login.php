<?php

Route::get('login', function() {
  $user = App\User::forceCreate([
    //
    ]);
  
  Auth::login($user);
  
  return redirect('/');
});
