<?php

Route::get('str', function() {
	return view('my.helloworld');
});

Route::get('hi', function() {
	$people = ['Taylor', 'Matt', 'Jeffrey'];
	return view('my.hello', ['p' => $people]);
});

Route::get('hi2', function() {
	$people = ['Taylor', 'Matt', 'Jeffrey'];
	//return view('my.hello2', compact('people'));
	return View::make('my.hello2', compact('people'));
});

Route::get('hi3', function() {
	$people = ['Taylor', 'Matt', 'Jeffrey'];
	return view('my.hello')->with('p',  $people);
});
