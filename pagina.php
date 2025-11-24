<?php
session_start();
include "conexao.php";
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Juntos Por Você - Sua doação transforma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    
    <style>
      /* Cores e Tipografia */
      :root {

          --cor-principal: rgb(250, 149, 54); /* Azul Claro/Confiança */
          --cor-secundaria:rgb(65, 126, 32); /* Coral/Laranja Suave para Ação */
          --cor-fundo:rgb(237, 235, 235); /* Branco Off-White para leveza */
          --cor-texto: #333;
          
      }
      body {
          margin: 0;
          padding: 0; 
          box-sizing: border-box;
          background-color: var(--cor-fundo);
          font-family: 'Roboto', sans-serif; /* Fonte moderna e limpa */
          color: var(--cor-texto);
      }
      .navbar {
          box-shadow: 0 2px 4px rgba(0,0,0,0.05); /* Sombra suave */
      }
      .btn-primary {
          background-color: var(--cor-secundaria);
          border-color: var(--cor-secundaria);
          transition: background-color 0.3s;
      }
      .btn-primary:hover {
          background-color: #ff6347; /* Tom um pouco mais escuro ao passar o mouse */
          border-color: #ff6347;
      }
      .card {
          border: none; /* Remove a borda padrão */
          box-shadow: 0 4px 8px rgba(0,0,0,0.05); /* Sombra mais destacada */
          border-radius: 12px;
      }
      .hero-section {
          background-color: var(--cor-principal);
          color: white;
          padding: 6rem 0;
      }
      .titulo-destaque {
        font-weight: 700;
      }
    </style>
  </head>

<body>
    
    <header>
      <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <div class="container">
          <a class="navbar-brand titulo-destaque" href="#">Juntos por Você</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/hunt/contatos.html">Contatos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/hunt/sobrenos.html">Sobre Nós</a>
              </li>
              <li class="nav-item ms-lg-3">
                <a class="btn btn-primary" href="http://localhost/hunt/doacao.html">
                  <i class="bi bi-heart-fill me-1"></i> Doar
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main class="mt-5 pt-4"> 
      
      <section class="hero-section text-center mb-5">
        <div class="container">
          <h1 class="display-4 fw-bold mb-3">Transforme Vidas Hoje.</h1>
          <p class="lead mb-4">Sua doação garante um futuro mais digno para crianças e casas de acolhimento.</p>
          <a href="contatos.html" class="btn btn-lg btn-light text-primary fw-bold shadow-sm">
            Quero Doar Agora!
          </a>
        </div>
      </section>

      <section class="container mb-5">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">
            <div class="card p-4 text-center">
              <div class="card-body">
                <h2 class="card-title h4 mb-3">Comece Sua Jornada de Generosidade!</h2>
                <p class="card-text mb-4">Faça o cadastro para doação de forma rápida e segura. Você escolhe qual ONG apoiar.</p>
                <a href="registrar.php" class="btn btn-primary btn-lg w-75">Cadastrar para Doar</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="container text-center mb-5">
        <h2 class="titulo-destaque mb-4">Como Sua Doação Gera Impacto?</h2>
        <div class="row">
          
          <div class="col-md-4 mb-4">
            <div class="p-3 bg-white card">
              <h3 class="h5 mt-2 titulo-destaque">Chega ao Destino</h3>
              <p class="text-muted">Processo simples e totalmente transparente. Você acompanha a jornada do seu apoio.</p>
            </div>
          </div>
          
          <div class="col-md-4 mb-4">
            <div class="p-3 bg-white card">
              <h3 class="h5 mt-2 titulo-destaque">Apoia Acolhimento</h3>
              <p class="text-muted">Sua contribuição cobre necessidades básicas, educação e lazer de crianças carentes.</p>
            </div>
          </div>
          
          <div class="col-md-4 mb-4">
            <div class="p-3 bg-white card">
              <h3 class="h5 mt-2 titulo-destaque">Acompanhamento</h3>
              <p class="text-muted">Veja os resultados e o crescimento das instituições que você ajuda, em nossa plataforma.</p>
            </div>
          </div>
        </div>
        <a href="sobrenos.html" class="btn btn-outline-secondary mt-3">Saiba mais sobre nosso impacto</a>
      </section>
      <section class="carousel">
  <h2 class="text-center titulo-destaque mb-4">
    Inspiração: A Realidade Que Transformamos
  </h2>
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner text-center">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="image_processing20200201-29235-b84ik9.jpg"
             class="d-block mx-auto carousel-img"
             alt="Crianças interagindo em uma casa de acolhimento.">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="images.jpg"
             class="d-block mx-auto carousel-img"
             alt="Voluntários ajudando em uma atividade social.">
      </div>
      <div class="carousel-item">
        <img src="DSCF8608.jpg"
             class="d-block mx-auto carousel-img"
             alt="Crianças brincando juntas com alegria.">
      </div>
    </div>

    <button class="carousel-control-prev" type="button"
            data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>

    <button class="carousel-control-next" type="button"
            data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
      <span class="visually-hidden">Próximo</span>
    </button>
  </div>
</section>

<style>
.carousel-img {
  width: 100%;
  max-width: 700px;      /* ajuste conforme o layout */
  height: 350px;          /* altura fixa para todas as imagens */
  object-fit: cover;      /* garante corte proporcional sem distorcer */
  border-radius: 15px;
}
</style>

<br></br>
      
      <section class="container mb-5">
        <div class="card mx-auto p-4 text-center" style="max-width: 60rem;">
          <div class="card-body">
            <h2 class="card-title h3 mb-3 titulo-destaque">Seja parte da transformação!</h2>
            <p class="lead">Existem muitas maneiras de contribuir. Qualquer forma de apoio é essencial:</p>
            <div class="row mt-4">
              <div class="col-md-6"><p>✅ Doações Financeiras</p></div>
              <div class="col-md-6"><p>✅ Doações de Materiais</p></div>
              <div class="col-md-6"><p>✅ Seja um Voluntário</p></div>
              <div class="col-md-6"><p>✅ Divulgue nas Redes Sociais</p></div>
            </div>
          </div>
        </div>
      </section>

      <section class="container text-center mb-5">
        <h2 class="titulo-destaque mb-4">Nossas Instituições Parceiras</h2>
        <div class="row justify-content-center align-items-center g-3">
          <div class="col-6 col-md-2 mb-3">
            <img src="https://casavobenedita.org.br/wp-content/uploads/2016/03/logo.png" class="img-fluid opacity-75" alt="Logo Casa Vó Benedita" loading="lazy" href="https://casavobenedita.org.br/">
          </div>
          <div class="col-6 col-md-2 mb-3">
            <img src="https://casadacriancasantoamaro.org.br/site-22/wp-content/uploads/2024/07/ccasa-header-logo.png" class="img-fluid opacity-75" alt="Logo Casa da Criança Santo Amaro" loading="lazy" href="https://casadacriancasantoamaro.org.br/">
          </div>
          <div class="col-6 col-md-2 mb-3">
            <img src="http://abrigoreviver.org/wp-content/uploads/2022/03/logo-abrigo-2024-300x161.png" class="img-fluid opacity-75" alt="Logo Abrigo Reviver" loading="lazy" href="https://abrigoreviver.org/">
          </div>
          <div class="col-6 col-md-2 mb-3">
            <img src="https://static.wixstatic.com/media/7e3834_0e1591707c46413d8c5dbefd8ac180c7~mv2.jpg/v1/fill/w_91,h_96,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/Lalec_25anos_page-0001.jpg" class="img-fluid opacity-75" alt="Logo Lalec" loading="lazy" href="https://www.lalec.com.br/">
          </div>
          <div class="col-6 col-md-2 mb-3">
            <img src="http://larpequenoleao.org.br/wp-content/uploads/2017/12/logo.png" class="img-fluid opacity-75" alt="Logo Lar Pequeno Leão" loading="lazy" href="https://larpequenoleao.org.br/">
          </div>
          <div class="col-6 col-md-2 mb-3">
            <img src="https://adotar.tjsp.jus.br/Content/imagens/LogoTJSP.png" class="img-fluid opacity-75" alt="Logo TJSP" loading="lazy" href="https://www.tjsp.jus.br/">
          </div>
        </div>
      </section>

    </main>

    <footer class="bg-dark text-white text-center py-4">
      <div class="container">
        <p class="mb-2">Juntos Por Você - Unindo corações pela causa da criança e do adolescente.</p>
        <p class="mb-0 small">&copy; <?php echo date("Y"); ?> Todos os direitos reservados. Sua doação faz a diferença.</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </body>
</html>