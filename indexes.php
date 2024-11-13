<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
mysqli_query($conn, $sql);

mysqli_select_db($conn, $dbname);

$sql = "CREATE TABLE IF NOT EXISTS employees (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    department VARCHAR(50),
    salary DECIMAL(10, 2),
    age INT
";

mysqli_connect($conn, $sql);

$sql = "INSERT INTO employees (name, department, salary, age) VALUES
    ('ALICE', 'HR', 5000.00, 28),
    ('BOB', 'IT', 7000.00, 32),
    ('CHarlie', 'Finance', 6500.00, 35),
    ('DAVID', 'IT', 7200.00, 29),
    ('EVE', 'HR', 4800.00, 29)";

echo "<h3> SELECT Query with WHERE, LIKE, AND, OR </h3>";
$sql = "SELECT * FROM employees WHERE department LIKE 'IT' AND salary > 6000";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    echo "ID: " . $row['id'] . " - Name: " . $row['name'] . " - Department: " . $row['department'] . " - Salary: " . $row['salary'] . "<br>";
}

echo "<h3> ORDER BY Salary DESC </h3>";
$sql = "SELECT * FROM employees ORDER BY salary DESC";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    echo $row['name'] . " - Salary: " . $row['salary'] . "<br>";
}

// echo "<h3>GROUP BY Department WITH COUNT </h3>";
// $sql = "SELECT department, COUNT(*) AS COUNT"
    
