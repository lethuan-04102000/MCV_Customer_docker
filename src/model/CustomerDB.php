<?php
namespace Model;

class CustomerDB
{
  public $connection;

  public function __construct($connection)
  {
      $this->connection = $connection;
  }

  public function create($customer)
    {
        $sql = "INSERT INTO customer(name, email, address,numberphone,dateofbirth) VALUES (?, ?, ?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $customer->name);
        $statement->bindParam(2, $customer->email);
        $statement->bindParam(3, $customer->address);
        $statement->bindParam(4, $customer->numberphone);
        $statement->bindParam(5,$customer->dateofbirth);
        return $statement->execute();
    }
  public function getAll()
  {
    $sql = "SELECT * FROM customer";
    $statement = $this->connection->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
    $customers = [];
    foreach ($result as $row) {
        $customer = new Customer($row['name'], $row['email'], $row['address'], $row['numberphone'], $row['dateofbirth']);
        $customer->id = $row['id'];
        $customers[] = $customer;
    }
    return $customers;
  }
  public function get($id){
    $sql = "SELECT * FROM customer WHERE id = ?";
    $statement = $this->connection->prepare($sql);
    $statement->bindParam(1, $id);
    $statement->execute();
    $row = $statement->fetch();
    $customer = new Customer($row['name'], $row['email'], $row['address'],$row['numberphone'], $row['dateofbirth'] );
    $customer->id = $row['id'];
    return $customer;
  }



  public function delete($id){
    $sql = "DELETE FROM customer WHERE id = ?";
    $statement = $this->connection->prepare($sql);
    $statement->bindParam(1, $id);
    return $statement->execute();
  }

  public function update($id, $customer){
    $sql = "UPDATE customer SET name = ?, email = ?,numberphone=?, address = ? ,dateofbirth=?  WHERE id = ?";
    $statement = $this->connection->prepare($sql);
    $statement->bindParam(1, $customer->name);
    $statement->bindParam(2, $customer->email);
    $statement->bindParam(3, $customer->numberphone);
    $statement->bindParam(4, $customer->address);
    $statement->bindParam(5, $customer->dateofbirth);

    $statement->bindParam(6, $id);
    return $statement->execute();
  }

 
}