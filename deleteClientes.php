<?php
include ("PHP/conexion.php");
$id = $_GET['excluir'];
$sql = "delete from clientes where id = '$id'";
$val = $db->query($sql);
if($val){
    header('location:buscaClientes.php');
}
?>