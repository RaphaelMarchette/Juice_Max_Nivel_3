<?php
    if(!empty($_GET['id']))
    {
        include_once('../../../config.php');

        $id_frutas = $_GET['id'];

        $sqlSelect = "SELECT * FROM frutas WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $id_fk = $user_data['id'];
                $valor = $user_data['valor'];
            }

            $sqlInsert = "UPDATE create_juice_ativo SET nome='$id_fk', valor='$valor' WHERE id='1'";
            $result = $conexao->query($sqlInsert);
            header('Location: ../new.php');
        }
        else
        {
            header('Location: ../new.php');
        }
    }
    else
    {
        header('Location: ../new.php');
    }

?>