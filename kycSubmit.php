<?php
include 'db_config.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$mobileNumber = $_POST['mobileNumber'];
$date = str_replace('/', '-', $_POST['dateOfBirth']);
$formatted_date = date('Y-m-d', strtotime($date));
$created_at = date("Y-m-d h:i:s");
$sourcePath = $_FILES['file']['name'];
if ($_FILES["file"]["error"] > 0){
    $sourcePath = $_FILES['file']['tmp_name'];
    $targetPath = "assets/upload/" . $_FILES['file']['name'];
    move_uploaded_file($sourcePath, $targetPath);
}


$query = "INSERT INTO `kycDetails` (`firstname`, `lastname`, `mobilenumber`, `dateofbirth`, `media`, `created_at`)
                              VALUES ('$firstName','$lastName', '$mobileNumber', '$formatted_date', '$sourcePath', '$created_at')";

$result = mysqli_query($connect, $query);
if ($result) {
    echo "Form submitted successfully!";
} else {
    echo "Failed to submit form.";
}


?>