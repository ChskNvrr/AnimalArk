<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
 {
    //intiializes the variables
    $email = ($_POST['email']);
    $pass = ($_POST['pass']);
    $fname = ($_POST['fname']);
    $lname = ($_POST['lname']);
    $user_type = "user";

    $bool = true;
    $db_name = "id20237149_animalark_db";
    $db_username = "id20237149_animalark";
    $db_pass = "P@ssw0rd!123";
    $db_host = "localhost";
    $con = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name") or die(mysqli_error()); //Connect to server
    $query = "SELECT * from users";
    $results = mysqli_query($con, $query); //Query the users table

    while($row = mysqli_fetch_array($results)) //display all rows from query
    {
        $table_users = $row['email']; // the first username row is passed on to $table_users, and so on until the query is finished
        if($email == $table_users) // checks if there are any matching fields
        {
            $bool = false; // sets bool to false
            Print '<script>alert("Email has already been registered!");</script>'; //Prompts the user
            Print '<script>window.location.assign("registration.html");</script>'; // redirects to register.php
        }
    }

    //adds teh newly inputted user data to the users db
    if($bool) // checks if bool is true
    {
        mysqli_query($con, "INSERT INTO users (fname, lname, pass, email, user_type) VALUES
        ('$fname', '$lname', '$pass','$email','$user_type')"); //Inserts the value to table users
        Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
        Print '<script>window.location.assign("login.html");</script>'; // redirects to register.php
    }
 }
?>