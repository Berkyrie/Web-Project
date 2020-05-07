function kontrolForm() {
    var ad = document.forms[0][0].value;
    if (ad == "") {
        alert("İsim girmek zorunludur!");
        return false;
    }

    var soyad = document.forms[0][1].value;
    if (soyad == "") {
        alert("Soyisim girmek zorunludur!");
        return false;
    }

}

function ValidateEmail(inputEmail) {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (inputEmail.value.match(mailformat)) {
        document.myForm.email.focus();
        return true;
    } else {
        alert("You have entered an invalid email address!");
        document.myForm.email.focus();
        return false;
    }
}
