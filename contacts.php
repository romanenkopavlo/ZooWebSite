<?php
$title = "Contact us";
ob_start();
?>
<main>
    <div id="contactForm" class="container">
        <br>
        <h2>Contact us</h2>
        <div class="input-field">
            <input id="nameContact" type="text">
            <label for="nameContact">Name</label>
        </div>
        <div class="input-field">
            <input id="emailContact" type="email">
            <label for="emailContact">Email</label>
        </div>
        <div class="input-field">
            <textarea id="messageContact" class="materialize-textarea"></textarea>
            <label for="messageContact">Message</label>
        </div>
        <button id="buttonContact" class="btn waves-effect waves-light btn-large disabled" type="submit" name="action">Send
            <i class="material-icons right">send</i>
        </button>
    </div>
    <div id="contacted">
        <div class="container center-align" style="margin-top: 180px">
            <h3>Thank you for contacting us!</h3>
            <div class="row">
                <a class="waves-effect waves-light btn-large green darken-2" href="index.php">Back to home page</a>
            </div>
        </div>
    </div>
</main>
<?php
$content = ob_get_clean();
?>

<?php
ob_start();
?>
<script src="js/contacts.js"></script>
<?php
$script = ob_get_clean();
include "includes/template.php";
?>