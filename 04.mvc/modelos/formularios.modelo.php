<?php

    require_once "conexion.php";


        class ModeloFormularios{

            // REGISTRO

        static public function mdlRegistro($tabla, $datos){

            /*declaracion*/
            $stmt = Conexion::conectar() -> prepare("INSERT INTO $tabla(nombre, email, password) VALUES
             (:nombre, :email, :password)" );   
                  
                  // Vincula una variable de PHP a un parámetro de sustitución con nombre o 
                    // de signo de interrogación correspondiente de la sentencia SQL que fue usada
                    //  para preparar la sentencia. A diferencia de PDOStatement::bindValue(),
                    //   la variable es vinculada como una referencia y solamente será evaluada
                    //    en el momento en el que se llame a PDOStatement::execute().

             $stmt-> bindParam(":nombre",   $datos  ["nombre"],   PDO::PARAM_STR);
             $stmt-> bindParam(":email",    $datos   ["email"],   PDO::PARAM_STR);
             $stmt-> bindParam(":password", $datos["password"],   PDO::PARAM_STR);
             
             if($stmt -> execute()){

                return "ok";
            
            }else{

                print_r(Conexion::conectar()->errorInfo());
            }
            
           // $stmt -> close();
            //$stmt -> null;
           
            }
          
                
          // Seleccionar Registros

            static public function mdlSeleccionarRegistros($tabla, $item, $valor){
                /*declaracion*/
                if($item == null && $valor == null){

                  $stmt = Conexion::conectar() -> prepare("SELECT *,DATE_FORMAT(fecha, '%d/%m/%y') AS fecha FROM  $tabla"); 
                
                  $stmt -> execute(); 
                  
                  return $stmt -> fetchAll();

                }  else{

                  $stmt = Conexion::conectar() -> prepare("SELECT *,DATE_FORMAT(fecha, '%d/%m/%y') AS fecha
                            FROM  $tabla where  $item = :$item"); 
                
                  $stmt-> bindParam(":".$item, $valor, PDO::PARAM_STR);
              

                  $stmt -> execute(); 
                  
                  return $stmt -> fetch();
                  
                }
                
              
                    //  $stmt -> close();
                     // $stmt -> null;

                }
                  
                
              static public function mdlActualizarRegistro($tabla, $datos){

          /*declaracion*/
          $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET nombre=:nombre, email=:email,
                   password=:password WHERE id=:id");

                     
           $stmt-> bindParam(":nombre",   $datos  ["nombre"],   PDO::PARAM_STR);
           $stmt-> bindParam(":email",    $datos  ["email"],    PDO::PARAM_STR);
           $stmt-> bindParam(":password", $datos  ["password"], PDO::PARAM_STR);
           $stmt-> bindParam(":id",       $datos  ["id"],       PDO::PARAM_INT);
           
           if($stmt -> execute()){

              return "ok";
          
          }else{

              print_r(Conexion::conectar()->errorInfo());
          }
          
        }
      }
