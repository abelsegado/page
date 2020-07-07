<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/estilos2.css">
    <link rel="stylesheet" href="../css/animations.css">
   
  </head>

  <body>

<div class="contact-section pullUp">

  <h1>Login</h1>
  <div class="border"></div>
  <form class="contact-form" action="check_login.php" method="get">
    <input type="text" name="nombre" class="contact-form-text" placeholder="Usuario">
    <input type="password" name="contra" class="contact-form-text" placeholder="Contraseña">
    <!-- <input type="text" class="contact-form-text" placeholder="Your phone">
    <textarea class="contact-form-text" placeholder="Your message"></textarea> -->
    <input type="submit" name="submit" class="contact-form-btn">
    <div style="float: left;border-radius: 10px;background: #7F95D1;" class="contact-form-btn foo"><a href="registro.php" style="
    color: white;
    font-size: 1em;
    text-decoration: none;
">Registrate</a></div>
  </form>

</div>


  </body>
</html>

