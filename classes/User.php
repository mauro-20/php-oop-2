<?php

class User{
  private $firstName;
  private $lastName;
  private $id;
  private $email;
  private $dob;
  private $gender;
  protected $address;

  public function __construct($_firstName, $_lastName, $_id, $_email, $_dob=null, $_gender=null, $_address=[])
  {
    $this->firstName = $_firstName;
    $this->lastName = $_lastName;
    $this->id = $_id;
    $this->dob = $_dob;
    $this->gender = $_gender;
  }

  function setDob($_dob)
  {
    $this->dob = $_dob;
  }

  function setGender($_gender)
  {
    $this->dob = $_gender;
  }

  function setAddress($_address)
  {
    $this->address[] = $_address;
  }
}