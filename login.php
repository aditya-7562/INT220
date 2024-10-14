<?php
session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);

    if (empty($name) || empty($email)) {
        $error = "Both fields are required!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format!";
    } else {

        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;

        header('Location: login.php');
        exit;
    }
}

if (isset($_SESSION['name']) && isset($_SESSION['email'])) {
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?>!</h2>
    <p>Your email: <?php echo htmlspecialchars($_SESSION['email']); ?></p>
    
    <form method="GET" action="login.php">
        <button type="submit" name="logout">Logout</button>
    </form>
</body>
</html>

<?php
} else {

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login Form</h2>

    <?php

    if (isset($error)) {
        echo '<p style="color:red;">' . $error . '</p>';
    }
    ?>

    <form method="POST" action="login.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>

<?php
}
?>
