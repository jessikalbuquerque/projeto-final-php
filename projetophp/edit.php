<?php
    include_once('conexao.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM cadastro WHERE id-$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $senha = $user_data['senha'];
                $sexo = $user_data['sexo'];
                $cidade = $user_data['cidade'];
            }
        }
        else
        {
        header('Location: sistema.php');
        }
        }
    else 
    {
        header('Location: sistema.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PHP Versátil TI</title>
    <link rel="stylesheet" type="text/css" href="css/edit.css">
</head>
<body>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b><h2>Editar Cliente</h2></b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome;?>required>
                        <label for="nome" class="labelInput">Nome</label>
                </div>
                    <br><br>

                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value=<?php echo $email;?> required>
                        <label for="email" class="labelInput">Email</label>
                </div>
                    <br><br>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" value=<?php echo $enha;?>required>
                        <label for="senha" class="labelInput">Senha</label>
                </div>
                    <br>

                    <p>Sexo:</p>
                    <input type="radio" id="feminino" name="sexo" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : '';?> required>
                    <label for="feminino">Feminino</label>
                    <br>
                    <input type="radio" id="masculino" name="sexo" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : '';?> required>
                    <label for="masculino">Outro</label>
                    <br>
                    <input type="radio" id="outro" name="sexo" value="outro" <?php echo ($sexo == 'outro') ? 'checked' : '';?> required>
                    <label for="outro">Outro</label>
                    <br><br><br>

                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" value=<?php echo $cidade;?> required>
                    <label for="cidade class="labelInput">Cidade</label>
                <br><br>

                <input type="hidden" name="id" value="<?php echo $id;?>
                <input type="submit" name="update" id="submit" value="Alterar">
            </fieldset>
        </form>
    </div>
</body>
</html>