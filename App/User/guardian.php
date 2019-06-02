<?php
namespace App\User;

class Guardian extends Person{
	public $pets;
//since Guardian extends Person, we have a sort of double construct here
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