
<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['nome'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="header-left">
                <img id="fsa" src="logo_fsa.png" alt="fsa">
                <h1>Página Inicial</h1>
            </div>
            <div class="box-busca">
                <div class="search-box">
                    <form method="GET" action="pesquisa.html" target="_blank">
                        <input type="text" class="search-box-input" name="query" placeholder="Pesquisar">
                        <button type="submit" class="search-box-button"><i class="search-box-icone icon icon-search"></i></button>
                    </form>
                </div>
                <button id="feedbackButton">Feedback</button>
            </div>
        </div>
    </header>
    <div class="content">
        <aside class="sidebar">
            <nav>
                <ul>
                    <li><a href="home.php" id="home">Página Inicial</a></li>
                    <li><a href="perfil.php" id="profile">Ver Perfil</a></li>
                </ul>
            </nav>
        </aside>
        <main>
            <section id="home-section">
                <div class="card" onclick="window.location.href='cadastro_tag.html';">
                    <div class="card-content">
                        <h4><b>Cadastro de um chaveiro TAG</b></h4>
                        <p>Guia de cadastro de um chaveiro TAG no sistema iModulo iMonitoramento. Este documento orienta você em cada etapa do processo para configurar seu dispositivo</p> 
                    </div>
                </div>
            </section>
            <section id="search-section" class="hidden">
                <h1>Pesquisa</h1>
            </section>
        </main>
    </div>
    <!-- Formulário de Feedback -->
    <div id="feedbackForm" class="feedback-form">
        <div class="feedback-content">
            <span class="close-button" id="closeButton">&times;</span>
            <h2>Deixe seu Feedback</h2>
            <form>
                <textarea placeholder="Digite seu feedback aqui..." rows="4"></textarea>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>

    <script src="scripts.js"></script>
    <script src="script.js"></script>
</body>
</html>