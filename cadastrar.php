<?php

//conecta ao banco de dado
include('conexao.php');


//dados do formulario
$usuario =  $_POST['nome'];
$valor = $_POST['valor'];




//cadastramento no banco
$sql = "INSERT INTO deposito(
  valor,
     nome)
 VALUES 
 ('$valor','$usuario')";

// Executar o comando SQL
if (mysqli_query($conexao, $sql)){
        echo "Deposito Efetuado com sucesso!";
        header('Location: index.php');
}else{
        echo "Falha ao depositar.";
}



 ?>
