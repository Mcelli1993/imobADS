
<?php

session_cache_expire(60);

session_start();

//Caso o usuário não esteja autenticado, limpa os dados e redireciona
if ( !isset($_SESSION['usuario']) and !isset($_SESSION['senha']) ) {
	//Destrói
	session_destroy();

	//Limpa
	unset ($_SESSION['usuario']);
	unset ($_SESSION['senha']);
	
	//Redireciona para a página de autenticação
	header('location:login.php');
}


include ("PHP/conexion.php");
include 'buscaAlugueis.php';


if(isset($_GET['editar'])){
    $id = $_GET['editar'];
    $consultar = "select * from alugueis where id = '$id'";
    $executar = mysqli_query($db, $consultar);
    
    $row = mysqli_fetch_array($executar,MYSQLI_ASSOC);
    
    $id = $row['id'];
    $endereco = $row['endereco'];
    $cliente = $row['cliente_id'];
    $vendedor = $row['vendedor']; 
    $periodo = $row['periodo'];
    $valor =$row['valor'];
  
}


if(isset($_POST["inserir"])){
    
    $atualizaEndereco = $_POST['enderecoAluguel'];
    $atualizaCliente = $_POST['locatarioAluguel'];
    $atualizaVendedor = $_POST['vendedorAluguel'];
    $atualizaPeriodo = $_POST['periodoAluguel'];
    $atualizaValor = $_POST['valorAluguel'];
    
    $sql2 = "UPDATE alugueis SET endereco='$atualizaEndereco', cliente_id='$atualizaCliente', vendedor='$atualizaVendedor', periodo='$atualizaPeriodo' ,valor='$atualizaValor' WHERE id = '$id'";
    
    $executar = mysqli_query($db, $sql2);
    if ($executar){
    echo "<script>alert('Dados atualizados')</script>";
    echo "<script>window.open('buscaAlugueis.php','_self')</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<title>Altera��o Alugu�is</title>
</head>
<body>
<div class="container">
	<div class="row" style="margin-top: 70px;">
	<center><h1>Altera��o Alugu�is</h1></center>
	<div class="col-md-10 col-md-offset-1">	

	<hr><br>
        <form method="POST" action="">
          <label>Endereco:</label>
          <input type="text" name="enderecoAluguel" value="<?php echo $endereco;?>" class="form-control">
          <label>Cliente:</label>
          <input type="text" name="locatarioAluguel" value="<?php echo $cliente;?>" class="form-control">
          <label>Vendedor:</label>
          <input type="text" name="vendedorAluguel" value="<?php echo $vendedor;?>" class="form-control">
          <label>Periodo:</label>
          <input type="text" name="periodoAluguel" value="<?php echo $periodo;?>" class="form-control">
          <label>Valor:</label>
          <input type="text" name="valorAluguel" value="<?php echo $valor;?>" class="form-control">
          
          <!-- <input type="submit" name="atualizar" value="atualizar" class="btn btn-success"> -->
          <button type="submit" class="btn mt-2 btn-outline-dark text-center text-uppercase mx-5 px-5" name="inserir">Atualizar</button>
          <a href="buscaAlugueis.php" class="btn btn-warning">Back</a>          
          </form>
          <?php 
          
	
	
	?>
	</div>
	</div>
</div>
</body>
</html>