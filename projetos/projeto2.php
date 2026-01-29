<?php
$valor3 = $_GET['v3'] ?? 0;
$valor2 = $_GET['v2'] ?? 1;

?>

<main>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="v3">Dividendo</label>
        <input type="text" name="v3" id="v3" value="<?= $valor3 ?>">

        <label for="v2">Divisor</label>
        <input type="text" name="v2" id="v2" value="<?= $valor2 ?>">

        <input type="submit" value="Analisar">

    </form>
</main>

<section>
    <h2>Estrutura da Divisão</h2>
    <?php
    $divisao = (int)$valor3 / $valor2;
    $resto = $valor3 % $valor2;

    echo "Dividendo: $valor3 <br>";
    echo "Divisor: $valor2 <br>";
    echo "Resto: $resto <br>";
    echo "Quociente: $divisao <br>";
    ?>


</section>
