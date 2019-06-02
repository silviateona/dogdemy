<?php
namespace App\Classes;
class Person{
	public $username;
	public $firstName;
	public $lastName;
	public $email;
	public $pswd;
	public $gender;
	public $description;

	public function __construct(string $username,
								string $firstName,
								string $lastName,
								string $email,
								string $pswd,
								bool $gender,
								string $description){
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
	public function getGender(){
		return $this->gender? "male": "female";
	}

}//end class Person