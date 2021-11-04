<?php

require_once __DIR__ . "/Item.php";

class Shoe extends Item
{
  private $size;
  private $discountGold = 50;
  private $discountSilver = 20;

  public function __construct($_brand, $_model, $_price, $_size=null)
  {
    parent::__construct($_brand, $_model, $_price);
    $this->size = $_size;
  }
  public function setSize($_size)
  {
    $this->size = $_size;
  }
  public function getDiscount($_status)
  {
    if ($_status = 'gold'){
      return $this->discountGold;
    } elseif ($_status = 'silver') {
      return $this->discountSilver;
    }
  }
}
