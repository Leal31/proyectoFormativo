<?php
    include_once "../model/Hobbies/HobbiesModel.php";

    class HobbiesController{
        function getInsert(){
            include_once '../view/Hobbies/insert.php';
        }
    
        function getUpdate(){
            $obj = new HobbiesModel();
            $hob_id = $_GET['hob_id'];
            $sql="SELECT * FROM hobbies WHERE hob_id=$hob_id";
            $hobbies = $obj -> sentencia($sql);
            include_once '../view/Hobbies/update.php';
        }
        function getDelete(){
            $obj =new HobbiesModel();
            $hob_id =$_GET['hob_id'];
            $sql="SELECT * FROM hobbies WHERE hob_id=$hob_id";
            $hobbies = $obj -> sentencia($sql);
            include_once '../view/Hobbies/delete.php';
        }
        function insert() {
            $obj = new HobbiesModel();
            $hob_id = $obj -> autoincrement("hob_id","hobbies");
            $hob_nombre=$_POST['hob_nombre'];
            $consulta = $obj -> insert("hobbies", array('hob_id', 'hob_nombre'), array($hob_id, $hob_nombre));
            if ($consulta) {
                redirect(getUrl("Hobbies","Hobbies","getInsert"));
            }else {
                echo "Verificar el proceso insert";
            }
        }
            function consult(){
                $obj = new HobbiesModel();
                $sql="SELECT * FROM hobbies";
                $hobbies = $obj->sentencia($sql);
                include_once '../view/Hobbies/consult.php';
        }
            function update(){
                $obj = new HobbiesModel();
                $hob_id = $_POST['hob_id'];
                $hob_nombre = $_POST['hob_nombre'];
    
                $consulta = $obj -> update("hobbies", array('hob_nombre'), array($hob_nombre), 'hob_id', $hob_id);
    
                if ($consulta){
                    redirect(getUrl("Hobbies","Hobbies","consult"));
                    }else {
                        echo "Verificar el proceso update";
                    }
        }
    
            function delete(){
                $obj = new HobbiesModel();
                $hob_id = $_POST['hob_id'];
                $consulta = $obj -> delete('hobbies', 'hob_id', $hob_id);
                    
                if ($consulta) {
                    redirect(getUrl("Hobbies","Hobbies","consult"));
                }else {
                    echo "Verificar el proceso de delete";
                }
            }    
    }
?>