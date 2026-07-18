<?php include('css/search.css');  ?>
<h3>Flight Summary</h3>
<p>Review the flight summary carefully for fast booking!.</p>
                                
<div class="row booking-item-payment">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- <img src="img/airline-icon.jpg" alt="Airline Icon" title="Airline" /> -->
                        <!-- <img src="" alt="Airline Icon" title="Airline" width="90px" height="auto" /> -->


                        
                        
                        <p class="booking-item-flight-class" style="margin-top: 1%; display:none" >
                            <span style="color: #01b7f2;">DEPARTURE: </span>
                            Sep 19, 2021                        </p>
                        
                      <!-- <h5 style="text-decoration: underline;">DEPARTURE</h5> -->

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
 
 <?php include "flight-search-landing-page-iternery-ul.php"; ?>
                   
                </div>
