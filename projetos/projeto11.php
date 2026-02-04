<?php
$valor11 = $_GET['v11'] ?? 0;
$peso1 = $_GET['p11'] ?? 1;

$valor22 = $_GET['v22'] ?? 0;
$peso2 = $_GET['p22'] ?? 2;
?>

<section>
    <form action="<?= $_SERVER['PHP_SELF'] ?>#ex11" method="get">

        <label for="v11">1º Valor</label>
        <input type="text" name="v11" id="v11" value="<?= $valor11 ?>">

        <label for="p1"><br>1º Peso </label>
        <input type="text" name="p11" id="p11" value="<?= $peso1 ?>">

        <label for="v22"><br>2º Valor</label>
        <input type="text" name="v22" id="v22" value="<?= $valor22 ?>">

        <label for="p2"><br>2º Peso</label>
        <input type="text" name="p22" id="p22" value="<?= $peso2 ?>">

        <input type="submit" value="Calcular Medias">
    </form>
</section>

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