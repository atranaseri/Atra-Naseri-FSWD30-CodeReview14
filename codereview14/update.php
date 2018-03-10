<?php

 
require_once 'actions/db_connect.php';

if($_GET['event_id']) {

    $event_id = $_GET['event_id'];

    $sql = "SELECT * FROM events WHERE event_id = {$event_id}";

    $result = $connect->query($sql);

    $data = $result->fetch_assoc();

    $connect->close();


?>

<!DOCTYPE html>

<html>

<head>

    <title>Edit Eevent</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style type="text/css">

        fieldset {

            margin: auto;

            margin-top: 100px;

            width: 50%;

        }

        table tr th {

            padding-top: 20px;

        }

    </style>

</head>

<body>

<fieldset>

    <legend>Update events</legend>

    <form action="actions/a_update.php" method="post">

        <table class="table">

            <tr>

                <th>Event Name</th>

                <td><input type="text" name="eventname" placeholder="even tname" value="<?php echo $data['eventname'] ?>" /></td>

            </tr>     

            <tr>

                <th>Event Img</th>

                <td><input type="text" name="eventImg" placeholder="event Img" value="<?php echo $data['eventImg'] ?>" /></td>

            </tr>

            <tr>

                <th>Event Type</th>

                <td><input type="text" name="eventtype" placeholder="event type" value="<?php echo $data['eventtype'] ?>" /></td>

            </tr>

            <tr>

                <th>Time_Date</th>

                <td><input type="text" name="time_date" placeholder="Time_Date" value="<?php echo $data['time_date'] ?>" /></td>

            </tr> 

            <tr>

                <th>Capacity</th>

                <td><input type="text" name="capacity" placeholder="Capacity" value="<?php echo $data['capacity'] ?>" /></td>

            </tr> 

            <tr>

                <th>E-Mail</th>

                <td><input type="text" name="contact_mail" placeholder="E-Mail" value="<?php echo $data['contact_mail'] ?>" /></td>

            </tr> 

            <tr>

                <th>Phone</th>

                <td><input type="text" name="contact_phone" placeholder="Phone" value="<?php echo $data['contact_phone'] ?>" /></td>

            </tr> 

            <tr>

                <th>Address</th>

                <td><input type="text" name="address" placeholder="Address" value="<?php echo $data['address'] ?>" /></td>

            </tr> 

            <tr>

                <th>City</th>

                <td><input type="text" name="city" placeholder="City" value="<?php echo $data['city'] ?>" /></td>

            </tr> 

            <tr>

                <th>Description</th>

                <td><input type="text" name="description" placeholder="Description" value="<?php echo $data['description'] ?>" /></td>

            </tr> 

            <tr>

                <input type="hidden" name="event_id" value="<?php echo $data['event_id']?>" />

                <td><button type="submit">Save Changes</button></td>

                <td><a href="admin.php"><button type="button">Back</button></a></td>

            </tr>

        </table>

    </form>

</fieldset>

</body>

</html>

 

<?php

}

?>