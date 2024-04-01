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
        // Include do arquivo PHP que contém a lógica do caixa
        require_once 'caixa.php';

        // Inicializa o objeto de caixa
        $caixa = new Caixa(0);

        // Verifica se algum valor foi enviado via formulário
        if(isset($_POST['valor'])){
            $valor = $_POST['valor'];

            // Verifica se o valor é válido
            if(is_numeric($valor) && $valor > 0){
                // Verifica se o botão de pagamento foi clicado
                if(isset($_POST['pagar'])){
                    // Verifica se o pagamento foi bem-sucedido
                    if(Pagamento::pagarComPix($valor)){
                        $mensagem = "Pagamento de " . $valor . " reais realizado com sucesso via PIX!";
                    } else {
                        $mensagem = "Falha ao realizar o pagamento via PIX!";
                    }
                } else {
                    // Verifica se há saldo suficiente antes de realizar a compra
                    if($caixa->removerDinheiro($valor)){
                        $mensagem = "Compra de " . $valor . " reais realizada com sucesso!";
                    } else {
                        $mensagem = "Saldo insuficiente para realizar a compra!";
                    }
                }
            } else {
                $mensagem = "Por favor, insira um valor numérico válido.";
            }

            // Exibe a mensagem de retorno
            echo "<p>" . $mensagem . "</p>";
        }
        ?>

        <h2 class="mt-5">Saldo atual: <?php echo $caixa->getSaldo(); ?> reais</h2>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="text" class="form-control" id="valor" name="valor" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="comprar">Retirar</button>
            <button type="submit" class="btn btn-success" name="pagar">Pagar com PIX</button>
        </form>
    </div>
        </div>
    </div>


    


    </main>
</body>

</html>