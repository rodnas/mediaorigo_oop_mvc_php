<?php
class TransportModel{
    protected $db;

    public function __construct($database)
    {
        $this->db = $database;
    }

    public function getAllTransport()
    {
        $link = $this->db->openDbConnection();

        $result = $link->query('SELECT * FROM transport ORDER BY id');

        $driver = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $driver[] = $row;
        }
        $this->db->closeDbConnection($link);

        
	return $driver;
    }

    public function getTransportById($id)
    {
        $link = $this->db->openDbConnection();

        $query = 'SELECT * FROM transport WHERE  id=:id';
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

        $query = 'INSERT INTO transport (vehicle_id, driver_id, order_date) VALUES (:vehicle_id, :driver_id, :order_date)';
        $statement = $link->prepare($query);
        $statement->bindValue(':vehicle_id', $_POST['vehicle_id'], PDO::PARAM_STR);
        $statement->bindValue(':driver_id', $_POST['driver_id'], PDO::PARAM_STR);
        $statement->bindValue(':order_date', $_POST['order_date'], PDO::PARAM_STR);
        $statement->execute();

        $this->db->closeDbConnection($link);
    }

    public function update($id)
    {
        $link = $this->db->openDbConnection();

        $query = "UPDATE transport SET vehicle_id = :vehicle_id, driver_id = :driver_id, order_date = :order_date WHERE id = :id";
        $statement = $link->prepare($query);
        $statement->bindValue(':vehicle_id', $_POST['vehicle_id'], PDO::PARAM_STR);
        $statement->bindValue(':driver_id', $_POST['driver_id'], PDO::PARAM_STR);
        $statement->bindValue(':order_date', $_POST['order_date'], PDO::PARAM_STR);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        $this->db->closeDbConnection($link);
    }

    public function delete($id)
    {
        $link = $this->db->openDbConnection();

        $query = "DELETE FROM transport WHERE id = :id";
        $statement = $link->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        $this->db->closeDbConnection($link);
    }
}