<?php
// Database connection parameters
$servername = "localhost"; // Change this if your database is hosted elsewhere
$username = "root"; // Change this to your database username
$password = "nischal"; // Change this to your database password
$dbname = "qbms"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select data from the users table
$sql = "SELECT regno, name, email, password FROM users";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="dash.css">
</head>

<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <h2>Q<span class="danger">BMS</span></h2>
                </div>
                <div class="close" id="close_btn">
                    <span class="material-symbols-outlined">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="dashboard.php">
                    <span class="material-symbols-outlined">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="usermanagement.php" class="active">
                    <span class="material-symbols-outlined">person_outline</span>
                    <h3>User management</h3>
                </a>
                <a href="subjectallocation.php">
                    <span class="material-symbols-outlined">add</span>
                    <h3>Allocation Subject</h3>
                </a>
                <a href="index.php">
                    <span class="material-symbols-outlined">logout</span>
                    <h3>logout</h3>
                </a>
            </div>
        </aside>

        <main>
            <div class="recent_updated">
                <div class="button">
                    <h1 class="h1">List of Users</h1>
                    <a href="userform.php" class="bo" style="font-weight: 700;" target="_blank">Add User</a>
                    <!-- <a href="userform.php"></a> -->
                </div>
                <table>
                    <thead>
                        <th>Sl.no</th>
                        <th>Reg no.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            $count = 1;
                            // Output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $count++ . "</td>";
                                echo "<td>" . $row["regno"] . "</td>";
                                echo "<td>" . $row["name"] . "</td>";
                                echo "<td>" . $row["email"] . "</td>";
                                echo "<td>" . $row["password"] . "</td>";
                                echo "<td><i class='bi bi-trash-fill'> </i><i class='bi bi-pencil-fill'></i></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>No data found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </main>

        <div class="right">
            <div class="top">
                <button id="menu_bar">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <div class="theme_toggler">
                    <span class="material-symbols-outlined active">light_mode</span>
                    <span class="material-symbols-outlined">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p><b>Admin</b></p>
                        <p>Admin</p>
                        <small class="text_muted"></small>
                    </div>
                    <div class="profile-photo">
                        <img src="bg3.jpg">
                    </div>
                </div>
            </div>
            <div class="recent_up">
                <h2>Recent Update</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="bg4.jpg">
                        </div>
                        <div class="message">
                            <p><b>User</b> updated last time</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="db.js"></script>
</body>

</html>
