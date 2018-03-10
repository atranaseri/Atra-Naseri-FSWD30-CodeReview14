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

 
    $id = $_POST['event_id'];

    $sql = "UPDATE events SET eventname = '$eventname', eventImg = '$eventImg', eventtype = '$eventtype', time_date = '$time_date' , capacity = '$capacity' , contact_mail = '$contact_mail' , contact_phone = '$contact_phone' , address = '$address' , city = '$city' , description = '$description' WHERE event_id = {$event_id}";


    if($connect->query($sql) === TRUE) {

        echo "<p>Succcessfully Updated</p>";

        echo "<a href='../update.php?event_id=".$event_id."'><button type='button'>Back</button></a>";

        echo "<a href='../admin.php'><button type='button'>Home</button></a>";

    } else {

        echo "Erorr while updating record : ". $connect->error;

    }

    $connect->close();

}
?>