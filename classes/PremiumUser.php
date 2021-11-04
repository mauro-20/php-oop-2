<?php

require_once __DIR__ . "/User.php";

class PremiumUser extends User {
  private $status;

  public function __construct($_firstName, $_lastName, $_id, $_email, $_status)
  {
    parent:: __construct($_firstName, $_lastName, $_id, $_email);
    $this->status = $_status;
  } 
}