<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "freshness_db";

//connect to mysql server
$connection = new mysqli($server, $user, $password);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

//create database
$sql = "CREATE DATABASE ".$database;
if ($connection->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $connection->error;
}

//connect to database
$db = mysqli_connect($server, $user, $password, $database);
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

//reset sql string
$sql = "";

//create table orders
$sql = "CREATE TABLE `orders` (
    `id` int(11) NOT NULL,
    `first_name` varchar(20) NOT NULL,
    `last_name` varchar(20) NOT NULL,
    `number` varchar(20) NOT NULL,
    `address` varchar(100) NOT NULL,
    `food` varchar(30) NOT NULL,
    `drink` varchar(30) NOT NULL,
    `price` decimal(5,2) NOT NULL,
    `payment_method` varchar(20) NOT NULL
    PRIMARY KEY (id)) ENGINE = InnoDB DEFAULT CHARSET=utf8;
    ";
if (mysqli_query($db, $sql)) {
    echo 'Table created';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

//create table contact_us
$sql = "CREATE TABLE `contact_us` (
    `id` int(11) NOT NULL,
    `name` varchar(20) NOT NULL,
    `lname` varchar(20) NOT NULL,
    `email` varchar(20) NOT NULL,
    `mobile` varchar(10) NOT NULL,
    `message` varchar(200) NOT NULL,
    PRIMARY KEY (id)) ENGINE = InnoDB DEFAULT CHARSET=utf8;
    ";
if (mysqli_query($db, $sql)) {
    echo 'Table created';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

//create table reservations
$sql = "CREATE TABLE `reservations` ( 
    id INT NOT NULL AUTO_INCREMENT , 
    firstname VARCHAR(20) NOT NULL , 
    lastname VARCHAR(20) NOT NULL , 
    phone VARCHAR(10) NOT NULL , 
    email VARCHAR(20) NOT NULL , 
    date VARCHAR(20) NOT NULL , 
    time VARCHAR(5) NOT NULL , 
    attendees INT NOT NULL , 
    comment VARCHAR(200) NOT NULL , 
    PRIMARY KEY (id)) ENGINE = InnoDB;
";
if (mysqli_query($db, $sql)) {
    echo 'Table created';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

mysqli_close($db);
