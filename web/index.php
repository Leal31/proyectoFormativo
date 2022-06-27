<?php
session_start();
include_once '../lib/helpers.php';
include_once '../view/partials/headers.php';
#include_once '../view/partials/navbar.php';

if (isset($_SESSION['ingresoDocumento'])) {
  if ($_SESSION['rol_id'] == '1') {
    include_once '../view/partials/navbar.php';
    include_once '../view/partials/sidebar.php';
  
  } else {
    include_once '../view/partials/navbarOp.php';
    include_once '../view/partials/sidebarOp.php';
  }
  } else {
  include '../view/Usuarios/iniSesion.php';
  }
?>

<div class="container">                     
<?php
if (isset($_GET['modulo'])) {
  $modulo = $_GET['modulo'];
  $controlador = $_GET['controlador'];
  $funcion = $_GET['funcion'];
  getUrl($modulo, $controlador, $funcion);

  resolve();
}
?>
</div>
<?php
include_once '../view/partials/footers.php';

?>
