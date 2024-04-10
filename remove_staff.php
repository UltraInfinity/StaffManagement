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

// If ID is provided in URL
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = escape($conn, $_GET["id"]);

    // Prepare and bind parameters
    $stmt = $conn->prepare("DELETE FROM staff_members WHERE id=?");
    $stmt->bind_param("i", $id);

    // Set parameters and execute
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Staff member removed successfully<br>";
    } else {
        echo "Staff member not found<br>";
    }

    $stmt->close();
}

echo "<a href='index.php'>Go back to main page</a>";

$conn->close();
?>
