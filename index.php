<?php

mysqli_report(MYSQLI_REPORT_OFF);
$servername = "";
$username   = ";
$password   = "";
$dbname     = "";

// الاتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// إضافة طالب جديد
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $age  = $_POST['age'];

    $sql = "INSERT INTO student (name, age, status)
            VALUES ('$name', '$age', 0)";

    $conn->query($sql);

    header("Location: index.php");
    exit;
}

// عرض البيانات
$result = $conn->query("SELECT * FROM student");

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Student Information</title>

<style>

body {
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #ffd1e8, #c89cff);
    min-height: 100vh;
    margin: 0;
    padding: 40px 15px;
}

.container {
    width: 700px;
    max-width: 100%;
    margin: auto;
    background: white;
    padding: 30px;
    border-radius: 18px;
    box-shadow: 0 10px 30px rgba(91, 34, 130, 0.25);
}

h2 {
    text-align: center;
    color: #8f3bb8;
}

form {
    display: flex;
    justify-content: center;
    gap: 10px;
    flex-wrap: wrap;
}

input {
    padding: 11px;
    border: 1px solid #d8b4e8;
    border-radius: 8px;
}

input[type="text"],
input[type="number"] {
    width: 200px;
}

input[type="submit"] {
    background: linear-gradient(90deg, #e83e8c, #9b51e0);
    color: white;
    border: none;
    cursor: pointer;
    font-weight: bold;
}

input[type="submit"]:hover {
    opacity: 0.9;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 30px;
}

th,
td {
    border: 1px solid #e2c7ec;
    padding: 10px;
    text-align: center;
}

th {
    background: linear-gradient(90deg, #d65ca7, #974ac9);
    color: white;
}

.toggle-button {
    display: inline-block;
    padding: 7px 14px;
    background: #9b51e0;
    color: white;
    text-decoration: none;
    border-radius: 7px;
}

.active {
    color: green;
    font-weight: bold;
}

.inactive {
    color: #d63384;
    font-weight: bold;
}

</style>

</head>

<body>

<div class="container">

<h2>Student Information ✨</h2>

<form method="POST" action="index.php">

    <input
        type="text"
        name="name"
        placeholder="Enter your name"
        required
    >

    <input
        type="number"
        name="age"
        placeholder="Enter your age"
        required
    >

    <input
        type="submit"
        name="submit"
        value="Submit"
    >

</form>

<table>

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Status</th>
    <th>Action</th>
</tr>

<?php if ($result && $result->num_rows > 0): ?>

    <?php while ($row = $result->fetch_assoc()): ?>

        <tr>

            <td><?php echo htmlspecialchars($row['id']); ?></td>

            <td><?php echo htmlspecialchars($row['name']); ?></td>

            <td><?php echo htmlspecialchars($row['age']); ?></td>

            <td class="<?php echo $row['status'] == 1 ? 'active' : 'inactive'; ?>">
                <?php echo $row['status'] == 1 ? 'Active' : 'Inactive'; ?>
            </td>

            <td>
                <a
                    class="toggle-button"
                    href="toggle.php?id=<?php echo $row['id']; ?>"
                >
                    Toggle
                </a>
            </td>

        </tr>

    <?php endwhile; ?>

<?php else: ?>

    <tr>
        <td colspan="5">No students added yet.</td>
    </tr>

<?php endif; ?>

</table>

</div>

</body>
</html>
