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
    <title>Landing - Ação</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/acao.css">
</head>
<body>
    <header class="navbar">
        <p class="title">AÇÃO</p>

        <nav>
            <a href="acao.php" class="ativo">Ação</a>
            <a href="estrategia.php">Estratégia</a>
            <a href="terror.php">Terror</a>
        </nav>
    </header>

    <section class="games">
    <div class="card">
    <a href="https://www.fortnite.com/" target="_blank">
        <img src="images/fortnite.png" alt="Fortnite" class="thumbnails">
    </a>
    <p class="description">Fortnite é um jogo eletrônico multijogador online revelado originalmente em 2011, desenvolvido pela Epic Games e lançado como diferentes modos de jogo que compartilham a mesma jogabilidade e motor gráfico de jogo.</p>
</div>

<div class="card">
    <a href="https://www.counter-strike.net/cs2" target="_blank">
        <img src="images/csgo.png" alt="CS:GO" class="thumbnails">
    </a>
    <p class="description">Counter-Strike: Global Offensive (CS:GO) foi um jogo online desenvolvido pela Valve Corporation e pela Hidden Path Entertainment, sendo uma sequência de Counter-Strike: Source. É o quarto título principal da franquia.</p>
</div>

<div class="card">
    <a href="https://www.callofduty.com/" target="_blank">
        <img src="images/callofduty.png" alt="Call of Duty" class="thumbnails">
    </a>
    <p class="description">Call of Duty é uma série de jogos eletrônicos de tiro em primeira pessoa. O primeiro título da série foi lançado em 2003 exclusivamente para computadores. Mais tarde a série se expandiu para os mais variados sistemas, consoles, portáteis e smartphones. </p>
</div>

<div class="card">
    <a href="https://www.mortalkombat.com/" target="_blank">
        <img src="images/mortalkombat.png" alt="Mortal Kombat" class="thumbnails">
    </a>
    <p class="description">Mortal Kombat é uma franquia americana de jogos eletrônicos de luta originalmente desenvolvidos e publicados pela Midway Games com seu primeiro lançamento em 1992 para arcades. Em 2011, depois da falência da Midway Games, a produção de Mortal Kombat foi adquirida pela Warner Bros. </p>
</div>

<div class="card">
    <a href="https://www.brawlhalla.com/" target="_blank">
        <img src="images/brawlhalla.png" alt="Brawlhalla" class="thumbnails">
    </a>
    <p class="description">Brawlhalla é um jogo de luta de plataforma gratuito desenvolvido pela Blue Mammoth Games. Foi lançado originalmente para macOS, PlayStation 4 e Windows em 2017, com versões para Nintendo Switch, Xbox One, Android e iOS lançadas posteriormente. </p>
</div>

<div class="card">
    <a href="https://www.ubisoft.com/game/assassins-creed" target="_blank">
        <img src="images/assassinscreed.png" alt="Assassin's Creed" class="thumbnails">
    </a>
    <p class="description">Assassin's Creed é uma série de jogos eletrônicos do gênero ação-aventura e RPG desenvolvida e publicada pela empresa Ubisoft.</p>
</div>

    </section>

    <footer>
        <p>By Giovanna Camargo & Leonardo Weber</p>
    </footer>
</body>
</html>