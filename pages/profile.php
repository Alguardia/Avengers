<?php 
    require_once(__DIR__."/../config/mysql.php");
    require_once(__DIR__."/../config/databaseconnect.php");

    session_start();

    if (!isset($_SESSION['id'])) {
        header('Location: login.php');
        exit();
    }

    $user_id = $_GET['id'];

   
    $profileStatement = $mysqlClient->prepare("SELECT * FROM users WHERE id = :id");
    $profileStatement->bindParam(':id', $user_id);
    $profileStatement->execute();
    $profile = $profileStatement->fetch();

    if ($profile) {
        $prenom = $profile['prenom'];
        $nom = $profile['nom'];
    } else {
        echo "Utilisateur introuvable.";
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/profile.css">  
</head>
<body>
    <nav>
        <div class="nav-content">
            <div class="logo">AS</div>
            <div class="nav-links">
                <a href="../index.php">Accueil</a>
                <a href="about.php">À propos</a>
                <a href="contact.php">Contact</a>
            </div>
            <div class="nav-img">
                <img src="../images/user.png" alt="User Icon" class="user-icon">
                <div class="dropdown">
                    <?php if (isset($_SESSION['prenom'])): ?>
                        <span class="user-name"><?php echo $_SESSION['prenom']; ?></span> 
                        <div class="dropdown-content">
                            <a href="profile.php?id=<?php echo $_SESSION['id']; ?>">Profil</a>
                            <?php if (isset($_SESSION['admin']) && $_SESSION['admin']): ?>
                                <a href="admin_panel.php">Messagerie</a>
                            <?php endif; ?>
                            <a href="logout.php">Déconnexion</a>
                        </div>
                    <?php else: ?>
                        <a href="login.php" class="login-link">Connexion</a> 
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <h1>Bienvenue sur votre profil</h1>
    <h2>Bonjour <?php echo $nom . " " . $prenom; ?></h2>

        </form>
    </section>
</body>
</html>
