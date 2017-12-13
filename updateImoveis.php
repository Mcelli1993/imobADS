
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
include 'buscaImoveis.php';


if(isset($_GET['editar'])){
    $id = $_GET['editar'];
    $consultar = "select * from imoveis where id = '$id'";
    $executar = mysqli_query($db, $consultar);
    
    $row = mysqli_fetch_array($executar,MYSQLI_ASSOC);
    
    $id = $row['id'];
    $endereco = $row['endereco'];
    $descricao = $row['descricao'];
    $proprietario = $row['proprietario']; 
    $cep = $row['cep'];
    $preco =$row['preco'];
}


if(isset($_POST["inserir"])){
    
    $atualizaEndereco = $_POST['enderecoImovel'];
    $atualizaDescricao = $_POST['descricaoImovel'];
    $atualizaProprietario = $_POST['proprietarioImovel'];
    $atualizaCep = $_POST['cepImovel'];
    $atualizaPreco = $_POST['precoImovel'];
    
    $sql2 = "UPDATE imoveis SET endereco='$atualizaEndereco', descricao='$atualizaDescricao', proprietario='$atualizaProprietario', cep='$atualizaCep', preco='$atualizaPreco' WHERE id = '$id'";
    
    $executar = mysqli_query($db, $sql2);
    if ($executar){
    echo "<script>alert('Dados atualizados')</script>";
    echo "<script>window.open('buscaImoveis.php','_self')</script>";
    }
    //header('location:buscaImoveis.php');
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
	<center><h1>CRUD</h1></center>
	<div class="col-md-10 col-md-offset-1">	

	<hr><br>
        <form method="POST" action="">
          <label>Endere�o:</label>
          <input type="text" name="enderecoImovel" value="<?php echo $endereco;?>" class="form-control">
          <label>Descri��o:</label>
          <input type="text" name="descricaoImovel" value="<?php echo $descricao;?>" class="form-control">
          <label>Proprietario:</label>
          <input type="text" name="proprietarioImovel" value="<?php echo $proprietario;?>" class="form-control">
          <label>CEP:</label>
          <input type="text" name="cepImovel" value="<?php echo $cep;?>" class="form-control">
          <label>Pre�o:</label>
          <input type="text" name="precoImovel" value="<?php echo $preco;?>" class="form-control">
          
          <!-- <input type="submit" name="atualizar" value="atualizar" class="btn btn-success"> -->
          <button type="submit" class="btn mt-2 btn-outline-dark text-center text-uppercase mx-5 px-5" name="inserir">Atualizar</button>
          <a href="buscaImoveis.php" class="btn btn-warning">Back</a>          
          </form>
          <?php 
          
	
	
	?>
	</div>
	</div>
</div>
</body>
</html>