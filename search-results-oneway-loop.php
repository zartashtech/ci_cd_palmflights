<?php
$noresults = 0;
$q = mysqli_query($con, $sql);

echo mysqli_error($con);
while ($row = mysqli_fetch_array($q)) {
	$noresults = 1;
	$_SESSION['flight_duration'] = $row['flight_duration'];
	//echo $_SESSION['flight_duration'];
	$_SESSION['airline_name1'] = $row['airline_name'];

	$logo = "SELECT airline_logo_small FROM airlines WHERE airline_name='$_SESSION[airline_name1]'";
	$forLogo = mysqli_query($con, $logo);
	if ($findlogo = mysqli_fetch_array($forLogo)) {
		$_SESSION['small_logo'] = $findlogo['airline_logo_small'];
	}


	?>
	<?php include"newfare.php" ;?>
	<li>
		<div class="booking-item-container">
			<div class="booking-item" style="border: 2px solid #CABFBF;">
				<!-- AirlineLogo row -->
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-4">
						<!-- <img src="img/airline-icon.jpg" alt="Airline Icon" title="Airline" /> -->
						<!-- <img src="<?php // echo $_SESSION['small_logo']; 
											?>" alt="Airline Icon" title="Airline" width="90px" height="auto" /> -->

						<h5 style="text-decoration: underline;">DEPARTURE</h5>


					</div>
					
					
					
					<!-- Offset div to fill space -->
					<div class="col-md-10 col-sm-10 col-xs-8"></div>
				</div>
				<!-- AirlineLogo row ends here -->

				<!-- <h5 style="text-decoration: underline;">DEPARTURE</h5> -->
				<div class="row">
					<div class="col-md-2">
						<div class="booking-item-airline-logo">
							<!-- <img src="img/airline-icon.jpg" alt="Departure Airline Icon" title="Flight Departure Airline" /> -->
							<img src="<?php echo $_SESSION['small_logo']; ?>" alt="Airline Icon" title="Airline" style="width: 7vw; min-width: 70px; height: auto; margin: 1vw 0.5vw 0;" />

							<!-- <p><?php //echo $_SESSION['airline_name1']; 
										?></p> -->
						</div>
					</div>
					<div class="col-md-6">
						<div class="booking-item-flight-details">
							<br />
							<div class="booking-item-departure"><i class="fa fa-plane"></i>
								<p class="booking-item-destination">
									<?php
										$ql = "select city,airport_code,airport from places where place_string='$row[origin]'";
										$sql = mysqli_query($con, $ql);
										if (!mysqli_query($con, $ql)) {
											echo mysqli_error($con);
										}
										$row1 = mysqli_fetch_array($sql);
										echo $row1['city'] . ", " . $row1['airport'] . "(" . $row1['airport_code'] . ")";
										?>
								</p>
							</div>
							<div class="booking-item-arrival"><i class="fa fa-plane fa-flip-vertical"></i>
								<p class="booking-item-destination">
									<?php
										$q2 = "select city,airport_code,airport from places where place_string='$row[destination]'";
										$sq2 = mysqli_query($con, $q2);
										if (!mysqli_query($con, $q2)) {
											echo mysqli_error($con);
										}
										$row2 = mysqli_fetch_array($sq2);
										echo $row2['city'] . ", " . $row2['airport'] . "(" . $row2['airport_code'] . ")";
										?>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
					
						<div class="hidden-xl hidden-lg"><hr style="margin-top: 5px; margin-bottom: 5px;"></div>
						
						<div style="padding-top:30px"></div>
                        
                        <?php if ($row['stop1'] != "N.A") {
                                ?>
                            <p class="booking-item-flight-class" align="center"><span style="color: #01b7f2;">Via: </span>
                            <?php

                                    $ql = "select * from places where place_string='$row[stop1]'";
                                    $sql = mysqli_query($con, $ql);
                                    $row3 = mysqli_fetch_array($sql);
                                    echo $row3['city'] . " " . "(" . $row3['airport_code'] . ")";
                                } else {
                                    ?>
                                    
                                    <p class="booking-item-flight-class" align="center">
                                    <span style="color: #01b7f2;">Via: </span>
                                    Direct Flight
                                    </p>
                                  
                                  <?php  
                                    
                                }


                                ?></p>
                        <p class="booking-item-flight-class" align="center" style="margin-top: 1%;">
                            <span style="color: #01b7f2;">Duration: </span>
                            <?php echo $row['flight_duration']; ?>
                        </p>

                      
                      
					</div>
					
					
					<div class="col-md-12 col-sm-12 col-xs-12">
                        <br>
                        <div><hr style="margin-top: 1px; margin-bottom: 10px;"></div>
                        
                      <br>
                                
                                
                                <?php $_SESSION['totalFare'] = ($_SESSION['adults'] * $row['adult_fare']) + ($_SESSION['child'] * $row['child_fare']) + ($_SESSION['infants'] * $row['infant_fare']);

                        $_SESSION['adult_fare'] = $row['adult_fare'];
                        $_SESSION['child_fare'] = $row['child_fare'];
                        $_SESSION['infants_fare'] = $row['infant_fare'];
                        ?>

                    <div class="col-md-12 center-block" >
                        
                        <div class="hidden-sm hidden-xs"></div>
                        <div>
                            <p align="center"><img style="width: 100px;" src="img/deal-label.png"></p>
                            </div>
                        <p align="center">
                            <a href="<?php echo strip_tags(htmlspecialchars("flight-search-landing-page.php?stop=$row3[place_string]&origin=$row[origin]&destination=$_SESSION[destination]&origin_city=$_SESSION[origin_city]&destination_city=$_SESSION[destination_city]&trip_type=$_SESSION[trip_type]&totalFare=$_SESSION[totalFare]&departing_date=$_SESSION[departing_date]&leaving_date=$_SESSION[leaving_date]&class_name=$_SESSION[class_name]&duration=$_SESSION[flight_duration]&airline_name=$_SESSION[airline_name1]&adults=$_SESSION[adults]&child=$_SESSION[child]&infants=$_SESSION[infants]&flight_route=$_SESSION[flight_route]&adult_fare=$_SESSION[adult_fare]&child_fare=$_SESSION[child_fare]&infants_fare=$_SESSION[infants_fare]&total_fare=$_SESSION[totalFare]&stop_count=$_SESSION[stopCount]")); ?>">
                        <span class="booking-item-price price-mob des-price" style="font-size: 24px;">&pound; <?php echo $_SESSION['totalFare']; ?><span class="booking-item-price price-mob des-price" style="color:red;" align="left"></span>
                        </span>
                        </a>
                        
                    </p>
                        <p class="booking-item-flight-class" align="center">
                            <span style="color: #01b7f2;">Class: </span> <?php echo $row['class_name']; ?></p>
                            
<div class="hidden-sm hidden-xs"><br></div>
<p align="center">
                        <a class="btn btn-primary des-bottons" href="tel:02039502322">
                            Click to Call</a>
                        <span>OR </span>
                        
                        <a class="btn btn-primary des-bottons" 
                        href="<?php echo strip_tags(htmlspecialchars("flight-search-landing-page.php?stop=$row3[place_string]&origin=$row[origin]&destination=$_SESSION[destination]&origin_city=$_SESSION[origin_city]&destination_city=$_SESSION[destination_city]&trip_type=$_SESSION[trip_type]&totalFare=$_SESSION[totalFare]&departing_date=$_SESSION[departing_date]&leaving_date=$_SESSION[leaving_date]&class_name=$_SESSION[class_name]&duration=$_SESSION[flight_duration]&airline_name=$_SESSION[airline_name1]&adults=$_SESSION[adults]&child=$_SESSION[child]&infants=$_SESSION[infants]&flight_route=$_SESSION[flight_route]&adult_fare=$_SESSION[adult_fare]&child_fare=$_SESSION[child_fare]&infants_fare=$_SESSION[infants_fare]&total_fare=$_SESSION[totalFare]&logo=$_SESSION[small_logo]&stop_count=$_SESSION[stopCount]")); ?>">Book Now</a>
                        <div class="hidden-sm hidden-xs"><br></div>
                        
                        </p>
                    </div>
                    </div>
					
					
					
					
				</div>
			</div>
		</div>
	</li>
<?php
}




if ($noresults == 0) {
	echo '<li>';
	echo '<div><h3 class="text-center">No Result Found! <a class="popup-text" href="index.php" data-effect="mfp-zoom-out" style="color:red">Please search again</a> or Fill Quotation Form</h3></div>';

	include("form_quotation.php");
	echo '</li>';
}

?>


<!-- // -->