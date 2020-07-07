<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/estilos2.css">

  </head>
  <body>

<div class="contact-section">

  <h1>Registrate</h1>
  <div class="border"></div>
  <form class="contact-form" action="check_register.php" method="POST">
    <input type="text" name="usu" class="contact-form-text" placeholder="Nombre de Usuario">
    <input type="password" name="pass" class="contact-form-text" placeholder="Contraseña">
    <input type="password" name="passConfirm" class="contact-form-text" placeholder="Repita Contraseña">
    <!-- <input type="text" class="contact-form-text" placeholder="Your phone">
    <textarea class="contact-form-text" placeholder="Your message"></textarea> -->
    <input type="submit" class="contact-form-btn">
    <div style="float: left;border-radius: 10px;background: #7F95D1;" class="contact-form-btn foo"><a href="login.php" style="color: white;font-size: 1em;text-decoration: none;">Login</a></div>
  </form>
</div>


  </body>
</html>

