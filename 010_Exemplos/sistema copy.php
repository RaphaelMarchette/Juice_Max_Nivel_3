<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];


    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM sucos WHERE id LIKE '%$data%' or nome LIKE '%$data%' ORDER BY id ";
    }
    else
    {
        $sql = "SELECT * FROM sucos ";
    }


    $sql_2 = "SELECT * FROM marcado ";
    $sql_3 = "SELECT * FROM acrescimos ";
    $sql_4 = "SELECT * FROM acres_ativo ";
    $sql_5 = "SELECT * FROM pedido ";
    $result = $conexao->query($sql);
    $result_2 = $conexao->query($sql_2);
    $result_3 = $conexao->query($sql_3);
    $result_4 = $conexao->query($sql_4);
    $result_5 = $conexao->query($sql_5);
?>


<?php
    include_once('config.php');
    $sql_6 = "SELECT SUM(valor) as subtotal FROM pedido";

    $sql_8 = "SELECT convert(CONVERT(18,2),SUM(valor)) FROM pedido";
    $sql_6 = $conexao->query($sql_6);
    $row = $sql_6->fetch_assoc();
    $soma = $row['subtotal'];
    $soma_m = 'R$ '.number_format($soma, 2, ',', '');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Juice Max | 2023</title>
    <style>
        body{
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            color: white;
            text-align: center;
        }
        .table-bg{
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 0 0;
            width: 30vw;
            position:absolute;
            top:12rem;
            left: 4vw;
        }

        .table-bg-2{
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 0 0;
            width: 30vw;
            position:absolute;
            top:12rem;
            left: 36vw;
        }

        .table-bg-3{
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 0 0;
            width: 30vw;
            position:absolute;
            top:12rem;
            left: 68vw;
        }

        .table-bg-4{
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 0 0;
            width: 30vw;
            position:absolute;
            top:20rem;
            left: 36vw;
        }

        .table-bg-5{
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 0 0;
            width: 41vw;
            position:absolute;
            top:32rem;
            left: 25vw;
        }

        .table-bg-6{
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 0 0;
            width: 15vw;
            position:absolute;
            top:32rem;
            left: 5vw;
            font-size: 2rem;
            text-align: center;
        }

        .table-bg-7{
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 0 0;
            width: 30vw;
            position:absolute;
            top:32rem;
            left: 68vw;
        }

        .box-search{
            display: flex;
            gap: .1%;
            position:absolute;
            top:6rem;
            left:6vw;
            width: 90vw;
        }

        .box{
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


        .btn-success{
            position:absolute;
            top:27rem;
            left:36vw;
            width: 30vw;
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="new_juice.php">New Juice</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>
    <br>
    <?php
        echo "<h1>Bem vindo</h1>";
    ?>
            <?php echo $logado;?>
    <br>
    <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
    </div>
    <div class="m-5">
        <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Batido Com</th>
                    <th scope="col">Valor</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['fk_acomp']."</td>";
                        echo "<td>".$user_data['valor']."</td>";
                        echo "<td>
                            <a class='btn btn-sm btn-primary' href='marcado_save_edit.php?id=$user_data[id]' title='Selecionar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                            </svg>
                        </a>
                            </td>";
                        echo "</tr>";
                    }
                    ?>
            </tbody>
        </table>
    </div>

    <div class="m-5">
        <table class="table text-white table-bg-2">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Valor</th>
                    <th scope="col">                        <a class='btn btn-sm btn-danger' href='delete.php?id=$user_data[id]' title='Deletar'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                            <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                        </svg>
                    </a></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result_2)) {
                        echo "<tr>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['valor']."</td>";
                        echo "<td></td>";
                        echo "</tr>";
                    }
                    ?>
            </tbody>
        </table>
    </div>







    <div class="m-5">
        <table class="table text-white table-bg-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Valor</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result_3)) {
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['valor']."</td>";
                        echo "<td>
                            <a class='btn btn-sm btn-primary' href='acrescimo_save_edit.php?id=$user_data[id]' title='Selecionar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                            </svg>
                        </a>
                            </td>";
                        echo "</tr>";
                    }
                    ?>
            </tbody>
        </table>
    </div>


                        <a class='btn btn-sm btn-success' href='finalizar.php?id=$user_data[id]' title='Selecionar' id='id_finalizar'>Finalizar
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                            </svg>
                        </a>


    <div class="m-5">
        <table class="table text-white table-bg-4">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Valor</th>
                    <th scope="col">                        <a class='btn btn-sm btn-danger' href='acrescimo_delete.php?id=$user_data[id]' title='Deletar'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                            <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                        </svg>
                    </a></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result_4)) {
                        echo "<tr>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['valor']."</td>";
                        echo "<td></td>";
                        echo "</tr>";
                    }
                    ?>
            </tbody>
        </table>
    </div>


    <div class="m-5">
        <table class="table text-white table-bg-5">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Valor</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result_5)) {
                        echo "<tr>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['valor']."</td>";
                        echo "<td>
                        <a class='btn btn-sm btn-danger' href='finalizar_delete.php?id=$user_data[id]' title='Deletar'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                            <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                        </svg>
                    </a>
                        </td>";
                        echo "</tr>";
                    }
                    ?>
            </tbody>
        </table>
    </div>

    
    <div class="m-5">
        <table class="table text-white table-bg-6">
            <thead>
                <tr>
                    <th scope="col">Valor Total</th>
                </tr>
            </thead>
            <tbody>
                <?php

                        echo "<tr>";
                        echo "<td>".$soma_m."</td>";
                        echo "</tr>";

                    ?>
            </tbody>
        </table>
    </div>


    <div class="m-5">
        <table class="table text-white table-bg-7">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Valor</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result_3)) {
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['valor']."</td>";
                        echo "<td>
                            <a class='btn btn-sm btn-primary' href='acrescimo_save_edit.php?id=$user_data[id]' title='Selecionar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                            </svg>
                        </a>
                            </td>";
                        echo "</tr>";
                    }
                    ?>
            </tbody>
        </table>
    </div>



</body>
<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'sistema.php?search='+search.value;
        window.location = 'mm.php?search='+search.value;
    };


</script>


<script>
    document.addEventListener('keydown', function(e) {
        if(e.keyCode == 113){  //  Tecla F2
        document.getElementById("id_finalizar").click();
        }
    });
</script>
</html>