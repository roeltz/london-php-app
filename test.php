<?php

use London\Data\Connections;
use London\Data\Source\MySQL\MySQLDataSource;
use London\ORM\Entity;
use London\ORM\ORM;

require_once __DIR__."/app/vendor/autoload.php";

/** @From("lb_users") */
class User extends Entity {

	/** @Id @Generated */
	public $id;

	/** @NotNull @Pattern(regex = "#^A#") */
	public $name;

	public $email;

	public $avatarurl;

	public $lastping;

	/** @Many(class = "Note", fk = "boardid") */
	public $notes;
}

/** @From("lb_notes") */
class Note extends Entity {

	/** @Id @Generated */
	public $id;

	/** @One(class = "User", fk = "boardid") @Eager */
	public $user;

	/** @JSON */
	public $data;

	public $edited;

	public $deleted;
}

Connections::set("default", function(){
	return new MySQLDataSource("luba_test", "192.168.1.2", "root", "Over9000!!!");
});

/*
$user = new User("roeltz");
print_r(
	$user->notes
);
*/

$u = new User();
$u->name = "A Hello";

ORM::validateProperty($u, "name");