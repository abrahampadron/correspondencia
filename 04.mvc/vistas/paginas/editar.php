<?php

        if (isset($_GET["id"])){

            $item = "id";
            $valor = $_GET["id"];
            $usuario = ControladorFormularios::ctrSeleccionarRegistros($item,$valor);



    }
  

  <div class="d-flex justify-content-center text-center">
    
        <form class="p-5 bg-dark" method="post">

        <div class="form-group">
          
          <input type="text" class="form-control" placeholder="Escriba su nombre" id="nombre" name="actualizarNombre">
        </div>

        <div class="form-group">

          <input type="email" class="form-control" placeholder="Escriba su email" id="email" name="actualizarEmail">
        </div>

        <div class="form-group">

          <input type="password" class="form-control" placeholder="Escriba contraseña" id="pwd" name="actualizarPassword">
        </div>
         


<!-- Forma en que se instacioa la clase de metodo no estatico -->
       <?php
         
       


          ?>


        <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>  

    </div>

    