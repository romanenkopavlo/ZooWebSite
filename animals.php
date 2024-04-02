<?php
$title = "Animals";
ob_start();
?>
<main>
    <div class="row center-align">
        <h2>Animals</h2>
    </div>
    <div class="row">
        <div class="col s3">
            <div class="card">
                <div class="cardAnimal1 card-image">
                    <img src="images/animals.jpg" style="height: 300px; width: 358px">
                    <span class="card-title">Panda</span>
                </div>
                <div class="card-content">
                    <p>Introducing our beloved pandas: fluffy, playful, and utterly captivating. Watch them munch on bamboo and delight visitors with their adorable antics.
                        A must-see at our zoo!</p>
                </div>
                <div class="card-action">
                    <a href="https://fr.wikipedia.org/wiki/Panda" target="_blank"><i class="fa-brands fa-wikipedia-w fa-2x"></i> More information</a>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div class="card">
                <div class="cardAnimal2 card-image">
                    <img src="images/capybara.jpg" style="height: 300px; width: 358px">
                    <span class="card-title">Capybara</span>
                </div>
                <div class="card-content">
                    <p>Meet the capybara, the world's largest rodent! These gentle giants are known for their relaxed demeanor and social behavior. Experience their charm at our zoo today!</p>
                </div>
                <div class="card-action">
                    <a href="https://fr.wikipedia.org/wiki/Hydrochoerus_hydrochaeris" target="_blank"><i class="fa-brands fa-wikipedia-w fa-2x"></i> More information</a>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div class="card">
                <div class="cardAnimal3 card-image">
                    <img src="images/lion.jpg" style="height: 300px; width: 358px">
                    <span class="card-title">Lion</span>
                </div>
                <div class="card-content">
                    <p>Encounter the king of the jungle: the majestic lion. <br>Powerful, regal, and awe-inspiring. Witness their grace and strength at our zoo</p>
                </div>
                <div class="card-action">
                    <a href="https://fr.wikipedia.org/wiki/Lion" target="_blank"><i class="fa-brands fa-wikipedia-w fa-2x"></i> More information</a>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div class="card">
                <div class="cardAnimal4 card-image">
                    <img src="images/elephant.jpg" style="height: 300px; width: 358px">
                    <span class="card-title">Elephant</span>
                </div>
                <div class="card-content">
                    <p>Behold the magnificent elephant: gentle giants of the savannah. <br>With their wise eyes and majestic presence, they captivate all who visit our zoo.</p>
                </div>
                <div class="card-action">
                    <a href="https://fr.wikipedia.org/wiki/Éléphant" target="_blank"><i class="fa-brands fa-wikipedia-w fa-2x"></i> More information</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="divider" style="border: 3px solid #388E3C"></div>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col s3">
            <div class="card">
                <div class="cardAnimal5 card-image">
                    <img src="images/giraffe.jpg" style="height: 300px; width: 358px">
                    <span class="card-title">Giraffe</span>
                </div>
                <div class="card-content">
                    <p>Meet the elegant giraffe: towering and graceful. <br>With their long necks and gentle demeanor, they stand tall as symbols of African beauty at our zoo.</p>
                </div>
                <div class="card-action">
                    <a href="https://fr.wikipedia.org/wiki/Girafe" target="_blank"><i class="fa-brands fa-wikipedia-w fa-2x"></i> More information</a>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div class="card">
                <div class="cardAnimal6 card-image">
                    <img src="images/zebra.jpg" style="height: 300px; width: 358px">
                    <span class="card-title">Zebra</span>
                </div>
                <div class="card-content">
                    <p>Experience the striking zebra: nature's masterpiece in black and white. With their distinctive stripes and lively presence, they add a touch of wild elegance to our zoo.</p>
                </div>
                <div class="card-action">
                    <a href="https://fr.wikipedia.org/wiki/Zèbre" target="_blank"><i class="fa-brands fa-wikipedia-w fa-2x"></i> More information</a>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div class="card">
                <div class="cardAnimal7 card-image">
                    <img src="images/Black_panther_India.jpg" style="height: 300px; width: 358px">
                    <span class="card-title">Black panther</span>
                </div>
                <div class="card-content">
                    <p>Encounter the elusive black panther: sleek, powerful, and mysterious. With its midnight coat and piercing gaze, it embodies the essence of stealth and strength at our zoo.</p>
                </div>
                <div class="card-action">
                    <a href="https://fr.wikipedia.org/wiki/Panthère_noire_(animal)" target="_blank"><i class="fa-brands fa-wikipedia-w fa-2x"></i> More information</a>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div class="card">
                <div class="cardAnimal8 card-image">
                    <img src="images/Red-kangaroo-animals-Blackpool-Zoo-main.jpg" style="height: 300px; width: 358px">
                    <span class="card-title">Red kangaroo</span>
                </div>
                <div class="card-content">
                    <p>Meet the iconic red kangaroo: Australia's emblem of agility and resilience. With their powerful hind legs and distinctive coloring, they bound through our zoo with boundless energy and charm.</p>
                </div>
                <div class="card-action">
                    <a href="https://fr.wikipedia.org/wiki/Kangourou_roux" target="_blank"><i class="fa-brands fa-wikipedia-w fa-2x"></i> More information</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="divider" style="border: 3px solid #388E3C"></div>
    <br>
    <br>
    <br>
    <div class="row center-align">
        <h3>More animals in our zoo</h3>
        <br>
        <a class="waves-effect waves-light btn-large green darken-2" href="tickets.php">Buy a ticket</a>
    </div>
</main>
<?php
$content = ob_get_clean();
$script = "";
include "includes/template.php";
?>