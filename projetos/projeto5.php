<?php
$valor5 = $_GET['v5'] ?? 0;

$salarioMinimo = 1621

?>

<section >
    <form action="<?= $_SERVER['PHP_SELF'] ?>#ex5" method="get">

        <label for="v5">Salario (R$)</label>
        <input type="text" name="v5" id="v5" value="<?= $valor5 ?>">

        <p>Considere o salario minimo de R$<?= $salarioMinimo ?></p>

        <input type="submit" value="Calcular">
    </form>
</section>

<section>
    <h2>Resultado Final</h2>
    <?php
    $total = $valor5 / $salarioMinimo;
    $resto = $valor5 % $salarioMinimo;

    echo "Quem recebe um salario de R$ " . $valor5 .
        " ganha <strong> R$ " . ceil($total) . " salários mínimos</strong> + R$ " . $resto;


    ?>
</section>
