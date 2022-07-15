<?php
	include "config2.php";
?>
<?php
	// session_start();

	if(!isset($_SESSION["sesion"])) {
		echo "<script>window.location.href='login.php';</script>";
		die();
	}
	else {
		if($_SESSION["sesion"][3] != 'free') {
			echo "<script>window.location.href='login.php';</script>";
			die();
		}
	}
?>

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
    <a
      href="https://api.whatsapp.com/send?phone=5491131900751"
      class="btn-wsp"
      target="_blank"
    >
      <i class="fa-brands fa-whatsapp wsp"></i>
    </a>

    <nav>
      <img src="img/logo.png" alt="" class="logo1" />
      <ul class="container-items">
        <li class="item"><a href="#nosotros">Nosotros</a></li>
        <li class="item"><a href="#servicios">Servicios</a></li>
        <button class="vivo item"><a class="vivo-link" href="https://www.twitch.tv/cryptoacademygym">VIVO</a></button>
        <!-- <button class="login item">
          <a href="login.php" class="vivo-link">Log In</a>
        </button> -->
				<li>Bienvenido <?php echo $_SESSION["sesion"][0]; ?> (<?php echo $_SESSION["sesion"][3]; ?>)</li>
        <form action="login.php" method="get">
          <button type="submit" name="cerrar_sesion" class="login item">Cerrar Sesión</button>
        </form>
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
        <img src="img/logo.png" alt="" class="logo2" />
      </div>
      <video autoplay muted loop>
        <source src="img/crypto.mp4" type="video/mp4" />
        Tu navegador no soporta el video
      </video>
    </header>

    <section id="suscripciones">
      <h1>Nuestros servicios</h1>
      <div class="container-servicios">
        <img src="img/trading.jpg" alt="" class="trading1" />
        <div class="texto">
          <h3>SEÑALES</h3>
          <p>
            Se enviarán señales de operaciones durante el día que serán creadas
            a través del estudio previo del mercado por parte de los operadores
            de Cryptoacademy GyM. Estas señales quedaran sujetas a su
            responsabilidad y gestión de riesgo ya que, al tratarse de
            probabilidades, cabe la posibilidad de que el movimiento no sea
            exactamente como se espera. De todas maneras, estaremos notificando
            cualquier cambio o corrección que hagamos en dicha operación, aunque
            dependerá de usted llevar el seguimiento de la misma. En cuanto al
            momento de enviar señales no habrá horario fijo, también es probable
            que haya días donde no operaremos, dependerá del mercado y el
            contexto del mismo. De todas formas, será notificado con el mayor
            tiempo de anticipación posible para que logre operarla junto a
            nosotros.
          </p>
          <h3>ANÁLISIS DIARIO</h3>
          <p>
            Los análisis diarios serán reportes que entregaremos gratuitamente
            al iniciar (¿y al finalizar?) cada jornada. Detallaremos lo que
            veamos en el mercado y le daremos una vista general del mismo para
            que usted pueda sacar conclusiones y contextualizar su actual o
            futura operación. Quedará a su criterio tomar dicha información y en
            base a esta operar o no.
          </p>
        </div>
      </div>
      <div class="container-servicios">
        <img src="img/trading2.jpg" alt="" class="trading2" />
        <div class="texto">
          <h3>BIBLIOGRAFIA Y MANUALES</h3>
          <p>
            Tanto la bibliografía como los manuales serán brindados de manera
            gratuita y nunca se le cobrarán cargos extra para tener acceso a
            ellos. Aunque no es obligatoria, se recomienda su lectura ya que
            estos libros y textos son material complementario de estudio para
            las clases que brindara Cryptoademy GyM. Nos reservamos el derecho
            de agregar, eliminar o editar cualquiera de estos en cualquier
            momento.
          </p>
          <h3>TRADING EN VIVO</h3>
          <p>
            Con el trading en vivo usted tendrá la posibilidad 2(dos) veces al
            día, una por la mañana y otra por la tarde, de observar en tiempo
            real nuestra forma de operar, seguir el análisis minuto a minuto e
            incluso (¿podrá interactuar con nuestro equipo durante el tiempo que
            dure el vivo?). Debemos aclarar que puede haber operaciones que
            surjan espontáneamente y que, por la dinámica del mercado en ese
            momento, no llegue a ser enviada como señal. Quedará en decisión de
            cada espectador replicar las operaciones que se vean reflejadas en
            pantalla, pudiendo estas ser tanto de bajo como de alto riesgo.
          </p>
        </div>
        <div class="container-servicios">
          <img src="img/trading3.jpg" alt="" class="trading1" />
          <div class="texto">
            <h3>CLASES</h3>
            <p>
              Se darán clases en vivo todas las semanas con profesores de Crypto
              Academy GyM quienes guiaran a los estudiantes y brindaran
              conocimientos tales como analizar el mercado, buscar y encontrar
              oportunidades claras para generar operaciones positivas, gestionar
              su riesgo y poder desenvolverse eficientemente en el mundo de los
              activos digitales. Las clases se darán los días … a las … . No
              será obligatoria la asistencia, aunque es recomendable estar
              presente en las mismas para aprovechar al máximo la puesta en
              práctica y sobre todo poder despejar dudas interactuando
              instantáneamente con los profesores. Todas las clases quedaran
              grabadas y lo estudiantes tendrán acceso una vez esta finalice y
              esté disponible en …
            </p>
            <h3>SOPORTE</h3>
            <p>
              Tanto profesores como todos los que conformamos Crypto Academy GyM
              estaremos brindando soporte a todos los alumnos que lo requieran,
              ayudándolos ante cualquier eventual dificultad, consulta o duda
              que surja sobre cualquiera de los servicios que brindamos en
              Crypto Academy GyM. A través de nuestro canal principal (Discord)
              lo invitaremos a que abra un ticket de soporte en el cual uno de
              nuestros moderadores lo ayudara lo más pronto posible con
              cualquiera de sus inquietudes.
            </p>
          </div>
        </div>
      </div>
    </section>

		<footer id="contacto">
      <img src="img/logo.png" alt="Logo" class="logo">
        <div class="redessociales__container">
          <h3>Redes Sociales</h3>
          <div class="redes-sociales">
            <p><a href="#"><i class="fa-brands fa-instagram icon"></i></a></p>
            <p><a href="#"><i class="fa-brands fa-facebook icon"></i></a></p>
            <p><a href=""><i class="fa-brands fa-twitch icon"></i></a></p>
            <p><a href="#"><i class="fa-brands fa-tiktok icon"></i></a></p>
            <p><a href="https://www.twitch.tv/cryptoacademygym"><i class="fa-brands fa-discord icon"></i></a></p>
          </div>
        </div>
      </div>
    </footer>

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