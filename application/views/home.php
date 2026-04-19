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
            <p>Landing page responsiva de hamburgueria com carrossel, animações e múltiplas seções promocionais</p>
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

  <section class="competencias">
    <div class="competencias-wrapper">

      <h2 class="projetos-titulo">Competências</h2>
      <p class="competencias-sub">Essas são as habilidades e tecnologias que domino:</p>

      <div class="competencias-grid">

        <div class="comp-bloco">
          <div class="comp-icons">
            <img src="<?php echo base_url('assets/img/html.png'); ?>" alt="HTML">
            <img src="<?php echo base_url('assets/img/css.png'); ?>" alt="CSS">
          </div>
          <h3>HTML & CSS</h3>
          <div class="comp-techs">
            <span>HTML5</span><span>CSS3</span>
          </div>
          <p>Criação de interfaces semânticas, responsivas e acessíveis. Domínio de Flexbox, Grid, animações CSS e boas práticas de estruturação de código.</p>
        </div>

        <div class="comp-bloco">
          <div class="comp-icons">
            <img src="<?php echo base_url('assets/img/js.png'); ?>" alt="JavaScript">
            <img src="<?php echo base_url('assets/img/node.png'); ?>" alt="Node.js">
          </div>
          <h3>JavaScript & Node.js</h3>
          <div class="comp-techs">
            <span>JavaScript</span><span>Node.js</span>
          </div>
          <p>Desenvolvimento de interfaces dinâmicas e interativas no front-end, além de APIs e aplicações server-side com Node.js e seus ecossistemas.</p>
        </div>

        <div class="comp-bloco">
          <div class="comp-icons">
            <img src="<?php echo base_url('assets/img/php.png'); ?>" alt="PHP">
            <img src="<?php echo base_url('assets/img/ci.png'); ?>" alt="CodeIgniter">
          </div>
          <h3>PHP & CodeIgniter</h3>
          <div class="comp-techs">
            <span>PHP</span><span>CI3</span><span>CI4</span>
          </div>
          <p>Desenvolvimento back-end com PHP e framework CodeIgniter nas versões 3 e 4. Criação de sistemas MVC, rotas, models, controllers e integração com banco de dados.</p>
        </div>

        <div class="comp-bloco">
          <div class="comp-icons">
            <img src="<?php echo base_url('assets/img/figma.png'); ?>" alt="Figma">
          </div>
          <h3>Figma</h3>
          <div class="comp-techs">
            <span>UI Design</span><span>Protótipo</span>
          </div>
          <p>Criação de wireframes, protótipos interativos e designs de alta fidelidade. Organização de componentes, auto layout e handoff para desenvolvimento.</p>
        </div>

      </div>
    </div>
</section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/js/projetos.js'); ?>"></script>
</body>

</html>