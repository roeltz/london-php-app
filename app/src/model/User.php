<?php

use London\Run\User as UserInterface;

class User implements UserInterface {

	public $name;

	function __construct($name) {
		$this->name = $name;
	}

	function getUserRoles(): array {
		return ["user"];
	}
}