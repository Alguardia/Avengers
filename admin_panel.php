<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des Messages</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav>
        <div class="nav-content">
            <div class="logo">A.S</div>
            <div class="nav-links">
                <a href="index.php" >Accueil</a>
                <a href="about.php">À propos</a>
                <a href="contact.php">Contact</a>
                <a href="login.php"class="active">Login</a>
            </div>
        </div>
    </nav>

    <div id="titre_admin"><h1>Message reçu</h1></div>
    <?php 
    session_start();
    if (!isset($_SESSION['admin']) or $_SESSION['admin'] != true) {
        header("Location: login.php");
        exit();
    }

    require_once(__DIR__ . "\config\mysql.php");
    require_once(__DIR__ . "\databaseconnect.php");

    $messagesStatement = $mysqlClient->prepare("SELECT * from messages");
    $messagesStatement->execute();
    $messages = $messagesStatement->fetchAll();

    foreach ($messages as $message) {
        $nom = $message['nom'];
        $email = $message['email'];
        $message_content = $message['message'];
        echo "<div class='message-entry'>";
        echo "<p><strong>Nom:</strong> " . htmlspecialchars($nom) . "</p>";
        echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
        echo "<p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message_content)) . "</p>";
        echo "</div>";
    }
    ?>


<footer>
        <p>© 2024 Anthony Stark. Tous droits réservés.</p>
    </footer>

</body>
</html>
