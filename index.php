<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Staff Management System</h1>

    <!-- Display staff members -->
    <?php include 'display_staff.php'; ?>

    <!-- Add new staff form -->
    <h2>Add New Staff Member</h2>
    <form action="http://localhost/add_staff.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="position">Position:</label>
        <input type="text" id="position" name="position" required><br>
        <input type="submit" value="Add Staff">
    </form>

</body>
</html>
