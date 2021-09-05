<?php
namespace Model;

class Customer
{
  public $id;
  public $name;
  public $email;
  public $address;
  public $numberphone;
  public $dateofbirth;
  public function __construct($name, $email, $address,$numberphone,$dateofbirth)
  {
      $this->name = $name;
      $this->email = $email;
      $this->address = $address;
      $this->numberphone= $numberphone;
      $this-> dateofbirth = $dateofbirth;
  }
}