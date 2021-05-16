<?php
       $db = mysqli_connect("localhost", "root", "", "freshness_db");
       if (!$db) {
           die("Connection failed: " . mysqli_connect_error());
       }
       $name = $_POST['name'];
       $lname = $_POST['lname'];
       $email = $_POST['email'];
       $mobile = $_POST['phone'];
       $message = $_POST['message'];
       
       $sql = "INSERT INTO contact_us (name, lname, email, mobile, message) VALUES ('$name', '$lname', '$email', '$mobile', '$message')";
       
       if (mysqli_query($db, $sql)) {
           echo "New record created successfully";
       } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($db);
       }
       mysqli_close($db);
       

        ?>