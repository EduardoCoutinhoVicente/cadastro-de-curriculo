<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculo</title>
    <link rel="stylesheet" href="css\modificador.css">
</head>
<body>
<article class="container">
        <h1 class="titulo">Alteração do Currículo</h1>
        <form name="Cadastro" action="GERADOR.PHP" method="POST">
        <?php 
        $id = $_POST['id'];
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

  <label class="label" for="nome">Nome:</label>
  <input class="input" type="text" id="nome" name="nome" placeholder="Seu Nome"value="<?php echo  $nome; ?>" required>
            
  <label class="label" for="email">Email:</label>
  <input class="input" type="email" id="email" name="email" placeholder="seuemail@example.com" value="<?php echo  $email  ; ?>"required>
           
  <label class="label" for="nacionalidade">Nacionalidade:</label>
  <input class="input" type="text" id="nacionalidade" name="nacionalidade" value="<?php echo  $telefone ; ?>" required>
          
  <label class="label" for="idade">Idade:</label>
  <input class="input" type="int" id="idade" name="idade" value="<?php echo  $idade ; ?>"required>

  <label class="label" for="sexo">Sexo:</label>
  <select class="input" name="sexo" id="sexo">
    <option>Selecione</option>
    <option value="Masculino" <?php echo isset($_SESSION['sexo']) && $_SESSION['sexo'] === 'Masculino' ? 'selected' : ''; ?>>Masculino</option>
    <option value="Feminino" <?php echo isset($_SESSION['sexo']) && $_SESSION['sexo'] === 'Feminino' ? 'selected' : ''; ?>>Feminino</option>
</select>
                     
  <label class="label" for="objetivos">Objetivos:</label>
<textarea class="input" id="objetivos" name="objetivos" rows="4" required><?php echo  $objetivos  ; ?></textarea>

<label class="label" for="experiencias">Experiências:</label>
<textarea class="input" id="experiencias" name="experiencias" rows="4" required><?php echo  $experiencias  ; ?></textarea>

<label class="label" for="formacoes">Formações:</label>
<textarea class="input" id="formacoes" name="formacoes" rows="4" required><?php echo  $formacoes ; ?></textarea>
            <div class="dados">
    <h2 class="informacao">Lista de Interesses</h2>
    <p>Marque seus interesses:</p>
    <p>-------------------------------</p>
    <?php//oi
    $interesses = array("Administração", "RH", "Contabilidade", "Financeiro", "Limpeza", "Segurança", "TI", "Jurídico", "Departamento Pessoal");
    ?>

<?php foreach ($interesses as $interesse) { ?>
    <input class="checkbox-input" id="<?php echo $interesse; ?>" type="checkbox" name="interesse[]" value="<?php echo $interesse; ?>" <?php echo (isset($_SESSION['interesse']) && in_array($interesse, $_SESSION['interesse'])) ? 'checked' : ''; ?>>
    <label for="<?php echo $interesse; ?>"><?php echo " $interesse | "; ?></label>
<?php } ?>
</div>
            <button class="button" type="submit" name="enviar">Enviar</button>
        </form>
    </article>
    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>