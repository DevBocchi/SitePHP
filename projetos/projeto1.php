<section >
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="number1">Numero</label>
        <input type="number" name="number" id="number1" value="<?= $_GET['number'] ?? '' ?>">
        <input type="submit" value="Enviar">
    </form>
</section>

<?php
// O if abaixo garante que o cálculo só aparece SE o botão foi clicado
if (isset($_GET["number"])) {
    $number = $_GET["number"];
    $lastNumber = $number - 1;
    $nextNumber = $number + 1;

    echo "<p>"; // Organizei num parágrafo para ficar bonito
    echo "Numero escolhido: <strong>$number</strong>.<br>";
    echo "Numero anterior: <strong>$lastNumber</strong>.<br>";
    echo "Numero Posterior: <strong>$nextNumber</strong>.";
    echo "</p>";
}
?>