<?php include 'Templates/Form_New_Juice.php' ?>


<div class="container">
    <div class="container_left">
        <?php include 'Templates/Table_Select_Sucos.php' ?>
        <?php include 'Templates/Table_View_Pagar.php' ?>
    </div>

    <div class="container_center">
        <?php include 'Templates/Table_View_Suco.php' ?>
        <?php include 'Templates/Table_View_Preferencia.php' ?>
        <?php include 'Templates/Table_View_Acrescimo.php' ?>
    </div>

    <div class="container_right">
        <?php include 'Templates/Table_Select_Preferencias.php' ?>
        <?php include 'Templates/Table_Select_Acrescimos.php' ?>
        <a href="enter.php" id="bt_voltar">Voltar</a>
    </div>
</div>