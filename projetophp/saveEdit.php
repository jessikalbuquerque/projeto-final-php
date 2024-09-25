<?php
    include_once('conexao.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sexo = $_POST['sexo'];
        $cidade = $_POST['cidade'];

        $sqlInsert = "UPDATE cadastro
        SET nome='$nome',email='$email',senha='$senha',sexo='$sexo',cidade='$cidade'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: sistema.php');
?>