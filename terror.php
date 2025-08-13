<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing - Terror</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/terror.css">
</head>
<body>
    <header class="navbar">
        <p class="title">TERROR</p>

        <nav>
            <a href="acao.php">Ação</a>
            <a href="estrategia.php">Estratégia</a>
            <a href="terror.php" class="ativo">Terror</a>
        </nav>
    </header>

    <section class="games">
    <div class="card">
        <a href="https://redbarrelsgames.com/games/outlast/" target="_blank">
            <img src="images/outlast.png" alt="Outlast" class="thumbnails">
        </a>
        <p class="description">Outlast é um jogo de survival horror desenvolvido e publicado pela Red Barrels, uma empresa fundada por pessoas previamente envolvidas com alguns jogos eletrônicos, tais como Prince of Persia, Assassin Creed, Tom Clancy's Splinter Cell e Uncharted.  </p>
    </div>

    <div class="card">
        <a href="https://store.steampowered.com/app/319510/Five_Nights_at_Freddys/" target="_blank">
            <img src="images/five.png" alt="Five Nights at Freddy's" class="thumbnails">
        </a>
        <p class="description">Five Nights at Freddy's é um jogo eletrônico independente de survival horror desenvolvido e publicado por Scott Cawthon. </p>
    </div>

    <div class="card">
        <a href="https://www.konami.com/games/silenthill/" target="_blank">
            <img src="images/silent.png" alt="Silent Hill" class="thumbnails">
        </a>
        <p class="description">Silent Hill é uma série de jogos eletrônicos de survival horror e de tiro em terceira pessoa, desenvolvida e publicada pela Konami. </p>
    </div>

    <div class="card">
        <a href="https://www.residentevil.com/7/" target="_blank">
            <img src="images/resident.png" alt="Resident Evil 7" class="thumbnails">
        </a>
        <p class="description">Resident Evil 7: Biohazard, conhecido no Japão como Biohazard 7: Resident Evil é um jogo eletrônico do gênero survival horror produzido pela Capcom e lançado em 24 de janeiro de 2017 para Microsoft Windows, PlayStation 4 e Xbox One, com a versão de PlayStation 4 tendo suporte completo para PlayStation VR.</p>
    </div>

    <div class="card">
        <a href="https://store.steampowered.com/app/739630/Phasmophobia/" target="_blank">
            <img src="images/phasmo.png" alt="Phasmophobia" class="thumbnails">
        </a>
        <p class="description">Phasmophobia é um jogo de terror de sobrevivência independente desenvolvido e publicado pela Kinetic Games. O jogo foi disponibilizado para acesso antecipado por meio da Steam para Microsoft Windows em setembro de 2020, junto com suporte para realidade virtual.</p>
    </div>

    <div class="card">
        <a href="https://store.steampowered.com/app/1543470/Stay_Out_of_the_House/" target="_blank">
            <img src="images/stay.png" alt="Stay Out of the House" class="thumbnails">
        </a>
        <p class="description">Stay out of the House é um simulador realista de fuga de assassinos em série. Você foi sequestrado e mantido em cativeiro na casa de um açougueiro canibal. E é apenas uma questão de tempo até que você vire o jantar. Fuja da maneira que puder.</p>
    </div>
</section>


    <footer>
        <p>By Giovanna Camargo & Leonardo Weber</p>
    </footer>
</body>
</html>