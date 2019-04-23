<?php

class Data_Bakat 
{
    private $table = 'bakat';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllBakat()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBakatByNomor($nomor)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nomor=:nomor');
        $this->db->bind('nomor',$nomor);
        return $this->db->single();
    }
}
?>
