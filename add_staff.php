<?php
// Function to safely escape input values
function escape($conn, $value) {
    return $conn->real_escape_string($value);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "staff_management";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO staff_members (name, email, position) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $position);

    // Set parameters and execute
    $name = escape($conn, $_POST["name"]);
    $email = escape($conn, $_POST["email"]);
    $position = escape($conn, $_POST["position"]);
    $stmt->execute();

    echo "New staff member added successfully<br>";
    echo "<a href='index.php'>Go back to main page</a>";

    $stmt->close();
    $conn->close();
}
?>
