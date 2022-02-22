<?php 
class Database{
    protected $host = 'localhost';
    protected $dbname = 'oop_mvc_db';
    protected $user = 'root';
    protected $password = '';

    public function openDbConnection()
    {
        $link = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
        return $link;
    }

    public function closeDbConnection(&$link)
    {
        $link = null;
    }
}