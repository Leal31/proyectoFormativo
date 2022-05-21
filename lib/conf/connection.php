<?php
    class Connection{
        private $server;
        private $user;
        private $pass;
        private $database;
        private $port;
        private $link;
        function __construct(){
            $this->setConnect();
            $this->connect();
        }
        /* Funcion para definir valores de 
        variables en la clase */
        private function setConnect(){
            require_once 'conf.php';
            $this->server=$server;
            $this->user=$user;
            $this->pass=$pass;
            $this->database=$database;
            $this->port=$port;
        }
        /* Funcion para crear una conexion con
        la base de datos usando los valores
        previamente definidos */
        private function connect(){
            $this->link=mysqli_connect($this->server,$this->user,$this->pass,$this->database);
            if(!$this->link){
                echo mysqli_error($this->link);
            } else {
                echo "Conexion Exitosa";
            }
        }
        /* Funcion para obtener la conexion
        como valor */
        public function getConnect(){
            return $this->link;
        }
        /* Funcion para terminar la conexion
        con la base de datos */
        public function close(){
            mysqli_close($this->link);
        }
    }
?>
