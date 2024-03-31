$(document).ready(function(){
    $('.datepicker').datepicker({
        format: 'mmm, yyyy',
    });
});

let oneDayTicket = document.getElementById("oneDayTicket");
let twoDayTicket = document.getElementById("twoDayTicket");
let annualTicket = document.getElementById("annualTicket");
let choiceText = document.getElementById("choiceText");
let adultPrice = document.getElementById("adultPrice");
let childPrice = document.getElementById("childPrice");
let ticketChoice = document.getElementsByClassName("ticketChoice");
let priceInputs = document.getElementsByClassName("priceInput");
let totalAmount = document.getElementById("totalAmount");
let proceedPayment = document.getElementById("proceedPayment");
let mainContainer = document.getElementById("main");
let paymentContainer = document.getElementById("paymentContainer");
let totalTickets = document.getElementById("totalTickets");
let totalAmountToPay = document.getElementById("totalAmountToPay");
let nameTicketToPay = document.getElementById("nameTicket");
let cardNumber = document.getElementById("cardNumber");
let expiryDate = document.getElementById("expiryDate");
let cvv = document.getElementById("securityCode");
let email = document.getElementById("emailSend");
let buttonPay = document.getElementById("buttonPay");
let paymentSucceeded = document.getElementById("paymentSucceeded");
let finalMessage = document.getElementById("finalMessage");
let errorCardNumber = document.getElementById("errorCardNumber");
let errorCVVNumber = document.getElementById("errorCVV");
let nameTicket;
let totalAmountNumber = 0;
let adultPriceDefault = 0;
let childPriceDefault = 0;
let adultPriceNumber = 0;
let childPriceNumber = 0;

ticketChoice[0].style.display = "none";
paymentSucceeded.style.display = "none";
paymentContainer.style.display = "none";
errorCardNumber.style.display = "none";
errorCVVNumber.style.display = "none";

oneDayTicket.onclick = function () {
    ticketChoice[0].style.display = "block";
    ticketChoice[0].style.opacity = "0";
    setTimeout(function () {
        fadeIn(ticketChoice[0]);
    }, 50);
    choiceText.innerText = "You have selected the one-day ticket";
    nameTicket = "one-day ticket";
    adultPrice.innerHTML = "18 <i class=\"fa-solid fa-euro-sign\"></i>";
    childPrice.innerHTML = "12 <i class=\"fa-solid fa-euro-sign\"></i>";
    setDefault();
}

twoDayTicket.onclick = function () {
    ticketChoice[0].style.display = "block";
    ticketChoice[0].style.opacity = "0";
    setTimeout(function () {
        fadeIn(ticketChoice[0]);
    }, 50);
    choiceText.innerText = "You have selected the two-day ticket";
    nameTicket = "two-day ticket";
    adultPrice.innerHTML = "30 <i class=\"fa-solid fa-euro-sign\"></i>";
    childPrice.innerHTML = "20 <i class=\"fa-solid fa-euro-sign\"></i>";
    setDefault();
}

annualTicket.onclick = function () {
    ticketChoice[0].style.display = "block";
    ticketChoice[0].style.opacity = "0";
    setTimeout(function () {
        fadeIn(ticketChoice[0]);
    }, 50);
    choiceText.innerText = "You have selected the annual zoo pass";
    nameTicket = "annual zoo pass";
    adultPrice.innerHTML = "120 <i class=\"fa-solid fa-euro-sign\"></i>";
    childPrice.innerHTML = "100 <i class=\"fa-solid fa-euro-sign\"></i>";
    setDefault();
}

priceInputs[0].oninput = function () {
    if (priceInputs[0].value < 0) {
        priceInputs[0].value = priceInputs[0].min;
    }
    adultPriceNumber = adultPriceDefault * priceInputs[0].value;
    adultPrice.innerHTML = adultPriceNumber + " <i class=\"fa-solid fa-euro-sign\"></i>";
    totalAmountNumber = adultPriceNumber + childPriceNumber;
    if (totalAmountNumber > 0) {
        proceedPayment.className = "waves-effect waves-light btn-large teal lighten-1";
    } else {
        proceedPayment.className = "waves-effect waves-light btn-large teal lighten-1 disabled";
    }
    totalAmount.innerHTML = "Total amount: " + totalAmountNumber + " <i class=\"fa-solid fa-euro-sign\"></i>";
}

priceInputs[1].oninput = function () {
    if (priceInputs[1].value < 0) {
        priceInputs[1].value = priceInputs[1].min;
    }
    childPriceNumber = childPriceDefault * priceInputs[1].value;
    childPrice.innerHTML = childPriceNumber + " <i class=\"fa-solid fa-euro-sign\"></i>";
    totalAmountNumber = adultPriceNumber + childPriceNumber;
    if (totalAmountNumber > 0) {
        proceedPayment.className = "waves-effect waves-light btn-large teal lighten-1";
    } else {
        proceedPayment.className = "waves-effect waves-light btn-large teal lighten-1 disabled";
    }
    totalAmount.innerHTML = "Total amount: " + totalAmountNumber + " <i class=\"fa-solid fa-euro-sign\"></i>";
}

cardNumber.oninput = function () {
    if (cardNumber.value.length !== cardNumber.maxLength) {
        errorCardNumber.style.display = "block";
    } else {
        errorCardNumber.style.display = "none";
    }
    formCheck();
}

expiryDate.onchange = function () {
    formCheck();
}

cvv.oninput = function () {
    if (cvv.value.length !== cvv.maxLength) {
        errorCVVNumber.style.display = "block";
    } else {
        errorCVVNumber.style.display = "none";
    }
    formCheck();
}

email.oninput = function () {
    formCheck();
}

buttonPay.onclick = function () {
    paymentContainer.style.display = "none";
    paymentSucceeded.style.display = "block";
    finalMessage.innerText = "Tickets were sent to " + email.value + " in PDF format";
}

proceedPayment.onclick = function () {
    mainContainer.style.display = "none";
    paymentContainer.style.display = "block";
    if (priceInputs[0].value === "") {
        totalTickets.innerText = "Your tickets: adult (" + 0 + "), child (" + priceInputs[1].value + ")";
    } else if (priceInputs[1].value === "") {
        totalTickets.innerText = "Your tickets: adult (" + priceInputs[0].value + "), child (" + 0 + ")";
    } else {
        totalTickets.innerText = "Your tickets: adult (" + priceInputs[0].value + "), child (" + priceInputs[1].value + ")";
    }
    nameTicketToPay.innerText = "Ticket name: " + nameTicket;
    totalAmountToPay.innerHTML = "Total amount to pay: " + totalAmountNumber + " <i class=\"fa-solid fa-euro-sign\"></i>"
}

function fadeIn(element) {
    let opacity = 0;
    let interval = setInterval(function () {
        if (opacity < 1) {
            opacity += 0.02;
            element.style.opacity = opacity;
        } else {
            clearInterval(interval);
        }
    }, 20);
}

function setDefault() {
    priceInputs[0].value = "";
    priceInputs[1].value = "";
    totalAmountNumber = 0;
    adultPriceNumber = 0;
    childPriceNumber = 0;
    totalAmount.innerHTML = "Total amount: 0 <i class=\"fa-solid fa-euro-sign\"></i>";
    adultPriceDefault = adultPrice.innerText;
    childPriceDefault = childPrice.innerText;
}

function formCheck() {
    if (cardNumber.value !== "" && expiryDate.value !== "" && cvv.value !== "" && email.value !== "" && cardNumber.value.length === cardNumber.maxLength && cvv.value.length === cvv.maxLength) {
        buttonPay.className = "waves-effect waves-light btn";
    } else {
        buttonPay.className = "waves-effect waves-light btn disabled";
    }
}