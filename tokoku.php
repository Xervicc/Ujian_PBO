<?php
    class toko{
        private $db;
        public function __construct()
        {
            try{
                $this->db = new PDO("mysql:host=localhost;dbname=daftar_cabang_toko","root","");

            } catch(PDOexception $e){
                die("Error ". $e->getMessage());
            }

        }

        public function tampil(){
            $sql = "SELECT * FROM `daftar_cabang_toko`";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            $data = [];
            while($rows = $stmt->fetch()) {
                $data[] = $rows;
            }
            return $data;
        }
    }
?>