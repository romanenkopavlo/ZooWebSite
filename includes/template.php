<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;1,500;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/png" href="images/favicon.png">
</head>
<body class="green accent-1">
<header>
    <nav>
        <div class="nav-wrapper teal accent-4">
            <a href="index.php" id="logo" class="brand-logo">Jardin des Animaux</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="index.php"><i class="material-icons right">home</i>Home</a></li>
                <li><a href="about.php"><i class="material-icons right">info</i>About us</a></li>
                <li><a href="animals.php"><i class="material-icons right">pets</i>Animals</a></li>
                <li><a href="tickets.php"><i class="material-icons right">confirmation_number</i>Tickets</a></li>
                <li><a href="contacts.php"><i class="material-icons right">contacts</i>Contact us</a></li>
            </ul>
        </div>
    </nav>
</header>
<?php echo $content ?>
<footer class="page-footer teal accent-4">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="col s6">
                    <p><i class="material-icons">copyright</i> 2024 Jardin des Animaux</p>
                    <p><i class="material-icons">location_on</i> 83 Rue de la Savane, Paris, France</p>
                </div>
                <div class="col s6">
                    <div class="row">
                        <div class="center-align">Follow us on social media</div>
                    </div>
                    <div class="row">
                        <div class="center-align">
                            <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram fa-3x" style="color: #ac2bac; margin-right: 15px"></i></a>
                            <a href="https://www.pinterest.fr" target="_blank"><i class="fab fa-pinterest fa-3x" style="color: #c61118; margin-right: 15px"></i></a>
                            <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube fa-3x" style="color: #ed302f; margin-right: 15px"></i></a>
                            <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f fa-3x" style="color: #3b5998;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<?php echo $script ?>
</body>
</html>