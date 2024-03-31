let contactForm = document.getElementById("contactForm");
let nameContact = document.getElementById("nameContact");
let emailContact = document.getElementById("emailContact");
let messageContact = document.getElementById("messageContact");
let buttonContact = document.getElementById("buttonContact");
let contacted = document.getElementById("contacted");
contacted.style.display = "none";

nameContact.oninput = function () {
    contactFormCheck();
}

emailContact.oninput = function () {
    contactFormCheck();
}

messageContact.oninput = function () {
    contactFormCheck();
}


buttonContact.onclick = function () {
    contactForm.style.display = "none";
    contacted.style.display = "block";
}

function contactFormCheck() {
    if (nameContact.value !== "" && emailContact.value !== "" && messageContact.value !== "") {
        buttonContact.className = "btn waves-effect waves-light btn-large";
    } else {
        buttonContact.className = "btn waves-effect waves-light btn-large disabled";
    }
}