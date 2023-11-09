<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3df637a2f2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Colégio Estadual Leonardo Da Vinci</title>
</head>
<body>
    <header>
        <div class="menu-content">
            <h1 class="logo"> Colégio Estadual Leonardo Da Vinci</h1>
            <nav class="header-menu">
                <ul class="list-itens">
                    <li><a href="login.php">Área do Professor</a></li>
                    <li><a href="https://www.facebook.com/dvzleonardodavinci"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/dvzleonardodavinci/"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="main-content">
            <h1 class="primary-text">Conheça nossa estrutura!</h1>
            <h2 class="second-text">Seja Bem-Vindo!</h2>
            <div class="btns">
                <button class="btn-personal">Contate-nos</button>
            </div>
        </div>
    </main>  
    <section class="sobre-nos" id="sobrenos"> 
        <div class="main">
            <div class="contentsobre">
                <h2>Sobre a Instituição</h2>
                <p>O Colégio Estadual Leonardo da Vinci oferece educação de qualidade para todos os alunos, desde o ensino infantil até o ensino médio. Oferecemos aulas de línguas, matemática, ciências, história e muito mais. Tudo isso com professores qualificados e uma estrutura física adequada para o aprendizado.</p>
                <br>
                <p>Disponibilizamos acompanhamento pedagógico para a escola, nosso objetivo é ajudar os alunos a serem bem-sucedidos na escola e na vida. Oferecemos acompanhamento em grupo e individual, além de atividades de reforço e de enriquecimento. Tudo isso visando melhorar o desempenho dos alunos.</p>
            </div>     
        </div>    
    </section>
    <section class="contatos" id="contatos">
        <h3>Contatos</h3>
        <div class="contatos-local">
            <div>
                <i class="fas fa-map-marker-alt mr-4"></i>
                <span>AV SALGADO FILHO, 175 CENTRO. 85660-000 Dois Vizinhos - PR.</span>
            </div>
        <br>
        <div class="contatos-telefone">
            <div>
                <i class="fas fa-phone"></i>
                <span>(46) 3536-3913</span>
            </div>
    </section>
</body>
</html>