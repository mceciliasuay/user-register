<?php
include '../db/conexion_db.php';
$sql = file_get_contents('../sql/create_users.sql');
$resultado = $conexion->query($sql);
if ($resultado){
    echo 'aplicacion instalada con exito';
}