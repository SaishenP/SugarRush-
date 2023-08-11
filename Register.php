<?php

if (isset($_POST['submit'])) {

    $Name = $_POST['MName'];
    $phone = $_POST['Phone'];
    $Email = $_POST['Email'];
    $Password = $_POST['Code'];
    $delivery_address1 = $_POST['delivery_address1'];
    $delivery_address2 = $_POST['delivery_address2'];
    $delivery_address3 = $_POST['delivery_address3'];

    // Validating the email address
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        echo "This is an invalid email address!";
        exit;
    }

    // The database details were created in the account privileges in XAMPP
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sugar_rush";

    // Creating the connection to the database
    $Connection = mysqli_connect($host, $username, $password, $dbname);

    // Checking if the connection works
    if (!$Connection) {
        die("Connection Failed!" . mysqli_connect_error());
    }

    // Check if the email has already been registered
    $Sql = "SELECT * FROM users WHERE Email = '$Email'";
    $RS = mysqli_query($Connection, $Sql);

    if (mysqli_num_rows($RS) > 0) {
        echo "This email address has already been registered, try logging in!";
        exit;
    }

    // Sending data put in form to the database
    $Sql = "INSERT INTO your_table_name (name, phone, email, password, delivery_address1, delivery_address2, delivery_address3)
            VALUES ('$Name', '$phone', '$Email', '$Password', '$delivery_address1', '$delivery_address2', '$delivery_address3')";

    // Execute the SQL query
    $RS = mysqli_query($Connection, $Sql);

    if ($RS && mysqli_affected_rows($Connection) > 0) {
        echo '<script>alert("Details Submitted Successfully!")</script>';
        header("Refresh:1; url=Login.html");
    } else {
        echo '<script>alert("Error! Something has gone wrong and your details were not submitted. Try Again!")</script>';
        header("Refresh:1; url=Register.html");
    }

    // Close the database connection
    mysqli_close($Connection);
}

?>