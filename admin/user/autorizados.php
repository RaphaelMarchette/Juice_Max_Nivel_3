<?php
    include_once('../../config.php');

    $sql = "SELECT * FROM usuarios ";
    
    $result = $conexao->query($sql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Juice Max | Entrada de Estoque</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }

        .table-bg{
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 0 0;
            width: 40vw;
            position:absolute;
            top:4vh;
            left: 4vw;
        }

        .box-search{
            display: flex;
            gap: .1%;
            position:absolute;
            bottom:2rem;
            left:6vw;
            width: 90vw;
        }

        #id_novo_admin,#bt_voltar{
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

        #id_novo_admin,#bt_voltar:hover{
            background-color: dodgerblue;
        }

        #id_novo_admin{
            top:2rem;
            height:3rem;
        }

    </style>

    
</head>
<body>

    <div class="m-5">
        <table class="table text-white table-bg table-bg-1">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Senha</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                        while($user_data = mysqli_fetch_assoc($result)) {

                            echo "<tr>";
                            echo "<td>".$user_data['nome']."</td>";
                            echo "<td>".$user_data['email']."</td>";
                            echo "<td>*********</td>";
                            echo "<td>
                            <a class='btn btn-sm btn-primary' href='' title='Editar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                                </svg>
                                </a> 
                                <a class='btn btn-sm btn-danger' href='' title='Deletar'>
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

    <a href="new.php" id="id_novo_admin">Novo Admin</a>

    <a href="../admin.php" id="bt_voltar">Voltar</a>f

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
        window.location = 'Entrada_de_estoque.php?search='+search.value;
    };
</script>

<script>
    document.addEventListener('keydown', function(e) {
        if(e.keyCode == 17){  //  Tecla Ctrl
        document.getElementById("bt_voltar").click();
        }
    });
</script>

</html>


