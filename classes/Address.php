<?php

class Address{
  private $city;
  private $country;

  function __construct($_city, $_country)
  {
    $this->city = $_city;
    $this->country = $_country;
  }
}