<?php
    include_once('config.php');

    $sql_5 = "SELECT * FROM pedido ";
    $result_5 = $conexao->query($sql_5);

    $sql_6 = "SELECT SUM(valor) as subtotal FROM pedido";
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
    <title>Juice Max | Pagamento</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            color: white;
            text-align: center;
        }

        .table-bg-5{
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 0 0;
            width: 41vw;
            position: absolute;
            top: 10%;
            left: 50%;
            transform: translate(-50%,0%);
            text-align: left;
        }

        .table-bg-6{
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 0 0;
            width: 12rem;
            position: absolute;
            top: 10%;
            left: 2%;
            transform: translate(0%,0%);
            font-size: 2rem;
            text-align: center;
        }

        .aba{
            background-color: rgba(0, 0, 0, 0.4);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4rem;
            vertical-align: middle;
        }

        #bt_pedir{
            width: 10rem;
            height: 3.2rem;
            line-height: 1.6rem;
            font-size: 1.6rem;
            position: absolute;
            top:0.3rem;
            right: 1rem;
            left: 1rem;
        }

        .bt_home {
            width: 10rem;
            height: 3.2rem;
            line-height: 1.6rem;
            font-size: 1.6rem;
            position: absolute;
            top:0.3rem;
            right: 1rem;
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
        <div class="aba">
            <a id="bt_pedir" href="sistema.php">Pedir</a>
            <a class="bt_home" href="home.php">home</a>
        </div>

    <br>

    <div class="m-5">
        <table class="table text-white table-bg-5">
            <thead>
                <tr>
                    <th scope="col">Item</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Valor</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $soma_itens = 0;
                    while($user_data = mysqli_fetch_assoc($result_5)) {

                        $soma_itens += 1;

                        echo "<tr>";
                        echo "<td>".$soma_itens."</td>";
                        echo "<td>".$user_data['nome']."</td>";

                        $soma_subs = 'R$ '.number_format($user_data['valor'], 2, ',', '');

                        echo "<td>".$soma_subs."</td>";
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
                    <th scope="col">Sub Total</th>
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

</body>
<script>
    document.addEventListener('keydown', function(e) {
        if(e.keyCode == 32){  //  Tecla Space
        document.getElementById("bt_pedir").click();
        }
    });
</script>
</html>