<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>Palm Flights LTD | Cheap Flight Deal</title>
    
    <!-- Meta Tags -->
    <meta name="description" content="If you are a foodie then the best time to visit Singapore is in July to see the Singapore Food Festival. Any “cheap flights” to Singapore would take you there.">
   

<?php include 'header-meta.php'; ?>


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="ajax/demo/assets/css/bootstrap.min.css" rel="stylesheet">

<!-- <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script> -->
<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

<script src="ajax/demo/assets/js/jquery.mockjax.js"></script>
<script src="ajax/src/bootstrap-typeahead.js"></script>

<link rel="stylesheet" type="stylesheet/text" href="destination-css.css">

</head>

<body>
    <?php include 'livesearch.php'; ?>
    
    <?php include 'destination_city.php'; ?>
    <?php include 'index-facebook-widget.php'; ?>


    <div class="global-wrap">
        <?php include 'header.php'; ?>
        <?php include 'index-slider.php'; ?>
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a>
                </li>
                <li><a href="#">Destinations</a>
                </li>
                <li><a href="<?php echo $destination_url; ?>"><?php echo $destination_city; ?></a>
                </li>
                <li>Deals
                </li>

            </ul>
            <?php include 'destination-adwords-conersion-tracking.php'; ?>



            <div class="booking-item-details">
                <?php //include 'destination-sub-header.php'; ?>
                <div class="row" style="display:none">
                    <?php include 'destination-tabs.php'; ?>
                    <div class="col-md-6">
                        <?php include 'destination-reviews-top.php'; ?>

                        <?php include 'destination-best-airlines-deals.php'; ?>

                        <!-- <a href="#" class="btn btn-primary"></a> -->
                    </div>
                </div>
                <div class="gap"></div>
                <h3>All Flights</h3>
                <div class="row">
                    <div class="col-md-9">

                        <div class="gap gap-small"></div>
                        <ul class="booking-list">
                            <?php include 'destination-deals-loop.php'; ?>


                        </ul>
                    </div>
                    <div class="col-md-3">
                       <?php include "content/far-east/singapore.php" ; ?>

                        <?php include 'destination-sidebar-top3.php'; ?>

                    </div>
                </div>
                <!-- <h3 class="mb20">Customer Reviews</h3>
                <div class="row row-wrap"> -->

                    <?php // include 'destination-reviews-bottom.php'; ?>

                    <?php // include 'destination-sidebar-deals.php'; ?>

                <!-- </div> -->

            </div>
            <div class="gap gap-small"></div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    


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

    </div>
</body>

</html>