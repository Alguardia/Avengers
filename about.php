<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos - Anthony Stark</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    require_once(__DIR__."\config\mysql.php");
    require_once(__DIR__."\databaseconnect.php");

    $aboutStatement = $mysqlClient->prepare("SELECT * FROM about");
    $aboutStatement->execute();
    $about= $aboutStatement->fetchAll();

    $description=$about[0]['description'];
    $parcour=$about[0]['parcour'];
    $competences=$about[0]['competences'];
    $competencesArray=explode(',',$competences);
    ?>

<nav>
        <div class="nav-content">
            <div class="logo">A.S</div>
            <div class="nav-links">
                <a href="index.php" >Accueil</a>
                <a href="about.php" class="active">À propos</a>
                <a href="contact.php">Contact</a>
                <a href="login.php">Login</a>
            </div>
        </div>
    </nav>

    

    <main>
        <section class="about">
            <h1>À propos de moi</h1>
            <div class="about-content">
                <div class="about-text">
                    <p><?php echo $description ?></p>
                    <h2>Compétences :</h2>
                    <div class="skills">
                        <?php 
                            if ($competences){
                                foreach ($competencesArray as $competence){
                                     echo "<div class='skill'>" . $competence . "</div>";
                                }                             
                            }
                            else{
                                echo "Aucune competences trouvées.";
                            }
                        ?>
                            </div>
                    <h2>Parcours :</h2>
                    <p><?php echo $parcour ?></p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>© 2024 Anthony Stark. Tous droits réservés.</p>
    </footer>
</body>
</html>