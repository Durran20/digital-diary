<?php 

if(isset($_POST['fname'])) {
    $con = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
    mysqli_select_db($con, "diary") or die("Cannot Connect to the Database");

    if(isset($_POST['fname'])) {
        $fname = $_POST['fname'];
    } else {
        $result = mysqli_query($con, "SELECT fname from diary.list WHERE username=$user");
    }

    if(isset($_POST['lname'])) {
        $lname = $_POST['lname'];
    } else {
        $lname = mysqli_query($con, "SELECT lname from diary.list WHERE username=$user");
    }

    if(isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $email = mysqli_query($con, "SELECT email from diary.list WHERE username=$user");
    }

    if(isset($_POST['address'])) {
        $address = $_POST['address'];
    } else {
        $address = mysqli_query($con, "SELECT address from diary.list WHERE username=$user");
    }

    if(isset($_POST['zipcode'])) {
        $zipcode = $_POST['zipcode'];
    } else {
        $zipcode = mysqli_query($con, "SELECT zipcode from diary.list WHERE username=$user");
    }

    if(isset($_POST['phone'])) {
        $phone = $_POST['phone'];
    } else {
        $phone = mysqli_query($con, "SELECT phone from diary.list WHERE username=$user");
    }

    mysqli_query($con, "UPDATE diary.list SET fname = '$fname', 
                                                lname = '$lname',
                                                email = '$email',
                                                address = '$address',
                                                zipcode = '$zipcode',
                                                phone = '$phone' WHERE username='$user'") or die(mysqli_error());

    Print '<script>alert("Successfully Updated!");</script>';
    Print '<script>window.location.assign("update.php");</script>';
} else {
    header("location: home.php");
}

?>