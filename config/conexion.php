<?php
    session_start();

    class Conectar{
        protected $dbh;

        protected function conexion() {
        try {
            $conectar= $this->dbh = new PDO("mysql:host=localhost;dbname=andercode_helpdesk", "root", "");
            $conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conectar;
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function set_names() {
        return $this->dbh->query("SET NAMES 'utf8'");
    }

    public static function ruta(){
        return "http://localhost/helpdesk/";
    }
}


?>