<?php
// Array com os serviços
$servicos = [
    [
        'titulo' => 'Desenvolvimento Web',
        'descricao' => 'Criação de sites modernos e responsivos para o seu negócio.',
        'imagem' => 'https://via.placeholder.com/400x300?text=Desenvolvimento+Web',
    ],
    [
        'titulo' => 'Design Gráfico',
        'descricao' => 'Designs atraentes e personalizados para a sua marca.',
        'imagem' => 'https://via.placeholder.com/400x300?text=Design+Gr%C3%A1fico',
    ],
    [
        'titulo' => 'SEO',
        'descricao' => 'Otimização de sites para motores de busca e aumento de visibilidade.',
        'imagem' => 'https://via.placeholder.com/400x300?text=SEO',
    ],
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevWeb</title>

    <!-- Importação do Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Estilos CSS personalizados -->
    <style>
    body {
      background-color: #0a0a0a;
      color: #e0e0e0;
      font-family: 'Roboto', sans-serif;
    }

    /* Sessão de destaque do site */
    .hero-section {
      position: relative;
      background: url("https://img.freepik.com/vetores-gratis/particula-de-tecnologia-abstrata-realista-de-fundo_23-2148431735.jpg?t=st=1719335190~exp=1719338790~hmac=95e2416b7de884cbc0be64a2252ad28be8c2ca7e00bb750bde87560d4c796ad0&w=740") no-repeat center center;
      background-size: cover;
      color: white;
      height: 90vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .hero-section::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(10, 10, 10, 0.7); /* Fundo escuro com transparência */
      z-index: 0;
    }

    .hero-section .content {
      z-index: 1;
    }

    .hero-section h1 {
      font-size: 4em;
      font-weight: bold;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
      opacity: 0;
      transform: scale(0.8);
      transition: opacity 1s ease, transform 1s ease;
    }

    .hero-section.show-animation h1 {
      opacity: 1;
      transform: scale(1);
    }

    .hero-section h1 span {
      color: #007bff; /* Cor azul para destacar a palavra */
    }

    .hero-section p {
      font-size: 1.5em;
      margin-top: 20px;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
    }

    .btn-outline-primary {
      border-color: #007bff;
      color: #007bff;
      margin-top: 30px;
      padding: 10px 20px;
      font-size: 1.2em;
    }

    .btn-outline-primary:hover {
      background-color: #007bff;
      color: white;
    }

    /* Estilo para a seção de serviços */
    .services-section {
      padding: 60px 0;
      text-align: center;
      background-color: #121212;
    }

    .services-section h2 {
      margin-bottom: 40px;
      font-size: 3em;
      color: #007bff;
      font-weight: bold;
    }

    .service-card {
      margin: 20px 0;
      padding: 30px;
      border: 1px solid #333;
      border-radius: 10px;
      transition: transform 0.3s, box-shadow 0.3s;
      background-color: #1a1a1a;
      cursor: pointer;
    }

    .service-card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .service-card h3 {
      margin-bottom: 20px;
      font-size: 1.5em;
      color: #007bff;
    }

    .service-card p {
      color: #b0b0b0;
    }

    /* Modais */
    .modal-content {
      background-color: #1a1a1a;
      color: #e0e0e0;
    }

    .modal-header {
      border-bottom: none;
      background-color: #121212;
      color: #007bff; /* Cor azul para o texto do cabeçalho */
      padding: 20px;
    }

    .modal-header .close {
      color: #007bff; /* Cor azul para o botão de fechar */
      font-size: 1.5em;
    }

    .modal-header .close:hover {
      color: #0056b3; /* Cor azul mais escura ao passar o mouse */
    }

    .modal-header .modal-title {
      font-size: 2em;
      font-weight: bold;
    }

    .modal-body {
      background-color: #1a1a1a;
      color: #b0b0b0;
    }

    .modal-footer {
      background-color: #121212;
      border-top: none;
    }

    .modal-footer button {
      background-color: #007bff;
      color: white;
      border-radius: 5px;
      font-size: 1.2em;
      border: none;
      transition: background-color 0.3s;
    }

    .modal-footer button:hover {
      background-color: #0056b3;
    }

    /* Estilo para a seção sobre nós */
    .about-section {
      background-color: #181818;
      padding: 60px 0;
    }

    .about-section h2 {
      margin-bottom: 40px;
      font-size: 3em;
      text-align: center;
      color: #007bff;
      font-weight: bold;
    }

    .about-section p {
      font-size: 1.2em;
      color: #b0b0b0;
      text-align: center;
      max-width: 800px;
      margin: 0 auto;
    }

    /* Estilo para a seção de depoimentos */
    .testimonials-section {
      background-color: #121212;
      padding: 60px 0;
      text-align: center;
    }

    .testimonials-section h2 {
      margin-bottom: 40px;
      font-size: 3em;
      color: #007bff;
      font-weight: bold;
    }

    .testimonial-card {
      background-color: #1a1a1a;
      padding: 30px;
      border-radius: 10px;
      margin: 20px;
      border: 1px solid #333;
      color: #b0b0b0;
    }

    .testimonial-card h3 {
      margin-bottom: 20px;
      font-size: 1.5em;
      color: #007bff;
    }

    .testimonial-card p {
      font-style: italic;
    }

    /* Estilo para a seção de contato */
    .contact-section {
      padding: 60px 0;
      text-align: center;
      background-color: #181818;
    }

    .contact-section h2 {
      margin-bottom: 40px;
      font-size: 3em;
      color: #007bff;
      font-weight: bold;
    }

    .contact-form {
      max-width: 800px;
      margin: 0 auto;
      text-align: left;
    }

    .contact-form .form-group {
      margin-bottom: 20px;
    }

    .contact-form label {
      font-size: 1.1em;
      color: #e0e0e0;
    }

    .contact-form .form-control {
      border-radius: 5px;
      padding: 15px;
      font-size: 1.1em;
      background-color: #2c2c2c;
      border: 1px solid #333;
      color: #e0e0e0;
    }

    .contact-form .form-control::placeholder {
      color: #b0b0b0;
    }

    .contact-form button {
      padding: 10px 30px;
      font-size: 1.2em;
      background-color: #007bff;
      border: none;
      border-radius: 5px;
      color: white;
      transition: background-color 0.3s;
    }

    .contact-form button:hover {
      background-color: #0056b3;
    }

    /* Adicionar linhas de grade e outros elementos tecnológicos */
    .grid-lines {
      position: absolute;
      width: 100%;
      height: 100%;
      background: linear-gradient(to right, rgba(255, 255, 255, 0.05) 1px, transparent 1px),
                  linear-gradient(to bottom, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
      background-size: 20px 20px;
      z-index: 0;
    }

    .diagonal-lines {
      position: absolute;
      width: 100%;
      height: 100%;
      background: linear-gradient(45deg, rgba(255, 255, 255, 0.1) 1px, transparent 1px),
                  linear-gradient(-45deg, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
      background-size: 40px 40px;
      z-index: 0;
    }
    </style>

    <!-- Script para adicionar classe após carregar a página -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
      $(document).ready(function() {
        $(".hero-section").addClass("show-animation");
      });
    </script>

</head>
<body>
  <!-- Seção de Destaque (Hero Section) -->
  <section class="hero-section">
    <div class="grid-lines"></div>
    <div class="diagonal-lines"></div>
    <div class="content">
      <h1>Bem-vindo à <span>WebDev</span></h1>
      <p>Transformando Ideias em Realidade Digital</p>
      <a href="#services" class="btn btn-outline-primary">Saiba Mais</a>
    </div>
  </section>

 <!-- Seção de Serviços -->
  <section id="services" class="services-section">
  <div class="container">
    <h2>Serviços</h2>
    <div class="row">
      <?php foreach ($servicos as $servico) { ?>
        <div class="col-md-4">
          <div class="service-card">
            <!-- Imagem do serviço -->
            <img src="<?= $servico['imagem']; ?>" class="img-fluid mb-3" alt="<?= $servico['titulo']; ?>">
            <!-- Título do serviço -->
            <h3><?= $servico['titulo']; ?></h3>
            <!-- Descrição do serviço -->
            <p><?= $servico['descricao']; ?></p>
            <!-- Link para abrir o modal do serviço -->
            <a href="#" data-toggle="modal" data-target="#modal-<?= strtolower(str_replace(' ', '-', $servico['titulo'])); ?>">Detalhes</a>
          </div>
        </div>

        <!-- Modal para cada serviço -->
        <div class="modal fade" id="modal-<?= strtolower(str_replace(' ', '-', $servico['titulo'])); ?>" tabindex="-1" role="dialog" aria-labelledby="modal-<?= strtolower(str_replace(' ', '-', $servico['titulo'])); ?>-label" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <!-- Título do modal -->
                <h5 class="modal-title" id="modal-<?= strtolower(str_replace(' ', '-', $servico['titulo'])); ?>-label"><?= $servico['titulo']; ?></h5>
                <!-- Botão para fechar o modal -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!-- Imagem do serviço no modal -->
                <img src="<?= $servico['imagem']; ?>" class="img-fluid mb-3" alt="<?= $servico['titulo']; ?>">
                <!-- Descrição do serviço no modal -->
                <p><?= $servico['descricao']; ?></p>
              </div>
              <div class="modal-footer">
                <!-- Botão para fechar o modal -->
                <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  </section>


  <!-- Seção Sobre Nós -->
  <section id="about" class="about-section">
    <div class="container">
      <h2>Sobre Nós</h2>
      <p>Somos uma equipe dedicada de desenvolvedores e designers com uma paixão por criar soluções web incríveis. Nossa missão é ajudar empresas a crescerem no ambiente digital com sites de alta qualidade e design inovador.</p>
    </div>
  </section>

  <!-- Seção de Depoimentos -->
  <section id="testimonials" class="testimonials-section">
    <div class="container">
      <h2>Depoimentos</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="testimonial-card">
            <h3>Cliente 1</h3>
            <p>"A WebDev transformou nosso site e nos ajudou a alcançar novos clientes."</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="testimonial-card">
            <h3>Cliente 2</h3>
            <p>"O design gráfico feito pela WebDev elevou nossa marca a outro nível."</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="testimonial-card">
            <h3>Cliente 3</h3>
            <p>"Graças ao trabalho de SEO da WebDev, nosso site está no topo das pesquisas."</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Seção de Contato -->
  <section id="contact" class="contact-section">
    <div class="container">
      <h2>Contato</h2>
      <form class="contact-form">
        <div class="form-group">
          <label for="name">Nome</label>
          <input type="text" class="form-control" id="name" placeholder="Seu nome">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Seu email">
        </div>
        <div class="form-group">
          <label for="message">Mensagem</label>
          <textarea class="form-control" id="message" rows="4" placeholder="Sua mensagem"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </section>

  <!-- Importação dos scripts do Bootstrap e jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
