<?php
include("dbcontions.php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['ragister-btn'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];

    $sql = "INSERT INTO `resgiter` (`fname`, `lname`, `email`, `password`, `number`) VALUES ('$fname', '$lname', '$email', '$password', '$phonenumber')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if (isset($_POST['resgiter-btn-update'])) {
    $updated_id = $_POST['update_id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];

    $sql = "UPDATE `resgiter` SET fname = '$fname', lname = '$lname', email = '$email', password = '$password', number = '$phonenumber' WHERE id = '$updated_id'";

    if (mysqli_query($conn, $sql)) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        header("Location: index.php");
    }
}

if (isset($_POST['delete_button'])) {
    $deleted_id = $_POST['delete_id'];
    $delete_query = "DELETE FROM resgiter WHERE id ='$deleted_id'";
    $delete_query_run = mysqli_query($conn, $delete_query);

    if ($delete_query_run) {
        echo "Record deleted successfully";
        header('Location: index.php');
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
        header('Location: index.php');
    }
}
