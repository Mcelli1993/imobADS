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

    // SELECT nome, senha FROM login WHERE nome='admin' and senha='admin' 
    $stmt = $conn->prepare("SELECT nome, senha FROM login WHERE nome = '".$usuario."' AND senha = '". $senha."';"); 
    $stmt->execute();
    echo "linhas: ".$stmt->rowCount();

  

    

    if ($stmt->rowCount()==1){


        session_cache_expire(60);
        session_start();
        
        
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha']  = $senha;
        echo "<script>alert('LOGADO');</script>";
        header("location:../index.php");
        


//     if (!isset($_COOKIE["acessos"])){

//         setcookie("acessos",1);
//     }
//         else{

//             setcookie("acessos", $_COOKIE["acessos"]+1);


           

//             echo "<script>alert('LOGADO');</script>";
//             echo "Acessos".$_COOKIE["acessos"];

//             header("Location: ../index.php"); exit;

    
// //         // Salva os dados encontrados na sessão
   

 

// //         // Redireciona o visitante
   
//   }

    }
else{
    echo "<script>alert('Falha no login');</script>";
    header("Location: ../login.php"); exit;
}

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    

    
    
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

  

 // if ($stmt->rowCount() !=1) {
//         // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado

    // header("Location: ../login.php"); exit;
   // } else {
    
//         while ($row = mysql_fetch_assoc($query)) {
//             echo $row["nome"];
//             echo $row["senha"];
           
//         }
//         // Salva os dados encontrados na variável $resultado
//        // $resultado = mysql_fetch_assoc($query);
     
//         // Se a sessão não existir, inicia uma


     }
    
    
    
//     mysql_close($link);
    
 

?>