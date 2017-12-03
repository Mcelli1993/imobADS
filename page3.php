<?php 
include 'PHP/conexion.php';
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
  <meta name="description" content="Web Builder Description">
  <title>usuarios</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css"> </head>

<body>
  <section class="menu cid-qxXgS3JcCF" once="menu" id="menu1-18" data-rv-view="169">
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
          <a class="btn btn-sm btn-primary display-4" href="login.php" id="nome"><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>LOGIN</a>
        </div>
      </div>
    </nav>
  </section>
  <section class="engine">
    <a href="https://mobirise.co/o">bootstrap buttons</a>
  </section>
  <section class="mbr-section form3 cid-qzsbKgvf5R" id="form3-19" data-rv-view="171">
    <div class="container">
      <div class="row justify-content-center">
        <div class="title col-12 col-lg-8"> </div>
      </div>
      <div class="row py-2 justify-content-center">
        <div class="col-12 col-lg-6  col-md-8 " data-form-type="formoid">
          <div data-form-alert="" hidden=""> Thanks for filling out the form! </div>
          <form class="mbr-form" action="https://mobirise.com/" method="post" data-form-title="Mobirise Form">
            <input type="hidden" data-form-email="true" value="ck6nCiWOT/EVlCIKxYNx/l7Y5C2MNZIWVg0SUQoGLftSHmgBrja4iNLoYyldBNtgvO8kou32WIY0bUyZli0+1TbuAG3f4jIgn7bAKybYnYhbmO7u/f0eYFk8owh31vkm">
            <div class="mbr-subscribe input-group">
              <input class="form-control" type="email" name="email" placeholder="Email" data-form-field="Email" required="" id="email-form3-19"> <span class="input-group-btn"><button href="" type="submit" class="btn btn-primary display-4">SUBSCRIBE</button></span> </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <section class="mbr-section form3 cid-qzsbNCZ6k9" id="form3-1a" data-rv-view="174">
    <div class="container">
      <div class="row justify-content-center">
        <div class="title col-12 col-lg-8">
          <h3 class="mbr-section-subtitle align-center pb-5 mbr-light mbr-fonts-style display-2">&nbsp; Formulário de Cadastro
            <br>de &nbsp;Usuários
            <br> </h3>
          <form class="" method="post" action="page3.php">
            <div class="form-group"> <label>Nome</label>
              <input type="text" name="nomeUser" class="form-control" placeholder="Nome"> </div>
            <div class="form-group"> <label>RG</label>
              <input type="text" name="rgUser" class="form-control" placeholder="RG"> </div>
            <div class="form-group"> <label>CPF</label>
              <input type="text" name="cpfUser" class="form-control" placeholder="CPF"> </div>
            <div class="form-group"> <label>Endereço</label>
              <input type="text" name="enderecoUser" class="form-control" placeholder="Endereço"> </div>
            <div class="form-group"> <label>CEP</label>
              <input type="text" name="cepUser" class="form-control" placeholder="CEP"> <label>Prioridade</label>
              <div class="mbr-subscribe input-group input-group-lg bg-light text-info my-3">
                
                <div class="form-group"> <select name="tipoUser" class="form-control" >
    				<option value="vendedor">Vendedor</option>
    				<option value="gerente">Gerente</option>
            </div>
            <button type="submit" class="btn btn-primary text-center text-uppercase px-5 mx-5" name="inserir">Cadastrar</button>
          </form>
          
          <?php
		if(isset($_POST['inserir'])){
			$nomeUsuario = $_POST['nomeUser'];
			$rgUsuario = $_POST['rgUser'];
			$cpfUsuario = $_POST['cpfUser'];
			$enderecoUsuario = $_POST['enderecoUser'];
			$cepUsuario = $_POST['cepUser'];
			$tipoUsuario = $_POST['tipoUser'];
			
			$inserir = "INSERT into funcionarios (nome,rg,cpf,endereco,cep,cargo) VALUES ('$nomeUsuario','$rgUsuario','$cpfUsuario','$enderecoUsuario','$cepUsuario','$tipoUsuario')";
			$executar = mysqli_query($conexao, $inserir);
			
			if ($executar){
        echo "<h3>Dados inseridos com sucesso!</h3>"; 
      } 
      else { echo "<h3>Não foi possivel  inserir</h3>";}
    } ?>
          
        </div>
      </div>
    </div>
  </section>
  <section class="mbr-section form3 cid-qzsdDmcuEM" id="form3-1d" data-rv-view="177">
    <div class="container">
      <div class="row justify-content-center">
        <div class="title col-12 col-lg-8"> </div>
      </div>
    </div>
  </section>
  <section class="mbr-section form3 cid-qzsdDH5jWA" id="form3-1e" data-rv-view="180">
    <div class="container">
      <div class="row justify-content-center">
        <div class="title col-12 col-lg-8"> </div>
      </div>
    </div>
  </section>
  <section class="mbr-section form3 cid-qzsdDUmCg1" id="form3-1f" data-rv-view="183">
    <div class="container">
      <div class="row justify-content-center">
        <div class="title col-12 col-lg-8"> </div>
      </div>
    </div>
  </section>
  <section class="mbr-section form3 cid-qzsdE6eNmL" id="form3-1g" data-rv-view="186">
    <div class="container">
      <div class="row justify-content-center">
        <div class="title col-12 col-lg-8"> </div>
      </div>
    </div>
  </section>
  <section class="mbr-section form3 cid-qzsdEiQLCp" id="form3-1h" data-rv-view="189">
    <div class="container">
      <div class="row justify-content-center">
        <div class="title col-12 col-lg-8"> </div>
      </div>
      <div class="row py-2 justify-content-center">
        <div class="col-12 col-lg-6  col-md-8 " data-form-type="formoid">
          <div data-form-alert="" hidden=""> Thanks for filling out the form! </div>
          <form class="mbr-form" action="https://mobirise.com/" method="post" data-form-title="Mobirise Form">
            <input type="hidden" data-form-email="true" value="y14f7J920TKaX8PhSYTuEftF8+hJwZIUGTjb65rQRu0/WeTQDclOPTM9xN2uSFno1ElhxjqJKx0jS/xGqNT7gGInDqvMemDsztAGWUzZrtbjby8J+2UFX6jn89TXDOhm">
            <div class="mbr-subscribe input-group"> <span class="input-group-btn"></span> </div>
          </form>
        </div>
      </div>
      <div class="row py-2 justify-content-center">
        <div class="col-12 col-lg-6  col-md-8 " data-form-type="formoid">
          <div data-form-alert="" hidden=""> Thanks for filling out the form! </div>
        </div>
      </div>
    </div>
  </section>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <form class="" method="post" action="https://formspree.io/"></form>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12"></div>
      </div>
    </div>
  </div>
  <section class="mbr-section form3 cid-qzsdF7h0c0" id="form3-1i" data-rv-view="192">
    <div class="container">
      <div class="row justify-content-center">
        <div class="title col-12 col-lg-8"> </div>
      </div>
      <div class="row py-2 justify-content-center">
        <div class="col-12 col-lg-6  col-md-8 " data-form-type="formoid">
          <div data-form-alert="" hidden=""> Thanks for filling out the form! </div>
          <form class="mbr-form" action="https://mobirise.com/" method="post" data-form-title="Mobirise Form">
            <input type="hidden" data-form-email="true" value="mnVmXZX9YZwsKTjD4Gip5HDYK29dF09JqcVXVoJ16f5oEAnp77gXqHw7bpFF98mL43AsoYEMmijtAfcwAzUemz14cI7kO27wxCf/vKumAfu/aSOp1EriZxYzsH6bTubz"> </form>
        </div>
      </div>
    </div>
  </section>
  <section class="mbr-section form3 cid-qzsdFhO0zu" id="form3-1j" data-rv-view="195"></section>
  <section class="mbr-section form3 cid-qzsdFvg4AU" id="form3-1k" data-rv-view="198">
    <div class="container">
      <div class="row justify-content-center">
        <div class="title col-12 col-lg-8"> </div>
      </div>
    </div>
  </section>
  <section class="mbr-section form3 cid-qzsdFJXMCu" id="form3-1l" data-rv-view="201">
    <div class="container">
      <div class="row justify-content-center">
        <div class="title col-12 col-lg-8"> </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-12"></div>
        </div>
      </div>
      <div class="row py-2 justify-content-center">
        <div class="col-12 col-lg-6  col-md-8 " data-form-type="formoid">
          <div data-form-alert="" hidden=""> Thanks for filling out the form! </div>
          <form class="mbr-form" action="https://mobirise.com/" method="post" data-form-title="Mobirise Form">
            <input type="hidden" data-form-email="true" value="x4gpXCCBld3A9C2EkoblXp+4f/aqwfgdYKmM0YAP8bapf5Uj2HB0lsK7Wzeo9bp6godu8tMgJJ/VmfiUWZOlaKQ8/Am8i4HpI6sQnoUTPVy+X1M3dBgA+Nj7iSJwPFUF"> </form>
        </div>
      </div>
    </div>
  </section>
  <!--  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script> -->
</body>

</html>

    

