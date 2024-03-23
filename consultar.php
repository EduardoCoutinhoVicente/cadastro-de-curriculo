<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="css\consultar.css">
</head>
<body>
<form method="post" action="index.php">
    <button type="submit" name="my_button">Voltar ao inicio</button>
</form>
<?php
// Conecta ao banco de dados: 
include_once("conectar.php");
// Cria-se uma tabela e cabeçalho de dados: é possível
// fazer isso de diversas formas, use a criatividade.
  

 $sql = "SELECT * FROM curriculo";
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");
 // a variável resultado cria um indíce dos dados do banco
 // Por meio do comando de repetição while obtemos os dados do banco
 while ($registro = mysqli_fetch_array($resultado))
 //a variável registro recebe os dados de acordo com o índice.
 {
    $id = $registro['id'];
    $nome = $registro['nome'];
    $email = $registro['email'];
    $telefone = $registro['telefone'];
    $idade  = $registro['idade'];
    $endereco = $registro['endereco'];
    $sexo = $registro['sexo'];
    $nacionalidade = $registro['nacionalidade'];
    $objetivos = $registro['objetivos'];
    $experiencias = $registro['experiecias'];
    $formacoes = $registro['formacoes'];
    $lista_cidades = $registro ['interesses'];
 
    
    ?><article>
    <p class='nome'> <?php print $nome; ?></p>
    <p><?php print "$nacionalidade, $sexo, $idade"; ?> </p>
    <p> Endereço: <?php print $endereco; ?></p>
    <p> Email: <?php print $email; ?></p>
    <p>Telefone: <?php print $telefone; ?></p>

    <p class='Titulos'>Objetivo</p>
    <p><?php print $objetivos; ?></p>

    <p class='Titulos'>Experiência Profissional</p>
    <p><?php print $experiencias; ?></p>

    <p class='Titulos'>Educação</p>
    <p><?php print $formacoes; ?></p>

    <?php 
        $lista_cidades = implode(",", array_unique(explode(",", $lista_cidades)));
        print $lista_cidades;

    ?>

</article>
<?php 
 }
?>
 <p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>

