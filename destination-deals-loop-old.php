<?PHP
if (!($origin == $destination)) {

	$sql3 = "SELECT distinct f.airline_name,f.adult_fare,f.flight_duration,f.origin,f.destination,a.airline_logo_medium FROM flight_detail AS f,airlines AS a WHERE  f.origin='$london_hathrow' and f.destination='$rows1[place_string]' and f.trip_type='return' and f.class_name='Economy' and f.airline_name=a.airline_name order by adult_fare asc limit 12";

	$query = mysqli_query($con, $sql3);
	if (mysqli_num_rows($query) > 0) {

		while ($rows = mysqli_fetch_array($query)) {
			$dest = $rows['destination'];
			$ql9 = "select city,airport_code,airport from places where place_string='$rows[origin]'";
			$sql9 = mysqli_query($con, $ql9);
			$ql10 = "select * from miscellaneous";
			$sql10 = mysqli_query($con, $ql10);
			if (!mysqli_query($con, $ql9)) {
				echo mysqli_error($con);
			}
			$ros = mysqli_fetch_array($sql9);
			$ros1 = mysqli_fetch_array($sql10);


			?>


			<li style="border: 1px solid #e6e6e6;">
				
				    <div class="booking-item" style="border: 0px solid #e6e6e6;">
					<div class="row">
						<div class="col-md-3 col-sm-2">
							<img class="imgZ" src="<?php echo $rows['airline_logo_medium']; ?>" alt="" title="" style="width: 150px;"/>
						</div>
						<div class="col-md-6 col-sm-6">
							<h5 class="booking-item-title"><?php echo "&nbsp; &nbsp;" . $destination_city . ", " . "[" . $destination_airport . "]" . " $destination_country"; ?></h5>
							<hr />
							<ul class=" margtop10 list-unstyled">


								<?php

											/*
								<li><span style="color: #01b7f2; font-size: 10px;" class="glyphicon glyphicon-time"> </span> 
										<span style="color: #FF1D13; font-size: 10px;">FROM:</span>
										<span style="color: #999; font-size: 10px;"> <?php  echo "&nbsp; &nbsp;".$ros['airport']."  "."[".$ros['airport_code']."]";?></span> 
										</li>
										
										<li><span style="color: #01b7f2; font-size: 10px;" class="glyphicon glyphicon-time"> </span> 
										<span style="color: #FF1D13; font-size: 10px;">FLIGHT TYPE:</span>
										<span style="color: #999; font-size: 10px;"> RETURN</span> 
								</li>

*/

								?>


								<li><span style="color: #01b7f2; font-size: 10px;" class="glyphicon glyphicon-time"> </span>
									<span style="color: #FF1D13; font-size: 10px;">AVERAGE FLIGHT DURATION:</span>
									<span style="color: #999; font-size: 10px;"> <?php echo $rows['flight_duration']; ?></span>
								</li>
								<li><span style="color: #01b7f2; font-size: 10px;" class="glyphicon glyphicon-time"> </span>
									<span style="color: #FF1D13; font-size: 10px;">TRAVEL SEASON:</span>
									<span style="color: #999; font-size: 10px;"><?php echo $ros1['fare_valid_from']; ?> - <?php echo $ros1['fare_valid_till']; ?></span>
								</li>
							</ul>
							<hr />


						</div>
						<div class="col-md-3 col-sm-4" style="text-align: center;">
						    <span class="booking-item-price" style="font-size: 27px;">&pound<?php echo $rows['adult_fare']; ?></span>
						    <span>/person</span>
						
						
						<br>
						
				
						
						
							
							
							
							<a class="btn btn-primary primaryZ" href="tel:01864940096"> 01864940096</a>
							
							
						
						
							
							<br>
							OR
							<br>
							
							
							
							<a class="btn btn-primary primaryZ" 
                        href="<?php echo strip_tags(htmlspecialchars("flight-search-landing-page.php?
stop=NA2&origin=$rows[origin]&destination=$rows[destination]&origin_city=NA&destination_city=$destination_city&trip_type=NA&totalFare=$rows[adult_fare]&departing_date=29-12-2022&leaving_date=30-12-2022&class_name=Economy&duration=$rows[flight_duration]&airline_name=$rows[airline_name]&adults=1&child=0&infants=0&flight_route=NA&adult_fare=$rows[adult_fare]&child_fare=NA&infants_fare=$rows[infants_fare]&total_fare=$rows[adult_fare]&stop_count=$rows[stopCount]&logo=$rows[airline_logo_medium]&stops=$rows[stops]&stop_count=NA3&isDestination=Yes")); ?>">Book Now</a>
							
							
				
							
						</div>
					</div>
					
				</div>
			</li>
<?php

		}
	}
} else {
	include('non-session-london.php');
}


?>