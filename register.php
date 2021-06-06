<?php 
if(isset($_POST['username'])) {
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con) {
        die("connection to this database failed due to ".mysqli_connect_error());
    }

    // Collect post variables
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $zipcode = $_POST['zipcode'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO `diary`.`list` (`fname`, `lname`, `username`, `password`, `email`, `address`, `zipcode`, `phone`) VALUES ('$fname', '$lname', '$username', '$password', '$email', '$address', '$zipcode', '$phone');";

    // Execute the Query
    if($con->query($sql) == true) {
        // echo "Successfully inserted";
        Print '<script>alert("Successfully Registered!");</script>';
        Print '<script>window.location.assign("login.php");</script>';
        // Flag for successful insertion
        // $insert = true;
    } else {
        echo "ERROR: $sql <br> $con->error";
    }

    // Closing the DB connection
    $con->close();
} 
?>