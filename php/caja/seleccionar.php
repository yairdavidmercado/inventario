<?php
session_start(); 
$cod = $_POST["cod"];
$parametro1 = $_POST["parametro1"];
$parametro2 = $_POST["parametro2"];
$response = array();
include '../conexion.php';
// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($cod == '1') {
    $sql = "SELECT 
            (IFNULL( (SELECT SUM(valor_factu) FROM facturas WHERE state = 1 AND tipo_venta = 'efectivo'), 0))
            -
            (IFNULL( (SELECT SUM(vl_egreso) FROM egresos WHERE state = 1 AND ubicacion = 'efectivo'), 0)) 
            as vl_efectivo,
            (IFNULL( (SELECT SUM(valor_factu) FROM facturas WHERE state = 1 AND tipo_venta = 'tarjeta'), 0))
            -
            (IFNULL( (SELECT SUM(vl_egreso) FROM egresos WHERE state = 1 AND ubicacion = 'tarjeta'), 0)) 
            as vl_tarjeta,
            (IFNULL((SELECT SUM(vl_abono) FROM abonos INNER JOIN facturas ON facturas.id = abonos.id_factura WHERE facturas.state = 1 ), 0))
            -
            (IFNULL( (SELECT SUM(vl_egreso) FROM egresos WHERE state = 1 AND ubicacion = 'credito'), 0)) 
            as vl_credito
            FROM facturas WHERE state = 1 LIMIT 1;";
    $result = $conn->query($sql);
    // output data of each row
    $response["resultado"] = array();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $datos = array();

                                // push single product into final response array
                                array_push($response["resultado"], $row);

                                
        }
        $response["success"] = true;
        echo json_encode($response);
    } else {
        $response["success"] = false;
        $response["message"] = "No se encontraron registros";
        // echo no users JSON
        echo json_encode($response);
    }
    //termina cod 1
}
//termina cod 2
$conn->close();
?>