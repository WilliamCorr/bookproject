<?php
/**
 * Created by PhpStorm.
 * User: Will
 * Date: 13/10/2017
 * Time: 16:54
 */

namespace Itb;

//require_once './Database.php';

class UserRepository
{
    private $connection;
    private $users;


    public function __construct()
    {
        $this->users = [];

        $user1 = new User();

        $user1->setUname('Frank');

        $user2 = new User();
        $user2->setUname('James');

        $user3 = new User();
        $user3->setUname('will');

        $user4 = new User();
        $user4->setUname('Admin');

        $user5 = new User();
        $user5->setUname('John Dee');


        $this->users[] = $user1;
        $this->users[] = $user2;
        $this->users[] = $user3;
        $this->users[] = $user4;
        $this->users[] = $user5;

        $db2 = new Database();
        $this->connection = $db2->getConnection();
    }


    public function createTableUsers()
    {
        $sql = 'CREATE TABLE IF NOT EXISTS users (
                            id INTEGER PRIMARY KEY,
                            name TEXT,
                            password TEXT)';

        $this->connection->exec($sql);
        // return $sql;
    }

    public function insertDetails($Uname, $Upassword)
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

    public function getAll()
    {
        //return [];

        return $this->users;
    }

    public function indexAction()
    {
        require_once __DIR__ . '/../logins/login.php';
    }

    public function processLoginAction()
    {
        // default is bad login
        $isLoggedIn = false;

        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        if(('admin' == $username) & ('admin' == $password)){
            $isLoggedIn = true;
        }

        // action depending on login success
        if($isLoggedIn){
            // success - found a matching username and password
            require_once __DIR__ . '/../logins/loginSuccess.php';
        } else {
            $message = 'bad username or password, please try again';
            require_once __DIR__ . '/../logins/message.php';
        }
    }

}