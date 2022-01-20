<?php
$page = 'bonne_affaires';

?>
+<!DOCTYPE html>
<!--
 * @author Didier Bonneau
 * @copyright (c) Afpa, DWWM
 * @version 1.0 du 01/04/2019
 * Fichier d'affichage des produits Papeterie de l'application TP_Papeterie
-->
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>
       Bonne affaires
    </title>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="css/papeterie.css" type="text/css" rel="stylesheet" />
    <style>
        input[type=number] {
            width: 45px;
        }
    </style>
    <script src="dist/js/jquery-3.4.1.js"></script>
    <script src="dist/js/bootstrap.js"></script>
</head>

<body>
    <?php
    require 'pages\_entete.php';
    require 'pages\_nav.php';
    ?>
    <main class="container">
         <h2>Bonnes affaires </h2>
    </main>
    </div>
    <?php
    require 'pages\_footer.php';
    ?>
</body>

</html>