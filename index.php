<!-- ------------------------------------php-------------------------------------------------------- -->
<?php
include 'data.php';
?>
<!-- ----------------------------------------------------html------------------------------------------------------ -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<body>
    <main>
                <!----------------------------navbar-dekstop-------------------->
        <nav class="navbar-dekstop">
            <a href="#">Informations</a>
            <a href="#">Experiences</a>
            <a href="#">Formations</a>
            <a href="#">Soft Skills</a>
            <a href="#">Références</a>
            <a href="#">Portofolio</a>
        </nav>
        <!----------------------------navbar-mobile-------------------->
        <nav class="navbar-mobile">
            <i class="fa-solid fa-bars"></i>
            <div class="nav-list-mobile">
                <a href="#">Informations</a>
                <a href="#">Experiences</a>
                <a href="#">Formations</a>
                <a href="#">Soft Skills</a>
                <a href="#">Références</a>
                <a href="#">Portofolio</a>
            </div>
        </nav>
        <!-- ------------------------ infocontact ------------------------------- -->
        <div class="description">
            <h1>Odile DERAIE</h1>
            <h2>Developpeuse Web</h2>
            <div class="info">
                <p>Web developpeuse diplomée de la Wild Code School, passionnée avec 3 années d'expérience dans la
                    création de sites web. Compétences solides en HTML, CSS, JavaScript, et PHP. Toujours à la pointe
                    des dernières tendances technologiques.
                </p>
            </div>
            <div class="line"></div>
            <div class="contact">
                <p class="semi-title">Date de naissance :</p>
                <p>16 septembre 1984 </p>
                <p class="semi-title">Adresse :</p>
                <p> 17 rue Delandine 69002 LYON </p>
                <p class="semi-title">Mail :</p>
                <p> oderaie@blabla.fr </p>
                <p class="semi-title">Téléphone :</p>
                <p>06 12 34 56 78 </p>
            </div>
            <img src="./assets/visage_de_femme_pour_CV_seed-0ts-1695307229_idx-0.png" alt="photo d'odile deraie">
            <div class="logo">
                <a href="http://www.linkedin.fr"><i class="fa-brands fa-linkedin"></i></a>
                <a href="http://www.facebook.fr"><i class="fa-brands fa-facebook"></i></a>
                <a href="http://www.instagram.fr"><i class="fa-brands fa-instagram"></i></a>
                <a href="http://www.pinterest.fr"><i class="fa-brands fa-pinterest"></i></a>
                <a href="http://www.github.fr"><i class="fa-brands fa-github"></i></a>
                <a href="http://www.twitter.fr"><i class="fa-brands fa-x-twitter"></i></a>
            </div>
        </div>

        <!-- ---------------------------------Experience---------------------------------------------------- -->
<div class="container">
    <h2>EXPERIENCES</h2>
    <div class="carousel">
        <?php for ($i=0; $i < (count($experience)); $i++): 
        ?>
        <div class="experience">
            <div class="job">
            <?php echo $experience[$i]['job']?>
            </div>
            <div class="companyCity">
            <?php echo $experience[$i]['company'] . " | " . $experience[$i]['city'] ?>
            </div>
            <div class="date">
            <?php echo $experience[$i]['date']?>
            </div>
            <div class="whatIDo">
            <?php echo $experience[$i]['whatIdo']?>
            </div>
            <button class="learnmore">En savoir plus...</button>
        </div>
        <?php endfor ?>
    </div>
    <div class="carousel-buttons">
        <i class="fa-solid fa-arrow-left prev-button"></i>
        <i class="fa-solid fa-arrow-right next-button"></i>
    </div>
</div>
<div class="containerLine">
<div class="line2"></div>
</div>
<!-- ---------------------------------------------Foramtion--------------------------------------------------------------- -->
<div class="container">
<h2>FORMATIONS</h2>
    <div class="carousel">
        <?php foreach($formations as $key) {?>
        <div class="formation">
            <div class="job"><?php echo $key['title'] ?></div>
            <div class="companyCity"><?php echo $key['school'] . ' | ' . $key['city'] ?></div>
            <div class="date"><?php echo $key['date'] ?></div>
            </div>    
        <?php } ?>
    </div>        
    <div class="carousel-buttons">
        <i class="fa-solid fa-arrow-left prev-buttonF"></i>
        <i class="fa-solid fa-arrow-right next-buttonF"></i>
    </div>
</div>
<div class="containerLine">
<div class="line2"></div>
</div>       
</main>
</body>
<script src="https://kit.fontawesome.com/72de8a1f72.js" crossorigin="anonymous"></script>
<script src="index.js"></script>
</html>