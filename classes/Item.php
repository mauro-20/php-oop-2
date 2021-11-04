<?php

class Item {
  protected $brand;
  protected $model;
  protected $price;

  public function __construct($_brand, $_model, $_price)
  {
    $this->brand = $_brand;
    $this->model = $_model;
    $this->price = $_price;
  }
}