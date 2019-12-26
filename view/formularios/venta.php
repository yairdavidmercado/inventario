<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Inventario</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/offcanvas/">

    <!-- Bootstrap core CSS -->
<link href="/inventario/assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

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
  <?php require("../menu.php"); ?>

<main role="main" class="container py-5">
  <div class="py-5 bg-white rounded shadow-sm">
    <div class="container">
    <div class="row">
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Venta</h5>
                    </div>
                    <div class="card-body">
                        <form class="form" id="form_venta" role="form" onsubmit="event.preventDefault(); return actualizar_venta();" autocomplete="off">
                            <div class="container row">
                                <div class="form-group col-sm-12">
                                    <label style="font-size:14px" for="">Crédito</label>
                                    <input type="radio" name="tipo_venta" value="credito" id="">
                                    <label style="font-size:14px" for="">Contado</label>
                                    <input type="radio" name="tipo_venta" value="contado" id="">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label style="font-size:14px" for="">Producto</label>
                                    <select required class="form-control form-control-sm id_producto" name="id_producto">
                                        <option value="">Seleccione el producto</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label style="font-size:14px" for="">Nombre</label>
                                    <input class="form-control form-control-sm" required name="nit1" type="text" placeholder="NIT">
                                </div>
                                <div class="form-group col-sm-6">
                                    <input class="form-control form-control-sm" required name="nombre1" type="text" placeholder="Nombre">
                                </div>
                                <div class="form-group col-sm-6">
                                    <input class="form-control form-control-sm" required name="direccion1" type="text" placeholder="Dirección">
                                </div>
                                <div class="form-group col-sm-6">
                                    <input class="form-control form-control-sm" required name="telefono1" type="text" placeholder="Teléfono">
                                </div>
                                <div class="form-group col-sm-6">
                                    <input class="form-control form-control-sm" required name="email1" type="text" placeholder="Email">
                                </div>
                                <div class="form-group col-sm-6">
                                    <select class="form-control form-control-sm" name="state1" id="">
                                        <option value="">Estado</option>
                                        <option value="1">ACTIVO</option>
                                        <option value="0">INACTIVO</option>
                                    </select>
                                </div>     
                                <div class="form-group col-sm-12 table-responsive">
                                    <table class="table" id="example" style="width:100%; font-size:10px">
                                        <thead class="thead-light">
                                            <tr>
                                                <th style="display:none" scope="col">NIT</th>
                                                <th scope="col">NIT</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Dirección</th>
                                                <th scope="col">Teléfono</th>
                                                <th scope="col">Email</th>
                                                <th style="display:none" scope="col">Estado</th>
                                                <th style="width:10px" scope="col"></th>
                                                <th style="width:10px" scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbodytable">

                                        </tbody>
                                    </table>
                                </div>
                        <div class="form-group col-sm-12">
                                    <button class="btn btn-success float-right" type="submit">guardar</button>
                                    <button class="btn btn-primary float-right" type="button" onclick="ver_guardar()">Nuevo</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div id="ver_guardar" class="card">
                    <div class="card-body">
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div class="text-success">
                                <h6 class="my-0">Existencia actual</h6>
                            </div>
                            <span class="text-muted">12</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Second product</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">$8</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Third item</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">$5</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                                <h6 class="my-0">Promo code</h6>
                                <small>EXAMPLECODE</small>
                            </div>
                            <span class="text-success">-$5</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong>$20</strong>
                            </li>
                        </ul>
                        <form class="form" id="form_guardar" role="form" methods="POST" onsubmit="event.preventDefault(); return guardar_venta();" autocomplete="off">
                            <div class="container">
                                <div class="form-group">
                                    <input ref="nit" class="form-control form-control-sm" required name="nit" type="text" placeholder="NIT">
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-sm" required name="nombre" type="text" placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-sm" required name="direccion" type="text" placeholder="Dirección">
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-sm" required name="telefono" type="text" placeholder="Teléfono">
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-sm" required name="email" type="text" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Agregar</button>
                                    <button class="btn btn-danger" type="button" @click="limpiarventa()">Limpiar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /form user info -->
            </div>
        </div>
    </div>
  </div>
</main>
<script src="/inventario/assets/js/jquery.slim.min.js" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/inventario/assets/js/jquery.slim.min.js"><\/script>')</script>
    <script src="/inventario/assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/inventario/assets/js/bootstrap-notify.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
$(function() {
        Showventa()
        console.log( "index!" );
  });
  function guardar_venta() {
      $.ajax({
        type : 'POST',
        data: $("#form_guardar").serialize(),
        url: '/inventario/php/venta/guardar.php',
        success: function(respuesta) {
          let obj = JSON.parse(respuesta)
          if (obj.success) {
            notificacion("El venta ha sido guardado exitosamente.", "success")
            limpiar_form()
            Showventa()
            $("input[name*='nit']").focus()
          }else{
            alert('Datos invalidos para el acceso')
          }
        },
        error: function() {
          console.log("No se ha podido obtener la información");
        }
      });
      
    }

    function actualizar_venta() {
      $.ajax({
        type : 'POST',
        data: $("#form_actualizar").serialize(),
        url: '/inventario/php/venta/actualizar.php',
        success: function(respuesta) {
          let obj = JSON.parse(respuesta)
          if (obj.success) {
            notificacion("El venta ha sido actualizado exitosamente.", "success")
            //limpiar_form()
            Showventa()
            $("input[name*='nit1']").focus()
          }else{
            alert('Datos invalidos para el acceso')
          }
        },
        error: function() {
          console.log("No se ha podido obtener la información");
        }
      });
      
    }

    function Showventa() {
        let values = { 
            cod: "1",
            state: 1,
        }; 
        $.ajax({
        type : 'POST',
        data: values,
        url: '/inventario/php/venta/seleccionar.php',
        beforeSend: function() {
            //$(".loader").css("display", "inline-block")
        },
        success: function(respuesta) {
        //$(".loader").css("display", "none")
        let obj = JSON.parse(respuesta)
        $("#example").dataTable().fnDestroy();
        let fila = ''
        $.each(obj.resultado, function( index, val ) {
            fila += '<tr>'+
                        '<td style="display:none">'+val.id+'</td>'+
                        '<td>'+val.nit+'</td>'+
                        '<td>'+val.nombre+'</td>'+
                        '<td>'+val.direccion+'</td>'+
                        '<td>'+val.telefono+'</td>'+
                        '<td>'+val.email+'</td>'+
                        '<td style="display:none">'+val.state+'</td>'+
                        '<td>'+val.fecha+'</td>'+
                        '<td class="editar"><button class="btn btn-warning btn-sm" onclick="ver_editar()" >Editar</button></td>'+
                    '</tr>'
        });
        $("#tbodytable").html(fila)
        $('#example').DataTable({
            "ordering": false
        });

        $(".editar").click(function() {
            var valores=[];
 
            // Obtenemos todos los valores contenidos en los <td> de la fila
            // seleccionada
            $(this).parents("tr").find("td").each(function(){
                valores.push($(this).html());
            });
            $("input[name*='id1']").val(valores[0])
            $("input[name*='nit1']").val(valores[1])
            $("input[name*='nombre1']").val(valores[2])
            $("input[name*='direccion1']").val(valores[3])
            $("input[name*='telefono1']").val(valores[4])
            $("input[name*='email1']").val(valores[5])
            $("select[name*='state1']").val(valores[6])
        })
            //$('#example').DataTable().ajax.reload();
        },
        error: function() {
        //$(".loader").css("display", "")
        console.log("No se ha podido obtener la información");
        }
    });
    
  }

    function limpiar_form() {
        $("input[name*='nit']").val("")
        $("input[name*='nombre']").val("")
        $("input[name*='direccion']").val("")
        $("input[name*='telefono']").val("")
        $("input[name*='email']").val("")
    }

    function ver_guardar() {
        $("#ver_guardar").css("display", "block")
        $("#ver_editar").css("display", "none")
    }

    function ver_editar() {
        $(".editar").click()
        $("#ver_editar").css("display", "block")
        $("#ver_guardar").css("display", "none")
    }
</script>
</body>
</html>
