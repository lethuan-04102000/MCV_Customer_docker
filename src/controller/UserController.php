<?php
namespace Controller;

use Model\User;
use Model\UserDB;
use Model\DBConnection;

class UserController
{

  public $UserDB;

  public function __construct()
  {
      $connection = new DBConnection("mysql:host=db;dbname=manage_customer", "root", "mypassword");
      $this->UserDB = new UserDB($connection->connect());
  }
  public function adduser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/adduser.php';
        } else {
            $name = $_POST['name'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $filename = $_FILES['avatar']['name'];
            $tempname = $_FILES["avatar"]["tmp_name"];
            $folder = "./upload/".$filename;
            move_uploaded_file($tempname,$folder);

            $user = new User($name, $username, $email,$password,$filename);
            $this->UserDB->create($user);
            $message = 'user created';
            include 'view/adduser.php';
            
        }
    }

  public function userManager(){
    $users = $this->UserDB->getAll();
    include 'view/listuser.php';
  }
  public function deleteuser(){
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $id = $_GET['id'];
        $user = $this->UserDB->get($id);
        include 'view/deleteuser.php';
    } else {
        $id = $_POST['id'];
        $this->UserDB->delete($id);
        header('Location: userManager.php');
    }
  }
  public function updateuser (){
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $id = $_GET['id'];
        $user = $this->UserDB->get($id);
        include 'view/edituser.php';
    } else {
        $id = $_POST['id'];
        $user = new User($_POST['name'], $_POST['username'], $_POST['email'], $_POST['password'], $_POST['avatar']);
        $this->UserDB->update($id, $user);
        header('Location: userManager.php');
    }
  }
}