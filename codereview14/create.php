<!DOCTYPE html>

<html>

<head>

    <title>EVENT  |  Add Events</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

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

    <legend>Add Events</legend>

    <form action="actions/a_create.php" method="post">

        <table class="table">

            <tr>

                <th>Event Name</th>

                <td><input type="text" name="eventname" placeholder="Event Name" /></td>

            </tr>     

            <tr>

                <th>Event Img</th>

                <td><input type="text" name="eventImg" placeholder="Event Img" /></td>

            </tr>

            <tr>

                <th>Event Type</th>

                <td><input type="text" name="eventtype" placeholder="evenT Type" /></td>

            </tr>

            <tr>

                <th>Time Date</th>

                <td><input type="text" name="time_date" placeholder="Time_Date" /></td>

            </tr>

            <tr>

                <th>Capacity</th>

                <td><input type="text" name="capacity" placeholder="Capacity" /></td>

            </tr>

            <tr>

                <th>E-Mail</th>

                <td><input type="text" name="contact_mail" placeholder="E-Mail" /></td>

            </tr>

            <tr>

                <th>Phone</th>

                <td><input type="text" name="contact_phone" placeholder="Phone" /></td>

            </tr>

            <tr>

                <th>Address</th>

                <td><input type="text" name="address" placeholder="Address" /></td>

            </tr>

            <tr>

                <th>City</th>

                <td><input type="text" name="city" placeholder="City" /></td>

            </tr>

            <tr>

                <th>Description</th>

                <td><input type="text" name="description" placeholder="Description" /></td>

            </tr>

            <tr>

                <td><button type="submit">Insert Event</button></td>

                <td><a href="admin.php"><button type="button">Back</button></a></td>

            </tr>

        </table>

    </form>

</fieldset>

</body>

</html>

