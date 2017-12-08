<?php
include ("PHP/conexion.php");
$id = $_GET['id'];
$sql = "delete from imoveis where id = '$id'";
$val = $db->query($sql);
if($val){
	header('location:buscaImoveis.php');
}
?>