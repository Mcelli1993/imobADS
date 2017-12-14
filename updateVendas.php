
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
include 'buscaVendas.php';


if(isset($_GET['editar'])){
    $id = $_GET['editar'];
    $consultar = "select * from vendas where id = '$id'";
    $executar = mysqli_query($db, $consultar);
    
    $row = mysqli_fetch_array($executar,MYSQLI_ASSOC);
    
    $id = $row['id'];
    $endereco = $row['endereco'];
    $proprietario = $row['proprietario'];
    $vendedor = $row['funcionario_id']; 
    $comissao = $row['comissao'];
    $valor =$row['valor'];
  
}


if(isset($_POST["inserir"])){
    
    $atualizaEndereco = $_POST['enderecoVenda'];
    $atualizaProprietario = $_POST['proprietarioVenda'];
    $atualizaVendedor = $_POST['funcionarioVenda'];
    $atualizaComissao = $_POST['comissaoVenda'];
    $atualizaValor = $_POST['precoVenda'];
    
    $sql2 = "UPDATE vendas SET endereco='$atualizaEndereco', proprietario='$atualizaProprietario', funcionario_id='$atualizaVendedor', comissao='$atualizaComissao' ,valor='$atualizaValor' WHERE id = '$id'";
    
    $executar = mysqli_query($db, $sql2);
    if ($executar){
    echo "<script>alert('Dados atualizados')</script>";
    echo "<script>window.open('buscaVendas.php','_self')</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<title>Alteração Vendas</title>
</head>
<body>
<div class="container">
	<div class="row" style="margin-top: 70px;">
	<center><h1>Alteração Vendas</h1></center>
	<div class="col-md-10 col-md-offset-1">	

	<hr><br>
        <form method="POST" action="">
          <label>Endereco:</label>
          <input type="text" name="enderecoVenda" value="<?php echo $endereco;?>" class="form-control">
          <label>Proprietário:</label>
          <input type="text" name="proprietarioVenda" value="<?php echo $proprietario;?>" class="form-control">
          <label>Vendedor:</label>
          <input type="text" name="funcionarioVenda" value="<?php echo $vendedor;?>" class="form-control">
          <label>Comissao:</label>
          <input type="text" name="comissaoVenda" value="<?php echo $comissao;?>" class="form-control">
          <label>Valor:</label>
          <input type="text" name="precoVenda" value="<?php echo $valor;?>" class="form-control">
          
          <!-- <input type="submit" name="atualizar" value="atualizar" class="btn btn-success"> -->
          <button type="submit" class="btn mt-2 btn-outline-dark text-center text-uppercase mx-5 px-5" name="inserir">Atualizar</button>
          <a href="buscaVendas.php" class="btn btn-warning">Back</a>          
          </form>
          <?php 
          
	
	
	?>
	</div>
	</div>
</div>
</body>
</html>