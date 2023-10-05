
<!-- ------------------------------------HTML-------------------------------------------------------- -->
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
            <div class="info">
                <p>Web develloper diplomée de la Wild Code School, passionnée avec 3 années d'expérience dans la
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
            <img class="Odile" src="./assets/visage_de_femme_pour_CV_seed-0ts-1695307229_idx-0.png" alt="photo d'odile deraie">
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
        </div>
        <?php endfor ?>
    </div>
    <div class="carousel-buttons">
        <i class="fa-solid fa-arrow-left prev-button"></i>
        <i class="fa-solid fa-arrow-right next-button"></i>
    </div>
    <!-- ---------------------------------softskills---------------------------------------------------- -->
    <h2>Soft skills</h2>
    <div class="softskills">
        <div id="Gestion" class="skill">Gestion du temps</div>
        <div id="Curiosité" class="skill">Curiosité</div>
        <div id="Travail" class="skill">Travail d'équipe</div>
        <div ID="Adaptabilié" class="skill">Adaptabilié</div>
        <div class="bar1">
            <div class="b11"></div>
            <div class="b12"></div>
            <div class="b13"></div>
            <div class="b14"></div>
            <div class="b15"></div>
        </div>
        <div class="bar2">
            <div class="b21"></div>
            <div class="b22"></div>
            <div class="b23"></div>
            <div class="b24"></div>
            <div class="b25"></div>
        </div>
        <div class="bar3">
            <div class="b31"></div>
            <div class="b32"></div>
            <div class="b33"></div>
            <div class="b34"></div>
            <div class="b35"></div>
        </div>
        <div class="bar4">
            <div class="b41"></div>
            <div class="b42"></div>
            <div class="b43"></div>
            <div class="b44"></div>
            <div class="b45"></div>
        </div>
    </div>
    <!-- ---------------------------------Références---------------------------------------------------- -->

    <div class="container">
        <h2>REFERENCES</h2>
            <div class="carousel">
        <?php for ($i=0; $i < (count($references)); $i++): ?>
                <div class="references">
            <div class="referent">
                <?php echo $references[$i]['referent']?>
            </div>
            <div class="citation">
                <?php echo $references[$i]['citation']?>
            </div>
                </div>
        </div>
<?php endfor?>
    </div>
    <div class="carousel-buttons">
        <button class="prev-buttonR">Previous</button>
        <button class="next-buttonR">Next</button>
    </div>
    <!-- ---------------------------------Portfolio---------------------------------------------------- -->
<h2>PORTFOLIO</h2>
        <div class="slider-container">
            <div class="menu">
                <label for="slide-dot-1"></label>
                <label for="slide-dot-2"></label>
                <label for="slide-dot-3"></label>
                <label for="slide-dot-4"></label>
            </div>

            <input class="slide-input" id="slide-dot-1" type="radio" name="slides" checked>
            <figure class="slide-img">
                <img src="./assets/colorfull_branded_sneakers_on_a_brick_wall_seed-0ts-1695373368_idx-0.png" alt="Pair de basket multicolor">
                <figcaption>BRAND CAMPAIGN</figcaption>
            </figure>

            <input class="slide-input" id="slide-dot-2" type="radio" name="slides">
            <figure class="slide-img">
                <img src="./assets/front_page_of_a_website_design_seed-0ts-1695373519_idx-0.png" alt="Bureau d'un Web designer" >
                <figcaption>WEB DESIGN</figcaption>
            </figure>

            <input class="slide-input" id="slide-dot-3" type="radio" name="slides">
            <figure class="slide-img">
                <img src="./assets/hands_with_colorfull_dust__with_a_flashy_backround_seed-0ts-1695373001_idx-0.png" alt="Mains recouvertent de poussière multicolor">
                <figcaption>LOGO DESIGN</figcaption>
            </figure>

            <input class="slide-input" id="slide-dot-4" type="radio" name="slides">
            <figure class="slide-img">
                <img src="./assets/Close-up_view_avocado_water_droplets.png" alt="photo contemporaine d'avocats">
                <figcaption>CORPORATE IDENTITY</figcaption>
            </figure>

        </div>
    </main>
<div class="containerLine">
<div class="line2"></div>
</div>
<!-- ---------------------------------------------Formation--------------------------------------------------------------- -->
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
</body>
<script src="https://kit.fontawesome.com/72de8a1f72.js" crossorigin="anonymous"></script>
<script src="index.js"></script>
</html>
