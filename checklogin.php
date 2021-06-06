<?php 

    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Set connection variables
    $server = "localhost";
    //$username = "root";
    // $password = "";

   //  echo $username;
   //  echo $password;

    // Create a connection
    $con = mysqli_connect($server, "root", "");

    // Check for connection success
    if(!$con) {
        die("connection to this database failed due to ".mysqli_connect_error());
    }

   // mysqli_select_db($con, "diary") or die("Canot connect to database");

    // $sql = "SELECT * from list where username='$username'";
    $query = mysqli_query($con, "SELECT * from diary.list WHERE username='$username'");   // Retrieves data of the username given
    // WARNING !!!!!!!!!!!!! WARNING !!!!!!!!!!!!
    // I GOT STUCK HERE BECAUSE THE QUERY WAS WRONG
    // ISNTEAD OF ONLY LIST, IT HAD TO BE DIARY.LIST

    // Check if user exists
    $exists = mysqli_num_rows($query);  // If it exits, the number that $exists will hold will be greater than 0

    $table_users = "";
    $table_password = "";

    echo $exists;

    if($exists > 0) {   
        // Now we'll retrieve the data
        while($row = mysqli_fetch_assoc($query)) {  // extracting data stored
            $table_users = $row['username'];    // Putting the retrieved username in the table_users variable
            $table_password = $row['password']; // Putting the retrieved password in the table_password variable
        
            if (($username == $table_users) && ($password == $table_password)) {    // Checking if the username and password entered are the same as retrieved from the database
                if($password == $table_password) {
                    $_SESSION['user'] = $username;
                    header("location: home.php");
                }
            } else {
                Print '<script>alert("Incorrect Password!")</script>';
                Print '<script>window.location.assign("login.php")</script>';   
            }
        }
    } else {
        Print '<script>alert("Username Does not Exist!")</script>';
        Print '<script>window.location.assign("login.php")</script>';
     }

?> 
