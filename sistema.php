<?php
    include_once('config.php');

    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM select_sucos WHERE id LIKE '%$data%' or nome LIKE '%$data%' ORDER BY id ";

    }
    else
    {
        $sql = "SELECT * FROM select_sucos ";
    }


    $sql_3 = "SELECT * FROM select_acrescimos ";
    $sql_4 = "SELECT * FROM view_acrescimo ";
    $result = $conexao->query($sql);

    $result_3 = $conexao->query($sql_3);
    $result_4 = $conexao->query($sql_4);
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
            width: 28vw;
            position:absolute;
        }

        .table-bg-1{
            top:4vh;
            left: 4vw;
        }

        .table-bg-2{
            top:4vh;
            left: 36vw;
        }

        .table-bg-4{
            top:24vh;
            left: 36vw;
        }

        .table-bg-3{
            top:2rem;
            left: 68vw;
        }

        .box-search{
            display: flex;
            gap: .1%;
            position:absolute;
            bottom:2rem;
            left:6vw;
            width: 90vw;
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
            bottom:2rem;
            left:36vw;
            width: 30vw;
            font-size: 2rem;
        }

        #id_voltar{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
            position:absolute;
            bottom:2rem;
            right:2rem;
            width: 10rem;
            font-size: 1rem;
            text-align: center;
        }

        #id_voltar:hover{
            background-color: dodgerblue;
        }
    </style>
</head>
<body>

    <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-primary" >
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
    </div>


    <div class="m-5">
        <table class="table text-white table-bg table-bg-1">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Batido</th>
                    <th scope="col">Valor</th>
                    <th scope="col">...</th>
                    <th scope="col">qtd.</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)) {


                            echo "<tr>";
                            echo "<td>".$user_data['id']."</td>";
                            echo "<td>".$user_data['nome']."</td>";
                            echo "<td>".$user_data['valor']."</td>";
                            echo "<td>
                                <a class='btn btn-sm btn-primary' href='marcado_save_edit.php?id=$user_data[id]' title='Selecionar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                </svg>
                            </a>
                                </td>";
                            echo "<td>".$user_data['quantidade']."</td>";
                            echo "</tr>";
                        }
                    
                    ?>
            </tbody>
        </table>
    </div>




    <div class="m-5">
        <table class="table text-white table-bg table-bg-3">
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


    <div class="m-5">
        <table class="table text-white table-bg table-bg-4">
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


    <a class='btn btn-sm btn-success' href='finalizar.php?id=$user_data[id]' title='Selecionar' id='id_finalizar'>Fazer Pedido
        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
        </svg>
    </a>



    



    <a href="02_pagamento.php" id="id_voltar">Voltar</a>





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
    };
</script>


<script>
    document.addEventListener('keydown', function(e) {
        if(e.keyCode == 17){  //  Tecla Ctrl
        document.getElementById("id_voltar").click();
        }
    });
</script>

<script>
    document.addEventListener('keydown', function(e) {
        if(e.keyCode == 32){  //  Tecla Space
        document.getElementById("id_finalizar").click();
        }
    });
</script>
</html>