<?php 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/style/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <title>Noemia Mobile</title>
</head>
<body>
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Transforme Seu Espaço com <br> Móveis Planejados Exclusivos</h1>
            <p>Cada detalhe é pensado para unir design, funcionalidade e sofisticação.</p>
            <div class="hero-buttons">
            <a href="#catalogo" class="btn btn-outline">Ver Catálogo</a>
            <a href="#contato" class="btn btn-primary">Fale Conosco</a>
            </div>
        </div>
    </section>
    <section class="catalogo">
        <div class="container">
            <h2>Nossos Catálogo</h2>
            <p>Confira nossa coleção exclusiva.</p>
            <a href="#orcamento" class="btn btn-orcamento">Faça um Orçamento</a>

            <div class="catalogo-grid">
                <div class="card">
                    <img src="../public/assets/img/area de churrasco.jpg" alt="Móveis Planejados para Gourmet">
                    <h3>Móveis Planejados para Gourmet</h3>
                </div>
                <div class="card">
                    <img src="../public/assets/img/design-de-interiores-de-cozinha-minimalista.jpg" alt="Móveis Planejados para Cozinha">
                    <h3>Móveis Planejados para Cozinha</h3>
                </div>
                <div class="card">
                    <img src="../public/assets/img/sala-de-estar-4.jpg" alt="Móveis Planejados para Jantar">
                    <h3>Móveis Planejados para sala de Jantar</h3>
                </div>
                <div class="card">
                    <img src="../public/assets/img/sala 1.jpg" alt="Móveis Planejados para Sala">
                    <h3>Móveis Planejados para Sala</h3>
                </div>
                <div class="card">
                    <img src="../public/assets/img/quarto1.jpg" alt="Móveis Planejados para Quarto">
                    <h3>Móveis Planejados para Quarto</h3>
                </div>
                <div class="card">
                    <img src="../public/assets/img/area de servico.jpg" alt="Móveis Planejados para Área de Serviços">
                    <h3>Móveis Planejados para Área de Serviços</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="servicos">
        <div class="container">
            <h2>Nossos Serviços</h2>

            <div class="servicos-grid">
            <div class="servico-card">
                <img src="../public/assets/img/icon_ferramenta.png" alt="Móveis Planejados">
                <h3>Móveis Planejados</h3>
                <p>Projetos personalizados para cada ambiente</p>
            </div>

            <div class="servico-card">
                <img src="../public/assets/img/icon_consultoria.png" alt="Consultoria">
                <h3>Consultoria</h3>
                <p>Auxiliamos você na escolha ideal para sua casa</p>
            </div>

            <div class="servico-card">
                <img src="../public/assets/img/icon_caminhão.png" alt="Execução Premium">
                <h3>Execução Premium</h3>
                <p>Entrega rápida e instalação profissional</p>
            </div>
            </div>
        </div>
    </section>

    <section class="carrossel">
        <div class="titulo">
            <h2>Galeria de Projetos</h2>
            <p>Veja alguns de nossos projetos finalizados</p>
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="../public/assets/img/cozinha-com-espaco-pequeno-e-design-moderno.jpg" />
            </div>
            <div class="swiper-slide">
                <img src="../public/assets/img/quarto.jpg" />
            </div>
            <div class="swiper-slide">
                <img src="../public/assets/img/sala-de-estar-4.jpg" />
            </div>
            <div class="swiper-slide">
                <img src="../public/assets/img/design-de-interiores-de-cozinha-minimalista (1).jpg" />
            </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
<section class="depoimentos">
  <div class="container_carrossel">
    <div>
      <h2>Depoimentos</h2>
    </div>

    <div class="depoimentos-carousel">
      <div class="depoimentos-track">
        <!-- Cards -->
        <div class="depoimento-card">
          <p><strong>Ana Silva</strong></p>
          <p>Ótima experiência, entrega rápida e móvel de qualidade!</p>
          <p class="estrelas">★★★★★</p>
        </div>

        <div class="depoimento-card">
          <p><strong>Carlos Souza</strong></p>
          <p>A equipe é super atenciosa e os móveis são lindos!</p>
          <p class="estrelas">★★★★★</p>
        </div>

        <div class="depoimento-card">
          <p><strong>Maria Oliveira</strong></p>
          <p>Os móveis chegaram perfeitos e o atendimento foi excelente.</p>
          <p class="estrelas">★★★★☆</p>
        </div>

        <div class="depoimento-card">
          <p><strong>João Pedro</strong></p>
          <p>Recomendo demais! Qualidade incrível e entrega no prazo.</p>
          <p class="estrelas">★★★★★</p>
        </div>

        <div class="depoimento-card">
          <p><strong>Lucas Lima</strong></p>
          <p>Produto chegou em perfeito estado e a embalagem estava ótima. Atendimento excelente!</p>
          <p class="estrelas">★★★★★</p>
        </div>

        <div class="depoimento-card">
          <p><strong>Mariana Souza</strong></p>
          <p>Fiquei muito satisfeita com a qualidade do móvel. Super recomendo a loja!</p>
          <p class="estrelas">★★★★☆</p>
        </div>

        <!-- duplicados para rolagem infinita -->
        <div class="depoimento-card">
          <p><strong>Ana Silva</strong></p>
          <p>Ótima experiência, entrega rápida e móvel de qualidade!</p>
          <p class="estrelas">★★★★★</p>
        </div>

        <div class="depoimento-card">
          <p><strong>Carlos Souza</strong></p>
          <p>A equipe é super atenciosa e os móveis são lindos!</p>
          <p class="estrelas">★★★★★</p>
        </div>
      </div>
    </div>
  </div>
</section>





    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto", 
        loop: true, 
        rewind:true,
        autoplay: {
            delay: 2500,
            reverseDirection: true,
        },

        loopAdditionalSlides: 3,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 200,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        });

    </script>
</body>
</html>