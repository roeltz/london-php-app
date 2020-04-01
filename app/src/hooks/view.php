<?php

use London\HTTP\Context;

use London\HTTP\View\JSONEngine;
use London\HTTP\View\PHPEngine;

Context::expect("pipeline:after:init", function(){
	$this->response->view->addEngine("php", new PHPEngine($this), [
		"accept"=>"text/html"
	]);
	
	$this->response->view->addEngine("json", JSONEngine::class, [
		"accept"=>"application/json"
	]);
});