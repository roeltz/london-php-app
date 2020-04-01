<?php

use London\HTTP\Action;
use London\HTTP\Context;

Context::expect("pipeline:error", function($ex){
	$this->sub("Errors::handle", ["exception"=>$ex])->run();
});
