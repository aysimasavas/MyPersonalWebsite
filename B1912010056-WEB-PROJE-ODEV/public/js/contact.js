function ControlInputs() {
    var name_surname = document.getElementById("name-surname").value;
    var email = document.getElementById("email").value;
    var gender = document.getElementById("radio1").value;
    var city = document.getElementById("city").value;
    var msg = document.getElementById("mesaj").value;
    var msg_confirm = document.getElementById("msg_confirm").value;
    var mail_confirm = document.getElementById("mail_confirm").value;
    // + email + gender + city + msg + msg_confirm + mail_confirm
    if (name_surname == "" || name_surname == null) {
        alert("Ad Soyad bölümü boş geçilemez.");
        return false;
    }
    else if (email == "" || email == null) {
        alert("Email boş bırakılamaz. ");
        return false;
    }
    else if (gender == "" || gender == null) {
        alert("Cinsiyet boş bırakılmaz.");
        return false;
    }
    else if (city == "" || city == "" || city== "Yaşadığınız il") {
        alert("İl boş olamaz.");
        return false;
    }else{
        return true;
    }

}
