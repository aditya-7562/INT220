<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form with GET</title>
</head>
<body>

    <form method="get" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="name">Name: </label>
        <input type="text" id="name" name="name">
        <input type="submit" value="Submit">
    </form>

    <?php
    if (isset($_GET["name"])) {
        $name = $_GET["name"];
        echo "Hi, " . $name;
        
    }
    ?>

</body>
</html>
