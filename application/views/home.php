<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rafael Lana – Front-End Developer</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">

      <a class="navbar-brand" href="#">Rafael Lana</a>

      <button class="navbar-toggler border-0 shadow-none" type="button"
        data-bs-toggle="collapse" data-bs-target="#navMenu"
        aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-list text-white fs-4"></i>
      </button>

      <div class="collapse navbar-collapse justify-content-end gap-2" id="navMenu">
        <ul class="navbar-nav align-items-lg-center gap-1 me-3">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link " href="#">Projetos</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Sobre</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
        </ul>
        <a href="#" class="btn-hire">Hire Me</a>
      </div>

    </div>
  </nav>
  <section class="hero">
    <div class="container">

      <p class="hero-greeting">Olá, meu nome é Rafael Lana</p>

      <div class="hero-headline-row">
        <span class="hero-title-white">Front-End</span>

        <!-- Social Icons -->
        <div class="hero-social-icons">
          <a href="#" class="social-icon-btn" title="Portfolio">
            <img src="<?php echo base_url('assets/img/github.png'); ?>" alt="Portfolio Icon" class="social-icon">
            <img src="<?php echo base_url('assets/img/linkdlen.png'); ?>" alt="Portfolio Icon" class="social-icon">
            <img src="<?php echo base_url('assets/img/instagram.png'); ?>" alt="Portfolio Icon" class="social-icon">
          </a>
        </div>
      </div>

      <span class="hero-title-purple">Developer</span>

      <p class="hero-desc">
        Desenvolvedor focado em criar experiências digitais memoráveis e
        interfaces de alta performance que conectam marcas e pessoas.
      </p>

    </div>
  </section>
  <section class="projetos">
    <img src="<?php echo base_url('assets/img/degrade-fundo-1.png'); ?>" alt="" class="fundo-img">

    <div class="projetos-wrapper">

      <!-- Título no topo, largura total -->
      <h2 class="projetos-titulo">Projetos</h2>

      <!-- Linha das imagens + descrições abaixo -->
      <div class="projetos-colunas">

        <!-- Esquerda -->
        <div class="projeto-item">
          <img src="<?php echo base_url('assets/img/not-cel.png'); ?>" alt="Projeto 1" class="projeto-img">
          <div class="descricao">
            <h3>King Burguer</h3>
            <div class="techs">
              <span>HTML</span><span>CSS</span><span>JS</span>
            </div>
            <p>Landing page de hamburgueria desenvolvida com</p>
            <a href="https://rafaellanads.github.io/KingBurguer/" target="_blank" class="btn-projeto">
              <img src="<?php echo base_url('assets/img/github.png'); ?>" alt="GitHub">
              Projeto
            </a>
          </div>
        </div>

        <!-- Direita -->
        <div class="projeto-item">
          <img src="<?php echo base_url('assets/img/not-cel-lado-direito.png'); ?>" alt="Projeto 2" class="projeto-img">
          <div class="descricao">
            <h3>Ecommerce</h3>
            <div class="techs">
              <span>React</span><span>Node</span><span>CSS</span>
            </div>
            <p>Loja virtual com listagem de produtos e carrinho<p>            
            <a href="https://rafaellanads.github.io/KingBurguer/" target="_blank" class="btn-projeto">
              <img src="<?php echo base_url('assets/img/github.png'); ?>" alt="GitHub">
              Projeto
            </a>
          </div>
        </div>
        
      </div>
      <div class="projetos-colunas">

        <!-- Esquerda -->
        <div class="projeto-item">
          <img src="<?php echo base_url('assets/img/not-cel.png'); ?>" alt="Projeto 1" class="projeto-img">
          <div class="descricao">
            <h3>King Burguer</h3>
            <div class="techs">
              <span>HTML</span><span>CSS</span><span>JS</span>
            </div>
            <p>Landing page de hamburgueria desenvolvida com</p>
            <a href="https://rafaellanads.github.io/KingBurguer/" target="_blank" class="btn-projeto">
              <img src="<?php echo base_url('assets/img/github.png'); ?>" alt="GitHub">
              Projeto
            </a>
          </div>
        </div>

        <!-- Direita -->
        <div class="projeto-item">
          <img src="<?php echo base_url('assets/img/not-cel-lado-direito.png'); ?>" alt="Projeto 2" class="projeto-img">
          <div class="descricao">
            <h3>Ecommerce</h3>
            <div class="techs">
              <span>React</span><span>Node</span><span>CSS</span>
            </div>
            <p>Loja virtual com listagem de produtos e carrinho<p>            
            <a href="https://rafaellanads.github.io/KingBurguer/" target="_blank" class="btn-projeto">
              <img src="<?php echo base_url('assets/img/github.png'); ?>" alt="GitHub">
              Projeto
            </a>
          </div>
        </div>
        
      </div>

      <div class="projetos-colunas">

        <!-- Esquerda -->
        <div class="projeto-item">
          <img src="<?php echo base_url('assets/img/not-cel.png'); ?>" alt="Projeto 1" class="projeto-img">
          <div class="descricao">
            <h3>King Burguer</h3>
            <div class="techs">
              <span>HTML</span><span>CSS</span><span>JS</span>
            </div>
            <p>Landing page de hamburgueria desenvolvida com</p>
            <a href="https://rafaellanads.github.io/KingBurguer/" target="_blank" class="btn-projeto">
              <img src="<?php echo base_url('assets/img/github.png'); ?>" alt="GitHub">
              Projeto
            </a>
          </div>
        </div>

        <!-- Direita -->
        <div class="projeto-item">
          <img src="<?php echo base_url('assets/img/not-cel-lado-direito.png'); ?>" alt="Projeto 2" class="projeto-img">
          <div class="descricao">
            <h3>Ecommerce</h3>
            <div class="techs">
              <span>React</span><span>Node</span><span>CSS</span>
            </div>
            <p>Loja virtual com listagem de produtos e carrinho<p>            
            <a href="https://rafaellanads.github.io/KingBurguer/" target="_blank" class="btn-projeto">
              <img src="<?php echo base_url('assets/img/github.png'); ?>" alt="GitHub">
              Projeto
            </a>
          </div>
        </div>
        
      </div>

    </div>
  </section>

  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/js/projetos.js'); ?>"></script>
</body>

</html>