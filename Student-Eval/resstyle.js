document.getElementById("register-form").addEventListener("submit", function(event) {
    event.preventDefault();
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var password2 = document.getElementById("password2").value;
    if (username === "" || email === "" || password === "" || password2 === "") {
        alert("Please fill out all required fields.");
    } else if (password !== password2) {
        alert("Passwords do not match.");
    } else {
        this.submit();
    }
});
