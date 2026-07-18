<div>
                    <ul>
                        
                        <div class="col-md-12">
                    <div class="">
                        <header class="clearfix">
                           
                           </header>
                        <ul class="booking-item-payment-details">
                            
                            
                            <?php
                                     if ($_GET['isDestination'] == "Yes") {
                                        ?>
                                        <li style="display:none;">
                                    <?php } else {
                                        ?>
                                         <li style="display:block;">
                                     <?php
                                     }
                                    ?>

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

                                     <?php
                                     if ($_GET['isDestination'] == "Yes") {
                                        ?>
                                        <li style="display:none;">
                                    <?php } else {
                                        ?>
                                         <li style="display:block;">
                                     <?php
                                     }
                                    ?>
                                        <p class="booking-item-payment-price-title">Departure Date</p>
                                        <p class="booking-item-payment-price-amount"><?php echo strip_tags(htmlspecialchars($_GET['departing_date'])); ?>
                                        </p>
                                    </li>
                                    
                                        <?php
                                     if ($_GET['isDestination'] == "Yes") {
                                        ?>
                                        <li style="display:none;">
                                    <?php } else {
                                        ?>
                                         <li style="display:block;">
                                     <?php
                                     }
                                    ?>
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
 