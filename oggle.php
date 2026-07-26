<?php

$servername = "";
$username   = "";
$password   = "";
$dbname     = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "UPDATE student
        SET status = IF(status = 0, 1, 0)
        WHERE id = $id";

$conn->query($sql);

$conn->close();

header("Location: index.php");
exit;

?>
