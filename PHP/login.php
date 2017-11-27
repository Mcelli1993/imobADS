<?php


$usuario = $_POST["name"];
$senha = $_POST["password"];

$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}
echo 'Conexão bem sucedida';


$sql = "SELECT 'nome', 'senha' FROM 'login' WHERE ('nome' = '".$usuario."') AND ('senha' = '". $senha."') LIMIT 1";
$query = mysql_query($sql);
if (mysql_num_rows($query) != 1) {
    // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
    echo "Login inválido!"; exit;
    header("Location: ../login.html"); exit;
} else {

    while ($row = mysql_fetch_assoc($query)) {
        echo $row["nome"];
        echo $row["senha"];
       
    }
    // Salva os dados encontrados na variável $resultado
   // $resultado = mysql_fetch_assoc($query);
 
    // Se a sessão não existir, inicia uma
    if (isset($sessao)){// session_start();
 
    // Salva os dados encontrados na sessão
    
    $_SESSION['UsuarioNome'] = $resultado['nome'];
  
 
    // Redireciona o visitante
    header("Location: ../index.php"); exit;
    }
}



mysql_close($link);

?>