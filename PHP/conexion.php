<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "imobads";


$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

if (mysqli_connect_errno()) {
    printf("Conexao falhou: %s\n", mysqli_connect_error());
    exit();
}

else {

echo "conectado com sucesso";
}

?>
