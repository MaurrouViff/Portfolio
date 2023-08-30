<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>À propos - Portfolio</title>
    <link rel="icon" href="assets/icon/icon-portfolio.png">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include ("WebsitePart/header/header.php") ?>
<div class="container">
    <div class="gradient_policy"><h1>À propos</h1></div>
    <h3 class="cyan">Je suis un jeune étudiant en BTS SIO spécialité SLAM qui compte après s'orienter vers une école d'ingénieur</h3>
    <div class="gradient_policy"><h1>Me contacter</h1></div>
    <div class="cyan"><h3>Mon adresse mail : </h3></div>
    <h5 id="email" style="display: none;" class="cyan">aubriet.aurelien31082004@outlook.fr</h5>
    <button id="toggleButton" onclick="toggleEmail()" class="toggleButton">Afficher</button>
    <hr class="hr_gradient">
    <div class="gradient_policy"><h1>Mon inspiration</h1></div>
    <h3 class="cyan">Je tire ma passion pour le développement</h3>
    <h3 class="cyan">D'un autre développeur et ami nommé :</h3>
    <h3><a class="link-to-page" href="https://www.youtube.com/@ManthePvP">TimManthe</a></h3>
    <h3 class="cyan">Voici ses projets : </h3>
    <h3 class="cyan">Son projet principal : <a class="link-to-page" href="https://vape.gg">Vape Client</a></h3>
    <h3 class="cyan">Son projet secondaire : <a href="https://minemen.club" class="link-to-page">Minemen Club</a></h3>
    <hr class="hr_gradient">
    <h3 class="cyan">Je tire également ma passion d'autres développeurs que j'admire</h3>
    <h3 class="cyan">Comme <a class="link-to-page" href="https://www.youtube.com/@TehNeon">TehNeon</a></h3>
    <h3 class="cyan">Pour voir tous ses projets son github : <a class="link-to-page" href="https://github.com/TehNeon">Cliquez ici</a></h3>
    <h3 class="cyan">Son projet principal : <a href="https://minemen.club" class="link-to-page">Minemen Club</a></h3>
</div>
<!-- Flèche de retour en haut de la page -->
<div class="arrow-container">
    <i class="arrow">↑</i>
</div>
<?php include ("WebsitePart/footer/footer.php") ?>
</body>
<script type="text/javascript" src="JavaScript/scrollToTop.js"></script>
<script type="text/javascript" src="JavaScript/MailButton.js"></script>
</html>