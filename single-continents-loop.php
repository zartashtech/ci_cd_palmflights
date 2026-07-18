<!-- <ul class="breadcrumb"> -->
<?php 
$prefex="cheap-flights-to-" ;
$URL22=$row1['destination_url'];
$newURL= "$prefex"."$URL22";

$row1['destination_url']=$newURL ;

include 'newfare-domain-level.php';
?>
<li>
    <div class="booking-item">
        <div class="row" onclick="location.href='<?php echo $row1['destination_url']; ?>';">
            <div class="col-md-3">
                <div class="booking-item-img-wrap"><a href="<?php echo $row1['destination_url']; ?>">
                        <img src="<?php echo $row['img_url']; ?>" alt="" title="Destination image" />
                        <div class="booking-item-img-num"></div>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="booking-item-rating">

                    <a href="<?php echo $row1['destination_url']; ?>">
                        <h5 class="booking-item-title"><?php echo $row['city']; ?></h5>
                    </a>


                </div>
                <p class="booking-item-address"><i class="fa fa-map-marker"></i>
                    <?php echo $rows1['airport'] . "  " . "[" . $rows1['airport_code'] . "] , " . $rows1['country']; ?></p>

                <ul class="margtop10 list-unstyled">
                    <li><span style="color: #01b7f2; font-size: 10px;" class="glyphicon glyphicon-time"> </span>
                        <span style="color: #FF1D13; font-size: 10px;">CHEAPEST AIRLINE:</span>
                        <span style="color: #999; font-size: 10px;"> <?php echo $rows['airline_name']; ?></span>
                    </li>


                    <li><span style="color: #01b7f2; font-size: 10px;" class="glyphicon glyphicon-time"> </span>
                        <span style="color: #FF1D13; font-size: 10px;">MINIMUM FLIGHT DURATION:</span>
                        <span style="color: #999; font-size: 10px;"> <?php echo $rows['flight_duration']; ?></span>
                    </li>
                    <li><span style="color: #01b7f2; font-size: 10px;" class="glyphicon glyphicon-time"> </span>
                        <span style="color: #FF1D13; font-size: 10px;">TRAVEL SEASON:</span>
                        <span style="color: #999; font-size: 10px;"><?php echo $ros['fare_valid_from']; ?> - <?php echo $ros['fare_valid_till']; ?></span>
                    </li>
                </ul>

            </div>
            <div class="col-md-3"><span class="booking-item-price-from">from</span>
                <span class="booking-item-price">&pound;<?php echo $rows['adult_fare']; ?></span>
                <!--<span>/person</span>-->
                <div style="display: flex; flex-direction: column; gap: 10px">
                    <span class="btn btn-primary" data-toggle="modal" data-target="#modal1">Book Now</span>
                    <a class="btn btn-primary primaryZ" href="tel:01864940096"> 01864940096</a>
                </div>
            </div>

        </div>
    </div>
</li>