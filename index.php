<?php

use London\Config\Config;
use London\HTTP\Context;
use London\HTTP\Request;
use London\HTTP\Response;
use London\HTTP\Router;
use London\HTTP\View;

require_once __DIR__."/app/vendor/autoload.php";

$config = new Config([
	__DIR__."/app/config/app"
]);

$router = new Router([
	"base"=>$config->get("http.base"),
	"routes"=>[
		"GET	/"=>"Main::index",
		"GET	/redirect"=>"Main::testRedirect"
	]
]);

Context::hook("view", "security", "locale", "http-error");
Context::create($config, $router)->run();