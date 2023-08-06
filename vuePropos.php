<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titre ?></title>
    <link rel="icon" href="assets/icon/icon-portfolio.png">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include ("WebsitePart/header.php") ?>
<div class="container">
    <div class="gradient_policy"><h1>À propos</h1></div>
    <h3 class="gradient_policy">Je suis un jeune étudiant en BTS SIO spécialité SLAM qui compte après s'orienter vers une école d'ingénieur</h3>
    <div class="gradient_policy"><h1>Me contacter</h1></div>
    <div class="gradient_policy"><h3>Mon adresse mail : </h3></div>
    <h5 id="email" style="display: none;" class="gradient_policy">aubriet.aurelien31082004@outlook.fr</h5>
    <button id="toggleButton" onclick="toggleEmail()" class="toggleButton">Afficher</button>
</div>
<!-- Flèche de retour en haut de la page -->
<div class="arrow-container">
    <i class="arrow">↑</i>
</div>

<?php include ("WebsitePart/footer.php") ?>
</body>
<script type="text/javascript" src="JavaScript/scrollToTop.js"></script>
<script type="text/javascript" src="JavaScript/MailButton.js"></script>
</html>