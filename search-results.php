<?php include('session-data.php') ?>
<?php include 'header-meta.php'; ?>

<title>Search Results: Palm Flights LTD </title>
<meta name="description" content="We put forward a wide range of holiday activities including many activities and 
    sightseeing excursions in over 250 destinations all over the world. ">

<link rel="stylesheet" type="stylesheet/text" href="destination-css.css">

<script src="js/jquery.js"></script>
<link href="ajax/demo/assets/css/bootstrap.min.css" rel="stylesheet">

<!-- <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script> -->
<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>

<script src="js/bootstrap.js"></script>
<script src="ajax/demo/assets/js/jquery.mockjax.js"></script>
<script src="ajax/src/bootstrap-typeahead.js"></script>

<style>
    .owl-carousel {
        -ms-touch-action: none;
        touch-action: none;
    }
</style>
<!-- Event snippet for 29 July Leads conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-816954148/7O3oCNrArcYZEKT2xoUD',
      'value': 1.0,
      'currency': 'GBP'
  });
</script>
</head>

<body>
    <?php include 'livesearch.php'; ?>
    <?php //include 'destination_city.php'; ?>

    <div class="global-wrap">
        <?php include 'header.php'; ?>
        <div class="container">
            <?php include 'search-results-breadcum.php'; ?>
        </div>

        <script type="text/javascript" language="JavaScript">
            <!--
            function HideContent(d) {
                document.getElementById(d).style.display = "none";
            }

            function ShowContent(d) {
                document.getElementById(d).style.display = "block";
            }

            function ReverseDisplay(d) {
                if (document.getElementById(d).style.display == "none") {
                    document.getElementById(d).style.display = "block";
                } else {
                    document.getElementById(d).style.display = "none";
                }
            }
            //
            -->
        </script>



        <div id="uniquename" style="display:none;">
            <?php include 'index-slider.php'; ?>
        </div>

        <div class="container">
            <?php // // include 'search-results-breadcum.php' ;
            ?>
            <?php //include 'search-results-change-popup.php'; ?>

            <?php

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

            if (isset($_SESSION['departing_date'])) {
                $mydepDateSearch = test_input($_SESSION['departing_date']);
                $strTimeDepartingSearch = str_replace("-", "", date_format(date_create($mydepDateSearch), "Y-m-d"));
                $today = str_replace("-", "", date("Y-m-d"));

                if ($strTimeDepartingSearch >= $today) {
                    // echo "WoW thats great!";
                    ?>

                    <h3 class="booking-title">Flights from <?php echo $_SESSION['origin_city']; ?> to <?php echo $_SESSION['destination_city']; ?> on <?php $date = date_create($_SESSION['departing_date']);
                                                                                                                                                                echo date_format($date, "M d, Y"); ?></h3>
                    <div class="row">
                        <?php //include 'form_search-results-leftbar-filters.php' ;
                                ?>
                        <div class="col-md-9">

                            <?php include 'search-results-top-sortby.php'; ?>

                            <ul class="booking-list">

                                <?php include 'search-results-loop.php'; ?>

                            </ul>

                        </div>
                        <?php include 'form_search-results-leftbar-filters.php'; ?>
                    </div>

            <?php
                } else {
                    $date = date_create($_SESSION['departing_date']);
                    // echo '<div class="container">';
                    echo "<h3 class='booking-title'>Flights from " . $_SESSION['destination_city'] . " on " . date_format($date, 'M d, Y') . " has passed.";
                    echo "<br /><br /><br />";
                    echo "<p style='color:red;'>Oops! Your Departing date is not valid.</p>";
                    // echo '<div class="gap"></div></div>';
                }
                // departing date not found
            } else {
                echo 'Departing Date is not valid.';
            }
            ?>


            <div class="gap"></div>
        </div>


        <?php include 'footer.php'; ?>
        <?php //include 'footer-meta.php' ;
        ?>
        <script src="js/slimmenu.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/bootstrap-timepicker.js"></script>
        <script src="js/nicescroll.js"></script>
        <script src="js/dropit.js"></script>

        <script src="js/owl-carousel.js"></script>

        <script src="js/ionrangeslider.js"></script>
        <script src="js/icheck.js"></script>
        <script src="js/fotorama.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

        <script src="js/card-payment.js"></script>
        <script src="js/magnific.js"></script>


        <script src="js/fitvids.js"></script>
        <script src="js/tweet.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/gridrotator.js"></script>
        <script src="js/custom.js"></script>

        <script>
            $(document).ready(function() {
                $(".fade1").fadeIn();
            });
            $(".not-so").click(function() {
                $(".fadout").fadeOut(1000);
            });
        </script>
        <script>
            $(document).ready(function() {
                $('.input-daterange input').datepicker('setStartDate', new Date());
                $('input#datepicker1').datepicker('setStartDate', new Date());
                $('input#datepicker2').datepicker('setStartDate', new Date());
                $('input#datepicker3').datepicker('setStartDate', new Date());
            });

            $(document).ready(function() {
                $('input#date').datepicker({
                    minDate: 0
                });
            });

            $(document).ready(function() {
                $('input#date').datepicker('setStartDate', new Date());
                $('input#date').attr({
                    type: "text"
                });
            });
        </script>
    </div>
</body>

</html>