<?php

namespace Itb;



class ProductRepository
{
    private $connection;
    //private $description;


       public function __construct()
    {
        //this needs to be turned on and off for testing
        //require '../setup/setup_database.php';

        $db2 = new Database();
        $this->connection = $db2->getConnection();

         $this->products = [];

         $product1 = new Product();
         $product2 = new Product();
         $product3 = new Product();



         $product1->setId(1);
         $product2->setId(2);
         $product3->setId(3);

         $product1->setDescription('John Dee T-shirt');
         $product2->setDescription('John Dee Mug');
         $product3->setDescription('John Dee Poster');


         $product3->setPrice(9.99);
         $product1->setPrice(14.99);
         $product2->setPrice(5.99);

         $this->products[] = $product1;
         $this->products[] = $product2;
         $this->products[] = $product3;


    }
    public function createTable()
    {
        $sql = 'CREATE TABLE IF NOT EXISTS products (
                            id INTEGER PRIMARY KEY,
                            description TEXT,
                            price INTEGER)';

        $this->connection->exec($sql);
       // return $sql;
    }

    public function getAllProducts()
    {
        $sql = 'SELECT * FROM products';

        $stmt = $this->connection->prepare($sql);
        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_CLASS, 'Itb\\Product');

        $products = $stmt->fetchAll();

        return $products;
    }

    public function getOne($id)
    {
        $sql = 'SELECT * FROM products WHERE id = :id';

        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_CLASS, 'Itb\\Product');

        $products = $stmt->fetch();

        return $products;
    }


    public function insertProduct($description, $price)
    {

        // no ID since that is AUTO-INCREMENTED by DB
        $sql = 'INSERT INTO products (description, price) VALUES (:description, :price)';
        $stmt = $this->connection->prepare($sql);

        // Bind parameters to statement variables
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);

        // Execute statement
        $stmt->execute();

    }

    public function deleteAll()
    {
        $sql = 'DELETE * FROM products';

        $stmt = $this->connection->exec($sql);
    }


    public function createTableUsers0()
    {
        $sql = 'CREATE TABLE IF NOT EXISTS users2 (
                            id INTEGER PRIMARY KEY,
                            name TEXT,
                            password TEXT); ';

        $this->connection->exec($sql);
        // return $sql;
    }

    public function insertDetails0($Uname, $Upassword)
    {

        // no ID since that is AUTO-INCREMENTED by DB
        $sql = 'INSERT INTO users (Uname, Upassword) VALUES (:Uname, :Upassword)';
        $stmt = $this->connection->prepare($sql);

        // Bind parameters to statement variables
        $stmt->bindParam(':Uname', $Uname);
        $stmt->bindParam(':Upassword', $Upassword);

        // Execute statement
        $stmt->execute();

    }

}