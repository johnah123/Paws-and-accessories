function loginBtn() {
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let errorMsg = document.getElementById("error-msg");

    if (username === "" || password === "") {
        alert("Please enter your username and password");
        return false;
    } else if (username.toLowerCase() !== "jb" || password !== "jb") {
       alert('Invalid username and password please try again')
       return false;
    }

    // Successful login
    alert('Login successful! Welcome, ' + username);
    return true; // Allow form submission
}
