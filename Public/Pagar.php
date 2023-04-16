

<?php include 'Templates/Tela.php' ?>

<div class="aba">
    <a id="bt_pedir" href="Pedir.php">Pedir</a>
    <a id="bt_home" href="home.php">home</a>
</div>





        <?php include 'Templates/Table_View_Pagar.php' ?>


    <a href="../home.php" id="bt_voltar">Voltar</a>


<script>
    document.addEventListener('keydown', function(e) {
    if(e.keyCode == 32){  //  Tecla Space
    document.getElementById("bt_pedir").click();
    }
    });
</script>

