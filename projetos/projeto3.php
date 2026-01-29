<?php
$atual = date("Y");

$nascimento = $_POST['v1'] ?? 0;
$anoAtual = $_POST['v2'] ?? $atual;

?>

<main>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

        <label for="v1">Em que ano voce nasceu?</label>
        <input type="text" name="v1" id="v1" value="<?= $nascimento ?>">

        <label for="v2">Quer saber sua idade em que ano ? (atualmente estamos em <?= $atual ?>
            )</label>
        <input type="text" name="v2" id="v2" value="<?= $anoAtual ?>">

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
