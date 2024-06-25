<?php
// Array com os serviços
$servicos = [
    [
        'titulo' => 'Desenvolvimento Web',
        'descricao' => 'Criação de sites modernos e responsivos para o seu negócio.',
        'imagem' => 'https://via.placeholder.com/400x300?text=Desenvolvimento+Web',
    ],
    [
        'titulo' => 'UX/UI',
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
    <!-- FavIcon -->
    <link rel="icon" href="./src/images/fav.ico" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/styles.css">
    <!-- Importação do Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    
    <!-- Script para adicionar classe de animação após carregar a página -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
      $(document).ready(function() {
        $(".hero-section").addClass("show-animation");
      });
    </script>

    <style>
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
    </style>

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
        <?php
          $tituloFormatado = strtolower(str_replace(' ', '-', $servico['titulo']));
        ?>

        <div class="col-md-4">
          <div class="service-card">
            <!-- Imagem do serviço -->
            <img src="<?=$servico['imagem']?>" class="img-fluid mb-3" alt="<?=$servico['titulo']?>">
            <!-- Título do serviço -->
            <h3><?=$servico['titulo']?></h3>
            <!-- Descrição do serviço -->
            <p><?=$servico['descricao']?></p>
            <!-- Link para abrir o modal do serviço -->
            <a href="#" data-toggle="modal" data-target="#modal-<?= $tituloFormatado?>">Detalhes</a>
          </div>
        </div>

        <!-- Modal para cada serviço -->
        <div class="modal fade" id="modal-<?=$tituloFormatado?>" tabindex="-1" role="dialog" aria-labelledby="modal-<?=$tituloFormatado?>-label" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <!-- Título do modal -->
                <h5 class="modal-title" id="modal-<?=$tituloFormatado?>-label"><?=$servico['titulo']?></h5>
                <!-- Botão para fechar o modal -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!-- Imagem do serviço no modal -->
                <img src="<?=$servico['imagem']?>" class="img-fluid mb-3" alt="<?=$servico['titulo']?>">
                <!-- Descrição do serviço no modal -->
                <p><?=$servico['descricao']?></p>
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
