<?php include 'includes/dbconnect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - IT Asset Management System</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<div class="container">
    <h1>Signup</h1>
    <form action="signup.php" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Signup</button>
    </form>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stid = oci_parse($conn, "INSERT INTO USERS (USERNAME, PASSWORD) VALUES (:username, :password)");
    oci_bind_by_name($stid, ':username', $username);
    oci_bind_by_name($stid, ':password', $password);
    $result = oci_execute($stid);

    if ($result) {
        echo "<p>Signup successful! <a href='login.php'>Login here</a></p>";
    } else {
        echo "<p>Signup failed. Please try again.</p>";
    }

    oci_free_statement($stid);
    oci_close($conn);
}
?>
</body>
</html>
