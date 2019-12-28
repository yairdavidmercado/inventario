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
<link href="/inventario/assets/css/select2.min.css" rel="stylesheet" crossorigin="anonymous">
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
                        <div class="card mb-4">
                            <div class="card-body">
                                <form class="form" id="form_detalle_factura" role="form" onsubmit="event.preventDefault(); return guardar_detalle_factura();" autocomplete="off">
                                    <div class="container row">
                                        <div class="form-group col-sm-12">
                                            <button class="btn btn-success float-right" type="submit">guardar</button>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label style="font-size:14px" for="">Producto</label>
                                            <br>
                                            <select required class="form-control select2-single id_producto" name="id_producto">
                                                <option value="">Seleccione el producto</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label style="font-size:14px" for="">Valor de venta x unidad</label>
                                            <input class="form-control form-control-sm" required name="precio_venta" type="text" placeholder="Valor de venta x unidad">
                                        </div>
                                        <div class="form-group col-sm-2">
                                        <label style="font-size:14px" for="">Cantidad</label>
                                            <input class="form-control form-control-sm" required name="cantidad" type="text" placeholder="Cantidad">
                                        </div>    
                                    </div>
                                </form>
                                <div class="form-group col-sm-12 table-responsive">
                                    <table class="table " id="example" style="width:100%; font-size:10px">
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
                            </div>
                        </div>
                        <form class="form" id="form_factura" role="form" onsubmit="event.preventDefault(); return guardar_factura();" autocomplete="off">
                            <div class="col-sm-12">
                                <label style="font-size:14px;" for="">Tipo de venta</label>
                                <hr style="margin-top:-1px;">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input id="debit" value="efectivo" onclick="datos_clientes('0')" name="tipo_venta" type="radio" class="custom-control-input" checked="" required="">
                                    <label class="custom-control-label" for="debit">Efectivo</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input id="bank" value="banco" onclick="datos_clientes('0')" name="tipo_venta" type="radio" class="custom-control-input" required="">
                                    <label class="custom-control-label" for="bank">Banco</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input id="credit" value="credito" onclick="datos_clientes('1')" name="tipo_venta" type="radio" class="custom-control-input" required="">
                                    <label class="custom-control-label" for="credit">Crédito</label>
                                </div>
                            </div>
                            <div id="content_cliente">
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary float-right">Guardar</button>
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
                                    <h6 class="my-0" style="font-size:12px">Existencia actual del producto seleccionado</h6>
                                    <small class="text-muted">$ 20.000 C/U</small>
                                </div>
                                <span class="text-muted">12</span>
                            </li>
                            <li style="background-color: #f7f7f7" class="list-group-item d-flex justify-content-between lh-condensed">
                                <form class="form" id="form_guardar" role="form" methods="POST" onsubmit="event.preventDefault(); return guardar_venta();" autocomplete="off">
                                    <div class="container">
                                        <div class="form-group">
                                            <label style="font-size:12px; margin-bottom:-30px" for="">Subtotal</label>
                                            <input disabled ref="nit" class="form-control form-control-sm" name="subtotal" type="text">
                                        </div>
                                        <div style="margin-top:-15px" class="form-group">
                                            <label style="font-size:12px; margin-bottom:-30px" for="">IVA</label>
                                            <input disabled class="form-control form-control-sm" name="iva" type="text">
                                        </div>
                                        <div style="margin-top:-15px" class="form-group">
                                            <label style="font-size:12px; margin-bottom:-30px" for="">Total</label>
                                            <input disabled class="form-control form-control-sm" name="total" type="text">
                                        </div>
                                    </div>
                                </form>
                            </li>
                            <li style="background-color: #f7f7f7" class="list-group-item d-flex justify-content-between lh-condensed">
                                <div class="container">
                                    <div class="form-group">
                                        <label style="font-size:12px; margin-bottom:-30px" for="">Efectivo</label>
                                        <input disabled class="form-control form-control-sm" name="efectivo" type="text">
                                    </div>
                                    <div style="margin-top:-15px" class="form-group">
                                        <label style="font-size:12px; margin-bottom:-30px" for="">Cambio</label>
                                        <input disabled class="form-control form-control-sm" name="cambio" type="text">
                                    </div>
                                </div>
                            </li>
                        </ul>
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
    <script src="/inventario/assets/js/select2.full.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
$(function() {
        Showventa()
        buscar_productos()
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

  function buscar_productos(param) {
    let values = { 
            cod: "2",
            state: '1'
        }; 
        $.ajax({
        type : 'POST',
        data: values,
        url: '/inventario/php/producto/seleccionar.php',
        beforeSend: function() {
            //$(".loader").css("display", "inline-block")
        },
        success: function(respuesta) {
            //$(".loader").css("display", "none")
            let obj = JSON.parse(respuesta)
            let fila = ''
            $.each(obj.resultado, function( index, val ) {
                fila += '<option value="'+val.id+'">'+val.id+' - '+val.nombre+'</option>';
            });
            $(".id_producto").html('<option value="">Seleccione el producto</option>'+fila)
            let placeholder = "Seleccione el producto";

            $(".id_producto").select2( {
                placeholder: placeholder
            });
        },
        error: function() {
        //$(".loader").css("display", "")
        console.log("No se ha podido obtener la información");
        }
    });
    
  }

  function buscar_clientes(param) {
    let values = { 
            cod: "2",
            state: '1'
        }; 
        $.ajax({
        type : 'POST',
        data: values,
        url: '/inventario/php/cliente/seleccionar.php',
        beforeSend: function() {
            //$(".loader").css("display", "inline-block")
        },
        success: function(respuesta) {
            //$(".loader").css("display", "none")
            let obj = JSON.parse(respuesta)
            let fila = ''
            $.each(obj.resultado, function( index, val ) {
                fila += '<option value="'+val.identificacion+'">'+val.identificacion+' - '+val.nombre+'</option>';
            });
            $(".id_cliente").html('<option value="">Seleccione el cliente</option>'+fila)
            let placeholder = "Seleccione el cliente";

            $(".id_cliente").select2( {
                placeholder: placeholder
            });
        },
        error: function() {
        //$(".loader").css("display", "")
        console.log("No se ha podido obtener la información");
        }
    });
    
  }


  function datos_clientes(id) {
      if (id == "1") {
            $("#content_cliente").html('<div id="content_cliente" class="form-group col-sm-12 py-3">'+
                                            '<div class="d-block">'+
                                                '<label style="font-size:14px;" for="">Datos del cliente</label>'+
                                                '<hr style="margin-top:-1px;">'+
                                                '<div class="row">'+
                                                    '<div class="col-sm-3">'+
                                                        '<input class="form-control form-control-sm" type="text" placeholder="Número de cuotas" required name="num_cuota">'+
                                                    '</div>'+
                                                    '<div class="col-sm-6">'+
                                                        '<select required class="form-control form-control-sm select2-single id_cliente" name="id_cliente">'+
                                                            '<option value="">Seleccione el id_cliente</option>'+
                                                        '</select>'+
                                                    '</div>'+
                                                    '<div class="col-sm-3">'+
                                                        '<a style="font-size:14px;" href="/inventario/view/formularios/cliente.php" class="">Crear nuevo cliente</a>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>')
            buscar_clientes()                                        
      }else{
        $("#content_cliente").html('')
      }
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
