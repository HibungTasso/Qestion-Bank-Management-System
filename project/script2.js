function populateOptions() {
    var categorySelect = document.getElementById("categorySelect");
    var itemSelect = document.getElementById("itemSelect");

    itemSelect.innerHTML = ""; // Clear existing options

    if (categorySelect.value === "Python") {
        var Python = ["Basics", "Loops", "Data types"];
        Python.forEach(function (Python) {
            var option = document.createElement("option");
            option.text = Python;
            option.value = Python.toLowerCase();
            itemSelect.add(option);
        });
    } else if (categorySelect.value === "Java") {
        var Java = ["Basics", "Operators", "OOPS"];
        Java.forEach(function (Java) {
            var option = document.createElement("option");
            option.text = Java;
            option.value = Java.toLowerCase();
            itemSelect.add(option);
        });
    }
    else if (categorySelect.value === "Html") {
        var Html = ["History", "Tag", "Links"];
        Html.forEach(function (Html) {
            var option = document.createElement("option");
            option.text = Html;
            option.value = Html.toLowerCase();
            itemSelect.add(option);
        });
    }
}
document.getElementById("myForm").addEventListener("submit", function (event) {
    event.preventDefault();
    // var category = document.getElementById("categorySelect").value;
    // var item = document.getElementById("itemSelect").value;
    // alert("Subject: " + category + "\ntopic: " + item);
    window.location.href = 'Paper.html'; 
    // You can further process the selected values here
});
function myFunction() {
    var x = document.getElementById("myNavbar");
    if (x.className === "navbar") {
        x.className += " responsive";
    } else {
        x.className = "navbar";
    }
}
document.getElementById("con1").style.display = "none";
document.getElementById("Aboutpg").style.display = "none";
document.getElementById("Abouthome").style.display = "none";
document.getElementById("Contact").style.display = "none";
// document.getElementById("Contact").style.display = "none";
function showHome() {
    document.getElementById("con1").style.display = "none";
    document.getElementById("Aboutpg").style.display = "none";
    document.getElementById("Abouthome").style.display = "block";
    document.getElementById("Contact").style.display = "none";
}
function showAbout() {
    document.getElementById("con1").style.display = "none";
    document.getElementById("Aboutpg").style.display = "block";
    // document.getElementById("container").style.display = "background.jpeg"
    document.getElementById("Abouthome").style.display = "none";
    document.getElementById("Contact").style.display = "none";
}
function showSS() {
    document.getElementById("con1").style.display = "block";
    document.getElementById("Aboutpg").style.display = "none";
    document.getElementById("Abouthome").style.display = "none";
    document.getElementById("Contact").style.display = "none";
    
}
function contact() {
    document.getElementById("con1").style.display = "none";
    document.getElementById("Aboutpg").style.display = "none";
    document.getElementById("Abouthome").style.display = "none";
    document.getElementById("Contact").style.display = "block";
}
document.addEventListener("DOMContentLoaded", function() {
    // Get all anchor tags in the navbar
    var navLinks = document.querySelectorAll(".nav-link");

    // Loop through each anchor tag
    navLinks.forEach(function(link) {
        // Add click event listener to each anchor tag
        link.addEventListener("click", function(event) {
            event.preventDefault(); // Prevent default anchor tag behavior
            
            // Remove the active class from all anchor tags
            navLinks.forEach(function(navLink) {
                navLink.classList.remove("active");
            });

            // Add active class to the clicked anchor tag
            this.classList.add("active");

            // Get the background image path from the data attribute
            var bgImage = this.getAttribute("data-bg-image");

            // Set the background image of the body element
            document.body.style.backgroundImage = bgImage ? "url('" + bgImage + "')" : "none";
        });
    });
});
document.addEventListener("DOMContentLoaded", function() {
    // Get the anchor tag to be automatically selected
    var selectedAnchor = document.getElementById("hm"); // Change "link2" to the ID of the anchor tag you want to select automatically

    // Trigger a click event on the selected anchor tag
    selectedAnchor.click();
});


// document.addEventListener("DOMContentLoaded", function() {
//     var logoutButton = document.getElementById("logout-button");

//     // Add event listener to the logout button
//     logoutButton.addEventListener("click", function() {
//         // Hide the home page and show the login form
//         container.style.display = "none";
//         loginForm.style.display = "block";
//     });
// });

