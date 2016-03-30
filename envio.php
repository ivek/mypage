<!DOCTYPE html>
<html>
<head>
  <title>Contacto</title>
  <meta charset="UTF-8"> 
    <meta name="description" content="Página donde se me puede contactar">
    <meta name="keyword" content="codigo, apps, aplicaciones, curriculum, videos, tutoriales, proyectos, reseñas">
    <meta name="author" content="Lord Ivek">
    <link rel="stylesheet" type="text/css" href="../systemsivek/css/botonplegable.css">
</head>
<body>
<header>
  <hgroup>
  <h1>Contactame</h1> 
    <h2>Cualquier duda, sugerencia, queja o proyecto que necesite de mi apoyo</h2> 
     
  </hgroup>     



</header>
<section>
  <article>
    <fieldset>
       <ul>
        <li><a href="https://facebook.com/lord.ivek">facebook</a></li>
        <li><a href="https://plus.google.com/+ivekmartinez">Google plus</a></li>
        <li><a href="https://twitter.com/lord_ivek">Twitter</a></li>
        <li><a href="https://mx.linkedin.com/in/ivek-martínez-herrera-710b3a5b">LinkedIn</a></li>
         <li><a href="https://www.facebook.com/systems.ivek/">Fan Page</a></li>
  </ul>
      
      <?php
        if (!isset($_POST['email'])) {
        ?>
          <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
           <p><label for="nombre">*Nombre:</label>
              <input type="text" id="nombre" name="nombre" placeholder="Escriba su nombre" required></input></p>
              <p><label for="email">*Email:</label>
              <input type="email"  id="email" name="email" placeholder="ejemplo@dondesea.com" required></input></p>
              <p><label for="telefono">Telefono:</label>
              <input type="tel" id="telefono" name="telefono"></input></p>
              <p><label for="fecha">Fecha de nacimiento:</label>
              <input type="date" id="fecha" name="fecha"></input></p>
              <p><label for="asunto">Asunto:</label></p>
              <p><textarea type="text" id="asunto"  rows="5" cols="30" ></textarea></p>
              <input id="submit" type="submit" name="enviar"value="enviar"> </input>
          </form>
        <?php
        }else{
          $mensaje="Mensaje del formulario de contacto de nnatali.com";
          $mensaje.= "\nNombre: ". $_POST['nombre'];
          $mensaje.= "\nEmail: ".$_POST['email'];
          $mensaje.= "\nfecha de nacimiento: ".$_POST['fecha'];
          $mensaje.= "\nTelefono: ". $_POST['telefono'];
          $mensaje.= "\nAsunto: ".$_POST['asunto'];
          $destino= "ivekdelfin@gmail.com";
          $remitente = $_POST['email'];
          $asunto = "Mensaje enviado por: ".$_POST['nombre'];
          mail($destino,$asunto,$mensaje,"FROM: $remitente");
        ?>
          <p><strong>Mensaje enviado.</strong></p>
        <?php
        }
      ?>
      <img class="acomp" src="/systemsivek/img/palomas.jpg">
    </fieldset>
  </article>
</section>
<footer>
  <figure  >
    <img src="/systemsivek/img/escudo.png" width="80px" height="120px" itemprop="logo" alt="logo">
    <figcaption>By Lord Ivek.</figcaption>
  </figure>
  <p><span itemprop="email">ivekdelfin@gmail.com</span></p>
  <span itemprop="email">ivekdelfin@hotmail.com</span>
  <p>licensed under a Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License.</p>
</footer>
</body>
</html>


