<!DOCTYPE html>
<html lang="es">
<head>
  <title>Ejemplo MVC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="container-fluid">
    <h3 class="text-center py-3">Logo</h3> 
      </div>
  <div class="container-fluid bg-light">
    <div class="container">
      <ul class="nav nav-justified py-2 nav-pills d-fle-top">

                if

    


              






        <li class="nav-item">
              <a class="nav-link " href="index.php?pagina=registro">Registro</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="index.php?pagina=ingreso">Ingreso</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
            </li>

              <li class="nav-item">
            <a class="nav-link" href="index.php?pagina=salir">Salir</a>
            </li>

      </ul>

    </div>
  </div>
  <div class="container-fluid">
    <div class="container py-5">
  
      <div class="container-fluid ">
        <div class="container py-5 ">
        
        <?php
              /* isset — Determina si una variable está definida y no es null */
              if(isset($_GET["pagina"])){

                  if($_GET["pagina"] == "registro" ||
                     $_GET["pagina"] == "ingreso" ||
                     $_GET["pagina"] == "inicio" ||
                     $_GET["pagina"] == "salir") {
                      
                      include "paginas/".$_GET["pagina"].".php";
                    
                    }


              }else{
                  include "paginas/registro.php";
              }

              
        ?>




    </div>
  </div>

</body>
</html>