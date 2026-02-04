<?php
$atual = date("Y");

$nascimento = $_POST['v3'] ?? 0;
$anoAtual = $_POST['v32'] ?? $atual;

?>

<main>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

        <label for="v1">Em que ano voce nasceu?</label>
        <input type="text" name="v3" id="v3" value="<?= $nascimento ?>">

        <label for="v2">Quer saber sua idade em que ano ? (atualmente estamos em <?= $atual ?>)</label>

        <input type="text" name="v32" id="v32" value="<?= $anoAtual ?>">

        <input type="submit" value="Qual sera a minha idade?">


    </form>
</main>

<section>
    <h2>Resultado Final</h2>
    <?php

    $idade = $anoAtual - $nascimento;

    echo "Quem nasceu em <strong>$nascimento</strong> vai ter <strong>$idade</strong> anos em <strong>$anoAtual</strong>";


    ?>
</section>
