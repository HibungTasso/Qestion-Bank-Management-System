const container = document.getElementById('container1');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');
registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});
document.getElementById("loginForm").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form submission

    // Get input values
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    // var confirmPassword = document.getElementById('confirmPassword').value;


    // Check if username and password match predefined values
    if (username === 'admin@123' && password === 'admin123') {
        // If matched, store the login status in local storage
        localStorage.setItem('loggedIn', 'true');
        // alert('Login successful');
        window.location.href = 'index2.html'; // Redirect to dashboard page
    } else {
        alert('Invalid username or password');
    }
});
