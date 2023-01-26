<?php
//*** Establecemos la localizaci�n a espa�ol
setlocale(LC_ALL, 'spanish');

//***  Configuraci�n de la base de datos utilizada por defecto
$CONFIG["BASE_DE_DATOS"]=0;

$indice=0;
$CONFIG["base_comparta"] 			= $indice;
$CONFIG["NOMBRE_DB"][$indice]		="crud-vuejs";
$CONFIG["USUARIO_DB"][$indice]		="root";
$CONFIG["CLAVE_DB"][$indice]		="";
$CONFIG["PUERTO_DB"][$indice]		="3306";
$CONFIG["DRIVER_DB"][$indice]		="mysqli";
$CONFIG["IP_MAQUINA"][$indice]		="localhost";

?>
