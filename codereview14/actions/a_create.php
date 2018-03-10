<?php

require_once 'db_connect.php';

if($_POST) {

    $event_id = $_POST['event_id'];

    $eventname = $_POST['eventname'];

    $eventImg = $_POST['eventImg'];

    $eventtype = $_POST['eventtype'];

    $time_date = $_POST['time_date'];

    $capacity = $_POST['capacity'];

    $contact_mail = $_POST['contact_mail'];

    $contact_phone = $_POST['contact_phone'];

    $address = $_POST['address'];

    $city = $_POST['city'];

    $description = $_POST['description'];

 

    $sql = "INSERT INTO events (event_id,eventname,eventImg,eventtype,time_date,capacity,contact_mail,contact_phone,address,city,description) VALUES ('$event_id', '$eventname', '$eventImg','$eventtype','$time_date','$capacity','$contact_mail','$contact_phone','$address','$city','$description')";

    if($connect->query($sql) === TRUE) {

        echo "<p>New Record Successfully Created</p>";

        echo "<a href='../create.php'><button type='button'>Back</button></a>";

        echo "<a href='../admin.php'><button type='button'>Home</button></a>";

    } else {

        echo "Error " . $sql . ' ' . $connect->connect_error;

    }

    $connect->close();

}
 
?>