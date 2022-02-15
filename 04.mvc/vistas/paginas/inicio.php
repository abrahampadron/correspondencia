<?php
      if(isset($_SESSION["validarIngreso"])){

        if(isset($_SESSION["validarIngreso"] != "ok"{
      
      echo   w
      
        }
    

      $usuarios = ControladorFormularios::ctrSeleccionarRegistros();
     // echo '<pre>';print_r($usuarios); echo'<pre>';

      ?>
      <h1>Inicio</h1>


      <table class="table table-hover">
        <thead class="thead-dark">
         <tr>
          <th>#</th>  
            <th>Nombre</th>
            <th>Email</th>
            <th>Fecha</th>
            <th>Acciones</th>
          </tr>
        </thead>
        
        <tbody>

        <?php foreach ($usuarios as $key => $value): ?>

          <tr>
          <td><?php echo ($key+1);?></td>
          <td><?php echo $value["nombre"];?></td>
          <td><?php echo $value["email"];?></td>
          <td><?php echo $value["fecha"];?></td>
          <td>
              <div class="btn-group">
                <button class="btn btn-warning">Actualizar</button>
                <button class="btn btn-danger" disabled>borrar</button>
              </div>
          <tr>
         </td>
          <?php endforeach ?>
          </tbody>
         
        </table>
   
    
      