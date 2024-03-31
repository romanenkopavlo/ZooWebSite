<?php
$title = "Jardin des Animaux";
ob_start();
?>
<main>
    <div class="container center-align">
        <div class="row">
            <h2>Welcome to Jardin des Animaux</h2>
            <h5>Explore the fascinating world of animals!</h5>
        </div>
    </div>
    <div class="row center-align">
            <div class="carousel carousel-slider">
                <div class="carousel-item white-text">
                    <div class="overlay">
                        <a class="buttonClick waves-effect waves-teal btn-large black-text orange lighten-5" href="about.php">About us</a>
                    </div>
                    <img class="image" src="images/zoo.jpg" height="600">
                </div>
                <div class="carousel-item white-text">
                    <div class="overlay">
                        <a class="buttonClick waves-effect waves-teal btn-large black-text grey lighten-1" href="animals.php">Our animals</a>
                    </div>
                    <img class="image" src="images/animals.jpg" height="600">
                </div>
                <div class="carousel-item white-text">
                    <div class="overlay">
                        <a class="buttonClick waves-effect waves-teal btn-large black-text green lighten-3" href="tickets.php">Tickets</a>
                    </div>
                    <img class="image" src="images/tickets.jpg" height="600">
                </div>
            </div>
    </div>
    <div class="row center-align">
        <br>
        <h3>Our schedule <i class="fa-solid fa-clock"></i></h3>
        <ul class="hours">
            <li style="color: #0091ea">Monday: 9h30 - 19h30</li>
            <li style="color: #0091ea">Tuesday: 10h:30 - 20h30</li>
            <li style="color: #0091ea">Wednesday: 9h30 - 12h30</li>
            <li style="color: #0091ea">Thursday: 9h30 - 19h30</li>
            <li style="color: #0091ea">Friday: 12h30 - 18h30</li>
            <li style="color: #0091ea">Saturday: 8h30 - 21h30</li>
            <li style="color: #ff4081 ">Sunday: Closed</li>
        </ul>
    </div>
</main>
<?php
$content = ob_get_clean();
?>

<?php
ob_start();
?>
<script src="js/script.js"></script>
<?php
$script = ob_get_clean();
include "includes/template.php";
?>