<!doctype html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titre ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="assets/icon/icon-portfolio.png">
</head>
<body>
<header class="header">
<h2 class="gradient_policy">Bienvenue sur mon portfolio !</h2>
    <nav class="navbar">
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="./?action=propos" class="blue_btn">À propos</a>
            </li>
            <li class="nav-item">
                <a href="./?action=langage" class="blue_btn">Voir les langages</a>
            </li>
            <li class="nav-item">
                <a href="./?action=conception" class="blue_btn">Conception</a>
            </li>
        </ul>
    </nav>
<hr class="hr_gradient">
</header>
<div class="container">
    <div class="gradient_policy">
        <h1>Voici quelques</h1>
        <h1>Informations sur moi : </h1>
    </div>
<section class="main-section">
    <div class="features">
        <div class="feature">
            <div class="feature-title"><img alt="image d'étudiant" class="image-icon" src="assets/icon-images/student-icon.png">Étudiant</div>
            <div class="feature-text">Je suis actuellement étudiant en BTS Sio spécialité SLAM.</div>
        </div>
        <div class="feature">
            <div class="feature-title"><img alt="image de développeur" class="image-icon" src="assets/icon-images/developer-icon.png">Développeur</div>
            <div class="feature-text">J'apprends certains langages de programmation. <a href="./?action=langage" class="link-to-page">Cliquez ici</a> pour voir la liste</div>
        </div>
    </div>
</section>

</div>
<!-- Flèche de retour en haut de la page -->
<div class="arrow-container">
    <i class="arrow">↑</i>
</div>

<?php include ("WebsitePart/footer.php") ?>
</body>
<script type="text/javascript" src="JavaScript/scrollToTop.js"></script>
</html>