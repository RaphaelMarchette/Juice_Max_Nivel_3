<?php

    if(isset($_POST['submit']))
    {

        include_once('../../config.php');

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        $qtd = $_POST['qtd'];
        $acompanha = $_POST['acompanha'];

        $result = mysqli_query($conexao, "INSERT INTO sucos (id,nome,valor,quantidade,acomp_fk) VALUES ('$id','$nome','$valor','$qtd','$acompanha')");

        header('Location: enter.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 4vh;
            left: 50vh;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 30rem;
        }

        .Box_direita{
            color: white;
            position: absolute;
            top: 45.3%;
            left: 30%;
            padding: 15px;
            border-radius: 15px;
            width: 15rem;
        }

        .Box_direita_2{
            color: white;
            position: absolute;
            top: 45.3%;
            left: 45%;
            padding: 15px;
            border-radius: 15px;
            width: 15rem;
        }

        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            letter-spacing: 2px;
            width: 18rem;
            display: inline-block;
        }

        .inputUser_2{
            background: none;
            border: none;
            outline: none;
            color: white;
            font-size: 15px;
            letter-spacing: 2px;
            width: 18rem;
            display: inline-block;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput,
        .inputUser_2:valid ~ .labelInput,
        .inputUser_2:focus ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }

        .acompanha{
            font-family: Arial, Helvetica, sans-serif;


            background-color: dodgerblue;
            border-radius: 8px;
            font-size: 1.4rem;
            color:yellow;

        }

        #bt_voltar{
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

        #bt_voltar:hover{
            background-color: dodgerblue;
        }


        #id{
            width:5rem;
        }

        #nome{
            width:28rem;
        }

        #valor{
            width:5rem;
        }

        #batido{
            width:5rem;
        }

        #fruta_1,#fruta_2,#fruta_3,#fruta_4,#fruta_5{
            width:20rem;
        }

        #peso_1,#peso_2,#peso_3,#peso_4,#peso_5{
            width:5rem;
        }

        #valor_1,#valor_2,#valor_3,#valor_4,#valor_5{
            width:5rem;
        }

        .travado{
            position: absolute;
            top: -20px;
            left: 0px;
            font-size: 12px;
            color: dodgerblue;
        }

    </style>
</head>
<body>
    <div class="box">
        <form action="new_juice.php" method="POST">
            <fieldset>
                <legend><b>New Juice</b></legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="id" id="id" class="inputUser" required>
                    <label for="id" class="labelInput">Id</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required disabled=true>
                    <label for="nome" class="travado">Nome</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="valor" id="valor" class="inputUser" required disabled=true>
                    <label for="valor" class="travado">Valor</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="batido" id="batido" class="inputUser" required>
                    <label for="batido" class="labelInput">Batido</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="fruta_1" id="fruta_1" class="inputUser" required disabled=true>
                    <label for="fruta_1" class="travado">Fruta 1</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="fruta_2" id="fruta_2" class="inputUser" required disabled=true>
                    <label for="fruta_2" class="travado">Fruta 2</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="fruta_3" id="fruta_3" class="inputUser" required disabled=true>
                    <label for="fruta_3" class="travado">Fruta 3</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="fruta_4" id="fruta_4" class="inputUser" required disabled=true>
                    <label for="fruta_4" class="travado">Fruta 4</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="fruta_5" id="fruta_5" class="inputUser" required disabled=true>
                    <label for="fruta_5" class="travado">Fruta 5</label>
                </div>
                <br><br>

                <div class="Box_direita">
                    <div class="inputBox">
                        <input type="text" name="peso_1" id="peso_1" class="inputUser_2" required disabled=true>
                        <label for="peso_1" class="travado">Peso</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="peso_2" id="peso_2" class="inputUser_2" required disabled=true>
                        <label for="peso_2" class="travado">Peso</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="peso_3" id="peso_3" class="inputUser_2" required disabled=true>
                        <label for="peso_3" class="travado">Peso</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="peso_4" id="peso_4" class="inputUser_2" required disabled=true>
                        <label for="peso_4" class="travado">Peso</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="peso_5" id="peso_5" class="inputUser_2" required disabled=true>
                        <label for="peso_5" class="travado">Peso</label>
                    </div>
                    <br><br>
                </div>

                <div class="Box_direita_2">
                    <div class="inputBox">
                        <input type="text" name="valor_1" id="valor_1" class="inputUser_2" required disabled=true>
                        <label for="valor_1" class="travado">Valor</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="valor_2" id="valor_2" class="inputUser_2" required disabled=true>
                        <label for="valor_2" class="travado">Valor</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="valor_3" id="valor_3" class="inputUser_2" required disabled=true>
                        <label for="valor_3" class="travado">Valor</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="valor_4" id="valor_4" class="inputUser_2" required disabled=true>
                        <label for="valor_4" class="travado">Valor</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="valor_5" id="valor_5" class="inputUser_2" required disabled=true>
                        <label for="valor_5" class="travado">Valor</label>
                    </div>
                    <br><br>
                </div>

                <input type="submit" name="submit" id="submit">
            </fieldset>

        </form>
    </div>

    <a href="enter.php" id="bt_voltar">Voltar</a>




<?php
    include_once('../../config.php');

    $sql = "SELECT * FROM frutas ";

    $result = $conexao->query($sql);

?>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Juice Max | Entrada de Estoque</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }

        .table-bg_1{
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 0 0;
            width: 28vw;
            position:absolute;
            top:4vh;
            left: 2vw;
            text-align: center;
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

        #id_voltar_03{
            position:absolute;
            bottom:2rem;
            right:2rem;
            width: 10rem;
            font-size: 1rem;
            text-align: center;
        }
    </style>

    
</head>
<body>




    <div class="m-5">
        <table class="table text-white table-bg_1">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Valor Kg.</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>".$user_data['id']."</td>";
                            echo "<td>".$user_data['nome']."</td>";
                            echo "<td>".$user_data['valor_Kg']."</td>";
                            echo "<td>
                            <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]' title='Editar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                                </svg>
                                </a> 

                                </td>";
                            echo "</tr>";
                        // }
                    }
                    ?>
            </tbody>
        </table>
    </div>











<?php
    include_once('../../config.php');

    $sql_2 = "SELECT * FROM create_new_juice ";

    $result_2 = $conexao->query($sql_2);

?>
    <style>
        .table-bg_2{
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 0 0;
            width: 28vw;
            position:absolute;
            top:4vh;
            right: 2vw;
            text-align: center;
        }

    </style>


</head>
<body>




    <div class="m-5">
        <table class="table text-white table-bg_2">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Valor Kg.</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    while($user_data = mysqli_fetch_assoc($result_2)) {
                            echo "<tr>";
                            echo "<td>".$user_data['id']."</td>";

                            $id_3 = $user_data['nome_fk'];

                            $sql_3 = "SELECT * FROM frutas WHERE id = $id_3 ";
                        
                            $result_3 = $conexao->query($sql_3);

                            while($user_data_3 = mysqli_fetch_assoc($result_3)) {
                                echo "<td>".$user_data_3['nome']."</td>";
                            }

                            $id_4 = $user_data['peso_fk'];

                            $sql_4 = "SELECT * FROM peso WHERE id = $id_4 ";
                        
                            $result_4 = $conexao->query($sql_4);

                            while($user_data_4 = mysqli_fetch_assoc($result_4)) {
                                echo "<td>".$user_data_4['peso']."</td>";
                            }

                            echo "<td>
                            <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]' title='Editar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
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
    document.addEventListener('keydown', function(e) {
        if(e.keyCode == 17){  //  Tecla Ctrl
        document.getElementById("bt_voltar").click();
        }
    });
</script>

</html>
