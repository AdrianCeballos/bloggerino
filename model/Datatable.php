<?php

/* A class keeps similar code together and by itself. It makes code easy to use
 * and maintain without having the same thing more than once using instances of variables stored in it */

class Database {

    private $connection;
    private $host;
    private $username;
    private $password;
    private $database;

    /* saves the information of the variables the __construct lets us define or constructors correctly */

    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function openConnection() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->connection->connect_error) {
            die("<p>Error" . $this->connection->connect_error . "</p>");
        }
    }
    /* a  function is code we can use repeatedly when we call it and only when we call it
     * pretty self explanitory function closes connection if there is something in it 
     but its null its already closed*/
    public function closeConnection() {
        /*checks to see if the connect variable is set or there is something within the variable*/
        if(isset($this->connection)){
            $this->connection->close();
        }
    }
        //query is used to execute a function//
    public function query($string) {
        $this->openConnection();
        //this code is to query the database//
        $query =  $this->connection->query($string);
        $this ->closeConnection();
        return $query;
    }

}
