<?php
//conecta ao banco de dado
include('conexao.php');

$usuario =  $_POST['nome'];
$valor = $_POST['valor'];
$id = $_POST['id_deposito'];


//cadastra no banco
$sql = "UPDATE deposito SET  nome = '$usuario', valor = '$valor' 
WHERE id ='$id'";

if (mysqli_query($conexao, $sql)){
  echo "Alteração do deposito efetuado com sucesso!";
  header ('Location: index.php ');
}else{
  echo "Falha ao fazer alteração do deposito.";

}


?>