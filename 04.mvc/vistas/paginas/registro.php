

  

  <div class="d-flex justify-content-center text-center">
    
        <form class="p-5 bg-dark" method="post">

        <div class="form-group">
          <label for="nombre" class="text-white">Nombre:</label>
          <input type="text" class="form-control" placeholder="ingrese su nombre" id="nombre" name="registroNombre">
        </div>

        <div class="form-group">
          <label for="email" class="text-white" >Correo electrónico:</label>
          <input type="email" class="form-control" placeholder="ingrese su correo" id="email" name="registroEmail">
        </div>

        <div class="form-group">
          <label for="pwd"  class="text-white">Contraseña:</label>
          <input type="password" class="form-control" placeholder="ingrese su contraseña" id="pwd" name="registroPassword">
        </div>
         


<!-- Forma en que se instacioa la clase de metodo no estatico -->
       <?php
         
         /*   $registro = new ControladorFormularios();
            $registro -> ctrRegistro(); */
         
          /*   <!-- Forma en que se instacioa la clase de metodo estatico --> */
          $registro = ControladorFormularios::ctrRegistro();
            if ($registro == "ok"){

                echo '<script>

                      if ( window.history.replaceState){

                          window.history.replaceState( null, null, window.location.href);
                        
                        }
                                                
                    </script>';

                echo  '<div class="alert alert-success">El usuario ha sido registrado</div>';
            
              }
          ?>


        <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>  

    </div>

    