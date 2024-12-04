<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username_to_insert = $_POST["username"];
        $password_to_insert = $_POST["password"];
        $first_name_to_insert = $_POST["prenom"];
        $second_name_to_insert = $_POST["nom"];


        require_once(__DIR__.'/../config/mysql.php');
        $connexion = mysqli_connect(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DB_NAME);

        if (!$connexion) {
            die("Erreur de connexion : " . mysqli_connect_error());
        }


        $sql = "INSERT INTO users (`nom`, `prenom`, `username`, `password`, `admin`)
                VALUES (?, ?, ?, ?, false)";


        if ($stmt = mysqli_prepare($connexion, $sql)) {

            mysqli_stmt_bind_param($stmt, "ssss", $second_name_to_insert, $first_name_to_insert, $username_to_insert, $password_to_insert);


            if (mysqli_stmt_execute($stmt)) {
                $message = "<div class='success-message'>Utilisateur enregistré avec succès.</div>";
            } else {
                $message = "<div class='error-message'>Erreur : " . mysqli_error($connexion) . "</div>";
            }


            mysqli_stmt_close($stmt);
        } else {
            $message = "<div class='error-message'>Erreur de préparation de la requête : " . mysqli_error($connexion) . "</div>";
        }


        mysqli_close($connexion);
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>

    <nav>
        <div class="nav-content">
            <div class="logo">A.S</div>
            <div class="nav-links">
                <a href="../index.php">Accueil</a>
                <a href="about.php">À propos</a>
                <a href="contact.php">Contacte</a>
                <a href="login.php" class="active">Login</a>
            </div>
        </div>
    </nav>

    <main>
        <section class="register">
            <div>
                <form id="form_register" action="register.php" method="POST">
                    <label for="nom">Nom</label>
                    <input name="nom" type="text" required>

                    <label for="prenom">Prénom</label>
                    <input name="prenom" type="text" required>

                    <label for="username">Username</label>
                    <input name="username" type="text" required>

                    <label for="password">Password</label>
                    <input name="password" type="password" required>

                    <button type="submit">Se connecter</button>
                    
                </form>
                <?php if (isset($message)) { echo "<div class='success-message'> $message</div>"; } ?>
                
            </div>


            
        </section>
    </main>

    <footer>
        <p>© 2024 Anthony Stark. Tous droits réservés.</p>
    </footer>

</body>
</html>

