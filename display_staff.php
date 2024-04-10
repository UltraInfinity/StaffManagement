<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "staff_management";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if filter form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["filter_position"])) {
    $position = $_POST["filter_position"];
    if ($position === "") {
        // If position is empty (i.e., "All" is selected), retrieve all staff members
        $sql = "SELECT * FROM staff_members";
    } else {
        // Filter staff members by position
        $sql = "SELECT * FROM staff_members WHERE position='$position'";
    }
} else {
    // If filter form is not submitted, retrieve all staff members
    $sql = "SELECT * FROM staff_members";
}

// Display staff members
$result = $conn->query($sql);

echo "<h2>Staff Members</h2>";

// Filter form
echo "<form action='' method='post'>";
echo "<label for='filter_position'>Filter by Position:</label>";
echo "<select name='filter_position' id='filter_position'>";
echo "<option value=''>All</option>";
echo "<option value='Lecturer'>Lecturer</option>";
echo "<option value='Reader'>Reader</option>";
echo "<option value='Senior Lecturer'>Senior Lecturer</option>";
echo "<option value='Professor'>Professor</option>";
echo "</select>";
echo "<input type='submit' value='Filter'>";
echo "</form>";

if ($result->num_rows > 0) {
    // Staff table
    echo "<table>";
    echo "<tr><th>Name</th><th>Email</th><th>Position</th><th>Actions</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["position"]."</td><td><a href='remove_staff.php?id=".$row["id"]."'>Remove</a> | <a href='update_staff.php?id=".$row["id"]."'>Update</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
