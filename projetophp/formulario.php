<?php
    if(isset($_POST['submit']))
    {
        include_once('conexao.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sexo = $_POST['sexo'];
        $cidade = $_POST['cidade'];

        $result = mysqli_query($conexao, "INSERT INTO cadastro(nome,email,senha,sexo,cidade)VALUES ('$nome','$email','$senha','$sexo','$cidade')");
        header('Location: login.php');
    }
?>

<DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, inicial-scale=1.0">
    <title>Projeto PHP Versátil TI</title>
    <link rel="stylesheet" type="text/css" href="css/formulario.css">
</head>

<body>
    <div class="box">
    <h1>Cadastro de Clientes</h1>
        <form action="formulario.php" method="POST">
        <fieldset> 

        <br>
        <div class="inputBox">
            <input type="text" name="nome" id="nome" class="inputUser" required>
            <label for="nome" class="labelInput">Nome</label>
        </div>
        <br><br>
        <div class="inputBox">
            <input type="text" name="email" id="email" class="inputUser" required>
            <label for="email" class="labelInput">E-mail</label>
        </div>
        <br><br>
        <div class="inputBox">
            <input type="password" name="senha" id="senha" class="inputUser" required>
            <label for="senha" class="labelInput">Senha</label>
        </div>
        <br>

        <p>Sexo:</p>
        <input type="radio" id="feminino" name="sexo" value="feminino" required>
        <label for="feminino">Feminino</label>
        <br>
        <input type="radio" id="masculino" name="sexo" value="masculino" required>
        <label for="masculino">Masculino</label>
        <br>
        <input type="radio" id="outro" name="sexo" value="outro" required>
        <label for="outro">Outro</label>
        <br><br><br>

        <div class="inputBox">
            <input type="text" name="cidade" id="cidade" class="inputUser" required>
            <label for="cidade" class="labelInput">Cidade/UF</label>
        </div>
        <br><br>

        <input type="submit" name="submit" id="submit" value="Cadastrar">
        <br><br>
        <a href="index.php" class="button">Voltar</a>   
    </fieldset>
</form>
</div>
</body>
</html>