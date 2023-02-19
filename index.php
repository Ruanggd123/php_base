<?php
    if(isset($_POST['email']) && !empty($_POST['email'])){
        $email= $_POST['email'];
        echo "meu email eh ".$email;
        if(isset($_POST['senha']) && !empty($_POST['senha'])){
            $senha= $_POST['senha'];
            echo "Minha senha eh ".$senha;
        }
    
    }
?>
<hr>
<form method="POST">
    Informe o email:<br>
    <input type="text" name="email"/><br><br>
    Informa a senha:<br>
    <input type="text" name="senha"/><br><br>
    <input type="submit" name="enviar"/>
<form>
