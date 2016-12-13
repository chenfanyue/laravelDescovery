<?php

Route::get('foo', ['middleware'=>'middlewareName:param1,param2',Closure]);

public function __construct() {
	$this->middleware = middlewareName:param1,param2;
}

// parameters defined in handle() method of middleware class.
