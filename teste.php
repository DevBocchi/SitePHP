<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<header class="header">
    <h1>Projeto Guanabara</h1>
    <p>Exercícios e projetos práticos</p>
</header>

<main class="container">
    <section class="projetos">

        <!-- Repete até completar 1 -->
        <div class="card projeto ativo">

            <h3>Mais um, Menos um</h3>
            <div class="subcards">
                <div href="#" class="subcard">
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
                </div>
                <div href="#" class="subcard">💻 Ver código</div>
            </div>
        </div>

        <!-- Repete até completar 2 -->
        <div class="card projeto ativo">
            <h3>Divisao</h3>
            <div class="subcards">
                <div href="#" class="subcard">
                    <?php
                    $valor1 = $_GET['v1'] ?? 0;
                    $valor2 = $_GET['v2'] ?? 1;

                    ?>

                    <main>
                        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                            <label for="v1">Dividendo</label>
                            <input type="text" name="v1" id="v1" value="<?= $valor1 ?>">

                            <label for="v2">Divisor</label>
                            <input type="text" name="v2" id="v2" value="<?= $valor2 ?>">

                            <input type="submit" value="Analisar">

                        </form>
                    </main>

                    <section>
                        <h2>Estrutura da Divisão</h2>
                        <?php
                        $divisao = (int)$valor1 / $valor2;
                        $resto = $valor1 % $valor2;

                        echo "Dividendo: $valor1 <br>";
                        echo "Divisor: $valor2 <br>";
                        echo "Resto: $resto <br>";
                        echo "Quociente: $divisao <br>";
                        ?>


                    </section>
                </div>
                <a href="#" class="subcard">💻 Ver código</a>
            </div>
        </div>

        <!-- Repete até completar 3 -->
        <div class="card projeto ativo">
            <h3>Descubra sua idade</h3>
            <div class="subcards">
                <div href="#" class="subcard">
                    <?php
                    $atual = date("Y");

                    $nascimento = $_POST['v1'] ?? 0;
                    $anoAtual = $_POST['v2'] ?? $atual;

                    ?>

                    <main>
                        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

                            <label for="v1">Em que ano voce nasceu?</label>
                            <input type="text" name="v1" id="v1" value="<?= $nascimento ?>">

                            <label for="v2">Quer saber sua idade em que ano ? (atualmente estamos em <?= $atual ?>
                                )</label>
                            <input type="text" name="v2" id="v2" value="<?= $anoAtual ?>">

                            <input type="submit" value="Qual sera a minha idade?">
                        </form>
                    </main>

                    <section>
                        <h2>Resultado Final</h2>
                        <?php

                        $idade = $anoAtual - $nascimento;

                        echo "Quem nasceu em <strong>$nascimento</strong> vai ter <strong>$idade</strong> anos em <strong>$anoAtual</strong>";


                        ?>
                    </section>
                </div>
                <a href="#" class="subcard">💻 Ver código</a>
            </div>
        </div>

        <!-- Repete até completar 4 -->
        <div class="card projeto ativo">
            <h3>Sorteiro de numero de 0 a 100</h3>
            <div class="subcards">
                <div href="#" class="subcard">
                    <?php
                    $randNumber = rand(0, 100);

                    echo "o numero gerado foi <strong>$randNumber</strong>.";
                    ?>
                    <button onclick="window.location.href='teste.php'">Sorteio</button>
                </div>
                <a href="#" class="subcard">💻 Ver código</a>
            </div>
        </div>

        <!-- Repete até completar 5 -->
        <div class="card projeto ativo">
            <h3>Salario Min</h3>
            <div class="subcards">
                <div href="#" class="subcard">
                    <?php
                    $valor1 = $_GET['v1'] ?? 0;

                    $salarioMinimo = 1621

                    ?>

                    <main>
                        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

                            <label for="v1">Salario (R$)</label>
                            <input type="text" name="v1" id="v1" value="<?= $valor1 ?>">

                            <p>Considere o salario minimo de R$<?= $salarioMinimo ?></p>

                            <input type="submit" value="Calcular">
                        </form>
                    </main>

                    <section>
                        <h2>Resultado Final</h2>
                        <?php
                        $total = $valor1 / $salarioMinimo;
                        $resto = $valor1 % $salarioMinimo;

                        echo "Quem recebe um salario de R$ " . $valor1 .
                                " ganha <strong> R$ " . ceil($total) . " salários mínimos</strong> + R$ " . $resto;


                        ?>
                    </section>
                </div>
                <a href="#" class="subcard">💻 Ver código</a>
            </div>
        </div>

        <!-- Repete até completar 6 -->
        <div class="card projeto ativo">
            <h3>Reajuste de Valor</h3>
            <div class="subcards">
                <div href="#" class="subcard">
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
                </div>
                <a href="#" class="subcard">💻 Ver código</a>
            </div>
        </div>

        <!-- Repete até completar 7 -->
        <div class="card projeto ativo">
            <h3>Conversor de Moedas</h3>
            <div class="subcards">
                <div href="#" class="subcard">
                    <?php
                    $inicio = date("m-d-Y", strtotime("-7 days"));
                    $fim = date("m-d-Y");
                    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

                    $dados = json_decode(file_get_contents($url), true);

                    $moedaEUA = $dados ["value"][0]["cotacaoCompra"];


                    $moedaBR = $_GET["number"] ?? 0;
                    ?>

                    <section>
                        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

                            <p>Quantos R$ voce tem na carteira.</p>
                            <label for="number">Numero</label>
                            <input type="text" name="number" id="idNumber">

                            <input type="submit" value="Enviar">

                        </form>
                    </section>

                    <?php
                    $dolar = $moedaBR * $moedaEUA;
                    $dinheiro = number_format($dolar, 2, ',', '.');
                    echo "Voce tem US$ $dinheiro";

                    ?>
                </div>
                <a href="#" class="subcard">💻 Ver código</a>
            </div>
        </div>

        <!-- Repete até completar 8 -->
        <div class="card projeto ativo">
            <h3>Raiz Quadrada e Cubica</h3>
            <div class="subcards">
                <div href="#" class="subcard">
                    <?php
                    $valor1 = $_GET['v1'] ?? 0;
                    ?>
                    <main>
                        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

                            <label for="v1">Numero</label>
                            <input type="text" name="v1" id="v1" value="<?= $valor1 ?>">

                            <input type="submit" value="Calcular raizes">
                        </form>
                    </main>

                    <section>
                        <h2>Resultado Final</h2>
                        <?php
                        $raizQuadrada = sqrt($valor1);
                        $raizCubica = pow($valor1, 1 / 3);

                        $formatQuadrada = number_format($raizQuadrada, 3, ',', '.');
                        $formatCubica = number_format($raizCubica, 3, ',', '.');

                        echo "Analisando o <strong>numero $valor1</strong>.";
                        echo "<ul><li>A sua raiz quadrada é <strong>$formatQuadrada.</strong></li>";
                        echo "<li>A sua raiz cubica é <strong>$formatCubica.</strong></li></ul>";
                        ?>
                    </section>
                </div>
                <a href="#" class="subcard">💻 Ver código</a>
            </div>
        </div>

        <!-- Repete até completar 9 -->
        <div class="card projeto ativo">
            <h3>Calculo de tempo</h3>
            <div class="subcards">
                <div href="#" class="subcard">
                    <?php
                    $d1 = $_POST['v1'] ?? 0;
                    ?>

                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                        <label for="v1">Calculadora de Tempo</label>
                        <input type="text" name="v1" id="v1" value="<?= $d1 ?>">
                        <input type="submit" value="Calcular">
                    </form>

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
                </div>
                <a href="#" class="subcard">💻 Ver código</a>
            </div>
        </div>

        <!-- Repete até completar 10 -->
        <div class="card projeto ativo">
            <h3>Analisador de numero real</h3>
            <div class="subcards">
                <div href="#" class="subcard">
                    <?php $numero = $_GET["number"] ?? 0;?>

                    <section>
                        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

                            <p>Digite um numero real.</p>
                            <label for="number">Numero</label>
                            <input type="number" name="number" id="idNumber" step="0.0001">

                            <input type="submit" value="Enviar">

                        </form>
                    </section>

                    <?php
                    echo "<p>Analisando o numero <strong>" . number_format($numero, 3, ",", ".") . "</strong> informado pelo usuario</p>";

                    $inteiro = (int)$numero;
                    $resto = $numero - $inteiro;

                    echo "<ul><li>A parte inteira do numero <strong>" . number_format($inteiro, 0, ",", ".") . "</strong></li>";
                    echo "<li>A parte fracionaria do numero e <strong>" . number_format($resto, 3, ",", ".") . "</strong></li></ul>";
                    ?>
                </div>
                <a href="#" class="subcard">💻 Ver código</a>
            </div>
        </div>

        <!-- Repete até completar 11 -->
        <div class="card projeto ativo">
            <h3>Media Aritimetica e Ponderada</h3>
            <div class="subcards">
                <div href="#" class="subcard">
                    <?php
                    $valor1 = $_GET['v1'] ?? 0;
                    $peso1 = $_GET['p1'] ?? 1;

                    $valor2 = $_GET['v2'] ?? 0;
                    $peso2 = $_GET['p2'] ?? 2;
                    ?>

                    <main>
                        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

                            <label for="v1">1º Valor</label>
                            <input type="text" name="v1" id="v1" value="<?= $valor1 ?>">

                            <label for="p1">1º Peso</label>
                            <input type="text" name="p1" id="p1" value="<?= $peso1 ?>">

                            <label for="v2">2º Valor</label>
                            <input type="text" name="v2" id="v2" value="<?= $valor2 ?>">

                            <label for="p2">2º Peso</label>
                            <input type="text" name="p2" id="p2" value="<?= $peso2 ?>">

                            <input type="submit" value="Calcular Medias">
                        </form>
                    </main>

                    <section>
                        <h2>Resultado Final</h2>
                        <?php
                        echo "<p>Analisando os valores $valor1 e $valor2</p>";

                        $respostaSimples = ($valor1 + $valor2) / 2;

                        $produto = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);

                        $respostaPonderada = number_format($produto, 2, ',', '.');

                        echo "<ul><li><strong>Media Aritimetica simples</strong> entre os valores é igual a <strong>$respostaSimples</strong></li>";

                        echo "<li><strong>Media Aritimetica Ponderada</strong> com pesos <strong>$peso1 e $peso2</strong> é igual a <strong>$respostaPonderada</strong></li></ul>";


                        ?>
                    </section>
                </div>
                <a href="#" class="subcard">💻 Ver código</a>
            </div>
        </div>

        <!-- Repete até completar 12 -->
        <div class="card projeto ativo">
            <h3>Caixa Eletronico</h3>
            <div class="subcards">
                <div href="#" class="subcard">
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
                </div>
                <a href="#" class="subcard">💻 Ver código</a>
            </div>
        </div>

    </section>
</main>

<footer class="footer">
    <p>© 2026 - Desenvolvido por você 🚀</p>
</footer>

<script>
    function toggleSubcards(card) {
        card.classList.toggle("ativo");
    }
</script>

</body>
</html>
