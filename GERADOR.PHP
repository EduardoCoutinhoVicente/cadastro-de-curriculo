<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 <link rel="stylesheet" href="css\gerador.css">
</head>
<body>
<?php
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
?>
   <article>
    <p class='nome'><?php echo $nome; ?></p>
    <p><?php echo '<p id="nacionalidade" name="nacionalidade">'. $nacionalidade .'</p> <p id="sexo" name="sexo">' . $sexo . '</p>
    <p id="idade" name="idade">' . $idade. '</p>' ?></p>
    <p>Endereço: <?php echo '<p id="endereco" name="endereco">'. $endereco.'</p>' ?></p>
    <p>Email: <?php echo '<p id="email" name="email">' . $email .'</p>' ?></p>
    <p>  <?php echo '<p id="telefone" name="telefone">'.$telefone. '</p>' ?></p>

    <p class='Titulos'>Objetivo</p>
    <p><?php echo '<p id="objetivos" name="objetivos">' . $objetivos .'</p>' ?></p>

    <p class='Titulos'>Experiência Profissional</p>
    <p><?php echo '<p id="experiencias" name="experiencias">' . $experiencias. '</p>' ?></p>

    <p class='Titulos'>Educação</p>
    <p><?php echo '<p id="formacoes" name="formacoes">'.$formacoes.'</p>' ?></p>

    <p class='Titulos'>Minhas Preferencias</p>
    <ul>
      <?php foreach ($interesse as $value) { ?>
        <li id="interesses" name="interesses"><?php echo $value; ?></li>
      <?php } ?>
    </ul>
  </article>
  
      <!--<button type="submit" name="my_button">Cadastrar</button>-->
      <form name="Cadastro" method="post" action="cadastrar.php">

     <input type="hidden" name="nome" value="<?php echo $_POST['nome']; ?>">
     <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
     <input type="hidden" name="telefone" value="<?php echo $_POST['telefone']; ?>">
     <input type="hidden" name="idade" value="<?php echo $_POST['idade']; ?>">
     <input type="hidden" name="endereco" value="<?php echo $_POST['endereco']; ?>">
     <input type="hidden" name="sexo" value="<?php echo $_POST['sexo']; ?>">
     <input type="hidden" name="nacionalidade" value="<?php echo $_POST['nacionalidade']; ?>">
     <input type="hidden" name="objetivos" value="<?php echo $_POST['objetivos']; ?>">
     <input type="hidden" name="experiencias" value="<?php echo $_POST['experiencias']; ?>">
     <input type="hidden" name="formacoes" value="<?php echo $_POST['formacoes']; ?>">
     <input type="hidden" name="interesse" value="<?php echo implode(', ', $_POST['interesse']); ?>">

     <input class="botao"type="submit" name="confirmar" value="cadastrar">
      
   </form>
 
<form name="Cadastro" method="post" action="modificador.php">

<input type="hidden" name="nome" value="<?php echo $_POST['nome']; ?>">
<input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
<input type="hidden" name="telefone" value="<?php echo $_POST['telefone']; ?>">
<input type="hidden" name="idade" value="<?php echo $_POST['idade']; ?>">
<input type="hidden" name="endereco" value="<?php echo $_POST['endereco']; ?>">
<input type="hidden" name="sexo" value="<?php echo $_POST['sexo']; ?>">
<input type="hidden" name="nacionalidade" value="<?php echo $_POST['nacionalidade']; ?>">
<input type="hidden" name="objetivos" value="<?php echo $_POST['objetivos']; ?>">
<input type="hidden" name="experiencias" value="<?php echo $_POST['experiencias']; ?>">
<input type="hidden" name="formacoes" value="<?php echo $_POST['formacoes']; ?>">
<input type="hidden" name="interesse" value="<?php echo implode(', ', $_POST['interesse']); ?>">

<input class="botao"type="submit" name="confirmar" value="revisar dados">
 
</form>
<form method="post" action="busca.php">
    <button type="submit" name="consultar">Consultar</button>
</form>
<p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>