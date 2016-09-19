<!DOCTYPE html>
<html>
<head>
    <title>Porto Design Factory</title>
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
  <meta charset="utf-8">
	</head>
<body>
	<div class="login-page">
		<?php isset($error) ? $error : "" ?>
	
  		<div class="form">
          <img class="img_logo" src="./assets/img/logo_pdf_1.png" >
          <h1>Porto Design Factory</h1>
          <h3>Componentes Eletrónicos</h3>
          <form action="<?= site_url('login') ?>" method="post" name="login">
              <input type="text" name="username" placeholder="Utilizador" />
              <br><br>
              <input type="password" name="password" placeholder="Password" />
              <br><br>
              <button type="submit">Login</button>
          </form>
     	</div>
	</div>
</body>
</html>

