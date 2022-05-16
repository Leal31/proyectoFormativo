<?php

include_once '../lib/conf/connection.php';

class MasterModel extends Connection{
    public function insert($sql){
        $reslt=mysqli_query($this->getConnect(),$sql);
        return $result; 
    }
    public function consult($sql){
        $result=mysql_query($this->getConnect(),$sql);
        return $reslt; 
    }
    public function update($sql){
        $result=mysql_query($this->getConnect(),$sql);
        return $reslt; 
    }
    public function delete($sql){
        $result=mysql_query($this->getConnect(),$sql);
        return $reslt; 
    }
    public function autoincrement($field,$table){
        $sql="SELECT MAX($field) FROM $table";
        $result= $this->consult($sql);
        $resultado=mysqli_fetch_row($result);
        
        return $resultado[0]+1; 
    }

