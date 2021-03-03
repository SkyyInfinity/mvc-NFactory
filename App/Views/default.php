<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="max 156 caractères">
    <meta name="keywords" content="html,css,formation">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.2/css/all.css" integrity="sha256-RivrDI7LKrsVaFwxh18mjRZjE1gd8RBAHCSD+rJKRt8=" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/normalize-3.0.3.min.css">
    <link rel="stylesheet" href="../assets/css/3wa-resto.css">
    <link rel="stylesheet" href="../assets/css/ui-button.css">
    <link rel="stylesheet" href="../assets/css/ui-form.css">
    <link rel="stylesheet" href="../assets/css/ui-table.css">
    <title>Restaurant • <?php if(!empty($title)){echo $title;}; ?></title>
</head>

<body>
    <!-- HEADER -->
    <header id="l-header">
        <div class="wrap">
            <nav>
                <div class="logo">
                    <a href="index.php?page=home"><h1>Restaurant <span>| Made in America !</span></h1></a>
                </div>
                <ul>
                    <?php if(isset($_SESSION['user'])) : ?>
                    <li><a class="button button-primary" href="index.php?page=booking">Reserver</a></li>
                    <li><a class="button button-primary" href="#">Commander</a></li>
                    <?php else : ?>
                    <li><a class="button button-primary" href="index.php?page=register">Créer un compte</a></li>
                    <li><a class="button button-primary" href="index.php?page=login">Se connecter</a></li>
                    <?php endif; ?>

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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="../assets/js/main.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>
