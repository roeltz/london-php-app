<?php

use London\HTTP\Response;

class Main {

	/** @View("home") */
	function index() {
		return ["hello"=>"world!"];
	}

	function testRedirect(Response $response) {
		$response->redirectLocal("test.php");
	}
}