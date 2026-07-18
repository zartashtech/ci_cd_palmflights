  <script 
src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6Le70_0lAAAAAEEnPWZ5M5HQ5L7tjetfP49Y2DbW"></script>
<form  id="newsletterForm" class="form-horizontal" role="form" method="post" 
action="emails-files/vr3-recaptcha/captcha-ask-for-price.php">
<input type="hidden" name="form_name" value="ask-for-price"> 
                                <div class="form-group">

                                    <input name="query_date" type="hidden" value='<?php echo strip_tags(htmlspecialchars(date("Y-m-d h:i:sa"))); ?>' />
                                    <input name="ip" type="hidden" value="<?php echo strip_tags(htmlspecialchars($ip)); ?>" />
                                    <input name="ip_country" type="hidden" value="<?php echo strip_tags(htmlspecialchars($ip_country)); ?>" />
                                    <input name="query_form" type="hidden" class="form-control myht" value="Get a Quote" />

                                    <label class="col-sm-2 control-label">Full Name:</label>
                                    <div class="col-sm-4 main-glyph">
                                        <input name="ful_name" type="text" class="form-control myht" placeholder="Full Name" minlength="3" maxlength="30" required />
                                        <span class="glyphicon glyphicon-user"></span>
                                        <span id="name" style="color:red;" class="name_err"> </span>
                                    </div>
                                    <!--sm5-->

                                    <label class="col-sm-2  control-label">Email:</label>

                                    <div class="col-sm-4 main-glyph">
                                        <input type="email" class="form-control myht" name="email" placeholder="example@domain.com" maxlength="50" required />
                                        <span class="glyphicon glyphicon-envelope"></span>
                                        <span id="email" style="color:red;" class="email_err"> </span>
                                    </div>
                                </div>
                                <!--form group-->

                                <div class="form-group">

                                    <label class="col-sm-2 control-label">Contact Number:</label>
                                    <div class="col-sm-4 main-glyph">

                                        <!-- <div class="row"> -->

                                        <div class="">
                                            <!-- col-xs-7 col-md-7 -->
                                            <input type="text" name="phoneNumber" class="form-control myht" placeholder="Phone number" minlength="7" maxlength="25" required />
                                            <span class="glyphicon glyphicon-earphone"></span>
                                        </div>

                                        <!-- </div> -->

                                        <span id="cell" style="color:red;" class="cell_err"> </span>

                                    </div>
                                    <!--sm5-->


                                    <label class="col-sm-2 control-label">Trip type:</label>
                                    <div class="col-sm-4">
                                        <label class="radio-inline">
                                            <input type="radio" name="trip_type" value="One way" required> One way
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="trip_type" value="Round trip" checked="" required> Round Trip
                                        </label>
                                    </div>

                                </div>
                                <!--form group-->


                                <div class="form-group" style="display: none">
                                    <label class="col-sm-2  control-label">Travel Class:</label>
                                    <div class="col-sm-4">
                                        <select class="form-control sele myht" name="class_name" id="sel1" >
                                            <option value="Economy">Economy</option>
                                            <option value="First">First</option>
                                            <option value="Business">Business</option>
                                            <option value="Premium Economy">Premium Economy</option>
                                        </select>
                                    </div>

                                    <label class="col-sm-2  control-label">Preferable Airline:</label>
                                    <div class="col-sm-4">
                                        <select class="form-control sele myht" id="sel2" name="airline_name">

                                            <?php
                                            include('connection-db.php');
                                            $sql = "SELECT airline_name from airlines order by airline_name;";
                                            $result = mysqli_query($con, $sql);

                                            echo '<option value="Any">Any</option>';
                                            $num_results = mysqli_num_rows($result);
                                            for ($i = 0; $i < $num_results; $i++) {
                                                $row = mysqli_fetch_array($result);
                                                $airline_name = $row['airline_name'];
                                                echo '<option value="' . $airline_name . '">' .  $airline_name . '</option>';
                                            }

                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">

                                    <label class="col-sm-2  control-label">Flying From:</label>

                                    <div class="col-sm-4">
                                        <input type="text" name="origin" class="form-control myht" placeholder="city, specific airport, country" minlength="3" maxlength="100" required />
                                        <span id="origin" style="color:red;" class="origin_err"> </span>
                                    </div>


                                    <label class="col-sm-2  control-label">Going To:</label>

                                    <div class="col-sm-4">
                                        <input type="text" name="destination" class="form-control myht" placeholder="city, specific airport, country" minlength="3" maxlength="100" required />
                                        <span id="destination" style="color:red;" class="destination_err"> </span>
                                    </div>
                                    <!--sm5-->

                                </div>
                                <!--group-->


                                <div class="form-group">
                                    <label class="col-sm-2  control-label">Departure Date:</label>

                                    <div class="col-sm-4">
                                        <input name="departing_date" class="form-control myht date" id="date" type="text" placeholder="mm/dd/yy" min="<?php echo date("Y-m-d"); ?>" autocomplete="off" required />
                                        <span id="dep" style="color:red;" class="dep_err"> </span>
                                    </div>

                                    <label class="col-sm-2  control-label">Return Date:</label>

                                    <div class="col-sm-4">
                                        <input name="leaving_date" class="form-control myht" type="text" placeholder="mm/dd/yy" id="date" min="<?php echo date("Y-m-d"); ?>" autocomplete="off" />
                                        <br />

                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="flexible_date" checked="" value="Yes">My dates are flexible for +/- 3 days</label>
                                        <br />

                                        <label class="checkbox-inline">
                                            <input name="flight_route" type="checkbox" value="Direct">Direct Flight</label>

                                    </div>

                                </div>


                                <hr />

                                <div class="form-group" style="display: none">
                                    <div class="col-sm-6">
                                        <label class="col-sm-4 control-label xd">Extra Details:</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control myht" rows="4" name="extra_detail" maxlength="400"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Adults:</label>
                                            <div class="col-sm-8">
                                                <select class="form-control myht" name="adults" id="sel3">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--group-->

                                        <div class="form-group">

                                            <label class="col-sm-4 control-label">Children:</label>

                                            <div class="col-sm-8">
                                                <select name="child" class="form-control myht" id="sel3">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--group-->

                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Infants:</label>

                                            <div class="col-sm-8">
                                                <select name="infants" class="form-control myht" id="sel3">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--group-->


                                    </div>
                                    <!--6-->

                                </div>
                                <div class="form-group">
                                    <div class="co-xs-12 center">

                                        <h3>Terms &amp; Condition</h3>
                                        <p>
                                            <label>
                                                <input type="checkbox" />
                                                <span style="font-size: 15px"> &nbsp; &nbsp; I agree with all
                                                    <a href="terms.php">
                                                        <span style="color:#0ebcf2;">Terms and Conditions</span>
                                                    </a>
                                                </span>
                                            </label>
                                        </p>

                                        <button type="submit" class="btn btn-default btn-m" value="submit">Submit</button>
                                    </div>

                                </div>

                            </form>
                            
<script>
    $('#newsletterForm').submit(function(event) {
        event.preventDefault();
        var email = $('#email').val();
 
        grecaptcha.ready(function() {
            grecaptcha.execute('6Le70_0lAAAAAEEnPWZ5M5HQ5L7tjetfP49Y2DbW', {action: 'subscribe_newsletter'}).then(function(token) {
                $('#newsletterForm').prepend('<input type="hidden" name="token" value="' + token + '">');
                $('#newsletterForm').prepend('<input type="hidden" name="action" value="subscribe_newsletter">');
                $('#newsletterForm').unbind('submit').submit();
            });;
        });
  });
  </script>
  
  
  
  
  
  
  
  
  
  
  
  
  
