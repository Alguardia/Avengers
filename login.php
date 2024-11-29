<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav>
        <div class="nav-content">
            <div class="logo">A.S</div>
            <div class="nav-links">
                <a href="index.php">Accueil</a>
                <a href="about.php">À propos</a>
                <a href="contact.php">Contact</a>
                <a href="login.php" class="active">Login</a>
            </div>
        </div>
    </nav>

    <form id="form_login" action="login.php" method="POST">
        <label for="username">Username</label>
        <input name="username" type="text" required>
        
        <label for="password">Password</label>
        <input name="password" type="password" required>
        
        <button type="submit">Se connecter</button>
    </form>

    <?php 
        session_start();

        if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
            header("Location: admin_panel.php");
            exit();
        }

        $valid_username = "root";
        $valid_password = "root";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($username == $valid_username && $password == $valid_password) {
                $_SESSION['admin'] = true;
                header("Location: admin_panel.php");
            } else {
                echo "<div id='center_echo'>Nom d'utilisateur et/ou mot de passe incorrect.</div>";
            }
        }
    ?>

    <footer>
        <p>© 2024 Anthony Stark. Tous droits réservés.</p>
    </footer>

</body>
</html>
