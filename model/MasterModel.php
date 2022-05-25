<?php

include_once '../lib/conf/connection.php';

class MasterModel extends Connection{
    public function sentencia($sql){
        $result=mysqli_query($this->getConnect(),$sql);
        return $result; 
    }
    public function autoincrement($field,$table){
        $sql="SELECT MAX($field) FROM $table";
        $result= $this->sentencia($sql);
        $resultado=mysqli_fetch_row($result);
        
        return $resultado[0]+1; 
    }

