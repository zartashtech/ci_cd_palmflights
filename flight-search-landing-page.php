<?php include 'header-meta.php'; ?>
<title>Booking By Palm Flights from London, UK | African Airfares Expert </title>


</head>

<body>
    <?php include 'index-facebook-widget.php'; ?>
    <div class="global-wrap">
        <?php include 'header.php'; ?>

        <div class="gap"></div>

        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    
                    <?php
                                    if ($_GET['trip_type'] == "return") {
                    ?>
                    
                    <div><?php include 'flight-search-landing-page-iternery.php'; ?></div>
                    
                    <?php } else {
                        
                        ?>
                        <div><?php include 'flight-search-landing-page-iternery-oneway.php'; ?></div>
                      <?php
                            }
                    ?>

                    <br>
                    <h3>Passenger Details</h3>
                    <p>Fill the form carefully for fast booking!.</p>
                    <?php include 'form_flight-search-landing-page.php'; ?>

                    <div class="gap gap-small"></div>

                    <div class="gap gap-small"></div>

                </div>
                
                
            </div>
            <div class="gap"></div>
        </div>

        <?php
        session_unset(); ?>

        <?php include 'footer.php'; ?>

        <?php include 'footer-meta.php'; ?>
    </div>
</body>

</html>