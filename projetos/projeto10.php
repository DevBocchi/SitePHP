<?php $numero = $_GET["number"] ?? 0;?>

<section>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

        <p>Digite um numero real.</p>
        <label for="number">Numero</label>
        <input type="number" name="number" id="idNumber" step="0.0001">

        <input type="submit" value="Enviar">

    </form>
</section>

<?php
echo "<p>Analisando o numero <strong>" . number_format($numero, 3, ",", ".") . "</strong> informado pelo usuario</p>";

$inteiro = (int)$numero;
$resto = $numero - $inteiro;

echo "<ul><li>A parte inteira do numero <strong>" . number_format($inteiro, 0, ",", ".") . "</strong></li>";
echo "<li>A parte fracionaria do numero e <strong>" . number_format($resto, 3, ",", ".") . "</strong></li></ul>";
?>
