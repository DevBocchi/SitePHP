<?php
$d1 = $_POST['v9'] ?? 0;
?>

<form action="<?= $_SERVER['PHP_SELF'] ?>#ex9" method="post">
    <label for="v1">Calculadora de Tempo</label>
    <input type="text" name="v9" id="v9" value="<?= $d1 ?>">
    <input type="submit" value="Calcular">
</form>

<section id="ex9">
    <?php if ($d1 > 0): ?>
        <div class="resultado">
            <h4>Totalizando tudo</h4>

            <?php
            $semanas = $d1 / 7;
            $dias = $d1 % 7;
            $horas = $semanas * 24;
            $min = $horas * 60;
            $seg = $min * 60;

            echo "<ul>";
            echo "<li>" . number_format($semanas, 2, ',', '.') . " semanas</li>";
            echo "<li>$dias dias</li>";
            echo "<li>" . number_format($horas, 2, ',', '.') . " horas</li>";
            echo "<li>" . number_format($min, 2, ',', '.') . " minutos</li>";
            echo "<li>" . number_format($seg, 2, ',', '.') . " segundos</li>";
            echo "</ul>";
            ?>
        </div>
    <?php endif; ?>

</section>
