<!DOCTYPE html>
<?php include 'conexion.php';
$id = $_GET['id'];
$sql = "select * from imoveis where id = '$id'";
$rows = $db->query($sql);
$row = $rows->fetch_assoc();
if(isset($_POST['send'])){
	$name = $_POST['task'];
	$executar = mysqli_query("UPDATE imoveis SET proprietario = '$name' WHERE id = '$id';");
        
        if ($executar){
		echo "<script>alert('Dados atualizados')</script>";
		echo "<script>window.open('formulario.php','_self')</script>";
	}
	header('location:buscaImoveis.php');
}
?>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>CRUD</title>
</head>
<body>
<div class="container">
	<div class="row" style="margin-top: 70px;">
	<center><h1>CRUD</h1></center>
	<div class="col-md-10 col-md-offset-1">	

	<hr><br>
        <form method="post" action="buscaImoveis.php">
          <label>Proprietario:</label>
          <input type="text" required name="task" value="<?php echo $row['proprietario'];?>" class="form-control">
          
          <input type="submit" name="send" value="atualizar" class="btn btn-success">
          <a href="buscaImoveis.php" class="btn btn-warning">Back</a>          
          </form>
	</div>
	</div>
</div>
</body>
</html>