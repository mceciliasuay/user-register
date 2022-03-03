<?php
include '../db/conexion.db.php';
$sql = file_get_contents('../sql/create_table_users.sql');
$resultado = $conexion->query($sql);
if ($resultado){
    echo 'aplicacion instalada con exito';
}