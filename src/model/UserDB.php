<?php
namespace Model;

class UserDB
{
  public $connection;

  public function __construct($connection)
  {
      $this->connection = $connection;
  }

  public function create($user)
    {
        $sql = "INSERT INTO user(name, username, email,password,avatar) VALUES (?, ? , ? , ? , ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $user->name);
        $statement->bindParam(2, $user->username);
        $statement->bindParam(3, $user->email);
        $statement->bindParam(4, $user->password);
        $statement->bindParam(5, $user->avatar);

        return $statement->execute();
    }
  public function getAll()
  {
    $sql = "SELECT * FROM user";
    $statement = $this->connection->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
    $users = [];
    foreach ($result as $row) {
        $user = new User($row['name'], $row['username'], $row['email'], $row['password'], $row['avatar']);
        $user->id = $row['id'];
        $users[] = $user;
    }
    return $users;
  }
  public function get($id){
    $sql = "SELECT * FROM user WHERE id = ?";
    $statement = $this->connection->prepare($sql);
    $statement->bindParam(1, $id);
    $statement->execute();
    $row = $statement->fetch();
    $user = new User($row['name'], $row['username'], $row['email'], $row['password'], $row['avatar']);
    $user->id = $row['id'];
    return $user;
  }

  public function delete($id){
    $sql = "DELETE FROM user WHERE id = ?";
    $statement = $this->connection->prepare($sql);
    $statement->bindParam(1, $id);
    return $statement->execute();
  }
  public function update($id, $user){
    $sql = "UPDATE user SET name = ?, username = ?, email = ? , password = ? , avatar= ? WHERE id = ?";
    $statement = $this->connection->prepare($sql);
    $statement->bindParam(1, $user->name);
    $statement->bindParam(2, $user->username);
    $statement->bindParam(3, $user->email);
    $statement->bindParam(4, $user->password);
    $statement->bindParam(5, $user->avatar);
    $statement->bindParam(6, $id);

    return $statement->execute();
  }
}