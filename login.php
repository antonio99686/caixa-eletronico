<?php
session_start();
if(empty($_POST) or (empty($_POST['email']) or (empty($_POST['senha'])))) {
   echo"<script>location.href='index.php';</script>";
}
include('conexao.php');

$usuario =  $_POST['email'];
$senha = $_POST['senha'];
$sql = "SELECT * FROM  usuario WHERE email = '{$usuario}' AND  senha = '{$senha}'";
$resultado = mysqli_query($conexao,$sql);
$dados = mysqli_fetch_assoc($resultado);

$res = $conexao->query($sql) or die($conexao->error);
$row = $res->fetch_object();
$qtd = $res->num_rows;

if($qtd > 0 ){
    $_SESSION['email'] = $usuario;
    $_SESSION['nome'] = $row->nome;
    $_SESSION['id_usuario'] = $dados['id_usuario'];
    header ('Location: dashbord.php ');
 }else{
    header ('Location: protect.php');
 }

 ?>