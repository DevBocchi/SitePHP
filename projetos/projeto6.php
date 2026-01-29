<?php


$d1 = $_POST['v1'] ?? 0;
$d2 = $_POST['reajuste'] ?? 0;
?>

<main>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

        <label for="v1">Preço do produto (R$)</label>
        <input type="text" name="v1" id="v1" value="<?= $d1 ?>">

        <!-- BARRA DE REAJUSTE -->
        <label for="reajuste">
            Qual será o percentual de reajuste? (<span id="valor"><?= $d2 ?>%</span>)
        </label>
        <input
            type="range"
            name="reajuste"
            id="reajuste"
            min="0"
            max="100"
            value="0"
        >

        <input type="submit" value="Reajustar?">
    </form>
</main>

<script>
    const slider = document.getElementById("reajuste");
    const valor = document.getElementById("valor");

    slider.addEventListener("input", () => {
        valor.textContent = slider.value + "%";
    });
</script>


<section>
    <h2>Resultado do Reajuste</h2>
    <?php
    $reajuste = $d1 + ($d1 * $d2 / 100);

    echo "<p> O produto que custava $d1, com <strong> $d2 de aumento </strong> vai passar a custar $reajuste a partir de agora.";


    ?>
</section>
