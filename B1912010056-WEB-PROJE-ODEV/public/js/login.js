function emptyCheck() {
    var username_input = document.getElementById("username").value;
    var password_input = document.getElementById("password").value;


    if (username_input == "") {
        alert("username boş bırakılamaz!");
        return false
    } else if (password_input == "") {
        alert("password boş bırakılamaz!")
        return false
    } else {
        window.location="about.html"

        return true
    }

}