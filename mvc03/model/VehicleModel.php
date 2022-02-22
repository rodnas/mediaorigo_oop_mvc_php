<?php
class VehicleModel{
    protected $db;

    public function __construct($database)
    {
        $this->db = $database;
    }

    public function getAllVehicle()
    {
        $link = $this->db->openDbConnection();

        $result = $link->query('SELECT * FROM vehicle ORDER BY id');

        $vehicle = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $vehicle[] = $row;
        }
        $this->db->closeDbConnection($link);

        
		return $vehicle;
    }

    public function getVehicleById($id)
    {
        $link = $this->db->openDbConnection();

        $query = 'SELECT * FROM vehicle WHERE  id=:id';
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

        $query = 'INSERT INTO vehicle (type, lpn, year) VALUES (:type, :lpn, :year)';
        $statement = $link->prepare($query);
        $statement->bindValue(':type', $_POST['type'], PDO::PARAM_STR);
        $statement->bindValue(':lpn', $_POST['lpn'], PDO::PARAM_STR);
        $statement->bindValue(':year', $_POST['year'], PDO::PARAM_STR);
        $statement->execute();

        $this->db->closeDbConnection($link);
    }

    public function update($id)
    {
        $link = $this->db->openDbConnection();

        $query = "UPDATE vehicle SET type = :type, lpn = :lpn, year = :year WHERE id = :id";
        $statement = $link->prepare($query);
        $statement->bindValue(':type', $_POST['type'], PDO::PARAM_STR);
        $statement->bindValue(':lpn', $_POST['lpn'], PDO::PARAM_STR);
        $statement->bindValue(':year', $_POST['year'], PDO::PARAM_STR);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        $this->db->closeDbConnection($link);
    }

    public function delete($id)
    {
        $link = $this->db->openDbConnection();

        $query = "DELETE FROM vehicle WHERE id = :id";
        $statement = $link->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        $this->db->closeDbConnection($link);
    }
}