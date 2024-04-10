<?php
// Function to safely escape input values
function escape($conn, $value) {
    return $conn->real_escape_string($value);
}

// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "staff_management";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $id = escape($conn, $_POST["id"]);
    $name = escape($conn, $_POST["name"]);
    $email = escape($conn, $_POST["email"]);
    $position = escape($conn, $_POST["position"]);

    // Update staff member in database
    $sql = "UPDATE staff_members SET name='$name', email='$email', position='$position' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Staff member updated successfully<br>";
        echo "<a href='index.php'>Go back to main page</a>";
    } else {
        echo "Error updating staff member: " . $conn->error;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = escape($conn, $_GET["id"]);
    $sql = "SELECT * FROM staff_members WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row["name"];
        $email = $row["email"];
        $position = $row["position"];

        // Display form for updating details
        echo "<h2>Update Staff Member</h2>";
        echo "<form action='' method='post'>";
        echo "<input type='hidden' name='id' value='$id'>";
        echo "Name: <input type='text' name='name' value='$name'><br>";
        echo "Email: <input type='email' name='email' value='$email'><br>";
        echo "Position: <input type='text' name='position' value='$position'><br>";
        echo "<input type='submit' value='Update'>";
        echo "</form>";
    } else {
        echo "Staff member not found<br>";
        echo "<a href='index.php'>Go back to main page</a>";
    }
}

$conn->close();
?>
