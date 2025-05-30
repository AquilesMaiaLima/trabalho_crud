<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])){
    if(strlen($_POST['email']) == 0){
        echo "Preencha seu e-mail";
    }else if(strlen($_POST['senha']) == 0){
        echo "Preencha sua senha";
    } else{
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM avaliador WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do codigo sql: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){

            $cliente = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $cliente['id'];
            $_SESSION['nome'] =$cliente['nome'];

            header("Location: paginainicial.php");
            
        }else{
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleindex.css">
</head>
<body>
<div class="login-container">
        <div class="login-box">
            <img src="imagens/logogrande.png" alt="Checknow Logo" class="logo" />
            <h1>Login</h1>

            <form action="" method="POST">
                <p>
                    <label for="email">E-mail</label><br>
                    <input type="text" id="email" name="email" required>
                </p>

                <p>
                    <label for="senha">Senha</label><br>
                    <input type="password" id="senha" name="senha" required>
                </p>

                <p>
                    <button type="submit">Entrar</button>
                </p>
            </form>
        </div>
    </div>
</body>
</html>