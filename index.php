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
<div class="divider" style="border: 3px solid #388E3C"></div>
<div class="row center-align">
    <br>
    <h3>Our location <i class="fas fa-map-location-dot"></i></h3>
    <br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21008.12541670003!2d2.3693521104941873!3d48.83883965740173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e672f4eab21383%3A0x70c3ddb088a9ebba!2sParis%20Zoological%20Park!5e0!3m2!1sen!2sfr!4v1711927946852!5m2!1sen!2sfr" width="800" height="450" style="border:0; border-radius: 70px" allowfullscreen="allowfullscreen"></iframe>
</div>
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