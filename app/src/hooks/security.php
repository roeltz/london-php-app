<?php

use London\HTTP\Context;
use London\Run\Security;

Context::expect("pipeline:after:init", function(){
	$this->request->session->setUser(new User("Leonardo"));
	
	Security::attach($this)
		->addRole("user")
		->addRole("admin", "user")
	;
});