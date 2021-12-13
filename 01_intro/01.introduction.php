<!-- Démarrage SQL : repos sur OS (C:) -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="stylesheet" href="../css/style.css">
    <!-- =================================== -->
    <!-- MA FAVICON  -->
    <!-- =================================== -->


    <!-- <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/favicon_package_v0.16/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon_package_v0.16/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon_package_v0.16/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="favicon_io/favicon_package_v0.16/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
 -->

    <title>Cours PHP - Introduction </title>

</head>

<body>

    <header class="container-fluid bg-light text-danger">
        <h1 class="display-4">Cours PHP - Introduction</h1>
        <p class="lead">PHP : Php Hypertext Preprocessor</p>
    </header>

    <div class="container bg-white text-secondary">
        <section class="row m-2 p-2">
            <div class="col-md-4 p-1 border border-secondary">
                <h4>1/Réaliser un site dynamique</h4>
                <p>Pour réaliser un site dynamique nous allons aborder les points suivants :</p>
                <ul>
                    <li>La syntaxe et les caractéristiques du langage PHP (v7
                    <li>
                    <li>Les notions essentielles du langage SQL permettant la gestion d'une BDD et la réalisation des requêtes de base</li>
                    <li>... et les moyens d'y accéder à l'aide de fonctions spécialisées de PHP (ou d'objet)</li>
                    <li>
                        <!-- mon premier passage php et un "echo" -->
                        <?php echo "<strong>Mon premier texte fait en PHP</strong>"; ?>
                    </li>
                </ul>

            </div>
            <!-- fin col -->
            <div class="col-md-4 p-1 border border-secondary">
                <h4>Qu'est ce que PHP</h4>
                <p>PHP permet de créer des pages interactives ; une page interactive permet à un visiteur de saisir des donnéees personnelles qui sont ensuite transmise au serveur; où elles peuvent rester stockés dans une BDD pour être diffusés vers d'autres utilisateurs. Un utilisateur peut par exemple s'enregistrer et retrouver une page adaptée à ses besoins lors d'une visite ultérieure.Il peut aussi envoyer des e-mails et des fichiers sans avoir à passer par son logiciel de messagerie.</p>
                <br>

                <p>En associant toutes ces caractéristiques il est possible de créer aussi bien des sites de diffusion et de collecte d'information que des sites e-commerce,de rencontre ou des blogs.</p>
            </div>
            <!-- fin col -->
            <div class="col-md-4 p-1 border border-secondary">
                <h4>/Rappel sur les BDD</h4>
                <p>Pour contenir la masse d'informations collectées, PHP s'appuie généralement sur une BDD, le plus souvent MySQL mais aussi SQLite et sur des serveurs Apache. PHP, MYSQL et Apache forment le trio ultradominant sur les serveurs Internet. Quand ce trio est associé à un Linux on parle de LAMP. PHP est utilisé par les 3/4 des sites de la planète. </p>
                <br>
                <p>Pour utiliser PHP sur un Pc ,on utilisera <a href="http://localhost/dashboard/">XAMPP</a> mais aussi <a href="https://laragon.org/">Laragon</a>, sur Mac on privilégiera MAMP.</p>
            </div>
            <!-- fin col -->
        </section>
        <!-- fin row -->
        <section class="row m-2 p-2">

            <div class="col-md-4 p-1 border border-secondary">
                <p>Avec le code suivant écrit dans un fichier 02_infos.php placé sur le serveur d'évaluation on obtient toutes les infos sur le php executé dans ce serveur.</p>
                <code>
                    &lt; ?php <br>
                    phpinfo(); //ceci est un commentaire <br>
                    ?<br>
                </code>

                <a href="02_infos.php" class="btn btn-secondary">PHP infos</a>
            </div>
            <!-- fin col -->
            <div class="col-md-4 p-1 border border-secondary">
                <!--  fonctiond date() pour donne la date -->
                <?php echo date('d/m/Y - H:m:s'); ?>
                <?php echo "<h5> date de jour : " . date('d/m/Y') . "</h5>"; 
                 echo "<p> bienvenue sur le cours PHP </p>";
                ?>
            </div>
            <!-- fin col -->
            <div class="col-md-4 p-1 border border-secondary">
                <h4>le cycle de vie  d'une page PHP</h4>
                <ol>
                    <li> envoie d'une HTTp (hyper text transfer Protocol) par le navigateur vers serveur du type 
                        http://www.monsite.fr/infos?php</li>
                    <li>nterprétation par le serveur du code PHP  contenu dans la page applée</li>
                    <li>envoie par le serveur d'une fichier dont le contenu est purement html</li>
                    <p>  <a href="../00-pages/01_page.php" target="_blanck"> ice un lien vers une autre page PHP</a></p>
                    
                </ol>

            </div>
            <!-- fin col -->
        </section>
        <!-- fin row -->
        <section class="row">
            <div class="col-md-10">
                <h3>Inclure des fichiers externes en PHP</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Fonction</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>include("mon_fichier.php")</code> </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td> <code> require("mon_fichier.php") </code> </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td> <code> include_once("mon_fichier.php") </code> 
                            <br> 
                            <code> require_once("mon_fichier.php") </code>  </td>
                            <td></td>
                        </tr>
                    </tbody>

                </table>
            </div>

        </section>

    </div>
    <!-- fin container -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>