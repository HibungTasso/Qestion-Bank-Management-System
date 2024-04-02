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
}
document.getElementById("myForm").addEventListener("submit", function (event) {
    event.preventDefault();
    var category = document.getElementById("categorySelect").value;
    var item = document.getElementById("itemSelect").value;
    alert("Subject: " + category + "\ntopic: " + item);
    // You can further process the selected values here
});