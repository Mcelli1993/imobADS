<?php
include ("PHP/conexion.php");
$id = $_GET['excluir'];
$sql = "delete from vendas where id = '$id'";
$val = $db->query($sql);
if($val){
    header('location:buscaVendas.php');
}
?>