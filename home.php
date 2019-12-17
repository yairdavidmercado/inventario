
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Offcanvas template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/offcanvas/">

    <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body class="bg-light">
  <?php require("view/menu.php"); ?>

<main role="main" class="container py-5">
  <div class="py-5 bg-white rounded shadow-sm">
  <div class="container">
      <div class="row">
        <div class="col-md-2">
          <div class="card mb-4 shadow-sm">
            <img width="100%" src="assets/img/client.JPG" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm" style="background-color: #6c63ff; color:#fff">Registrar cliente</button>
                </div>
                <!-- <small class="text-muted">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card mb-4 shadow-sm">
          <img width="100%" src="assets/img/buy.JPG" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm" style="background-color: #6c63ff; color:#fff">Nueva venta</button>
                </div>
                <!-- <small class="text-muted">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card mb-4 shadow-sm">
          <img width="100%" src="assets/img/search.JPG" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a  href="/form/existencia" class="btn btn-sm" style="background-color: #6c63ff; color:#fff">Consultar precios</a>
                </div>
                <!-- <small class="text-muted">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card mb-4 shadow-sm">
          <img width="100%" src="assets/img/proveedores.JPG" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a  href="view/formularios/proveedor.php" class="btn btn-sm" style="background-color: #6c63ff; color:#fff">Registrar proveedores</a>
                </div>
                <!-- <small class="text-muted">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card mb-4 shadow-sm">
          <img width="100%" src="assets/img/devoluciones.JPG" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm" style="background-color: #6c63ff; color:#fff">Devolución de cliente</button>
                </div>
                <!-- <small class="text-muted">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card mb-4 shadow-sm">
          <img width="100%" src="assets/img/cxp.JPG" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm" style="background-color: #6c63ff; color:#fff">Buscar cuenta por pagar</button>
                </div>
                <!-- <small class="text-muted">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card mb-4 shadow-sm">
          <img width="100%" src="assets/img/add-productos.JPG" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a  href="/form/producto" class="btn btn-sm" style="background-color: #6c63ff; color:#fff">Registrar productos</a>
                </div>
                <!-- <small class="text-muted">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card mb-4 shadow-sm">
          <img width="100%" src="assets/img/egreso.JPG" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm" style="background-color: #6c63ff; color:#fff">Registrar egresos</button>
                </div>
                <!-- <small class="text-muted">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card mb-4 shadow-sm">
          <img width="100%" src="assets/img/buy-proveedores.JPG" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm" style="background-color: #6c63ff; color:#fff">Comprar a proveedores</button>
                </div>
                <!-- <small class="text-muted">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card mb-4 shadow-sm">
          <img width="100%" src="assets/img/registrar-dinero.JPG" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm" style="background-color: #6c63ff; color:#fff">Registrar dinero</button>
                </div>
                <!-- <small class="text-muted">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card mb-4 shadow-sm">
          <img width="100%" src="assets/img/revisar-compra-proveedor.JPG" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm" style="background-color: #6c63ff; color:#fff">Revisar compra proveedor</button>
                </div>
                <!-- <small class="text-muted">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card mb-4 shadow-sm">
          <img width="100%" src="assets/img/buscar-cuenta-cobrar.JPG" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm" style="background-color: #6c63ff; color:#fff">Buscar cuenta por cobrar</button>
                </div>
                <!-- <small class="text-muted">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card mb-4 shadow-sm">
          <img width="100%" src="assets/img/add-user.JPG" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm" style="background-color: #6c63ff; color:#fff">Añadir usuario</button>
                </div>
                <!-- <small class="text-muted">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card mb-4 shadow-sm">
          <img width="100%" src="assets/img/reports.JPG" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm" style="background-color: #6c63ff; color:#fff">Reportes</button>
                </div>
                <!-- <small class="text-muted">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card mb-4 shadow-sm">
          <img width="100%" src="assets/img/calendar.JPG" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm" style="background-color: #6c63ff; color:#fff">Registrar vencimientos</button>
                </div>
                <!-- <small class="text-muted">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card mb-4 shadow-sm">
          <img width="100%" src="assets/img/devolucion-proveedores.JPG" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm" style="background-color: #6c63ff; color:#fff">Devoluciones a proveedores</button>
                </div>
                <!-- <small class="text-muted">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card mb-4 shadow-sm">
          <img width="100%" src="assets/img/caja.JPG" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm" style="background-color: #6c63ff; color:#fff">Caja general</button>
                </div>
                <!-- <small class="text-muted">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<script src="assets/js/jquery.slim.min.js" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="assets/js/jquery.slim.min.js"><\/script>')</script>
      <script src="assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(function() {
        console.log( "index!" );
  });
</script>
</body>
</html>
