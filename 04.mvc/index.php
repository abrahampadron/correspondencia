<?php


        /* El archivo index.php de una plantilla contiene una mezcla de código, 
            que será entregada como tal, y el código php, será modificado antes de la entrega. El código será familiar para cualquiera que haya diseñado una simple página html: hay 2 secciones principales: <head> y <body>. Donde index.php se diferencia es en el uso de código php para insertar la información seleccionada desde una base de datos.
        */

        
        /*  La sentencia include_once incluye y evalúa el fichero especificado durante la ejecución del script. Tiene un comportamiento similar al de la sentencia include, siendo la única diferencia de que si el código del fichero ya ha sido incluido, 
            no se volverá a incluir, e include_once devolverá true. Como su nombre indica, el fichero será incluido solamente una vez.include_once se puede utilizar en casos donde
            el mismo fichero podría ser incluido y evaluado más de una vez durante una ejecución particular de un script, así que en este caso, puede ser de ayuda para evitar problemas como la redefinición de funciones, reasignación de valores de variables, etc.
         */

        require_once "controladores/plantilla.controlador.php";
        require_once "controladores/formularios.controlador.php";
        require_once "modelos/formularios.modelo.php";
     
        
       /*  $conexion = conexion::Conectar();
        echo print_r($conexion); */

        $plantilla = new ControladorPlantilla();
        $plantilla -> ctrTraerPlantilla();


