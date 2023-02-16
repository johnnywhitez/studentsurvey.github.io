document.getElementById("survey-form").addEventListener("submit", function(event) {
    event.preventDefault();
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var rating = document.getElementById("rating").value;
    var comments = document.getElementById("comments").value;
    if (name === "" || email === "" || rating === "")
    
        alert("Please fill out all required fields.");
