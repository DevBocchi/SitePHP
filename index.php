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
    <h1>Bocchi</h1>
    <p>Exercícios e projetos práticos</p>
</header>

<main class="container">
    <section class="projetos">

        <!-- Repete até completar 1 -->
        <div class="card projeto ativo">
            <h3>Mais um, Menos um</h3>
            <div class="subcards">
                <div class="subcard">
                    <?php include "projetos/projeto1.php";?>
                </div>
                <a href="https://github.com/DevBocchi/SitePHP/blob/main/projetos/projeto1.php" target="_blank" class="subcard github-btn">💻 Ver código</a>
            </div>
        </div>

        <!-- Repete até completar 2 -->
        <div class="card projeto ativo">
            <h3>Divisao</h3>
            <div class="subcards">
                <div href="#" class="subcard">
                    <?php include "projetos/projeto2.php";?>
                </div>
                <a href="https://github.com/DevBocchi/SitePHP/blob/main/projetos/projeto2.php" target="_blank"class="subcard">💻 Ver código</a>
            </div>
        </div>

        <!-- Repete até completar 3 -->
        <div class="card projeto ativo">
            <h3>Descubra sua idade</h3>
            <div class="subcards">
                <div href="#" class="subcard">
                    <?php include "projetos/projeto3.php";?>
                </div>
                <a href="https://github.com/DevBocchi/SitePHP/blob/main/projetos/projeto3.php" target="_blank" class="subcard">💻 Ver código</a>
            </div>
        </div>

        <!-- Repete até completar 4 -->
        <div class="card projeto ativo">
            <h3>Sorteiro de numero de 0 a 100</h3>
            <div class="subcards">
                <div href="#" class="subcard">
                    <?php include "projetos/projeto4.php";?>
                </div>
                <a href="https://github.com/DevBocchi/SitePHP/blob/main/projetos/projeto4.php" target="_blank"class="subcard">💻 Ver código</a>
            </div>
        </div>

        <!-- Repete até completar 5 -->
        <div class="card projeto ativo" id="ex5">
            <h3>Salario Min</h3>
            <div class="subcards">
                <div href="#" class="subcard">
                    <?php include "projetos/projeto5.php";?>
                </div>
                <a href="https://github.com/DevBocchi/SitePHP/blob/main/projetos/projeto5.php" target="_blank" class="subcard">💻 Ver código</a>
            </div>
        </div>

        <!-- Repete até completar 6 -->
        <div class="card projeto ativo" id="ex6" >
            <h3>Reajuste de Valor</h3>
            <div class="subcards">
                <div href="#" class="subcard">
                    <?php include "projetos/projeto6.php";?>
                </div>
                <a href="https://github.com/DevBocchi/SitePHP/blob/main/projetos/projeto6.php" target="_blank" class="subcard">💻 Ver código</a>
            </div>
        </div>

        <!-- Repete até completar 7 -->
        <div class="card projeto ativo" id="ex7"    >
            <h3>Conversor de Moedas</h3>
            <div class="subcards">
                <div href="#" class="subcard">
                    <?php include "projetos/projeto7.php";?>
                </div>
                <a href="https://github.com/DevBocchi/SitePHP/blob/main/projetos/projeto7.php" target="_blank" class="subcard">💻 Ver código</a>
            </div>
        </div>

        <!-- Repete até completar 8 -->
        <div class="card projeto ativo" id="ex8">
            <h3>Raiz Quadrada e Cubica</h3>
            <div class="subcards">
                <div href="#" class="subcard">
                    <?php include "projetos/projeto8.php";?>
                </div>
                <a href="https://github.com/DevBocchi/SitePHP/blob/main/projetos/projeto8.php" target="_blank" class="subcard">💻 Ver código</a>
            </div>
        </div>

        <!-- Repete até completar 9 -->
        <div class="card projeto ativo">
            <h3>Calculo de tempo</h3>
            <div class="subcards">
                <div href="#" class="subcard">
                    <?php include "projetos/projeto9.php";?>
                </div>
                <a href="https://github.com/DevBocchi/SitePHP/blob/main/projetos/projeto9.php" target="_blank" class="subcard">💻 Ver código</a>
            </div>
        </div>

        <!-- Repete até completar 10 -->
        <div class="card projeto ativo">
            <h3>Analisador de numero real</h3>
            <div class="subcards">
                <div href="ex10" class="subcard">
                    <?php include "projetos/projeto10.php";?>
                </div>
                <a href="https://github.com/DevBocchi/SitePHP/blob/main/projetos/projeto10.php" target="_blank" class="subcard">💻 Ver código</a>
            </div>
        </div>

        <!-- Repete até completar 11 -->
        <div class="card projeto ativo" id="ex11">
            <h3>Media Aritimetica e Ponderada</h3>
            <div class="subcards">
                <div href="#" class="subcard">
                    <?php include "projetos/projeto11.php";?>
                </div>
                <a href="https://github.com/DevBocchi/SitePHP/blob/main/projetos/projeto11.php" target="_blank" class="subcard">💻 Ver código</a>
            </div>
        </div>

        <!-- Repete até completar 12 -->
        <div class="card projeto ativo">
            <h3>Caixa Eletronico</h3>
            <div class="subcards">
                <div href="#" class="subcard">
                    <?php include "projetos/projeto12.php";?>
                </div>
                <a href="https://github.com/DevBocchi/SitePHP/blob/main/projetos/projeto12.php" target="_blank" class="subcard">💻 Ver código</a>
            </div>
        </div>

    </section>
</main>

<footer class="footer">
    <p>© 2026 - Desenvolvido por Rafael Bocchi</p>
</footer>


</body>
</html>
