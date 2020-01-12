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
    $sql = "SELECT CASE WHEN (SELECT SUM(valor_factu) FROM facturas WHERE state = 1 AND tipo_venta = 'efectivo') IS NULL THEN 0 ELSE (SELECT SUM(valor_factu) FROM facturas WHERE state = 1 AND tipo_venta = 'efectivo') END  as vl_efectivo,
            CASE WHEN (SELECT SUM(valor_factu) FROM facturas WHERE state = 1 AND tipo_venta = 'tarjeta') IS NULL THEN 0 ELSE (SELECT SUM(valor_factu) FROM facturas WHERE state = 1 AND tipo_venta = 'tarjeta') END as vl_tarjeta,
            (SELECT SUM(vl_abono) FROM abonos WHERE state = 1 ) as vl_credito
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
}elseif ($cod == '2') {
    $sql = "SELECT * FROM clientes WHERE state = $parametro2 order by id desc;";
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
}
//termina cod 2
$conn->close();
?>