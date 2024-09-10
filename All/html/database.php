<?php
class Database
{
    private $host;
    private $user;
    private $password;
    private $db;

    public function __construct()
    {
        $this->host = "localhost";
        $this->user = "root";
        $this->password = "";
        $this->db = "db";
    }
    public function connect()
    {
        $con = new mysqli($this->host, $this->user, $this->password);
        $con->select_db($this->db);
        return $con;
    }
}