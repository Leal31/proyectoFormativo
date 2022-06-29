<?php
include_once '../model/Generos/GenerosModel.php';

class generosController{
  function getInsert(){
    if (isset($_SESSION['ingresoDocumento']) and $_SESSION['rol_id'] == '1') {

        include_once '../view/Generos/insert.php';
    }
    }

  function getUpdate(){
    if (isset($_SESSION['ingresoDocumento']) and $_SESSION['rol_id'] == '1')  {
       $obj = new GenerosModel();
        $gen_id = $_GET['gen_id'];
        $sql="SELECT * FROM generos WHERE gen_id=$gen_id";
        $generos = $obj -> sentencia($sql);
        include_once '../view/Generos/update.php';
    }
           }
  function getDelete(){
    if (isset($_SESSION['ingresoDocumento']) and $_SESSION['rol_id'] == '1') {
	$obj =new GenerosModel();
        $gen_id =$_GET['gen_id'];
        $sql="SELECT * FROM generos WHERE gen_id=$gen_id";
        $generos = $obj -> sentencia($sql);
        include_once '../view/Generos/delete.php';
    }
           }
    function insert(){
        $obj = new GenerosModel();
        $gen_id = $obj -> autoincrement("gen_id","generos");
	$gen_nombre=$_POST['gen_nombre'];
	$consulta = $obj -> insert("generos", array('gen_id', 'gen_nombre'), array($gen_id, $gen_nombre));
	if ($consulta) {
	    echo "<script>alert('El genero fue añadido con exito')</script>";
            redirect(getUrl("Generos","Generos","getInsert"));
        }else {
            echo "Verificar el proceso insert";
        }
    }
    function consult(){ 
      if (isset($_SESSION['ingresoDocumento']) and $_SESSION['rol_id'] == '1') {
	    $obj = new GenerosModel();
            $sql="SELECT * FROM generos";
            $generos = $obj->sentencia($sql);
            include_once '../view/Generos/consult.php';
      }
                }
        function update(){
            $obj = new GenerosModel();
            $gen_id = $_POST['gen_id'];
	    $gen_nombre = $_POST['gen_nombre'];

	    $consulta = $obj -> update("generos", array('gen_nombre'), array($gen_nombre), 'gen_id', $gen_id);

	    if ($consulta){
		echo "<script>alert('El genero fue actualizado con exito')</script>";
                redirect(getUrl("Generos","Generos","consult"));
                }else {
                    echo "Verificar el proceso update";
                }
    }

        function delete(){
            $obj = new GenerosModel();
	    $gen_id = $_POST['gen_id'];
	    $consulta = $obj -> delete('generos', 'gen_id', $gen_id);
                
	    if ($consulta) {
		echo "<script>alert('El genero fue eliminado con exito')</script>";
                redirect(getUrl("Generos","Generos","consult"));
            }else {
                echo "Verificar el proceso de delete";
            }
        }    
    }
 
?>
