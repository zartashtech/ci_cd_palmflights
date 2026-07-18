<?php
if (!($origin == $destination)) {

    $sql3 = "SELECT distinct f.adult_fare FROM flight_detail AS f WHERE  f.origin='$london_hathrow' and f.destination='$rows1[place_string]' and f.trip_type='return' and f.class_name='Economy' order by adult_fare asc limit 1";

    $query = mysqli_query($con, $sql3);
    if (mysqli_num_rows($query) > 0) {

        while ($rows = mysqli_fetch_array($query)) {

            ?>
            <header class="booking-item-header">
                <div class="row">
                    <div class="col-md-9">
                        <h2 class="lh1em">Cheap Flight Deals to <?php echo $destination_city; ?></h2>
                        <p class="lh1em text-small"><i class="fa fa-map-marker"></i>
                            <?php echo $destination_airportname; ?> [<?php echo $destination_airport; ?>], <?php echo $destination_country; ?></p>

                        <?php

                            /*
                            <ul class="list list-inline text-small">
                                <li><a href="mailto:info@palmflights.co.uk"><i class="fa fa-envelope"></i> Book Through E-mail</a>
                                </li>
                                
                                <li><i class="fa fa-phone"></i> <a href="tel:02039502322">0203 950 2322</a>
                                </li>
                            </ul> 
                            */

                        ?>

                    </div>
                    <div class="col-md-3">
                        <p class="booking-item-header-price"><small>price from</small> <span class="text-lg">&pound<?php echo $rows['adult_fare']; ?></span>/person</p>
                    </div>
                </div>
            </header>
<?php
        }
    }
}


?>
<!-- </header> -->