<?php
$valor11 = $_GET['v11'] ?? 0;
$peso1 = $_GET['p1'] ?? 1;

$valor22 = $_GET['v22'] ?? 0;
$peso2 = $_GET['p2'] ?? 2;
?>

<main>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

        <label for="v11">1º Valor</label>
        <input type="text" name="v11" id="v11" value="<?= $valor11 ?>">

        <label for="p1">1º Peso</label>
        <input type="text" name="p1" id="p1" value="<?= $peso1 ?>">

        <label for="v22">2º Valor</label>
        <input type="text" name="v22" id="v22" value="<?= $valor22 ?>">

        <label for="p2">2º Peso</label>
        <input type="text" name="p2" id="p2" value="<?= $peso2 ?>">

        <input type="submit" value="Calcular Medias">
    </form>
</main>

<section>
    <h2>Resultado Final</h2>
    <?php
    echo "<p>Analisando os valores $valor11 e $valor22</p>";

    $respostaSimples = ($valor11 + $valor22) / 2;

    $produto = ($valor11 * $peso1 + $valor22 * $peso2) / ($peso1 + $peso2);

    $respostaPonderada = number_format($produto, 2, ',', '.');

    echo "<ul><li>Media Aritimetica simples : <strong>$respostaSimples</strong></li>";

    echo "<li>Media Aritimetica Ponderada : <strong>$respostaPonderada</strong></li></ul>";


    ?>
</section>