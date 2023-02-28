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
/* 
parte adicional sobre php 
Utilização de java script<br>
        <button onclick="window.location.href='info.php';">
            clique aqui para ir ao google!<br>
        </button>
        <button onclick="window.location.href=window.location.href;">
            Atualizar a página
        </button>
        <div id="area">
            Valor da div...
        </div>
        <div id="area2">
            Função
        </div>
        <button onclick="this.innerHTML=prompt('Qual o nome para o botão');">
                fazer ação
        </button>
        <button onclick="fuc('ruan', '21')">
                Função
        </button>
        <form method="POST" action="info.php">
            Informe o email:<br>
            <input type="text" name="email"/><br><br>
            Informa a senha:<br>
            <input type="text" name="senha"/><br><br>
            <input type="submit" name="enviar"/>
        <form>

*/