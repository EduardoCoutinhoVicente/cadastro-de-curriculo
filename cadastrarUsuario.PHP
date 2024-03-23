<?php
include('conectar.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $sql = "INSERT INTO login (  email, senha ) VALUES ";
        $sql .= "('$email', '$senha')"; 
       
    if (mysqli_query($strcon, $sql)) {
        echo "<p>Usuario cadastrado com sucesso!</p>";
    } else {
        echo "<p>Erro ao tentar cadastrar usuario  : " . mysqli_error($strcon) . "</p>";
    }

     // Fecha a conexão com o banco de dados
    mysqli_close($strcon);  
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Cadastrar Usuario</h1>
    <form action="" method="POST">
        <p>
            <label>E-mail</label>
            <input type="text" name="email">
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="senha">
        </p>
        <p>
            <button type="submit">Cadastrar</button>
        </p>
    </form>
    <form action="login.php" method="POST">
        
        <p>
            <button type="submit">Entrar</button>
        </p>
    </form>
</body>
</html>
