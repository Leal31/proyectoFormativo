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

    public function insert($table, $fields, $values) {
      // Vamos a armar por partes la variable sql concatenando la información pasada por parametros
      $sql = "INSERT INTO $table ("; // Iniciamos la variable
      // Mediante un ciclo recorremos el parametro fields, y le concatenamos el valor, con una coma
      for ($i = 0; $i < sizeof($fields); $i++) { 
	$sql .= $fields[$i].",";
      }

      $sql = trim($sql, ','); // mediante la funcion trim borramos la ultima coma concatenada

      $sql .= ") VALUES ("; // añadimos el values
      for ($i = 0;$i < sizeof($values); $i++) { // lo mismo que con fields
	$sql .= "'$values[$i]'". ",";
      }
      $sql = trim($sql, ','); // quitamos la ultima coma
      $sql .= ")"; // cerramos el sql

      $result = mysqli_query($this -> getConnect(), $sql); // ejecutamos el sql creado // ejecutamos el sql creado

      return $result;

    }



    public function update($table, $fields, $values, $fieldCondicional, $valCondicional) {
      $sql = "UPDATE $table SET ";

      for ($i = 0; $i < sizeof($fields);$i++) {
	$sql .= "$fields[$i] = '$values[$i]',";
      }
      $sql = trim($sql, ',');
      $sql .= " WHERE $fieldCondicional=$valCondicional";

      $result = mysqli_query($this -> getConnect(), $sql);

      return $result;
    }

    public function delete($table, $fieldCondicional, $valCondicional) {
      $sql = "DELETE FROM $table WHERE $fieldCondicional=$valCondicional";
      
      $result = mysqli_query($this -> getConnect(), $sql);

      return $result;
    }
}

