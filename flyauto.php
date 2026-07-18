<?php include('gtag-header.php'); ?>
<?php include('gtag-body.php'); ?>

<?php

include('connection-db.php');

if (function_exists('test_input')) {
    // echo "Function Exists"; 
} else {
    // echo "Function Not Found, This name Can be used!";
    function test_input($dataValidate)
    {
        $dataValidate = trim($dataValidate);
        $dataValidate = stripslashes($dataValidate);
        $dataValidate = htmlspecialchars($dataValidate);
        $dataValidate = strip_tags($dataValidate);
        return $dataValidate;
    }
}

$myorigin = test_input($_GET['origin']);
$mydestination = test_input($_GET['destination']);
$mystart = test_input($_GET['start']);
$myend = test_input($_GET['end']);

$PARTNER = test_input($_GET['PARTNER']);
$CLASS = test_input($_GET['CLASS']);
$COUNTRY_CODE = test_input($_GET['COUNTRY_CODE']);
$LANGUAGE_CODE = test_input($_GET['LANGUAGE_CODE']);
$ADULT_COUNT = test_input($_GET['ADULT_COUNT']);
$CHILD_COUNT = test_input($_GET['CHILD_COUNT']);
$INFANT_COUNT = 0;
$ORIGIN = test_input($_GET['ORIGIN']);
$DESTINATION = test_input($_GET['DESTINATION']);
$DEPARTURE_DATE = test_input($_GET['DEPARTURE_DATE']);
$ARRIVAL_DATE = test_input($_GET['ARRIVAL_DATE']);



$int = $DEPARTURE_DATE;
$day = substr($int, 0, 2);
$month = substr($int, 2, 2);
$year = substr($int, 4);
$departuring = $day . '-' . $month . '-' . $year;


$int2 = $ARRIVAL_DATE;
$day2 = substr($int2, 0, 2);
$month2 = substr($int2, 2, 2);
$year2 = substr($int2, 4);
$arriving = $day2 . '-' . $month2 . '-' . $year2;
//echo $arriving;



//Match Origin place string against airport code
$query1 = "select place_string from places where airport_code='$ORIGIN'";
$myquery1 = mysqli_query($con, $query1);
$rowquery1 = mysqli_fetch_array($myquery1);
//echo $rowquery1['place_string'];

//Match Destinationplacestring against airport code
$query2 = "select place_string from places where airport_code='$DESTINATION'";
$myquery2 = mysqli_query($con, $query2);
$rowquery2 = mysqli_fetch_array($myquery2);
//echo $rowquery2['place_string'];

?>




<body>

    <div class="global-wrap">

        <!-- TOP AREA -->
        <div class="top-area show-onload">
            <div class="bg-holder full">

                <div class="bg-front bg-front-mob-rel">
                    <div class="container">
                        <div class="search-tabs search-tabs-bg search-tabs-abs-bottom">
                            <div class="tabbable">
                                <ul class="nav nav-tabs" id="myTab" style="display:none">

                                    <div class="tab-content">

                                        <div style="display:none;">

                                            <div class="row">

                                                <div class="col-md-2" style="display:none;">
                                                    <h4 class="title"></h4>
                                                    <div class="form-group">
                                                        <label>Preferred Airline </label>

                                                        <div class="selector">

                                                            <select class="full-width" name="airline_name">
                                                                <option value="ALL">ALL</option>

                                                            </select><span class="custom-select full-width">ALL</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Class</label>
                                                        <div class="selector">
                                                            <select class="full-width" name="class_name">

                                                                <option value="Economy" selected="">Economy</option>
                                                                <option value="First">First</option>
                                                                <option value="Business">Business</option>
                                                                <option value="PremiumEconomy">PremiumEconomy</option>
                                                                <option value="PremiumFirst">PremiumFirst</option>
                                                            </select><span class="custom-select full-width">Economy</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <h4 class="title">Defaults</h4>

                                                    <div class="col-xs-7" style="display:none;">
                                                        <label>Change Defaults</label>
                                                        <div style="height:5px;"></div>
                                                        <label class="checkbox-inline">
                                                            <input name="flexible_date" type="checkbox" id="inlineCheckbox1" value="yes" checked=""> ± 3 days
                                                        </label>
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" id="inlineCheckbox2" value="Direct" name="flight_route" checked> Direct flights only
                                                        </label>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>



                                        <div class="tab-pane fade in active" id="tab-2">

                                            <div class="tabbable">
                                                <ul class="nav nav-pills nav-sm nav-no-br mb10" id="flightChooseTab">
                                                    <li class="active"><a href="#flight-search-1" data-toggle="tab">Round Trip</a>
                                                    </li>
                                                    <li><a href="#flight-search-2" data-toggle="tab">One Way</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active" id="flight-search-1">
                                                        <form name="search" action="<?php echo strip_tags(htmlspecialchars("search-results.php")); ?>" method="post">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group form-group-lg form-group-icon-left">
                                                                                <i class="fa fa-map-marker input-icon"></i>
                                                                                <label>From</label>
                                                                                <input type="hidden" name="trip_type" value="return">
                                                                                <input type="hidden" name="airline_name" value="ALL">
                                                                                <input type="hidden" name="class_name" value="Economy">

                                                                                <input class="form-control live-search" id="search1" value="<?php echo test_input($rowquery1['place_string']); ?>" type="text" name="origin" autocomplete="off" required />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                                <label>To</label>
                                                                                <input class="form-control live-search" value="<?php echo test_input($rowquery2['place_string']); ?>" type="text" name="destination" autocomplete="off" required />

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="input-daterange" data-date-format="dd-mm-yyyy">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                                    <label>Departing</label>
                                                                                    <input class="form-control" name="start" value="<?php echo $departuring; ?>" id="datepicker1" type="text" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                                    <label>Returning</label>
                                                                                    <input class="form-control" name="end" value="<?php echo $arriving; ?>" type="text" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="input-daterange" data-date-format="M d, D">
                                                                        <div class="row">
                                                                            <div class="col-md-8">
                                                                                <div class="form-group form-group-lg">
                                                                                    <label>Adults</label>

                                                                                    <select class="form-control" name="adults">
                                                                                        <option value="<?php echo $ADULT_COUNT; ?>" selected><?php echo $ADULT_COUNT; ?></option>


                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group form-group-lg">
                                                                                    <label>Child</label>

                                                                                    <select class="form-control " name="child">
                                                                                        <option value="<?php echo $CHILD_COUNT; ?>" selected><?php echo $CHILD_COUNT; ?></option>

                                                                                    </select>
                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="input-daterange" data-date-format="M d, D">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="form-group form-group-lg">
                                                                                    <label>Infant</label>

                                                                                    <select class="form-control " name="infants">

                                                                                        <option value="<?php echo $INFANT_COUNT; ?>" selected><?php echo $INFANT_COUNT; ?></option>

                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-8">
                                                                                <div class="form-group form-group-lg form-group-select-plus">
                                                                                    <br />
                                                                                    <div style="margin-top:9px;"> </div>

                                                                                    <button class="btn btn-primary btn-lg" type="submit">Search For Cheap Flights</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </form>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>



                    </div>
                </div>
                <!-- END TOP AREA  -->

                <div class="gap"></div>


            </div>

<p>Please Wait, We are searching flights...  </p>
            <script>
                setTimeout(function() {
                    document.search.submit();
                }, 50);
            </script>

</body>

</html>