function validateForm(event) {
  event.preventDefault(); // Prevent form submission

  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  // Perform validation
  if (username === "hello" && password === "hello123") {
    // Successful login
    window.location.href = "main.html"; // Redirect to dashboard page
  } else {
    // Invalid credentials
    var errorMessage = document.getElementById("error-message");
    errorMessage.innerHTML = "Invalid username or password.";
  }
}
