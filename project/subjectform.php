<?php
// Database connection parameters
$servername = "localhost"; // Change this if your database is hosted elsewhere
$username = "root"; // Change this to your database username
$password = "nischal"; // Change this to your database password
$dbname = "qbms"; // Change this to your database name

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $s_id = $_POST['s_id'];
    $s_name = $_POST['s_name'];

    // Prepare SQL statement to insert data into the database
    $sql = "INSERT INTO subjects (subject_id, subject_name) VALUES ('$s_id', '$s_name')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully');</script>";
        echo "<script>window.location.href = 'subjectallocation.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
<div class="container">
        <h2 class="text-center">User Registration Form</h2>
        <div class="row d-flex justify-content-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                            <div class="form-group">
                                <label for="s_id">Subject id</label>
                                <input type="text" id="s_id" name="s_id" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="s_name">Subject name </label>
                                <input type="text" id="s_name" name="s_name" class="form-control" required>
                            </div>
                            <!-- <div class="form-group">
                                <label for="email"></label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control" required>
                            </div> -->
                            <div class="form-group">
                                <input type="submit" value="Register" class="btn btn-primary mt-3 w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
