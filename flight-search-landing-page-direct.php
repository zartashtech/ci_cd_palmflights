<?php include 'header-meta.php'; ?>
<title>Booking By Hello Flights from London, UK | African Airfares Expert </title>


</head>

<body>
    <?php include 'index-facebook-widget.php'; ?>
    <div class="global-wrap">
        <?php include 'header.php'; ?>

        <div class="gap"></div>

        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    

<div><?php include('css/search.css');  ?>
<h3>Flight Summary</h3>
<p>Review the flight summary carefully for fast booking!.</p>
                                
<div class="row booking-item-payment">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="row">


<?php include('style-ok.php');  ?>

        <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="booking-item-airline-logo hidden-mobile" align="center" style="min-height: 70px; display: flex;
  justify-content: center; flex-direction: column; ">
                        <div>
                            <img class="img-mob" src="<?php echo strip_tags(htmlspecialchars($_GET['logo'])); ?>" alt="Airline Logo One Way" title="Airline" 
                            style="width: 7vw; min-width: 70px; height: auto; margin: 1vw 0.5vw 0;">
                        </div>

                    </div>
        </div>
                    
                <div class="row" style="padding-top: 27px;" align="center">
                    <div class="col-md-3 col-sm-4 col-xs-4 bok-des">
                        <div class="booking-item-arrival">
                                <div class="booking-item-departure"><i class="fa fa-plane"></i>
                                    <p class="booking-item-destination"><?php echo strip_tags(htmlspecialchars($_GET['origin'])); ?></p>
                                </div>
                        </div>
                    </div>
                    
                    <div class="col-md-2 col-sm-4 col-xs-4">
                        <div> 
                            <img src="img/fly-icon.png">
                        </div>
                        <p align="center">
                           <?php echo strip_tags(htmlspecialchars($_GET['stops'])); ?>
                        </p>
                    </div>
                    
                    <div class="col-md-3 col-sm-4 col-xs-4 bok-des">
                        <div class="booking-item-arrival">
                                <div class="booking-item-arrival"><i class="fa fa-plane fa-flip-vertical"></i>
                                    <p class="booking-item-destination"><?php echo strip_tags(htmlspecialchars($_GET['destination'])); ?></p>
                                </div>
                        </div>
                    </div>
                </div>
</div>
                
                <div><hr style="margin-top: 1px; margin-bottom: 10px;"></div>
                

                <div class="hidden-lg"><hr style="margin-top: 1px; margin-bottom: 10px;"></div>

</div>
 
<div>
                    <ul>
                        
                        <div class="col-md-12">
                    <div class="">
                        <header class="clearfix">
                           
                           </header>
                        <ul class="booking-item-payment-details">

                            <li>
                                <h5>No. of Passengers = <?php $passenger = strip_tags(html_entity_decode($_GET['adults'])) + strip_tags(html_entity_decode($_GET['child'])) + strip_tags(html_entity_decode($_GET['infants']));
                                                        echo  $passenger; ?></h5>
                                <ul class="booking-item-payment-price">
                                    <li>
                                        <p class="booking-item-payment-price-title">Class</p>
                                        <p class="booking-item-payment-price-amount"><?php echo strip_tags(htmlspecialchars($_GET['class_name'])); ?>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="booking-item-payment-price-title">Preferred Airline</p>
                                        <p class="booking-item-payment-price-amount"><?php echo strip_tags(htmlspecialchars($_GET['airline_name'])); ?>
                                        </p>
                                    </li>
                                    </li>
                                    </li>
                                    <li>
                                        <p class="booking-item-payment-price-title">Flight Duration</p>
                                        <p class="booking-item-payment-price-amount"><?php echo strip_tags(htmlspecialchars($_GET['duration'])); ?>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="booking-item-payment-price-title">AVG/ADDULT FARE:</p>
                                        <p class="booking-item-payment-price-amount">£ <?php echo strip_tags(htmlspecialchars($_GET['adult_fare'])); ?>
                                        </p>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                        <p class="booking-item-payment-total">Total trip Fare: <span>&pound; <?php echo strip_tags(htmlspecialchars($_GET['total_fare'])); ?></span>
                        </p>
                    </div>
                </div>
                        
                    </ul>
                </div>
                

                    <!-- Flight duration -->
 
                   
                </div>
</div>
                      
                    <br>
                    <h3>Passenger Details</h3>
                    <p>Fill the form carefully for fast booking!.</p>
                    <?php include 'emails-files/vr2-forms/form-booking-via-direct-landing-page.php'; ?>

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