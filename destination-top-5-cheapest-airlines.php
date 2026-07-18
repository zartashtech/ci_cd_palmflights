<?php
if (!($origin == $destination)) {

    $sql4 = "SELECT distinct f.airline_name,f.adult_fare FROM flight_detail AS f,airlines AS a WHERE  f.origin='$london_hathrow' and f.destination='$rows1[place_string]' and f.trip_type='return' and f.class_name='Economy' order by adult_fare asc limit 5";

    $query = mysqli_query($con, $sql4);
    if (mysqli_num_rows($query) > 0) {
        while ($rows = mysqli_fetch_array($query)) {
            ?>
            <div class="row" style="margin-bottom: 5px;">
                <div class="col-md-6 col-xs-6">
                    <div class="cl420"><?php echo $rows['airline_name']; ?></div>
                </div>
                <div class="col-md-2 col-xs-2 " style="margin-right: 10px;   margin-left: -10px;">
                    <div class="cl420">&pound<?php echo $rows['adult_fare']; ?></div>
                </div>
                <div class="col-md-3 col-xs-3">
                    <div> <a class="btn btn-primary btn-xs" data-toggle="modal" href="#modal1">Book Now</a></div>

                </div>
            </div>
<?php
        }
    }
}


?>