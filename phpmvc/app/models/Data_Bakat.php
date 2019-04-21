<?php

class Data_Bakat 
{
    // private $dtr_bakat = [
    //     [
    //         "nomor" => "1",
    //         "bakat" => "Membuat Website"
    //     ],
    //     [
    //         "nomor" => "2",
    //         "bakat" => "Membuat Aplikasi"
    //     ],
    //     [
    //         "nomor" => "3",
    //         "bakat" => "Mengolah Big Data"
    //     ],
    //     [
    //         "nomor" => "4",
    //         "bakat" => "Membuat Perangkat dengan AI"
    //     ]
    //     ];

    //sekarang menggunakan database
    private $dbh; //database handler
    private $stmt; //statement

    public function __construct()
    {
        //data source nam
        $dsn = 'mysql:host=localhost;dbname=bakat';

        try {
            $this->dbh = new PDO($dsn,'root','');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllBakat()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM bakat');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>