
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "table";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

    $sql = "SELECT * FROM storedata WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo 'Email is already in use. Please choose a different one.';
    } else {
        echo 'Email is available.';
    }
}

$conn->close();
?>
