<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0">
        <meta name="theme-color" content="#292929">

        <title>Accueil | lucienmary.be</title>

        <link href="https://fonts.googleapis.com/css?family=Staatliches:400,700%7CWork+Sans:300,400" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/styles/main.css">
    </head>
    <body>
        <header class="container">
            <a class="logo" href="/">ML</a>

            <a href="#" class="burger">
                <span class="burger__el">Menu</span>
            </a>
        </header>

        <section class="container">
            <div class="row no-gutters presentation">
                <div class="col-md-5 vcard">
                    <img class="img-fluid profile" src="./assets/images/lucien@2x.jpg" srcset="./assets/images/lucien@2x.jpg 2x" alt="">

                    <div class="margin-block">
                        <h1>Lucien Mary</h1>
                        <p class="line"><strong>Junior web developer</strong></p>

                        <ul class="reseaux">
                            <li class="reseaux_el">
                                <a href="https://github.com/lucienmary">
                                    <img src="assets/images/github.png" alt="Lien compte github">
                                </a>
                            </li>

                            <li class="reseaux_el">
                                <a href="https://www.linkedin.com/in/lucien-mary-437598177/">
                                    <img src="assets/images/linkedin.png" alt="Lien compte linkedin">
                                </a>
                            </li>

                            <li class="reseaux_el">
                                <a href="https://twitter.com/marylucien1998">
                                    <img src="assets/images/twitter.png" alt="Lien compte twitter">
                                </a>
                            </li>
                        </ul>

                        <ul class="contact">
                            <li class="contact__el">
                                <a href="mailto:marylucien1998@gmail.com">marylucien1998@gmail.com</a>
                            </li>

                            <li class="contact__el">
                                <a href="tel:+32479528839">+32 479 528 839</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 offset-md-1 desc">
                    <h2>À propos de moi...</h2>

                    <p>Je m’appelle Lucien Mary, j’ai 22 ans. Après une qualification en infographie, j'ai été diplomé en design web et mobile à la Haute École Albert Jacquard en 2020. Vous pouvez retrouver sur ce site mes meilleurs projets.</p>

                    <h2>Compétences</h2>
                    <ul class="skills">
                        <li class="skills__el">
                            <h3>HTML/CSS/SCSS</h3>
                            <progress class="" id="htmlValue" max="100" value="80"> 80% </progress>
                        </li>
                        <li class="skills__el">
                            <h3>Javascript</h3>
                            <progress id="jsValue" max="100" value="90"> 90% </progress>
                        </li>
                        <li class="skills__el">
                            <h3>PHP</h3>
                            <progress id="phpValue" max="100" value="60"> 60% </progress>
                        </li>
                        <li class="skills__el">
                            <h3>MySQL</h3>
                            <progress id="mysqlValue" max="100" value="60"> 60% </progress>
                        </li>
                        <li class="skills__el">
                            <h3>Adobe PS/AI/XD</h3>
                            <progress id="adobeValue" max="100" value="90"> 90% </progress>
                        </li>
                        <li class="skills__el">
                            <h3>Wordpress</h3>
                            <progress id="adobeValue" max="100" value="50"> 50% </progress>
                        </li>
                    </ul>

                    <div class="call-to-action">
                        <a href="">Mes projets</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="container">
            <header class="padding offset-md-2">
                <h2 class="c-white">Mes projets</h2>
                <p class="c-white">Cliquez sur un projet pour l'afficher!</p>
            </header>
            <ul>

                <!-- Lecture du JSON et affichage des projets. -->
                <?php
                    $json = file_get_contents("projects.json");
                    $parsed_json = json_decode($json);

                    foreach ($parsed_json as $key => $value) {
                        $cpt++;
                        $name = $parsed_json->{$cpt}->{'name'};
                        $desc = $parsed_json->{$cpt}->{'desc'};
                        $date = $parsed_json->{$cpt}->{'date'};
                        $text = $parsed_json->{$cpt}->{'text'};
                        $img = $parsed_json->{$cpt}->{'img'};

                        if ($cpt % 2) {
                            echo '<li class="project offset-md-2 col-md-8"><a class="row" href="/description_projet.php?project='. $name .'&nb='. $cpt .'">
                                <img class="col-md-6" src="'. $img .'" alt="Image '. $name .'">
                                <div class="col-md-6">
                                    <h3>'. $name .'</h3>
                                    <p>'. $desc .'</p>
                                    <p class="date">'. $date .'</p>
                                </div>
                            </a></li>';
                        }else{
                            echo '<li class="project offset-md-2 col-md-8"><a class="row" href="/description_projet.php?project='. $name .'&nb='. $cpt .'">
                                <div class="col-md-6">
                                    <h3>'. $name .'</h3>
                                    <p>'. $desc .'</p>
                                    <p class="date">'. $date .'</p>
                                </div>
                                <img class="col-md-6" src="'. $img .'" alt="Image '. $name .'">
                            </a></li>';
                        }
                    }
                 ?>
            </ul>
        </section>

        <footer class="container">
            <div class="footer">
                <a href="/">Accueil</a>
                <p>Lucien Mary - 2020</p>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="assets/scripts/animations.js"></script>
    </body>
</html>
