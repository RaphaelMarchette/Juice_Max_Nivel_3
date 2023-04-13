<?php
    session_start();
    include_once('../config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Juice Max | Pagamento</title>
    <style>
        body{
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            color: white;
            text-align: center;
        }

        .box{
            width: 50rem;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
        }

        a{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
        }

        a:hover{
            background-color: dodgerblue;
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="d-flex">
            <a class="navbar-brand" id="id_logado"><?php echo $logado;?></a>
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>
    <br>


    <h1>Juice Max</h1>
    <h2>Esta área é restrita para administrador do Site...</h2>
    <div class="box">
        <a href="user/autorizados.php">Admins Autorizados</a>
        <a href="vendas/vendas.php">Vendas</a>
        <a href="juice/enter.php">Entrada de Estoque</a>
    </div>
</body>

</html>