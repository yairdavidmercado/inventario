<?php
// start a session
session_start();
 if (!isset($_SESSION['idUser'])) {
    header ("Location:/inventario/index.php"); 
 }
// manipulate session variables
?>
<nav style="font-size:12px" class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <div class="container">
        <a style="color:#fff" href="/inventario/home.php"><img src="/inventario/assets/img/logo-invert.svg" width="40px" alt="" srcset=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <!-- <li class="nav-item">
                <a class="nav-link" href="#">Archivo</a>
            </li> -->
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Archivo
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        <div class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $_SESSION['nameUser'];?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <!-- <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a> -->
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/inventario/php/cerrar_sesion.php">Cerrar sesión</a>
                </div>
                </li>
            </ul>
        </div>
        </div>
    </div>
  </nav>
  <script src="/inventario/assets/js/jquery.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
  $(function() {
        console.log( "ready!" );
  });
  function notificacion(message, type) {
    $.notify({
	    message: message,
        type: type,
    });
  }

  function buscar_categorias(param) {
    let values = { 
            cod: "2",
            state: '1'
        }; 
        $.ajax({
        type : 'POST',
        data: values,
        url: '/inventario/php/categoria/seleccionar.php',
        beforeSend: function() {
            //$(".loader").css("display", "inline-block")
        },
        success: function(respuesta) {
            //$(".loader").css("display", "none")
            let obj = JSON.parse(respuesta)
            let fila = ''
            $.each(obj.resultado, function( index, val ) {
                fila += '<option value="'+val.id+'">'+val.nombre+'</option>';
            });
            $(".id_categoria").html('<option value="">Seleccione el categoría</option>'+fila)
        },
        error: function() {
        //$(".loader").css("display", "")
        console.log("No se ha podido obtener la información");
        }
    });
    
  }

  function buscar_proveedores(param) {
    let values = { 
            cod: "2",
            state: '1'
        }; 
        $.ajax({
        type : 'POST',
        data: values,
        url: '/inventario/php/proveedor/seleccionar.php',
        beforeSend: function() {
            //$(".loader").css("display", "inline-block")
        },
        success: function(respuesta) {
            //$(".loader").css("display", "none")
            let obj = JSON.parse(respuesta)
            let fila = ''
            $.each(obj.resultado, function( index, val ) {
                fila += '<option value="'+val.id+'">'+val.nombre+'</option>';
            });
            $(".id_proveedor").html('<option value="">Seleccione el proveedor</option>'+fila)
        },
        error: function() {
        //$(".loader").css("display", "")
        console.log("No se ha podido obtener la información");
        }
    });
    
  }

  </script>