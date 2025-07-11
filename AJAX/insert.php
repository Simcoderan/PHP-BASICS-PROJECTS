<?php
include 'connect.php';

if (
    isset($_POST['nameSend']) &&
    isset($_POST['emailSend']) &&
    isset($_POST['mobileSend']) &&
    isset($_POST['placeSend'])
) {
    $name = mysqli_real_escape_string($con, $_POST['nameSend']);
    $email = mysqli_real_escape_string($con, $_POST['emailSend']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobileSend']);
    $place = mysqli_real_escape_string($con, $_POST['placeSend']);

    $sql = "INSERT INTO `crud modal` (name, email, mobile, place) VALUES ('$name', '$email', '$mobile', '$place')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Data inserted successfully";
    } else {
        echo "Insertion failed: " . mysqli_error($con);
    }
}
?>
