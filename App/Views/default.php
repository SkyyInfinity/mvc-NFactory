<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="max 156 caractères">
    <meta name="keywords" content="html,css,formation">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Restaurant | <?php if(!empty($title)){echo $title;}; ?></title>
</head>

<body>
    <!-- HEADER -->
    <header id="l-header">
        <div class="wrap">
            <nav>
                <div class="logo">
                    <h1>Restaurant</h1>
                </div>
                <ul>
                   
                    <li><a href="">Acceuil</a></li>
                    <li><a href="index.php?page=register">Inscription</a></li>
                    <li><a href="index.php?page=login">Connexion</a></li>
                    <li><a href="#">Reserver</a></li>
                    <li><a href="#">Commander</a></li>

                </ul>
            </nav>
        </div>
    </header>

    <!-- CONTENT -->
    <main id="l-content">
        <?= $content ?>
    </main>

    <!-- FOOTER -->
    <footer id="l-footer">
        <div class="wrap">
            <p>&copy; Copyright Restaurant | All rights reserved</p>
        </div>
    </footer>

    <!-- JAVASCRIPT -->
    <!-- <script src="./assets/js/app.js" type="text/javascript" charset="utf-8"></script> -->
</body>
</html>