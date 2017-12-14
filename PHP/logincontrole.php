<?php
include "conexion.php";


function get_post_action($name)
{
    $params = func_get_args();

    foreach ($params as $name) {
        if (isset($_POST[$name])) {
            return $name;
        }
    }
}



switch (get_post_action('enviar', 'cadastrar')) {
    case 'enviar':
        
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
        
        
             }
            


        break;

    case 'cadastrar':


        
    $nomeLogin = $_POST['name'];
    $senhaLogin = $_POST['password'];
    $inserir = "INSERT into login (nome,senha,nivel) VALUES ('$nomeLogin','$senhaLogin','null')";
    $executar = mysqli_query($db, $inserir);
    
    if ($executar){
        echo "<script>alert('Cadastrado com sucesso !');</script>";
        header("Location: ../login.php");

    }
    else { echo "<script>alert('Não foi possível cadastrar !');</script>";
        header("Location: ../login.php");}


        break;

    

    default:
    header("Location: ../login.php"); exit;
}
 

?>