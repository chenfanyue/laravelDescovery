<?php

namespace Acme;

class ClassName extends AnotherClass
{
	protected $config;

	function __construct(Repository $config)
	{
		$this->config = $config;
	}

	function test(Repository $config)
	{
		// 1, constructor dependency injection
		// 2, method dependency injection
		// 3, facade
		// 4, global helper function
	}
}
