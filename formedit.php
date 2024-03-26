<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login_index.css">
    <link rel="shortcut icon" href="img/logo.png">
    <title>sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h3>Editar</h3>
                        </div>
                        <div class="card-body">
                            <form action="edit.php" method="POST" enctype="multipart/form-data">
                        <div>
                        <div class="mb-3">
                            <label>Nome </label>
                            <input type="text" name="nome"
                             class="form-control">
                        </div>
                    </div>
                    <div>
                        <div class="mb-3">
                            <label>valor</label>
                            <input type="text" name="valor" 
                            class="form-control">
                        </div>
                    </div>
                  
                   
                       
                            <button type="submit" class="btn btn-dark btn-lg"> Enviar </button>


                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>


</body>

</html>
