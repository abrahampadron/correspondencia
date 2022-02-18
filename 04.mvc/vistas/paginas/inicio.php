<?php
      if(isset($_SESSION["validarIngreso"])){

        if($_SESSION["validarIngreso"] != "ok"){
      
           echo '<script>window.location = "index.php?pagina=ingreso";</script>';
      
         return;

        }
    
      }else{
       
        

        echo '<script>window.location = "index.php?pagina=ingreso";</script>';
        
        return;

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
                <a href="index.php?pagina=editar&id=<?php echo $value["id"];?>" class="btn btn-warning">Actualizar</a>
                <button class="btn btn-danger" disabled>borrar</button>
              </div>
          <tr>
         </td>
          <?php endforeach ?>
          </tbody>
         
        </table>
   
    
      