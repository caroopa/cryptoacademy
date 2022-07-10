<?php include("config.php"); ?>

<html>
  <head>
    <meta charset="UTF-8" />
    <title>Crypto Academy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
  <nav>
      <img src="img/logo.png" alt="" class="logo1" />
      <ul class="container-items">
        <li class="item"><a>Nosotros</a></li>
        <li class="item"><a>Profesores</a></li>
        <li class="item"><a>Servicios</a></li>
        <button class="vivo item"><a>VIVO</a></button>
        <button class="login item"><a>Log In</a></button>
      </ul>
      <div class="btn__container">
        <i class="fa-solid fa-bars barra"></i>
      </div>
    </nav>

    <header>
      <div class="titulos">
        <h2>Insertate en el mundo de las</h2>
        <h1>CRYPTO</h1>
        <h2>Convertite en un experto</h2>
        <img src="img/logo.png" alt="" class="logo2">
      </div>
      <video autoplay muted loop> <source src = "img/crypto.mp4" type = "video/mp4">
        Tu navegador no soporta el video</video>
    </header>

    <section id="nosotros">
      <h1>¿Quiénes somos?</h1>
      <div class="container2">
        <img src="./img/logo.png" alt="Logo">
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
          Magnam repellat reiciendis sapiente! Natus corporis suscipit, facere earum aspernatur 
          iure iusto omnis commodi aut quisquam vitae error sed minus velit ea.
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
          Magnam repellat reiciendis sapiente! Natus corporis suscipit, facere earum aspernatur 
          iure iusto omnis commodi aut quisquam vitae error sed minus velit ea.
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
          Magnam repellat reiciendis sapiente! Natus corporis suscipit, facere earum aspernatur 
          iure iusto omnis commodi aut quisquam vitae error sed minus velit ea.
        </p>
      </div>
    </section>

    <section id="profes">
      <h1>Profesores</h1>
      <div class="container_profes">
        <div class="card_profe">
          <img src="img/logo.png" alt="" class="logo3">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde eveniet facere laborum 
            harum earum veritatis, similique corporis aperiam dolorum veniam laudantium exercitationem, 
            quis officiis voluptatum explicabo libero id dolorem cupiditate?</p>
          <p class="nombre">Juan Pérez</p>
        </div>
        <div class="card_profe">
          <img src="img/logo.png" alt="" class="logo3">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde eveniet facere laborum 
            harum earum veritatis, similique corporis aperiam dolorum veniam laudantium exercitationem, 
            quis officiis voluptatum explicabo libero id dolorem cupiditate?</p>
          <p class="nombre">Juan Pérez</p>
        </div>
        <div class="card_profe">
          <img src="img/logo.png" alt="" class="logo3">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde eveniet facere laborum harum 
            earum veritatis, similique corporis aperiam dolorum veniam laudantium exercitationem, quis 
            officiis voluptatum explicabo libero id dolorem cupiditate?</p>
          <p class="nombre">Juan Pérez</p>
        </div>
      </div>
    </section>

    <section id="servicios">
      <h1>Nuestros Servicios</h1>
      <div class="container">
            <div class="card card1">
              <div class="title">
                <img src="img/logo.png" alt="" class="logo" />
                <h2>Bronce</h2>
              </div>
              <div class="price">
                <h4>FREE</h4>
              </div>
              <div class="option">
                <p><i class="fa fa-check check"></i>10 días FREE</p>
                <p><i class="fa fa-check check"></i>Análisis diario</p>
                <p><i class="fa fa-check check"></i>Bibliografía y manuales</p>
                <p><del>Señales</del></p>
                <p><del>Trading en vivo</del></p>
                <p><del>Clases grabadas</del></p>
                <p><del>Soporte L a V</del></p>
                <p><del>Soporte discord</del></p>
                <p><del>Cursos presenciales</del></p>
                <p><del>Clases semanales</del></p>
              </div>
              <form action="pagar.php" method="post">
                <button name="btn" value="free">Suscribirse </button>
              </form>
            </div>
          <!-- END Col one -->

            <div class="card card2">
              <div class="title">
                <img src="img/logo.png" alt="" class="logo" />
                <h2>Plata</h2>
              </div>
              <div class="price">
                <h4><span>U$D</span>30</h4>
              </div>
              <div class="option">
                <p><i class="fa fa-check check"></i>10 días FREE</p>
                <p><i class="fa fa-check check"></i>Análisis diario</p>
                <p><i class="fa fa-check check"></i>Bibliografía y manuales</p>
                <p><i class="fa fa-check check"></i>Señales</p>
                <p><i class="fa fa-check check"></i>Trading en vivo</p>
                <p><i class="fa fa-check check"></i>Clases grabadas</p>
                <p><del>Soporte L a V</del></p>
                <p><del>Soporte discord</del></p>
                <p><del>Cursos presenciales</del></p>
                <p><del>Clases semanales</del></p>
              </div>
              <form action="pagar.php" method="post">
                <button name="btn" value="plata">Suscribirse</button>
              </form>
            </div>
          <!-- END Col two -->

            <div class="card card3">
              <div class="title">
                <img src="img/logo.png" alt="" class="logo" />
                <h2>Oro</h2>
              </div>
              <div class="price">
                <h4><span>U$D</span>50</h4>
              </div>
              <div class="option">
                <p><i class="fa fa-check check"></i>10 días FREE</p>
                <p><i class="fa fa-check check"></i>Análisis diario</p>
                <p><i class="fa fa-check check"></i>Bibliografía y manuales</p>
                <p><i class="fa fa-check check"></i>Señales</p>
                <p><i class="fa fa-check check"></i>Trading en vivo</p>
                <p><i class="fa fa-check check"></i>Clases grabadas</p>
                <p><i class="fa fa-check check"></i>Soporte L a V</p>
                <p><i class="fa fa-check check"></i>Soporte discord</p>
                <p><i class="fa fa-check check"></i>Cursos presenciales</p>
                <p><i class="fa fa-check check"></i>Clases semanales</p>
              </div>
              <form action="pagar.php" method="post">
                <button name="btn" value="oro">Suscribirse </button>
              </form>
            </div
        </div>
    </section>
    <script>
      const menu = document.querySelector('.btn__container');
      const item = document.querySelectorAll('.item');
      const container = document.querySelector(".container-items");

      menu.addEventListener('click', () => {
        container.classList.toggle("show");
        // item.forEach((i) => i.classList.toggle('show'));
      });
    </script>

  </body>
</html>
