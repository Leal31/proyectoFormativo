<?php
session_start();
include_once '../lib/helpers.php';
include_once '../view/partials/headers.php';
#include_once '../view/partials/navbar.php';

if (isset($_SESSION['ingresoDocumento'])) {
  include_once '../view/partials/navbar.php';
  include_once '../view/partials/sidebar.php';
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
