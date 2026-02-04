<?php
$inicio = date("m-d-Y", strtotime("-7 days"));
$fim = date("m-d-Y");
$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

$dados = json_decode(file_get_contents($url), true);

$moedaEUA = $dados ["value"][0]["cotacaoCompra"];


$moedaBR = $_GET["number7"] ?? 0;
?>

<section >
    <form action="<?= $_SERVER['PHP_SELF'] ?>#ex7" method="get">

        <p>Quantos R$ voce tem na carteira.</p>
        <label for="number">Numero</label>
        <input type="text" name="number7" id="idNumber">

        <input type="submit" value="Enviar">

    </form>
</section>

<?php
$dolar = $moedaBR * $moedaEUA;
$dinheiro = number_format($dolar, 2, ',', '.');
echo "Voce tem US$ $dinheiro";

?>
