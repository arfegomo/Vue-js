<?php

include("config.php");
include("base.class.php");
include("moviles.class.php");

//recepción de parámetros con axios (cliente http ajax)
$_POST = json_decode(file_get_contents("php://input"), true);

//recepción de los datos enviados mediante post desde main.js
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$marca = (isset($_POST['marca'])) ? $_POST['marca'] : '';
$modelo = (isset($_POST['modelo'])) ? $_POST['modelo'] : '';
$stock = (isset($_POST['stock'])) ? $_POST['stock'] : '';

$Moviles = new moviles();

switch($opcion){
    case 1:
        $Moviles->set_marca($marca);
        $Moviles->set_modelo($modelo);
        $Moviles->set_stock($stock);
        $Moviles->store();
        break;
    case 2:
        $Moviles->set_id($id);
        $Moviles->set_marca($marca);
        $Moviles->set_modelo($modelo);
        $Moviles->set_stock($stock);
        $Moviles->update();
        $data = $Moviles->listado_moviles();
    case 3:
        $Moviles->set_id($id);
        $Moviles->delete();
        $data = $Moviles->listado_moviles();
    case 4:
        $data = $Moviles->listado_moviles();
        break;

}

print json_encode($data, JSON_UNESCAPED_UNICODE);