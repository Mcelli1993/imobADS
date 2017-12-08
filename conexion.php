<?php
$db = new Mysqli;
$db->connect('localhost','root','','imobads');
if(!$db){
	echo "success";
}
?>