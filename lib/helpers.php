<?php

    /* Funcion hecha para redirigirnos a la pagina que especifiquemos
       Mediante el parametro $url */
    function redirect($url) {
        ?>
        <script type="text/javascript">
            window.location.href = '<?= $url ?>';
        </script>
        <?php
    }

    // Funcion no explicada aun
    function dd($var) {
        echo "<pre>";
        die(print_r($var));
    }

    /* Funcion hecha para definir y retornar la url que se usara con otros
       metodos a futuro */
    function getUrl($modulo, $controlador, $funcion) {
        /* Definimos variable $url donde se guarda la informacion de los archivos
           mediante parametros de la dirección url */
        $url = "index.php?modulo=$modulo&controlador=$controlador&funcion=$funcion";

        // Al final nos retorna la url con el debido formato
        return $url;
    }

    function resolve() {
        // El modulo ha de ir en forma de carpeta, debe ir guardado en el controlador
        // El controlador es el archivo .php donde eventualmente ira la clase del controlador
        // La funcion es el metodo que sera creado dentro de la clase del controlador
        
        // Se guardan en variables los parametros que nos hemos traido de la url
        $modulo = ucwords($_GET['modulo']);
        $controlador = ucwords($_GET['controlador']);
        $funcion = $_GET['funcion'];

        // Comprobamos uno a uno, que existan los parametros pasados por url

        if (is_dir("../controller/$modulo")) {

            // Se comprueba que exista el controlador dentro del modulo

            if (is_file("../controller/$modulo/$modulo"."Controller.php")) {

                // Se instancia la clase mencionada y se verifica que exista el metodo dentro de la clase
                
                include_once "../controller/$modulo/". $controlador."Controller.php"; // se incluye el controlador

                $nombreClase = $controlador."Controller"; // Se especifica que la clase debe llevar el mismo nombre que el controlador
                $obj = new $nombreClase(); // se instancia la clase con el nombre

                // A continuacion comprobamos que el metodo exista
                if (method_exists($obj,$funcion)) {
                    // se ejecuta la funcion
                    $obj -> $funcion();
                } else {
                    echo "La funcion especificada no existe";
                }
            } else {
                echo "El controlador especificado no existe"; // mensaje de error
            }
        } else {
            echo "El modulo especificado no existe"; // Se muestran mensajes de error en caso de que los mencionados no existan
        }
        
    }

?>