<?php include 'includes/dbconnect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - IT Asset Management System</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<div class="container">
    <h1>Login</h1>
    <form action="login.php" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stid = oci_parse($conn, "SELECT * FROM USERS WHERE USERNAME = :username");
    oci_bind_by_name($stid, ':username', $username);
    oci_execute($stid);

    $user = oci_fetch_assoc($stid);
    oci_free_statement($stid);

    if ($user && password_verify($password, $user['PASSWORD'])) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit;
    } else {
        echo "<p>Invalid username or password. Please try again.</p>";
    }

    oci_close($conn);
}
?>
</body>
</html>
