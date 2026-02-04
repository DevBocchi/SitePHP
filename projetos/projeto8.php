<?php
$valor8 = $_GET['v8'] ?? 0;
?>
<section  >
    <form action="<?= $_SERVER['PHP_SELF'] ?>#ex8" method="get">

        <label for="v8">Numero</label>
        <input type="text" name="v8" id="v8" value="<?= $valor8 ?>">

        <input type="submit" value="Calcular raizes">
    </form>
</section>

<section>
    <h2>Resultado Final</h2>
    <?php
    $raizQuadrada = sqrt($valor8);
    $raizCubica = pow($valor8, 1 / 3);

    $formatQuadrada = number_format($raizQuadrada, 3, ',', '.');
    $formatCubica = number_format($raizCubica, 3, ',', '.');

    echo "Analisando o <strong>numero $valor8</strong>.";
    echo "<ul><li>A sua raiz quadrada é <strong>$formatQuadrada.</strong></li>";
    echo "<li>A sua raiz cubica é <strong>$formatCubica.</strong></li></ul>";
    ?>
</section>
