
<h1>Ingreso</h1>


<div class="d-flex justify-content-center text-center">
    
    <form class="p-5 bg-dark" method="post">

    <div class="form-group">
      <label for="email" class="text-white" >Correo electrónico:</label>
      <input type="email" class="form-control" placeholder="ingrese su correo" id="email" name="ingresoEmail">
    </div>

    <div class="form-group">
      <label for="pwd"  class="text-white">Contraseña:</label>
      <input type="password" class="form-control" placeholder="ingrese su contraseña" id="pwd" name="ingresoPassword">
    </div>
     



   <?php

      $ingreso = new ControladorFormularios();
      $ingreso ->  ctrIngreso();



      ?>


    <button type="submit" class="btn btn-primary">Ingesar</button>
    </div>
</form>  

</div>

