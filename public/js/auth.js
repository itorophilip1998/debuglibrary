function hidepass() {
    var passe = document.getElementById("typepass");
    if (passe.type === "password") {
        passe.type = "text";
    } else {
        passe.type = "password";
    }
}
