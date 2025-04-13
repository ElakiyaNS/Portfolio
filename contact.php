<?php
$con = mysqli_connect('localhost', 'root', '', 'database1');

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Use backticks for table and column names if needed (avoid single quotes!)
$sql = "INSERT INTO details (fieldname, fieldemail, fieldsubject, fieldmessage) 
        VALUES ('$name', '$email', '$subject', '$message')";

$rs = mysqli_query($con, $sql);

if ($rs) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . mysqli_error($con);
}
?>
