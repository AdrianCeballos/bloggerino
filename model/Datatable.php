<?php
/*A class keeps similar code together and by itself. It makes code easy to use
 * and maintain without having the same thing more than once using instances of variables stored in it */
class Database {
    private $connection;
    private $host;
    private $username;
    private $password;
    private $database;
    public function __construct($host,$username,$password,$database) {
        $this->host=$host;
        $this->username=$username;
        $this->password=$password;
        $this->database=$database;
    }
    public function openConnection(){
        
    }
    public function closeConnection(){
        
    }
    public function query($string){
        
    }
}

