<?php


$p1 = $_GET['p1'] ?? 1;

?>

<main>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">

        <label for="v1">Qual valor voce deseja sacar? (R$)</label>
        <input type="text" name="p1" id="p1" step="5" value="<?= $p1 ?>">

        <p>*Notas disponiveis: R$100, R$50, R$10 e R$5</p>

        <input type="submit" value="Sacar">
    </form>
</main>

<?php


$resto = $p1;


$valor100 = floor($resto / 100);
$resto %= 100;

$valor50 = floor($resto / 50);
$resto %= 50;

$valor10 = floor($resto / 10);
$resto %= 10;

$valor5 = floor($resto / 5);
$resto %= 5;
?>
<section>


    <h2>Saque de R$ <?= $p1?> realizado</h2>
    <p>O caixa eletronico vai te entregar as seguintes notas: </p>


    <ul>
        <li> x<?= $valor100 ?></li>

        <li> x<?= $valor50 ?></li>

        <li> x<?= $valor10 ?></li>

        <li> x<?= $valor5 ?></li>
    </ul>


</section>
