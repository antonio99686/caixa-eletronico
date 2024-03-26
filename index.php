<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashbord.css">
    <link rel="shortcut icon" href="img/logo.png">
    <title>sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand"> Caixa Eletronico</a>
            <?php
            include ("conexao.php");
            $sql = "SELECT * FROM deposito";
            $resultado = mysqli_query($conexao, $sql);
            $dados = mysqli_fetch_assoc($resultado);
            ?>
        </div>

    </nav>





    <div class="perfil">

        <h3>Caixa </h3>

        <div class="posisao">
            <?php

            echo "Nome:";
            echo $dados["nome"];
            echo "<br>";

            echo "valor: R$";
            echo $dados["valor"];
            echo "<br>";




            ?>
        </div>
    </div>


    <div class="barra">
        <h3>Função </h3>

        
        <a href="formcad.php" class="btn btn-dark btn-lg "> Depositar</a> 
<br>
<br>
        <a href="formedit.php" class="btn btn-dark btn-lg "> Editar</a> 
      <hr>

      <a href="#" class="btn btn-dark btn-lg "> Sacar</a> 
        

    </div>


    </main>
</body>

</html>