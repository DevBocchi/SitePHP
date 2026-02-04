<?php

$numero = $_GET["number10"] ?? 0;
?>

    <section id="ex10">

        <form action="<?= $_SERVER['PHP_SELF'] ?>#ex10" method="get">

            <p>Digite um numero real.</p>
            <label for="idNumber">Numero</label>
            <input type="number" name="number10" id="idNumber" step="0.0001" value="<?= $numero ?>">

            <button type="submit">Enviar</button>

        </form>
    </section>

<?php

if(isset($_GET['number10'])){
    echo "<p>Analisando o numero <strong>" . number_format($numero, 3, ",", ".") . "</strong> informado pelo usuario</p>";

    $inteiro = (int)$numero;
    $resto = $numero - $inteiro;

    echo "<ul><li>A parte inteira do numero <strong>" . number_format($inteiro, 0, ",", ".") . "</strong></li>";
    echo "<li>A parte fracionaria do numero e <strong>" . number_format($resto, 3, ",", ".") . "</strong></li></ul>";
}
?>