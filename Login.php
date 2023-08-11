<?php

    if(isset($_POST['submit']))

    {
        //need to enter email and password to login

        $Email = $_POST['Email'];
        $Password = $_POST['upassword'];

        //the database details were created in the account privileges in Xampp
        
        $host = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "sugar_rush";

        //creating the connection to the database
        $Con = mysqli_connect($host, $username, $password, $dbname);

        //sending data put in form to the database

        $Sql = "SELECT * FROM users WHERE Email = '$Email' AND upassword = '$Password'";

        $ConnectionResult = mysqli_query($Con, $Sql);

        $EmailExists = mysqli_fetch_assoc($ConnectionResult);

        //checking if the email exists already

        if ($EmailExists)

        {
            session_start();
            $_SESSION['Email'] = $EmailExists['Email'];
            $Name = $EmailExists['Name'];
            echo "<script>alert('Logged in Successfully! Welcome $Name')</script>";
            header("Refresh:1; url=index.html");
            exit();
        }

        else{
            echo '<script>alert("Error! Something has gone wrong. Please check your password and username are correct.")</script>';
            header("Refresh:1; url=Login.html");
            exit();
        }
    }
?>