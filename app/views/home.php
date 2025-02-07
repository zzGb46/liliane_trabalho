<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- boxicons  -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <!-- AOS  -->

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Swiper  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- slick  -->
  <link rel="stylesheet" type="text/css" href="assets/css/slick.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css" />
  <link rel="stylesheet" href="assets/css/style.css">


  <title>Liliane - Lash Gold </title>
</head>

<body onload="preCarregamento();">



  <div class="pre-carregamento">
    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
    <dotlottie-player src="https://lottie.host/b07732af-8703-442c-bca4-6087ce929963/2JqvCvE1rP.lottie" background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay></dotlottie-player>
  </div>

  <div id="content">

    <header>

      <?php require_once('template/topo.php'); ?>

    </header>

    <main>

      <section id="home">

        <div class="home-container">

          <img src="http://localhost/liliane/public/assets/img/home1.png" alt="">

          <article>
            <!-- <a href="#">Lash Gold </a> -->
            <h2>
              Onde seu talento floresce e sua jornada começa.
            </h2>
            <p>descubra um aprendizado feito com carinho, que valoriza suas habilidades e abre portas para o seu
              futuro. Aqui, cada passo é pensado para transformar sonhos em realidade.</p>


            <ul>
              <li>
                <h3><span id="counter1">10</span>+</h3>
                <p>Anos na beleza</p>
              </li>
              <li>
                <h3> <span id="counter2">4</span> K+</h3>
                <p>Clientes felizes</p>
              </li>
            </ul>

            <div class="seta">
              <div class="float-div" id="floatDiv">
                <i class='bx bxs-chevrons-down'></i>
              </div>
            </div>



          </article>

          <img src="http://localhost/liliane/public/assets/img/home2.png" alt="">

        </div>
      </section>
      <div class="of-height-125 of-height-80"></div>




      <div class="form1">

        <img src="http://localhost/liliane/public/assets/img/form1.svg" data-aos="fade-right" alt="">
      </div>
      <section id="carrossel">

        <div class="alunas-title">
          <h3>Alunas que já fizeram parte <br>
            <p>dessa experiência</p>
          </h3>
        </div>


        <div class="carrousel-container">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">

              <?php foreach ($depoimentos as $depoimento): ?>

                <div class="swiper-slide">
                  <div class="carrousel-img">
                    <img src="<?php
                              $caminhoArquivo = $_SERVER['DOCUMENT_ROOT'] . "/liliane/public/uploads/" . $depoimento['foto_aluno'];

                              if ($depoimento['foto_aluno'] != "") {
                                if (file_exists($caminhoArquivo)) {
                                  echo ("http://localhost/liliane/public/uploads/" . htmlspecialchars($depoimento['foto_aluno'], ENT_QUOTES, 'UTF-8'));
                                } else {
                                  echo ("http://localhost/liliane/public/uploads/aluno/sem-foto-aluno.png");
                                }
                              } else {
                                echo ("http://localhost/liliane/public/uploads/aluno/sem-foto-aluno.png");
                              }
                              ?>" alt="">
                  </div>
                  <div class="carrousel-txt">
                    <ul>
                      <li>
                        <h2><?php echo $depoimento['nome_aluno'] ?></h2>
                      </li>
                      <li>
                        <?php
                        $nota = (int)$depoimento['nota_depoimento']; // Garantir que seja um número inteiro
                        for ($i = 0; $i < $nota; $i++): ?>

                          <i class='bx bxs-star star'></i>
                        <?php endfor; ?>

                      </li>
                      <li>
                        <p>“<?php echo $depoimento['descricao_depoimento'] ?>”</p>
                      </li>
                    </ul>
                  </div>

                </div>



              <?php endforeach ?>
            </div>
            <div class="swiper-button-next"><i class='bx bx-chevrons-right'></i></div>
            <div class="swiper-button-prev"><i class='bx bx-chevrons-left'></i></div>
            <div class="swiper-pagination"></div>
          </div>

        </div>

      </section>
      <div class="form2">
        <img src="http://localhost/liliane/public/assets/img/form2.svg" data-aos="fade-right" alt="">
      </div>



      <div class="of-height-125 of-height-80"></div>

      <section id="service">


        <!-- AREA DE SERVICO - HOME -->
        <div class="service-container container">

          <!--  TEXTO - IMG  -->
          <div class="service-title">
            <h3>Técnicas </h3>
            <h4> Que Encantam</h4>
            <img src="http://localhost/liliane/public/assets/img/sec-shape-1.png" alt="">
          </div>

          <!-- INF SERVICO - SQL -->
          <div class="service-cards">
            <?php foreach ($cursos as $curso): ?>
              <ul>
                <li>
                  <div class="img-fundo">
                    <img class="primeiraImg" src="http://localhost/liliane/public/assets/img/olhos.gif" alt="Fixed Image">
                  </div>

                </li>

                <li>
                  <h4><?php echo $curso['nome_curso'] ?></h4>
                </li>
                <li>
                  <p><?php echo $curso['descricao_curso'] ?></p>
                </li>


                <li>
                  <a href="#">
                    <button class="saiba-mais">Saiba Mais</button>
                  </a>
                </li>

              </ul>


            <?php endforeach ?>

          </div>

        </div>
      </section>

      <div class="of-height-125 of-height-80"></div>

      <!-- SOBRE -->
      <section id="about">
        <div class="about-container container">
          <div class="about-img">
            <div class="fundo-img">
              <img src="http://localhost/liliane/public/assets/img/girassol.svg" alt="" data-aos="fade-up">
            </div>
          </div>
          <div class="about-txt">
            <article>
              <img src="http://localhost/liliane/public/assets/img/lilianee.jpg" alt="">
              <p data-aos="fade-right">Sou Liliane Ferreira, Lash Designer com 7 anos de experiência e especialista em extensão de cílios e lash lifting. Em 2023, comecei a mentorar e já formei mais de 100 alunas. Fui reconhecida como Artista, Empresária e Mentora Destaque.</p>

            </article>
          </div>
        </div>
        <a href="http://localhost/liliane/public/sobre"><button>Saiba Mais</button></a>

        <div class="lets">
          <img src="http://localhost/liliane/public/assets/img/slogan_skin.svg" alt="">
          
        </div>
      </section>





    </main>


    <?php require_once('template/footer.php'); ?>

    <div vw class="enabled">
      <div vw-access-button class="active"></div>
      <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
      </div>
    </div>
    <!-- V-libras  -->
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
      new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>

    <!-- bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>

    <!-- aos  -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Jquery  -->
    <script type="text/javascript" src="//code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!-- ANIMAÇÃO BANNER -->
    <script type="text/javascript" src="assets/js/slick.min.js"></script>

    <!-- Swiper  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- script -->
    <script src="assets/js/script.js"></script>


  </div>


</body>


</html>