
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
<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
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
    <div class="mx-auto col-sm-12">
                <!-- form user info -->
                <div id="ver_editar" style="display:none" class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Editar producto</h5>
                    </div>
                    <div class="card-body">
                        <form class="form" role="form" id="form_actualizar" role="form" onsubmit="event.preventDefault(); return actualizar_productos();" autocomplete="off">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input maxlength="255" ref="nombre" class="form-control form-control-sm" name="nombre" type="text" placeholder="Nombre">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input maxlength="20" class="form-control form-control-sm" name="vl_costo" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" placeholder="Valor de costo">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <input class="form-control form-control-sm" name="iva" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" v-int type="text" placeholder="IVA">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <input class="form-control form-control-sm disabled" name="" disabled type="text" placeholder="Valor IVA">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-control form-control-sm" name="vl_venta" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" placeholder="Valor de venta">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select ref="select" class="form-control form-control-sm" name="id_categoria">
                                                <option value="">Seleccione el Proveedor</option>
                                                <option value="1">{{item.nombre}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select ref="select" class="form-control form-control-sm" name="id_proveedor">
                                                <option value="">Seleccione el Proveedor</option>
                                                <option value="1">{{item.nombre}}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success" type="submit">Guardar</button>
                                    <button class="btn btn-primary" type="button" onclick="ver_guardar()">Nuevo</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="ver_guardar" class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Crear producto</h5>
                    </div>
                    <div class="card-body">
                    <form class="form" role="form" id="form_guardar" role="form" onsubmit="event.preventDefault(); return guardar_productos();" autocomplete="off">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input maxlength="255" ref="nombre" class="form-control form-control-sm" required name="nombre" type="text" placeholder="Nombre">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input maxlength="20" class="form-control form-control-sm" required name="vl_costo" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" placeholder="Valor de costo">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <input class="form-control form-control-sm" required name="iva" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" v-int type="text" placeholder="IVA">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <input class="form-control form-control-sm disabled" name="" disabled type="text" placeholder="Valor IVA">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-control form-control-sm" required name="vl_venta" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" placeholder="Valor de venta">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select ref="select" class="form-control form-control-sm" name="id_categoria">
                                                <option value="">Seleccione el Proveedor</option>
                                                <option value="1">{{item.nombre}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select ref="select" class="form-control form-control-sm" name="id_proveedor">
                                                <option value="">Seleccione el Proveedor</option>
                                                <option value="1">{{item.nombre}}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Guardar</button>
                                    <button class="btn btn-danger" type="button" onclick="ver_guardar()">Limpiar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /form user info -->
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">productos</h5>
                    </div>
                    <div class="card-body table-responsive-sm">
                        <table class="table" id="example" style="width:100%">
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
                                <!-- <tr>
                                    <td>{{item.nit}}</td>
                                    <td>{{item.nombre}}</td>
                                    <td>{{item.direccion}}</td>
                                    <td>{{item.telefono}}</td>
                                    <td>{{item.email}}</td>
                                    <td class="editar"><button class="btn btn-warning btn-sm" onclick="ver_editar()" >Editar</button></td>
                                    <td ><button class="btn btn-danger btn-sm">x</button></td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</main>
<script src="../../assets/js/jquery.slim.min.js" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/jquery.slim.min.js"><\/script>')</script>
    <script src="../../assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/inventario/assets/js/bootstrap-notify.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
$(function() {
        Showproducto()
        console.log( "index!" );
  });
  function guardar_productos() {
      $.ajax({
        type : 'POST',
        data: $("#form_guardar").serialize(),
        url: '/inventario/php/producto/guardar.php',
        success: function(respuesta) {
          let obj = JSON.parse(respuesta)
          if (obj.success) {
            notificacion("El producto ha sido guardado exitosamente.", "success")
            limpiar_form()
            Showproducto()
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

    function actualizar_productos() {
      $.ajax({
        type : 'POST',
        data: $("#form_actualizar").serialize(),
        url: '/inventario/php/producto/actualizar.php',
        success: function(respuesta) {
          let obj = JSON.parse(respuesta)
          if (obj.success) {
            notificacion("El producto ha sido actualizado exitosamente.", "success")
            //limpiar_form()
            Showproducto()
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

    function Showproducto() {
        let values = { 
            cod: "tipo"
        }; 
        $.ajax({
        type : 'POST',
        data: values,
        url: '/inventario/php/producto/sel_producto.php',
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
