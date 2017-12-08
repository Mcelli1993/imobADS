
<?php
include("PHP/conexion.php");
?>



<!DOCTYPE html>
<html>

<head>
  <!-- Site made with Mobirise Website Builder v4.3.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.3.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-casa-340x309.png" type="image/x-icon">
  <meta name="description" content="Página de cadastro de Imóvei">
  <title>cadastrar</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css"> </head>

<body>
  <section class="menu cid-qxXgS3JcCF" once="menu" id="menu1-x" data-rv-view="80">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <div class="hamburger"> <span></span> <span></span> <span></span> <span></span> </div>
      </button>
      <div class="menu-logo">
        <div class="navbar-brand"> <span class="navbar-logo">
                    
                         <img src="assets/images/logo-casa-340x309.png" alt="Mobirise" title="" media-simple="true" style="height: 3.8rem;">
                    
                </span> <span class="navbar-caption-wrap"><a class="navbar-caption text-success display-5" href="index.php#header12-m">imobADS</a></span> </div>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
          <li class="nav-item">
            <a class="nav-link link text-white display-4" href="index.php"> <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span> Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link text-white display-4" href="https://mobirise.com"> <span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span> Sobre</a>
          </li>
        </ul>
        <div class="navbar-buttons mbr-section-btn">
          <a class="btn btn-sm btn-primary display-4" href="login.php"><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>LOGIN</a>
        </div>
      </div>
    </nav>
  </section>
  <section class="engine">
    <a href="https://mobirise.co/e">website design software</a>
  </section>
  <section class="mbr-section form3 cid-qzrXT5QJJM" id="form3-13" data-rv-view="82">
    <div class="container">
      <div class="row justify-content-center">
        <div class="title col-12 col-lg-8">
          <h2 class="align-center pb-2 mbr-fonts-style display-2">Formulario de cadastro de Imóveis</h2>
        </div>
      </div>
      <div class="row py-2 justify-content-center">
        <div class="col-12 col-lg-6  col-md-8 " data-form-type="formoid">
          <form class="mbr-form" action="page2.php" method="POST">
            <div class="mbr-subscribe input-group"> <span class="input-group-btn"></span> </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <section class="mbr-section form3 cid-qzrXToKuGz" id="form3-14" data-rv-view="85">
    <div class="container">
      <div class="row justify-content-center">
        <div class="title col-12 col-lg-8"> </div>
      </div>
      <div class="row py-2 justify-content-center">
        <div class="col-12 col-lg-6  col-md-8 " data-form-type="formoid">
          <div class="card">
            <div class="card-body p-5">
              <form action="page2.php" method="POST">
                <div class="form-group"> <label>Endereço</label>
                  <input class="form-control" placeholder="Endereço" name="enderecoImovel"> </div>
                <div class="form-group"> <label>Descrição</label>
                  <input class="form-control" placeholder="Descrição" name="descricaoImovel"> </div>
                <div class="form-group"> <label>Proprietario</label> </div>
                <input class="form-control p-0 my-3" placeholder="Proprietário"  name="proprietarioImovel">
                <div class="form-group"> <label>CEP</label> </div>
                <input class="form-control" placeholder="CEP" name="cepImovel">
                <div class="form-group"> <label>Preço</label> </div>
                <input class="form-control my-3" placeholder="Preço"  name="precoImovel">
                <button type="submit" class="btn mt-2 btn-outline-dark text-center text-uppercase mx-5 px-5" name="inserir">CADASTRAR</button>
              </form>
              <?php
		if(isset($_POST['inserir'])){
			$enderecoImovel = $_POST['enderecoImovel'];
			$descricaoImovel = $_POST['descricaoImovel'];
			$proprietarioImovel = $_POST['proprietarioImovel'];
			$cepImovel = $_POST['cepImovel'];
			$precoImovel = $_POST['precoImovel'];
			
			$inserir = "INSERT into imoveis (endereco,descricao,proprietario,cep,preco) VALUES ('$enderecoImovel','$descricaoImovel','$proprietarioImovel','$cepImovel','$precoImovel')";
			$executar = mysqli_query($conexao, $inserir);
			
			if ($executar){
        echo "<h3>Dados inseridos com sucesso!</h3>"; 
      } 
      else { echo "<h3>Não foi possivel  inserir</h3>";}
    } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="mbr-section form3 cid-qzrXUURXh8" id="form3-15" data-rv-view="88">
    <div class="container">
      <div class="row justify-content-center">
        <div class="title col-12 col-lg-8"> </div>
      </div>
    </div>
  </section>
  <section class="mbr-section form3 cid-qzrXVcG0Qo" id="form3-16" data-rv-view="91">
    <div class="container">
      <div class="row justify-content-center">
        <div class="title col-12 col-lg-8"> </div>
      </div>
    </div>
  </section>
</body>

</html>