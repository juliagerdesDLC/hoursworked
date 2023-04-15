<?php
$servername = "127.0.0.1:3306";
$database = "u582777506_Tvh6Q";
$username = "u582777506_Rto1i";
$password = "tm-21-MP";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully. ";

if (isset($_POST['save'])){
    $your_name = $_POST['your_name'];
    $your_hours = $_POST['your_hours'];
    $notes = $_POST['notes'];

    $sql = "INSERT INTO timesheets(your_name, your_hours, notes) values ('$your_name', '$your_hours','$notes')";

    if (mysqli_query($conn, $sql)) {
        echo "Submission accepted.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Form not submitted.";
}

mysqli_close($conn);
?>
