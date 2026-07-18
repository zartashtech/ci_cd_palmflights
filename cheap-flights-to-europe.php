<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Palm Flights LTD - Cheapest Flight Deals</title>


	<!-- Fonts -->
	<?php include('header-meta.php'); ?>
	<!-- end -->
</head>

<body id="top" class="thebg">

	<!-- Top wrapper -->

	<?php include('header.php'); ?>
	<!-- / Top wrapper -->


	<?php include('continent-breadcum.php'); ?>


	<!-- CONTENT -->
	<div class="container">
		<div class="container pagecontainer offset-0">

			<!-- FILTERS -->

			<?php include('continent-sidebar.php'); ?>


			<!-- END OF FILTERS -->

			<!-- LIST CONTENT-->
			<div class="rightcontent col-md-9 offset-0">

				<?php include('continent-heading.php'); ?>


				<!-- End of padding -->

				<br /><br />
				<div class="clearfix"></div>


				<div class="itemscontainer offset-1">




					<?php
					include 'connection-db.php';
					$sql = "select DISTINCT city,img_url from places where continent='Europe' and city!='London' and status='active'";

					$q = mysqli_query($con, $sql);
					if (mysqli_query($con, $sql)) {
						// echo "thek ha";

					} else {
						echo mysqli_error($con);
					}

					while ($row = mysqli_fetch_array($q)) {
						$sql2 = "select  place_string,destination_url from places where city='$row[city]' order by city desc";

						$q2 = mysqli_query($con, $sql2);

						$row1 = mysqli_fetch_array($q2);
						$london = "London, London Heathrow Arpt [LHR], United Kingdom";
						$london_city = "London, London City Arpt [LCY], United Kingdom";
						$sql1 = "select adult_fare from flight_detail where origin='$london' and destination='$row1[place_string]' and adult_fare!='' and class_name='Economy' and trip_type='return' order by adult_fare asc";
						$q1 = mysqli_query($con, $sql1);

						$rows = mysqli_fetch_array($q1);
						// $rowCount = mysql_num_rows($rows);

						?>



						<div class="col-md-4">
							<div class="listitem">
								<a class="" title="" href="<?php echo $row1['destination_url']; ?>"><img src="<?php echo $row['img_url']; ?>" alt="" /></a>

							</div>
							<div class="itemlabel">
								<button class="bookbtn right mt1" data-toggle="modal" data-target="#modal">Book</button>
								<a href="<?php echo $row1['destination_url']; ?>"><?php echo $row['city']; ?></a>
								<p class="lightgrey"><span class="green size14"><b><?php echo "£ " . $rows['adult_fare']; ?></b></span> avg/person</p>
							</div>
							<div class="clearfix"></div>
							<div>
								<hr>
							</div>
						</div>
					<?php
					}

					?>


				</div>
				<!-- End of offset1-->


			</div>
			<!-- END OF LIST CONTENT-->



		</div>
		<!-- END OF container-->

	</div>
	<!-- END OF CONTENT -->


	<!-- FOOTER -->
	<?php include('footer.php'); ?>
	<?php include('footer-meta.php'); ?>

</body>

</html>