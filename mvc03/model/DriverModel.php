<?php
class DriverModel{
    protected $db;

    public function __construct($database)
    {
        $this->db = $database;
    }

    public function getAllDriver()
    {
        $link = $this->db->openDbConnection();

        $result = $link->query('SELECT * FROM driver ORDER BY id');

        $driver = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $driver[] = $row;
        }
        $this->db->closeDbConnection($link);

        
	return $driver;
    }

    public function getDriverById($id)
    {
        $link = $this->db->openDbConnection();

        $query = 'SELECT * FROM driver WHERE  id=:id';
        $statement = $link->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        $row = $statement->fetch(PDO::FETCH_ASSOC);

        $this->db->closeDbConnection($link);

        return $row;
    }
	
    public function insert()
    {
        $link = $this->db->openDbConnection();

        $query = 'INSERT INTO driver (name, year) VALUES (:name, :year)';
        $statement = $link->prepare($query);
        $statement->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
        $statement->bindValue(':year', $_POST['year'], PDO::PARAM_STR);
        $statement->execute();

        $this->db->closeDbConnection($link);
    }

    public function update($id)
    {
        $link = $this->db->openDbConnection();

        $query = "UPDATE driver SET name = :name, year = :year WHERE id = :id";
        $statement = $link->prepare($query);
        $statement->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
        $statement->bindValue(':year', $_POST['year'], PDO::PARAM_STR);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        $this->db->closeDbConnection($link);
    }

    public function delete($id)
    {
        $link = $this->db->openDbConnection();

        $query = "DELETE FROM driver WHERE id = :id";
        $statement = $link->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        $this->db->closeDbConnection($link);
    }
}