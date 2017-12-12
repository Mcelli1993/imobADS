<!DOCTYPE html>
<html>

<head>
  <!-- Site made with Mobirise Website Builder v4.3.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.3.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-casa-340x309.png" type="image/x-icon">
  <meta name="description" content="Website Builder Description">
  <title>Consultas</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/data-tables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css"> </head>

<body class="bg-warning">
  <section class="menu cid-qxXgS3JcCF" once="menu" id="menu1-1o" data-rv-view="2079">
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
    <a href="https://mobirise.co/a">free site builder</a>
  </section>
  <section class="mbr-section form3 cid-qzXszmSuWb bg-warning" id="form3-1p" data-rv-view="2081">
    <div class="container">
      <div class="row justify-content-center">
        <div class="title col-12 col-lg-8"> </div>
      </div>
      <div class="row py-2 justify-content-center">
        <div class="col-12 col-lg-6  col-md-8 " data-form-type="formoid">
          <div data-form-alert="" hidden=""> Thanks for filling out the form! </div>
          <form class="mbr-form" action="https://mobirise.com/" method="post" data-form-title="Mobirise Form">
            <input type="hidden" data-form-email="true" value="h2VWMt3UTaMRjlwWohQ4G4Zrl9f+wE0Hlwb9xjVaBvaEbhUic+D+ZN5VpxrjGEaonjOBhBD3qqxXEOVNCGQM7MKhfqmbFg99SLdd5teSBq58/FVhsSVKLLdwYoN/yNnV">
            <div class="mbr-subscribe input-group">
              <input class="form-control" type="email" name="email" placeholder="Email" data-form-field="Email" required="" id="email-form3-1p"> <span class="input-group-btn"><button href="" type="submit" class="btn btn-primary display-4">SUBSCRIBE</button></span> </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <section class="mbr-section content4 cid-qzXt5Z88cv bg-warning" id="content4-1s" data-rv-view="2084">
    <div class="container">
      <div class="media-container-row">
        <div class="title col-12 col-md-8">
          <h2 class="align-center pb-3 mbr-fonts-style display-2 my-5">Selecione uma Tabela para Consultar</h2>
        </div>
      </div>
    </div>
  </section>
  <section class="mbr-section form3 cid-qzXt8tmuzt bg-warning" id="form3-1t" data-rv-view="2086"></section>
  <div class="py-5">
    <div class="container">
      <form class="mbr-form filds" action="page5.php" method="post" data-form-title="Mobirise Form">
        <div class="row">
          <div class="col-md-12 text-center my-1 w-25">
            <div class="form-group text-center p-1 mx-auto w-25"> <select name="buscas" class="form-control" id="sel1">
    <option value="vendedores">Vendedores</option>
    <option value="imoveis">Imóveis</option>
    <option value="vendas">Vendas</option>
    <option value="alugueis">Aluguéis</option>
    <option value="clientes">Clientes</option>
   
  </select> </div>
            <div class="col-md-3"> </div>
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary" name="enviar">CONSULTAR</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

  <?php
  if(isset($_POST['enviar']))
  {
  if ($_POST['buscas'] == "vendedores") {

  echo  "<script> location.replace('buscaVendedor.php'); </script>";
 
    exit;
  }
  if ($_POST['buscas'] == "imoveis") {
    echo  "<script> location.replace('buscaImoveis.php'); </script>";
     exit;
   }
     if ($_POST['buscas'] == "vendas") {
      echo  "<script> location.replace('buscaVendas.php'); </script>";
     exit;
   }
     if ($_POST['buscas'] == "alugueis") {
      echo  "<script> location.replace('buscaAlugueis.php'); </script>";
     exit;
   }
    if ($_POST['buscas'] == "clientes") {
      echo  "<script> location.replace('buscaClientes.php'); </script>";
     exit;
   }
    
}
    ?>
  <!-- <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/data-tables/jquery.data-tables.min.js"></script>
  <script src="assets/data-tables/data-tables.bootstrap4.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script> -->
</body>

</html>