<?php
$number = $_POST["number"] ?? 0;
?>
<section>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

        <label for="number">Numero</label>
        <input type="text" name="number" id="number">

        <input type="submit" value="Enviar">

    </form>
</section>
<section>

<?php
    $lastNumber = $number - 1;
    $nextNumber = $number + 1;

    echo "Numero escolhido: $number. <br> <br>";
    echo "Numero anterior: $lastNumber. <br>";
    echo "Numero Posterior: $nextNumber. <br>";

?>
