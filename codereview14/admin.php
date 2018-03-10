<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
	
<head>
		<title>Event - Landing Page</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="">

		<!--== CSS Files ==-->
		<link href="css/bootstrap.css" rel="stylesheet" media="screen">
		<link href="css/style.css" rel="stylesheet" media="screen">
		<link href="css/font-awesome.css" rel="stylesheet" media="screen">
		<link href="css/owl.carousel.css" rel="stylesheet" media="screen">
		<link href="css/flexslider.css" rel="stylesheet" media="screen">
		<link href="css/fancySelect.css" rel="stylesheet" media="screen">
		<link href="css/responsive.css" rel="stylesheet" media="screen">

		<!--== Google Fonts ==-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

	<!-- table part -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</head>
	<body>
		<body>
		<header id="header">
			<div id="menu" class="header-menu fixed">
				<div class="box">
					<div class="row">
						<nav role="navigation" class="col-sm-12">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>

								<!--== Logo ==-->
								<span class="navbar-brand logo">
									Austria Events
								</span>

							</div>
							<div class="navbar-collapse collapse">

								<!--== Navigation Menu ==-->
								<ul class="nav navbar-nav">
									
									<li><a href="logout.php">Logout</a></li>
									<li><a href="login.php">Admin</a></li>
									
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>

			<!--== Site Description ==-->
			<div class="header-cta">
				<div class="container">
					<div class="row">
						<div class="entry-content">
				            
					    </div>
					</div>
				</div>
			</div>

			<div class="header-bg">
				<div id="preloader">
					<div class="preloader"></div>
				</div>
				<div class="main-slider" id="main-slider">

					<!--== Main Slider ==-->
					<ul class="slides">
						<li><img src="images/demo/bg-slide-01.jpg" alt="Slide Image"/></li>
						<li><img src="images/demo/bg-slide-02.jpg" alt="Slide Image 2"/></li>
					</ul>

				</div>
			</div>
		</header>

		<div class="content">
			<section>
			  <div class="table-responsive">

			<a href="create.php"><button type="button">Add Event</button></a>

    <table class="table table-bordered">

        <thead>

            <tr>

                <th>Event Name</th>

                <th>Event Image</th>

                <th>Event Type</th>

                <th>Time_Date</th>

                <th>Capacity</th>

                <th>E-Mail</th>

                <th>Phone</th>

                <th>Address</th>

                <th>City</th>

                <th>Description</th>

            </tr>

        </thead>

        <tbody>

            <?php

            $sql = "SELECT * FROM events WHERE event_id ";

            $result = $connect->query($sql);

 

            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    echo "<tr>

                        <td><strong>".$row['eventname']." :</strong>  ".$row['eventImg']." </td>

                       

                        <td>".$row['eventtype']."</td>

                        <td>".$row['eventtype']."</td>

                        <td>".$row['time_date']."</td>

                        <td>".$row['capacity']."</td>

                        <td>".$row['contact_mail']."</td>

                        <td>".$row['contact_phone']."</td>

                        <td>".$row['address']."</td>

                        <td>".$row['city']."</td>

                        <td>".$row['description']."</td>

                        <td>

                            <a href='update.php?event_id=".$row['event_id']."'><button type='button'>Edit</button></a>

                            <a href='delete.php?event_id=".$row['event_id']."'><button type='button'>Delete</button></a>

                        </td>

                    </tr>";

                }

            } else {

                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";

            }

            ?> 

        </tbody>

    </table>
</div>
</section>
            </div>
        </footer>


		<!--== Javascript Files ==-->
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script src="js/jquery-2.1.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.scrollTo.js"></script>
		<script src="js/jquery.nav.js"></script>
		<script src="js/jquery.flexslider.js"></script>
		<script src="js/jquery.accordion.js"></script>
		<script src="js/jquery.placeholder.js"></script>
		<script src="js/jquery.fitvids.js"></script>
		<script src="js/gmap3.js"></script>
		<script src="js/fancySelect.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/main.js"></script>
		<script type="text/javascript"> 

		$(document).ready(function() {
 
		  $("#testimonial-container").owlCarousel({
		 
		      navigation : false, // Show next and prev buttons
		      slideSpeed : 700,
		      paginationSpeed : 400,
		      singleItem:true,
		  });
 
		});
		</script>
	</body>
</html>