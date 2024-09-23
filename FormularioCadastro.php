<?php
    if(isset($_POST['submit']))
    {
        //print_r('Nome: ' . $_POST['nome']);
        //print_r('<br>');
        //print_r('E-mail: ' . $_POST['email']);
        //print_r('<br>');
        //print_r('Senha: ' . $_POST['senha']);
        //print_r('<br>');
        //print_r('Telefone: ' . $_POST['telefone']);
        //print_r('<br>');
        //print_r('Adress: ' . $_POST['endereco']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios_facillity(nome,email,senha,telefone,endereco) 
        VALUES ('$nome','$email','$senha','$telefone','$endereco')");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuário
    </title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, blue, dodgerblue);
        }
        .box{
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.85);
            color:white;
            padding:6px;
            border-radius: 6px;
            width: 20%;

        }
        fieldset{
            border: 3px solid dodgerblue;
            border-radius: 3px;
        }
        legend{
            border: 1px solid dodgerblue;
            padding:10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 5px;
        }
        .inputBox{
            position: relative;

        }
        .inputUser{
            background: none;
            border:none;
            border-bottom: 1px solid white;
            outline:none;
            color:white;
            font-size: 14px;
            width: 100%;
            letter-spacing: 1px;
        }
        #submit{
            background-image: linear-gradient(to right, blue, dodgerblue);
            width: 100%;
            border:none;
            padding: 15px;
            color: white;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(3, 3, 219), rgb(5, 120, 235));
        }
        .volta{
            font-size:13px;
            color:white;
        }

    </style>

</head>
<body>
    <div class="box">
        <form action="FormularioCadastro.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Usuário</b></legend>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required placeholder="Nome">
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="email" name="email" id="email" class="inputUser" required placeholder="E-mail">
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="password" name="senha" id="senha" class="inputUser" required placeholder="Senha">
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required placeholder="Telefone">
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required placeholder="Endereço">
                </div>
                <br><br><br>
                <input type="submit" name="submit" id="submit">

                <a class="volta" href="login.php">Já é cadastrado? faça o login</a>
            </fieldset>
        </form>
    </div>
    
</body>
</html>