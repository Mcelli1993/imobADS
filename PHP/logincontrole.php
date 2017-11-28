<?php

 
if (isset($_POST['name'])){

   

    $usuario = $_POST["name"];
    $senha = $_POST["password"];

    $servername = "localhost";
    $username = "root";
    $password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=imobads", $username, $password);
    // set the PDO error mode to exception0
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<script>alert('Conectado com sucesso');</script>"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    $stmt = $conn->prepare("SELECT nome, senha FROM login WHERE 'nome' = '".$usuario."' AND 'senha' = '". $senha."' LIMIT 1"); 
    $stmt->execute();

    
    
    // $link = mysql_connect('localhost', 'root', '', 'imobads');
    // if (!$link) {
    //     die('Não foi possível conectar: ' . mysql_error());
    // }
    // echo '<div data-form-alert="" hidden="">Logado</div>';
    
   // $sql = "SELECT 'nome', 'senha', FROM 'login' WHERE 'nome' = '".$usuario."' AND 'senha' = '". $senha."' LIMIT 1";
   // $result = $conn->query($sql);
//     $sql = "SELECT 'nome', 'senha' FROM 'login' WHERE ('nome' = '".$usuario."') AND ('senha' = '". $senha."') LIMIT 1";
//     $query = mysql_query($sql);
//$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

  echo "linhas: ".$stmt->rowCount();

 // if ($stmt->rowCount() !=1) {
//         // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
echo "<script>alert('LOGIN INVÁLIDO');</script>";
    // header("Location: ../login.php"); exit;
   // } else {
    
//         while ($row = mysql_fetch_assoc($query)) {
//             echo $row["nome"];
//             echo $row["senha"];
           
//         }
//         // Salva os dados encontrados na variável $resultado
//        // $resultado = mysql_fetch_assoc($query);
     
//         // Se a sessão não existir, inicia uma

echo "<script>alert('LOGADO');</script>";
         if (isset($sessao)){ session_start();
     
//         // Salva os dados encontrados na sessão
        
       $_SESSION['UsuarioNome'] = $resultado['nome'];
      
     
//         // Redireciona o visitante
        header("Location: ../index.php"); exit;
       }
     }
    
    
    
//     mysql_close($link);
    
 

?>