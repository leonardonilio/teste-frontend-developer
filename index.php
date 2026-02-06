<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FullStack Lab</title>
  <link rel="stylesheet" href="assents/styles.css" />

  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" /><!--Link para pegar os icones usados, como os das redes sociais-->

</head>

<body>

  <!--===================Cabeçalho===================-->
  <header>
    <a href="#" class="logo">Full<span>Stack Lab</span></a>
    <i class="bx bx-menu" id="menu-icon"></i>
    <nav class="navbar">
      <a href="#home" class="active">Inicio</a>
      <a href="#about">Sobre nós</a>
      <a href="#services">Serviços</a>
      <a href="#projects">Projetos</a>
      <a href="#faq">Perguntas Frequentes</a>
      <a href="#reviews-section">Avaliações</a>
    </nav>
    <button class="gradient-btn">
      <a href="#home">Converse Conosco</a></button>

  </header>



  <!--===================Parte inicial===================-->
  <section class="home" id="home">
    <div class="home-content">

      <div id="retorno-form"></div>


      <div class="hero-badge">Telefone:(00)00000-0000</div>

      <h1>
        Transformamos ideias em
        <span>soluções digitais</span>
      </h1>
      <h3>
        Soluções personalizadas em desenvolvimento web para quem não aceita o comum. Design que impressiona, engenharia que funciona.
      </h3>

      <div class="home-img">
        <div class="img-glow">
          <img src="img/logo.png" alt="FullStack Lab">
        </div>
      </div>


    </div>

    <!--===================FORMULÁRIO===================-->
    <div class="home-form">

      <h2><span>Converse Conosco</span></h2>

      <form id="form-home">

        <div class="input-group">
          <div class="input-box">
            <input type="text" id="nome" name="nome" placeholder="Nome Completo" required>
            <input type="tel" id="telefone" name="telefone" placeholder="(00) 00000-0000" minlength="11" maxlength="15" required>
          </div>

          <div class="input-group">
            <input id="email" type="email" name="email" placeholder="Email" required>
          </div>

          <textarea id="ajuda" name="ajuda" placeholder="Como podemos te ajudar?" rows="7"></textarea>
        </div>

        <button type="submit" class="btn">Enviar</button>

        <!-- mensagens AJAX aqui -->
        <div id="retorno-form"></div>

      </form>

      <!--Aqui os icones sociais-->
      <div class="social-icons">
        <p>Canais de Comunicação:</p>
        <a href="https://github.com/leonardonilio">
          <i class="bx bxl-github"></i>
        </a>
        <a href="#">
          <i class="bx bxl-linkedin"></i>
        </a>
        <a href="#">
          <i class="bx bxl-facebook"></i>
        </a>
        <a href="#">
          <i class="bx bxl-instagram"></i>
        </a>
      </div>
    </div>

  </section>

  <!--===================Parte do Sobre===================-->
  <section class="about" id="about">
    <div class="img-glow">
    <div class="about-img" id="about">
      <img src="img/logoPrin.png">
    </div>
</div>
    <div class="about-content">
      <h2> <span>Sobre</span> nós</h2>

      <p>A FullStack Lab é uma empresa especializada em desenvolvimento de soluções digitais sob medida.
        <br>
        Atuamos na criação de sites, sistemas e aplicações que combinam design moderno, tecnologia e estratégia para
        atender às necessidades reais de cada negócio.
        <br>
        <br>
        Nosso foco é entregar produtos digitais com alto padrão de qualidade, priorizando performance, segurança,
        usabilidade e escalabilidade. Trabalhamos com tecnologias atualizadas e boas práticas de desenvolvimento para
        garantir soluções eficientes, estáveis e preparadas para crescer junto com nossos clientes.
        <br>
        <br>
        Mais do que desenvolver projetos, construímos parcerias sólidas e duradouras, oferecendo suporte, evolução
        contínua e acompanhamento em todas as etapas da jornada digital.
      </p>
      <a href="#projects" class="btn">Veja nossos Projetos</a>
    </div>

  </section>



  <!--===================Parte do serviços===================-->
  <section class="services" id="services">

    <h2 class="heading">Serviços</h2>
    <div class="services-container">
      <div class="service-box">
        <div class="service-info">
          <i>
            <img src="img/grid-circle-diagonal-right (1).png" alt="">
          </i>
          <h4>UI/ UX Design</h4>
          <p>Na FullStack Lab, criamos layouts que unem estética e funcionalidade. Nosso trabalho de UI/UX é guiado por
            pesquisa, testes e foco total no usuário, garantindo navegabilidade intuitiva, hierarquia visual clara e
            designs capazes de transformar qualquer ideia em uma experiência marcante.</p>
        </div>
      </div>

      <div class="service-box">
        <div class="service-info">
          <i class="bx bx-code-alt"></i>
          <h4>Desenvolvimento Frontend</h4>
          <p>Na FullStack Lab, desenvolvemos interfaces modernas, responsivas e otimizadas para todos os dispositivos.
            Nosso foco é criar experiências fluidas, rápidas e visualmente atraentes, utilizando tecnologias como HTML,
            CSS, JavaScript e frameworks avançados para entregar produtos que encantam desde o primeiro clique.
          </p>
        </div>
      </div>

      <div class="service-box">
        <div class="service-info">
          <i class="bx bx-bracket-curly">
            <img src="img/bracket-curly (1).png" alt="">
          </i>
          <h4>Desenvolvimento Backend</h4>
          <p>Construímos estruturas robustas e seguras que garantem o funcionamento eficiente de qualquer aplicação. A
            FullStack Lab desenvolve back-ends escaláveis, integrados a bancos de dados e prontos para alto desempenho,
            sempre priorizando segurança, organização e manutenção simples.
          </p>
        </div>
      </div>

    </div>
  </section>

  <!--===================Projetos ficticíos===================-->
  <section class="projects" id="projects">
    <h2 class="heading">Projetos</h2>

    <div class="projects-box">
      <div class="project-card">
        <img src="img/project1.png" alt="">
        <h3>Crafting with AI</h3>
        <p>Um projeto focado em transformar ideias em soluções inteligentes utilizando IA generativa.
          Criamos uma interface futurista que combina tecnologia, arte e interação humana, entregando
          uma experiência visual marcante e moderna. Ideal para empresas que desejam destacar
          inovação e automação em seus serviços.</p>

      </div>

      <div class="project-card">
        <img src="img/project2.png" alt="">
        <h3>Eyebro — Perfect Eyewear Look</h3>
        <p>
          Desenvolvimento de um site moderno e sofisticado para uma marca de óculos premium.
          O layout foca em destacar coleções, depoimentos reais e fotografia de alta qualidade,
          criando uma navegação fluida e elegante que aumenta a confiança do cliente e impulsiona as vendas.
        </p>


      </div>

      <div class="project-card">
        <img src="img/project3.png" alt="">
        <h3>Crypto Trading Platform</h3>
        <p>
          Plataforma completa para negociação de criptomoedas com design escuro, moderno
          e profissional. Criado para transmitir segurança, credibilidade e clareza de dados,
          permitindo ao usuário operar com confiança enquanto acompanha indicadores em tempo real.
        </p>


      </div>

      <div class="project-card">
        <img src="img/project4.png" alt="">
        <h3>Fintech Network Dashboard</h3>
        <p>
          Dashboard dinâmico voltado para soluções fintech, apresentando métricas avançadas,
          design limpo e navegação intuitiva. Seu visual moderno reforça tecnologia e
          confiabilidade, permitindo que empresas acompanhem dados críticos com eficiência
          e precisão.
        </p>


      </div>

      <div class="project-card">
        <img src="img/project5.png" alt="">
        <h3>Digital Marketing Experience</h3>
        <p>
          Um projeto criado para destacar serviços de marketing digital com uma estética leve,
          moderna e elegante. O design minimalista, combinado com elementos visuais fluidos,
          valoriza a criatividade da marca e reforça autoridade no mercado de comunicação e branding.
        </p>


      </div>

      <div class="project-card">
        <img src="img/project6.png" alt="">
        <h3>Playground Z15 — Creative Experience</h3>
        <p>Projeto experimental focado em identidade visual, interação e narrativa digital.
          Criado para explorar novas formas de comunicação entre arte, tecnologia e experiência do usuário, combinando
          design impactante, tipografia expressiva e layout não convencional.</p>

      </div>

    </div>

  </section>



  <!--===================Perguntas Frequentes===================-->
  <section id="faq" class="faq-section">
    <h2>Perguntas <span>Frequentes</span></h2>

    <div class="faq-item">
      <button class="faq-question">Quais serviços a FullStack Lab oferece?</button>
      <div class="faq-answer">
        <p>A FullStack Lab oferece desenvolvimento web completo, interfaces modernas,
          criação de sistemas personalizados e soluções inteligentes para empresas de todos os tamanhos.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">Qual é o prazo médio de entrega dos projetos?</button>
      <div class="faq-answer">
        <p>O prazo varia conforme a complexidade, mas normalmente entregamos
          projetos entre 7 e 30 dias, sempre mantendo comunicação transparente.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">Como funciona o processo de desenvolvimento?</button>
      <div class="faq-answer">
        <p>Trabalhamos com etapas bem definidas: briefing, prototipação, desenvolvimento,
          revisão e entrega final. Você acompanha todo o processo de perto.</p>
      </div>
    </div>
    <div class="faq-item">
      <button class="faq-question">Meu site vai aparecer no Google?</button>
      <div class="faq-answer">
        <p>Sim. Desenvolvemos todos os projetos seguindo boas práticas de SEO, estrutura limpa e performance otimizada,
          aumentando as chances do seu site ser bem indexado e encontrado nos mecanismos de busca.</p>
      </div>
    </div>
    <div class="faq-item">
      <button class="faq-question">Vocês oferecem suporte após a entrega?</button>
      <div class="faq-answer">
        <p>Sim. Oferecemos suporte técnico, manutenção e acompanhamento pós-entrega para garantir estabilidade,
          segurança e evolução contínua do projeto conforme novas necessidades surgirem.</p>
      </div>
    </div>
    <div class="faq-item">
      <button class="faq-question">Meu site será responsivo e otimizado?</button>
      <div class="faq-answer">
        <p>Sim. Todos os projetos são desenvolvidos com design responsivo, compatível com computadores, tablets e
          smartphones, além de otimização de performance e boas práticas de SEO para melhor visibilidade no Google.</p>
      </div>
    </div>
  </section>



<!--===================Avaliações===================-->
  <section class="reviews-section" id="reviews-section">

    <h2 class="heading">Avaliações</h2>

    <!-- FORMULÁRIO PARA CRIAR AVALIAÇÃO -->
    <form id="reviewForm" method="POST" class="contact-form">

      <div class="input-row">
        <div class="input-box">
          <input type="text" name="nome" placeholder="Seu nome" required />
        </div>

        <div class="input-box">
          <select name="estrelas" class="estrelas" required>
            <option value="">Estrelas</option>
            <option value="5">⭐⭐⭐⭐⭐</option>
            <option value="4">⭐⭐⭐⭐</option>
            <option value="3">⭐⭐⭐</option>
            <option value="2">⭐⭐</option>
            <option value="1">⭐</option>
          </select>
        </div>
      </div>

      <div class="input-box textarea-box">
        <textarea name="comentario" rows="6" placeholder="Escreva sua avaliação..." required></textarea>
      </div>

      <button type="submit" class="btn">Enviar Avaliação</button>

    </form>


    <h2 class="heading"><span>O que dizem</span> nossos clientes</h2>
    <!-- Lista de Avaliações-->
    <div class="reviews-container" id="reviewsList">


    </div>

  </section>

<!--===================Parte Final===================-->
  </section>

  <section class="cta-section">
    <div class="cta-container">

      <div class="cta-text">
        <h2>Pronto para dar o <span>próximo passo?</span></h2>
        <p>
          Converse Conosco e conecte-se com nossa equipe de especialistas.
          Vamos compreender seus desafios, mapear oportunidades e desenvolver uma solução estratégica, personalizada e
          orientada a resultados reais para o seu negócio.
        </p>

        <a href="#home" class="btn">
          Fale Conosco
        </a>
      </div>

      <div class="cta-image">
        <img src="img/medium-shot-smiley-colleagues-job.jpg" alt="Equipe em reunião">
      </div>

    </div>
  </section>


<!--===================Rodapé===================-->
  <footer class="footer">
    <div class="social-icons">
      <a href="https://github.com/leonardonilio">
        <i class="bx bxl-github"></i>
      </a>
      <a href="#">
        <i class="bx bxl-linkedin"></i>
      </a>
      <a href="#">
        <i class="bx bxl-facebook"></i>
      </a>
      <a href="#">
        <i class="bx bxl-instagram"></i>
      </a>

    </div>

    <ul class="list">
      <li>
      <a href="#about">Sobre</a>  
      </li>
      <li>
              <a href="#services">Serviços</a>
      </li>
      <li>
        <a href="#projects">Projetos</a>
      </li>
      <li>
        <a href="#faq">Perguntas Frequentes</a>
      </li>
      <li>
        <a href="#reviews-section">Avaliações</a>  
      </li>

    </ul>
    <p class="copyright">Telefone:(00)00000-0000. CNPJ:00.000.000/0000-00. Termos de Uso <br>Full<span>Stack Lab</span>. ©Todos os direitos reservados. 2026</p>
  </footer>

<!--Script e caixa de dialogo-->
  <script src="assents/script.js"></script>
  <div id="alertBox" class="alert hidden">
    <p id="alertMessage"></p>
    <button onclick="closeAlert()">OK</button>
  </div>

</body>

</html>