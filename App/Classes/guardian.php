<?php
namespace App\Classes;

class Guardian extends Person{
	public $pets;

	public function __construct(string $username,
								string $firstName,
								string $lastName,
								string $email,
								string $pswd,
								bool $gender,
								string $description,
								int $petnum){
		parent::__construct(
			$username,
			$firstName,
			$lastName,
			$email,
			$pswd,
			$gender,
			$description
		);
		$this->pets=$petnum;
	}

	public function getPetnum(){
		return $this->pets;
	}
}