<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae Submission</title>
    <link rel="stylesheet" href="css\cadastrar.css">
</head>
<body>
<?php
//chama a pagina para conectar com o banco
include_once("conectar.php");

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Coleta os dados do formulário  
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $idade = $_POST['idade'];
    $endereco = $_POST['endereco'];
    $sexo = $_POST['sexo'];
    $nacionalidade = $_POST['nacionalidade'];
    $objetivos = $_POST['objetivos'];
    $experiencias = $_POST['experiencias'];
    $formacoes = $_POST['formacoes'];
    $interesse = $_POST['interesse'];

   // Converte o array de interesses em uma string separada por vírgulas

    $interesses = isset($_POST['interesse']) ? (is_array($_POST['interesse']) ? $_POST['interesse'] : [$_POST['interesse']]) : [];
    $interessesString = implode(", ", $interesses);
    
    
   // Realiza a consulta ao banco de dados
    $sql = "INSERT INTO curriculo (nome, email, telefone, idade, endereco, sexo, nacionalidade, objetivos, experiecias, formacoes, interesses) VALUES ";
    $sql .= "('$nome', '$email', '$telefone', '$idade', '$endereco', '$sexo', '$nacionalidade', '$objetivos', '$experiencias', '$formacoes', '$interessesString')";

    if (mysqli_query($strcon, $sql)) {
        echo "<p>curriculo cadastrado com sucesso!</p>";
    } else {
        echo "<p>Erro ao tentar cadastrar curriculo  : " . mysqli_error($strcon) . "</p>";
    }

     // Fecha a conexão com o banco de dados
    mysqli_close($strcon);
}
?>
<form method="post" action="index.php">
    <button type="submit" name="consultar">Voltar ao início</button>
</form>
<p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>
