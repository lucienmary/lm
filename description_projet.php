<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0, user-scalable=no">
        <meta name="theme-color" content="#292929">

        <?php
            $page = $_GET["project"];
            $cpt = $_GET["nb"];

            echo '<title>'. $page .' | Projets | lucienmary.be</title>';
         ?>

        <link href="https://fonts.googleapis.com/css?family=Staatliches:400,700%7CWork+Sans:300,400" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/styles/main.css">
    </head>
    <body>
        <header>
            <a href="/">ML</a>

            <a href="#">Menu</a>

            <?php
                $json = file_get_contents("projects.json");
                $parsed_json = json_decode($json);

                $text = $parsed_json->{$cpt}->{'text'};
                $link = $parsed_json->{$cpt}->{'link'};

                echo '<h1>'. $page .'</h1>';
                echo '<p>'. $text .'</p>';
                echo '<a href="'. $link .'">Aller au projet ⇒</a>';
             ?>
        </header>

        <footer>
            <header>
                <ul>
                    <li>
                        <a href="https://github.com/lucienmary">GitHub</a>
                    </li>

                    <li>
                        <a href="https://twitter.com/marylucien1998">Twitter</a>
                    </li>

                    <li>
                        <a href="mailto:marylucien1998@gmail.com">Email</a>
                    </li>
                </ul>
            </header>
            <a href="/">Accueil</a>
            <a href="contact.php">Contact</a>
            <p>Lucien Mary - 2020</p>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </body>
</html>
