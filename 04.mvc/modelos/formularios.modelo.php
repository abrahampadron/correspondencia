<?php

    require_once "conexion.php";


        class ModeloFormularios{

            // REGISTRO

        static public function mdlRegistro(){
            if(isset($_POST["registroNombre"])){

                $tabla = "registros";
                $datos = array("nombre" => $_POST["registroNombre"], "email"  => $_POST["registroEmail"],"password" => $_POST["registropassword"]);   
                
               

            }
            


        }



    }

