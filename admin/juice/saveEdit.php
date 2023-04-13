<?php

    if(isset($_POST['update']))
    {
        include_once('../../config.php');

        $id = $_POST['id'];

        $qtd_entrada = $_POST['quantidade'];

        $sqlSelect = "SELECT * FROM sucos WHERE id=$id";
        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $qtd_atual = $user_data['quantidade'];
            }

            $qtd_atual += $qtd_entrada;
            $sqlInsert = "UPDATE sucos SET quantidade='$qtd_atual'WHERE id='$id'";
            $result = $conexao->query($sqlInsert);
        }
    }

    header('Location: enter.php');

?>