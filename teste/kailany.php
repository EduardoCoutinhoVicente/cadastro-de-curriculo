<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\visualizador.css">
    <title>Document</title>
    <style>
               
        button,.botao {
    display: block;
    margin: 20px auto;
    background-color: #009688;
    color: white;
    padding: 12px 24px;
    border: none;
    border-radius: 4px;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #007b6b;
}
    </style>
</head>
<body>

<?php

 

    $nome = $_POST["Nome"];
    
    $telefone = $_POST["Telefone"];
  
    $email = $_POST["Email"];
    
    $endereco = $_POST["Endereco"];
  
    $sexo = $_POST["Sexo"];
  
    $data = $_POST["Data"];
   
    $formacao = $_POST["Formacao"];

    $experienciaprofissional = $_POST["ExperienciaProfissional"];
  
    $habilidades = $_POST["Habilidades"];
  
    $objetivo = $_POST["Objetivos"];
    
    $interesses = $_POST["Interesses"];
  

    $curriculo = "
    <section>
    <h1>$nome</h1>
    <tr>-------------------------------------------------------<tr>
    <h2>Dados Pessoais</h2>
    <p>telefone: $telefone</p>
    <p>endereco: $endereco</p>
    <p>sexo: $sexo</p>
    <p>data: $data</p>
    <tr>-------------------------------------------------------<tr>

    <h2>Formação</h2>
    <p>$formacao</p>
    <tr>-------------------------------------------------------<tr>
    <h2>Experiência Profissional</h2>
    <p>$experienciaprofissional</p>
    <tr>-------------------------------------------------------<tr>
    <h2>Objetivo</h2>
    <p>$objetivo</p>
    <tr>-------------------------------------------------------<tr>

    <h2>Habilidades</h2>
    <p>$habilidades</p>
    <tr>-------------------------------------------------------<tr>
    </section>

    <h2>Interesses</h2>
    <p>$interesses</p>
    <tr>-------------------------------------------------------<tr>
    </section>
    
    ";


    echo $curriculo;
 
?>
<form name="Cadastro" method="post" action="cadastrar.php">

<input type="hidden" name="nome" value="<?php echo $_POST['Nome']; ?>">
<input type="hidden" name="telefone" value="<?php echo $_POST['Telefone']; ?>">
<input type="hidden" name="email" value="<?php echo $_POST['Email']; ?>">
<input type="hidden" name="endereco" value="<?php echo $_POST['Endereco']; ?>">
<input type="hidden" name="sexo" value="<?php echo $_POST['Sexo']; ?>">
<input type="hidden" name="data" value="<?php echo $_POST['Data']; ?>">
<input type="hidden" name="formacao" value="<?php echo $_POST['Formacao']; ?>">
<input type="hidden" name="experienciaprofissional" value="<?php echo $_POST['ExperienciaProfissional']; ?>">
<input type="hidden" name="habilidades" value="<?php echo $_POST['Habilidades']; ?>">
<input type="hidden" name="objetivos" value="<?php echo $_POST['Objetivos']; ?>">
<input type="hidden" name="interesses" value="<?php echo implode(',', $_POST['Interesses']); ?>">


  <input type="submit" name="confirmar" value="Sim">
 
</form>
<?php

?>
</body>
</html>