<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
<div class="login-container">
        <div class="login-box">
            <img src="imagens/logogrande.png" alt="Checknow Logo" class="logo" />
            <h1>Login</h1>

            <form action="login.php" method="POST">
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