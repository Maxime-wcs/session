<?php require
'inc/head.php';

if (empty($_SESSION['login'])) {
    header('Location: login.php');
}


?>
<section class="cookies container">
    <h2>Votre panier</h2>
    <div class="row">
        <?php

            if (!empty($_COOKIE['chocolate_chips'])) {
                echo $_COOKIE['chocolate_chips'] . "<br>";
            }
            if (!empty($_COOKIE['Pecan_nuts'])) {
                echo $_COOKIE['Pecan_nuts'] .  "<br>";
            }
            if (!empty($_COOKIE['chocolate_cookie'])) {
                echo $_COOKIE['chocolate_cookie'] .  "<br>";
            }
            if (!empty($_COOKIE['mms_cookie'])) {
                echo $_COOKIE['mms_cookie'] .  "<br>";
            }


        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
