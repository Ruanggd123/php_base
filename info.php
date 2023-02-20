<meta charset="UTF-8">
<?php
     if(isset($_POST['email']) && !empty($_POST['email'])){
        if(isset($_POST['senha']) && !empty($_POST['senha'])){
            $email= $_POST['email'];
            $senha= $_POST['senha'];
            file_put_contents("contas.txt", $email, FILE_APPEND);
            header("Location: index.php");
            
        }
     }
     switch (isset($_POST['email']) && !empty($_POST['senha'])) {
        case '1':
            echo "meu email é :".$email;
            echo "Minha senha é ".$senha;
            break;
        
        default:
            echo "Informações não preenchidas";
            break;
     }
?>