<?php
namespace Model;

class User
{
  public $id;
  public $name;
  public $username;
  public $email;
  public $password;
  public $avatar;


  public function __construct($name, $username, $email,$password,$avatar)
  {
      $this->name = $name;
      $this->username = $username;
      $this->email = $email;
      $this->password = $password;
      $this->avatar = $avatar;

  }
}