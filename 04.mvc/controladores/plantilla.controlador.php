<?php


    class ControladorPlantilla{

        // llamada a la plantilla

            public function ctrTraerPlantilla(){
                
                #include() se utiliza para invocar el archivo que contine codigo html-php
                
                include"vistas/Plantilla.php";

        }

    }