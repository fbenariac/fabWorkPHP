<?php

/**
 *
 */
class User {

	public $id;
	public $username;
	public $age;
	public $gender;

	public function getUserById($id) {

		$db = new Database();
		$db -> query(
			'SELECT ID, username, age, gender FROM users WHERE ID = :id'
		);

		$db -> bind(':id', $id);
    $user = $db -> single();

		return $user;

	}
	
}