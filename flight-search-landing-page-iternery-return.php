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
<style>
      @media (max-width: 767px) {
        .hidden-mobile {
          min-height: 2px !important;
        }
      }
      
      
       @media (max-width: 767px) {
        .img-mob {
          width: 12vw !important;
        }
      }
      
      @media (max-width: 767px) {
        .price-mob {
          margin-bottom: 1px; !important;
        }
      }
      
      .des-color{
          color: #5bb6ef;
          font-size: 18px;
          font-weight: bold;
      }
      .des-bottons{
          background-color: #9c27b0;
          border-color: #ffffff;
      }
      .des-price{
          font-size: 24px;
          color: #9c27b0;
          font-weight: 700;
      }
      .bok-des{
          margin-top: -20px;
      }
      
      
      
      
      
    </style>                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="booking-item-airline-logo hidden-mobile" align="center" style="min-height: 70px; display: flex;
  justify-content: center; flex-direction: column; ">
                            <div>
                            <!-- <img src="img/airline-icon.jpg" alt="Departure Airline Icon" title="Flight Departure Airline" /> -->
                            
                            <img class="img-mob" src="<?php echo strip_tags(htmlspecialchars($_GET['logo'])); ?>" alt="Airline Icon2" title="Airline" 
                            style="width: 7vw; min-width: 70px; height: auto; margin: 1vw 0.5vw 0;">
                            

                            
                            </div>
                           
                           

                            <!-- <p></p> -->
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
                    
                    
                    <!-- <div class="col-md-3">
                        <p class="booking-item-flight-class">
                            <span style="color: #01b7f2;">Duration: </span></p>
                                                    <p class="booking-item-flight-class"><span style="color: #01b7f2;">Via: </span>
                            </p>
                    </div> -->
                    
                    </div>
                </div>
                
                <div><hr style="margin-top: 1px; margin-bottom: 10px;"></div>
                
                
                <p class="booking-item-flight-class" style="margin-top: 1%; display:none;" >
                            <span style="color: #01b7f2;">RETURN: </span>
                            Sep 26, 2021                </p>

                <div class="row">

                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="hidden-mobile" align="center" style="min-height: 70px; display: flex;
  justify-content: center; flex-direction: column; ">
                            <div>
                     
                            <img src="<?php echo strip_tags(htmlspecialchars($_GET['logo'])); ?>" alt="Airline Icon" title="Airline" style="width: 7vw; min-width: 70px; height: auto; margin: 1vw 0.5vw 0;"> </div>

                            <!-- <p></p> -->
                        </div>
                        <div class="hidden-xs hidden-sm"><p><br></p></div>
                    </div>
                    
                    <div class="row" style="padding-top: 27px;" align="center">
                    <div class="col-md-3 col-sm-4 col-xs-4 bok-des">
                        <div class="booking-item-arrival">
                                <div class="booking-item-departure"><i class="fa fa-plane"></i>
                                                        <p class="booking-item-destination"><?php echo strip_tags(htmlspecialchars($_GET['destination'])); ?></p>
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
                                                        <p class="booking-item-destination"><?php echo strip_tags(htmlspecialchars($_GET['origin'])); ?></p>
                                                    </div>
                            </div>
                    </div>
                    
                    
                    <!-- <div class="col-md-3">
                        <p class="booking-item-flight-class">
                            <span style="color: #01b7f2;">Duration: </span></p>
                                                    <p class="booking-item-flight-class"><span style="color: #01b7f2;">Via: </span>
                            </p>
                    </div> -->
                    
                    </div>
                </div>
                
                
                
              
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
                                
                               
                                
                                
                                
                                

                                <div class="booking-item-payment-flight">
                                    
                                    <?php
                                    if ($_GET['stop_count'] == "1 STOP") {
                                        ?>
                                        <p><span style="color: red;">Via</span> <?php echo strip_tags(htmlspecialchars($_GET['stop'])); ?></p>
                                    <?php } else {
                                        echo "Direct Flight";
                                    }
                                    ?>
                                    <?php
                                    if ($_GET['trip_type'] == "return") {
                                        ?>
                                        
                                        
                                </div>
                            <?php
                            }
                            ?>
                            </li>
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

                                    <li>
                                        <p class="booking-item-payment-price-title">Departure Date</p>
                                        <p class="booking-item-payment-price-amount"><?php echo strip_tags(htmlspecialchars($_GET['departing_date'])); ?>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="booking-item-payment-price-title">Return Date</p>
                                        <p class="booking-item-payment-price-amount"><?php echo strip_tags(htmlspecialchars($_GET['leaving_date'])); ?>
                                        </p>
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
                
                
                
                
                
                
                
                <?php
$noresults = 0;
$q = mysqli_query($con, $sql);

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
<?php //include "newfare.php"; ?>
    <li>
        <div class="booking-item-container">
            <div class="booking-item" style="border: 2px solid #CABFBF;">
                <!-- AirlineLogo row -->
                <div class="row">
                    <div class="col-md-2 col-sm-2 col-xs-4">
                        <!-- <img src="img/airline-icon.jpg" alt="Airline Icon" title="Airline" /> -->
                        <!-- <img src="<?php //echo $_SESSION['small_logo']; 
                                            ?>" alt="Airline Icon" title="Airline" width="90px" height="auto" /> -->


                        <h5 style="text-decoration: underline;">DEPARTURE</h5>


                    </div>
                    <!-- Offset div -->
                    <div class="col-md-6 col-sm-6 col-xs-1"></div>

                    <!-- Flight duration -->
                    <div class="col-md-4 col-sm-4 col-xs-7">
                        <p class="booking-item-flight-class" style="margin-top: 1%;">
                            <span style="color: #01b7f2;">Duration: </span>
                            <?php echo $row['flight_duration']; ?>
                        </p>

                        <?php if ($row['stop1'] != "N.A") {
                                ?>
                            <p class="booking-item-flight-class"><span style="color: #01b7f2;">Via: </span>
                            <?php

                                    $ql = "select * from places where place_string='$row[stop1]'";
                                    $sql = mysqli_query($con, $ql);
                                    $row3 = mysqli_fetch_array($sql);
                                    echo $row3['city'] . " " . "(" . $row3['airport_code'] . ")";
                                } else { }


                                ?></p>
                    </div>
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
                    <div class="col-md-7">
                        <!-- col-md-5 -->
                        <div class="booking-item-flight-details">
                            </br>
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
                                        ?> </p>
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
                    <div class="col-md-2">
                        <h5 style="visibility:hidden;">Hidden</h5>

                        <?php if ($row['stop1'] == "N.A" && $row['stop2'] == "N.A") {
                                $_SESSION['stopCount'] = "Direct";
                            } else {
                                if ($row['stop1'] != "N.A" && $row['stop2'] = "N.A") {
                                    $_SESSION['stopCount'] = "1 STOP";
                                }
                            }
                            ?>
                        <p><?php echo $_SESSION['stopCount']; ?></p>
                    </div>
                    <!-- <div class="col-md-3">
                        <p class="booking-item-flight-class">
                            <span style="color: #01b7f2;">Duration: </span><?php // echo $row['flight_duration']; 
                                                                                ?></p>
                        <?php // if ($row['stop1'] != "N.A") {
                            ?>
                            <p class="booking-item-flight-class"><span style="color: #01b7f2;">Via: </span>
                            <?php
                                /*
                                    $ql = "select * from places where place_string='$row[stop1]'";
                                    $sql = mysqli_query($con, $ql);
                                    $row3 = mysqli_fetch_array($sql);
                                    echo $row3['city'] . " " . "(" . $row3['airport_code'] . ")";
                                } else { }

*/
                                ?></p>
                    </div> -->
                </div>
                <hr>
                <h5 style="text-decoration: underline; weight:bold;">RETURN</h5>
                <div class="row">
                    <div class="col-md-2">
                        <div class="booking-item-airline-logo">
                            <!-- <img src="img/airline-icon.jpg" alt="Return Airline Icon" title="Flight return Airline" /> -->
                            <img src="<?php echo $_SESSION['small_logo']; ?>" alt="Airline Icon 2" title="Airline"
                            style="width: 7vw; min-width: 70px; height: auto; margin: 1vw 0.5vw 0;" />

                            <!-- <p><?php //echo $_SESSION['airline_name1']; 
                                        ?></p> -->
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="booking-item-flight-details">
                            </br>
                            <div class="booking-item-departure"><i class="fa fa-plane"></i>
                                <p class="booking-item-destination">
                                    <?php
                                        echo $row2['city'] . ", " . $row2['airport'] . "(" . $row2['airport_code'] . ")";
                                        ?>
                                </p>
                            </div>
                            <div class="booking-item-arrival"><i class="fa fa-plane fa-flip-vertical"></i>
                                <p class="booking-item-destination">
                                    <?php
                                        echo $row1['city'] . ", " . $row1['airport'] . "(" . $row1['airport_code'] . ")";
                                        ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <h5 style="visibility:hidden;">Hidden</h5>
                        <?php if ($row['stop1'] == "N.A" && $row['stop2'] == "N.A") {
                                $_SESSION['stopCount'] = "Direct";
                            } else {
                                if ($row['stop1'] != "N.A" && $row['stop2'] = "N.A") {
                                    $_SESSION['stopCount'] = "1 STOP";
                                }
                            }
                            ?>
                        <p><?php echo $_SESSION['stopCount']; ?></p>
                    </div>
                    <?php $_SESSION['totalFare'] = ($_SESSION['adults'] * $row['adult_fare']) + ($_SESSION['child'] * $row['child_fare']) + ($_SESSION['infants'] * $row['infant_fare']);

                        $_SESSION['adult_fare'] = $row['adult_fare'];
                        $_SESSION['child_fare'] = $row['child_fare'];
                        $_SESSION['infants_fare'] = $row['infant_fare'];
                        ?>

                    <div class="col-md-3"><span class="booking-item-price" style="font-size: 24px;">&pound; <?php echo $_SESSION['totalFare']; ?></span><span></span>
                        <p class="booking-item-flight-class"><span style="color: #01b7f2;">Class: </span> <?php echo $row['class_name']; ?></p>


                        
                    </div>
                </div>
            </div>
        </div>
    </li>
<?php
};

?>