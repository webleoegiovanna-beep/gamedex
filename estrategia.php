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
    <title>Landing - Estratégia</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/estrategia.css">
</head>
<body>
    <header class="navbar">
        <p class="title">ESTRATÉGIA</p>

        <nav>
            <a href="acao.php">Ação</a>
            <a href="estrategia.php" class="ativo">Estratégia</a>
            <a href="terror.php">Terror</a>
        </nav>
    </header>

    <section class="games">
        <div class="card">
            <img src="images/clashroyale.png" alt="" class="thumbnails">
            <p class="description">Clash Royale é um videojogo de estratégia freemium desenvolvido e publicado pela Supercell, empresa sediada em Helsinki, na Finlândia.</p>
        </div>

        <div class="card">
            <img src="images/PvZ.png" alt="" class="thumbnails">
            <p class="description">Plants vs. Zombies é um jogo eletrônico de tower defense e estratégia desenvolvido e originalmente publicado pela PopCap Games para Windows e OS X em 5 de maio de 2009. Desde então, foi portado para consoles, portáteis, e dispositivos móveis.</p>
        </div>

        <div class="card">
            <img src="images/LoL.png" alt="" class="thumbnails">
            <p class="description">League of Legends (abreviado como LoL e comumente referido como League) é um jogo eletrônico do gênero multiplayer online battle arena (MOBA) desenvolvido e publicado pela Riot Games.</p>
        </div>

        <div class="card">
            <img src="images/brawlStars.png" alt="" class="thumbnails">
            <p class="description">Brawl Stars é um jogo eletrônico mobile focado nos estilos de arena de batalha, multijogador online e habilidades em terceira pessoa, desenvolvido e publicado pela empresa produtora de jogos Supercell. </p>
        </div>

        <div class="card">
            <img src="images/ClashofClans.png" alt="" class="thumbnails">
            <p class="description">Clash of Clans é um jogo de estratégia desenvolvido pela Supercell, lançado em 2012 para iOS e no ano seguinte para Android. </p>
        </div>

        <div class="card">
            <img src="images/Plague.png" alt="" class="thumbnails">
            <p class="description">Plague Inc: Evolved é um jogo de estratégia e simulação para Windows, distribuído pelo Steam, também disponível para Mac OS X e Linux. No jogo, o jogador cria e desenvolve um agente patogênico com o objetivo de destruir toda a humanidade em uma epidemia global.</p>
        </div>
    </section>

    <footer>
        <p>By Giovanna Camargo & Leonardo Weber</p>
    </footer>
</body>
</html>