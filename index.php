<!-- ------------------------------------php-------------------------------------------------------- -->
<?php
$experience = [
    [
        'job' => 'Devellopeur Web Full Stack - JS, PHP',
        'company' => 'CBD',
        'city' => 'Lyon, France',
        'date' => 'depuis Septembre 2022',
        'whatIdo' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi eos mollitia temporibus, autem in expedita. Delectus magnam eos molestias illo quaerat. Amet enim doloribus non!',
    ],
    [
        'job' => 'Devellopeur Web Front-End Senior - JS',
        'company' => 'MOF',
        'city' => 'Lyon, France',
        'date' => 'Février 2021 - Septembre 2022',
        'whatIdo' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi eos mollitia temporibus, autem in expedita. Delectus magnam eos molestias illo quaerat. Amet enim doloribus non!',
    ],
    [
        'job' => 'Assistant Back-End - PHP',
        'company' => 'Le Karma',
        'city' => 'Lyon, France',
        'date' => 'Septembre 2020 - Février 2021',
        'whatIdo' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi eos mollitia temporibus, autem in expedita. Delectus magnam eos molestias illo quaerat. Amet enim doloribus non!',
    ],
];

$references = [
    [
        'referent' => 'Ben Riche',
        'citation' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi eos mollitia temporibus, autem in expedita. Delectus magnam eos molestias illo quaerat. Amet enim doloribus non!'
    ],
    [
        'referent' => 'Marie Jeanne',
        'citation' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi eos mollitia temporibus, autem in expedita. Delectus magnam eos molestias illo quaerat. Amet enim doloribus non!'
    ],
    [
        'referent' => 'Ben Riche',
        'citation' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi eos mollitia temporibus, autem in expedita. Delectus magnam eos molestias illo quaerat. Amet enim doloribus non!'

    ],
];


?>
<!-- ------------------------------------HTML-------------------------------------------------------- -->

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
                <a href="http://www.linkedin.fr"><i class="fa-brands fa-linkedin" style="color: #0077b5;"></i></a>
                <a href="http://www.facebook.fr"><i class="fa-brands fa-facebook" style="color: #3b5998;"></i></a>
                <a href="http://www.instagram.fr"><i class="fa-brands fa-instagram" style="color: #222222"></i></a>
                <a href="http://www.pinterest.fr"><i class="fa-brands fa-pinterest" style="color: #c8232c"></i></a>
                <a href="http://www.github.fr"><i class="fa-brands fa-github" style="color: #171515"></i></a>
                <a href="http://www.twitter.fr"><i class="fa-brands fa-x-twitter" style="color: #000000"></i></a>
            </div>
        </div>

        <!-- ---------------------------------Experience---------------------------------------------------- -->
<div class="experience-container">
    <h2>EXPERIENCE</h2>
    <div class="carousel">
        <?php for ($i = 0; $i < count($experience); $i++): ?>
            <div class="experience">
                <div class="job">
                    <?php echo $experience[$i]['job'] ?>
                </div>
                <div class="companyCity">
                    <?php echo $experience[$i]['company'] . " | " . $experience[$i]['city'] ?>
                </div>
                <div class="date">
                    <?php echo $experience[$i]['date'] ?>
                </div>
                <div class="whatIDo">
                    <?php echo $experience[$i]['whatIdo'] ?>
                </div>
                <button class="learnmore">En savoir plus...</button>
            </div>
        <?php endfor ?>
    </div>
    <div class="carousel-buttons">
        <button class="prev-button">Previous</button>
        <button class="next-button">Next</button>
    </div>
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
    <div class="cards-container">
        <div class="card" id="card1"></div>
            <img src="assets/colorfull_branded_sneakers_on_a_brick_wall_seed-0ts-1695373368_idx-0.png" alt="basket multicolor">
        <div class="card" id="card2"></div>
            <img src="assets/front_page_of_a_website_design_seed-0ts-1695373519_idx-0.png" alt="photo d'un téléphone sur un bureau">
        <div class="card" id="card3"></div>
            <img src="assets/hands_with_colorfull_dust__with_a_flashy_backround_seed-0ts-1695373001_idx-0.png" alt="photo de mains couvertent de peinture">
        <div class="card" id="card4"></div>
            <img src="assets/real_photograhClose-up_view_avocado_water_droplets_blue_background_minimalist_painting_simple_shapes_smooth_contours_seed-0ts-1695372366_idx-0.png" alt="photo d'avocat humide">
    </div>
    </main>
</body>
<script src="https://kit.fontawesome.com/72de8a1f72.js" crossorigin="anonymous"></script>
<script src="index.js"></script>
</html>
