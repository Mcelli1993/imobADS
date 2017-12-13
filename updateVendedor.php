
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
include 'buscaVendedor.php';


if(isset($_GET['editar'])){
    $id = $_GET['editar'];
    $consultar = "select * from funcionarios where id = '$id'";
    $executar = mysqli_query($db, $consultar);
    
    $row = mysqli_fetch_array($executar,MYSQLI_ASSOC);
    
    $id = $row['id'];
    $nome = $row['nome'];
    $rg = $row['rg'];
    $cpf = $row['cpf']; 
    $endereco = $row['endereco'];
    $cep =$row['cep'];
    $cargo =$row['cargo'];
}


if(isset($_POST["inserir"])){
    
    $atualizaNome = $_POST['nomeUser'];
    $atualizaRg = $_POST['rgUser'];
    $atualizaCpf = $_POST['cpfUser'];
    $atualizaEndereco = $_POST['enderecoUser'];
    $atualizaCep = $_POST['cepUser'];
    $atualizaCargo = $_POST['tipoUser'];
    
    $sql2 = "UPDATE funcionarios SET nome='$atualizaNome', rg='$atualizaRg', cpf='$atualizaCpf', endereco='$atualizaEndereco' ,cep='$atualizaCep', cargo='$atualizaCargo' WHERE id = '$id'";
    
    $executar = mysqli_query($db, $sql2);
    if ($executar){
    echo "<script>alert('Dados atualizados')</script>";
    echo "<script>window.open('buscaVendedor.php','_self')</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<title>CRUD</title>
</head>
<body>
<div class="container">
	<div class="row" style="margin-top: 70px;">
	<center><h1>Alteracao de Funcionarios</h1></center>
	<div class="col-md-10 col-md-offset-1">	

	<hr><br>
        <form method="POST" action="">
          <label>Nome:</label>
          <input type="text" name="nomeUser" value="<?php echo $nome;?>" class="form-control">
          <label>RG:</label>
          <input type="text" name="rgUser" value="<?php echo $rg;?>" class="form-control">
          <label>CPF:</label>
          <input type="text" name="cpfUser" value="<?php echo $cpf;?>" class="form-control">
          <label>Endereco:</label>
          <input type="text" name="enderecoUser" value="<?php echo $endereco;?>" class="form-control">
          <label>CEP:</label>
          <input type="text" name="cepUser" value="<?php echo $cep;?>" class="form-control">
          <label>Cargo:</label>
          <input type="text" name="tipoUser" value="<?php echo $cargo;?>" class="form-control">
          
          <!-- <input type="submit" name="atualizar" value="atualizar" class="btn btn-success"> -->
          <button type="submit" class="btn mt-2 btn-outline-dark text-center text-uppercase mx-5 px-5" name="inserir">Atualizar</button>
          <a href="buscaVendedor.php" class="btn btn-warning">Back</a>          
          </form>
          <?php 
          
	
	
	?>
	</div>
	</div>
</div>
</body>
</html>