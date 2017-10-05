<php ?xml version="1.0" encoding="UTF-8" ?>
<?php

session_start();

// pour se connecter
if (!empty($_POST['loginname'])){
    $_SESSION['login'] = $_POST['loginname'];
}

// remplir le panier
if (!empty($_GET["chocolate_chips"])) {
    setcookie('chocolate_chips', 'chocolate chips', time() + 365*24*3600);
}
if (!empty($_GET["Pecan_nuts"])) {
    setcookie('Pecan_nuts', 'Pecan nuts', time() + 365*24*3600);
}
if (!empty($_GET["chocolate_cookie"])) {
    setcookie('chocolate_cookie', 'chocolate cookie', time() + 365*24*3600);
}
if (!empty($_GET["mms_cookie"])) {
    setcookie('mms_cookie', 'mms cookie', time() + 365*24*3600);
}


// vider le panier
if ($_POST['vider'] == 1) {
    setcookie('chocolate_chips', '', time() + 365*24*3600);
    setcookie('Pecan_nuts', '', time() + 365*24*3600);
    setcookie('chocolate_cookie', '', time() + 365*24*3600);
    setcookie('mms_cookie', '', time() + 365*24*3600);
    $_POST['vider'] = 0;
}



?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">
<head>
  <title>The Cookie Factory</title>
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/styles.css" />
<body>
  <header>
    <!-- MENU ENTETE -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
          data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/" >
          <img class="pull-left" src="assets/img/cookie_funny_clipart.png" alt="The Cookies Factory logo">
          <h1>The Cookies Factory</h1>
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Chocolates chips</a></li>
          <li><a href="#">Nuts</a></li>
          <li><a href="#">Gluten full</a></li>
          <li>
            <a href="/cart.php" class="btn btn-warning navbar-btn">
              <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
              Cart
            </a>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <div class="container-fluid text-right">
    <strong>Hello <?= $_SESSION['login'] ?>!</strong>
      <p><a href="../logout.php">Logout</a></p>
      <form method="post" action="">
          <button name="vider" value="1">Vider panier</button>
      </form>
  </div>
</header>
