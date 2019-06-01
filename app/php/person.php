<?php

class Person{
	public $username;
	public $firstName;
	public $lastName;
	public $email;
	public $pswd;
	public $gender;
	public $description;

	public function __construct($username,
								$firstName,
								$lastName,
								$email,
								$pswd,
								$gender,
								$description){
		$this->username=$username;
		$this->firstName=$firstName;
		$this->lastName=$lastName;
		$this->email=$email;
		$this->pswd=$pswd;
		$this->gender=$gender;
		$this->description=$description;
	}

	public function getUsername(){
		return $this->username;
	}

}//end class Person