<?php
$title = "Tickets";
ob_start();
?>
<main>
    <div id="main">
        <div class="row center-align">
            <h2>Tickets</h2>
        </div>
        <div class="row">
            <div class="col s2"></div>
            <div class="col s8">
                <div class="col s12">
                    <div class="col s4">
                        <div class="card">
                            <div class="cardAnimal1 card-image">
                                <div class="overlay ticket">
                                    <i class="material-icons" style="color: #ffcc80;">confirmation_number</i>
                                </div>
                                <img src="images/pandaTicket.jpg" style="height: 400px; width: 300px">
                                <span class="card-title">One-day ticket</span>
                            </div>
                            <hr style="border: none; border-top: 2px dotted #000;"/>
                            <div class="card-content">
                                <p>A ticket valid for one day of visit</p>
                                <br>
                            </div>
                            <div class="card-action center-align">
                                <a href="#ticketBuy" id="oneDayTicket">Check it out</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="card">
                            <div class="cardAnimal2 card-image">
                                <div class="overlay ticket">
                                    <i class="material-icons" style="color: #ffcc80;">confirmation_number</i>
                                </div>
                                <img src="images/lionsTicket.jpg" style="height: 400px; width: 300px">
                                <span class="card-title">Two-day ticket</span>
                            </div>
                            <hr style="border: none; border-top: 2px dotted #000;"/>
                            <div class="card-content">
                                <p>A ticket valid for two consecutive days of visitation</p>
                            </div>
                            <div class="card-action center-align">
                                <a href="#ticketBuy" id="twoDayTicket">Check it out</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="card">
                            <div class="cardAnimal3 card-image">
                                <div class="overlay ticket">
                                    <i class="material-icons" style="color: #ffcc80;">confirmation_number</i>
                                </div>
                                <img src="images/coalaTicket.jpg" style="height: 400px; width: 300px">
                                <span class="card-title">Annual zoo pass</span>
                            </div>
                            <hr style="border: none; border-top: 2px dotted #000;"/>
                            <div class="card-content">
                                <p>Unlimited access for one year</p>
                                <br>
                            </div>
                            <div class="card-action center-align">
                                <a href="#ticketBuy" id="annualTicket">Check it out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s2"></div>
        </div>
        <div class="ticketChoice container">
            <div class="row center-align" id="ticketBuy">
                <br>
                <h3 id="choiceText">You have selected the one-day ticket</h3>
            </div>
            <div class="row">
                <div class="col s1"></div>
                <div class="col s10">
                    <div class="col s12">
                        <div class="col s2"></div>
                        <div class="col s4">
                            <div class="card teal lighten-1 center-align">
                                <div class="card-content white-text">
                                    <span class="card-title">Adult <i class="fas fa-user fa-2x"></i></span>
                                    <br>
                                    <p id="adultPrice" style="font-size: 30px">18 <i class="fa-solid fa-euro-sign"></i></p>
                                </div>
                                <div class="card-action teal darken-3">
                                    <input class="priceInput" type="number" id="amountAdult" min="1">
                                    <label class="white-text" for="amountAdult" style="font-size: 15px"><b>Number of tickets</b></label>
                                </div>
                            </div>
                        </div>
                        <div class="col s4">
                            <div class="card teal lighten-1 center-align">
                                <div class="card-content white-text">
                                    <span class="card-title">Child <i class="fas fa-child fa-2x"></i></span>
                                    <br>
                                    <p id="childPrice" style="font-size: 30px">12 <i class="fa-solid fa-euro-sign"></i></p>
                                </div>
                                <div class="card-action teal darken-3">
                                    <input class="priceInput" type="number" id="amountChild" min="1">
                                    <label class="white-text" for="amountChild" style="font-size: 15px"><b>Number of tickets</b></label>
                                </div>
                            </div>
                        </div>
                        <div class="col s2"></div>
                    </div>
                </div>
                <div class="col s1"></div>
            </div>
            <div class="row center-align">
                <h4 id="totalAmount">Total amount: 0 <i class="fa-solid fa-euro-sign"></i></h4>
                <a id="proceedPayment" class="waves-effect waves-light btn-large teal lighten-1 disabled">Proceed to payment</a>
            </div>
        </div>
    </div>
    <div class="container center-align" id="paymentContainer">
        <div class="row">
            <h2>Payment <i class="far fa-credit-card"></i></h2>
        </div>
        <div class="modification row center-align">
            <div class="col s3"></div>
            <div class="col s6">
                <div class="row card teal lighten-5">
                    <h4 style="padding-top: 15px">Enter your card data</h4>
                    <div class="row">
                        <div class="col s12">
                            <div class="col s7">
                                <div class="input-field">
                                    <input type="text" id="cardNumber" placeholder="Enter your card number" maxlength="16">
                                    <label for="cardNumber"></label>
                                </div>
                            </div>
                            <div id="errorCardNumber" class="col s5">
                                <div class="center-align" style="color: #ff4081; margin-top: 43px; margin-right: 60px">16 digits minimum</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <div class="col s5">
                                <div class="input-field">
                                    <input type="text" class="datepicker" id="expiryDate" placeholder="Enter card expiry date">
                                    <label for="expiryDate"></label>
                                </div>
                            </div>
                            <div class="col s2">
                                <div class="input-field">
                                    <input type="text" id="securityCode" placeholder="CVV" maxlength="3">
                                    <label for="securityCode"></label>
                                </div>
                            </div>
                            <div id="errorCVV" class="col s4">
                                <div class="center-align" style="color: #ff4081; margin-top: 43px; margin-right: 23px">3 digits minimum</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <div class="col s12">
                                <div class="input-field">
                                    <input type="email" id="emailSend" placeholder="Enter your email">
                                    <label for="emailSend"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="totalTickets">Your tickets: adult (0), child (0)</div>
                    <div class="row" id="nameTicket">Ticket name: annual zoo pass</div>
                    <div class="row" id="totalAmountToPay">Total amount to pay: 0 <i class="fa-solid fa-euro-sign"></i></div>
                    <div class="row">
                        <div class="center-align">
                            <a class="waves-effect waves-light btn disabled" id="buttonPay">Pay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="paymentSucceeded" class="container center-align" style="margin-top: 120px">
        <div class="row"><h3>The payment was successful!</h3></div>
        <div class="row"><h4>We hope you will have a good time at our zoo!</h4></div>
        <div class="row"><h5 id="finalMessage"></h5></div>
        <div class="row">
            <a class="waves-effect waves-light btn-large green darken-2" href="index.php">Back to home page</a>
        </div>
    </div>
</main>
<?php
$content = ob_get_clean();
?>

<?php
ob_start();
?>
<script src="js/tickets.js"></script>
<?php
$script = ob_get_clean();
include "includes/template.php";
?>