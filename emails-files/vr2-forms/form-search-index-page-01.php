 <script src="https://www.google.com/recaptcha/api.js?render=6Le70_0lAAAAAEEnPWZ5M5HQ5L7tjetfP49Y2DbW"></script>
<form name="search" id="form-search-index-page-01" action="<?php echo strip_tags(htmlspecialchars("loading.php")); ?>" method="POST">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-lg form-group-icon-left">
                                        <i class="fa fa-map-marker input-icon "></i>
                                        <label class="">From</label>
                                        <input type="hidden" name="trip_type" value="return" />
                                        <input type="hidden" name="airline_name" value="ALL" />
                                        <input type="hidden" name="class_name" value="Economy" />

                                       <input class="form-control live-search" id="search1" placeholder="From: City, Airport, Country" type="text" name="origin" autocomplete="off" minlength="3" maxlength="100" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                        <label class="">To</label>
                                        <input class="form-control live-search" placeholder="To: City, Airport, Country" type="text" name="destination" autocomplete="off" minlength="3" maxlength="100" required />

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="input-daterange" data-date-format="dd-mm-yyyy">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                            <label>Departing</label>
                                            <input class="form-control" name="start" id="datepicker1" type="text" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                            <label>Returning</label>
                                            <input class="form-control" name="end" type="text" required />
                                        </div>
                                    </div>
                                    <div class="col-md-4">

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="hidden-xs"><br></div>
                    <div class="row">
                        <div class="col-md-4" style="display: none">
                            <div class="input-daterange" data-date-format="M d, D">
                                <div class="row">
                                    <div class="col-md-4 col-xs-4">
                                        <div class="form-group form-group-lg">
                                            <label>Adults</label>

                                            <select class="form-control" name="adults">
                                                <option value="1" selected>01</option>
                                                <option value="2">02</option>
                                                <option value="3">03</option>
                                                <option value="4">04</option>
                                                <option value="5">05</option>
                                                <option value="6">06</option>
                                                <option value="7">07</option>
                                                <option value="8">08</option>
                                                <option value="9">09</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-4">
                                        <div class="form-group form-group-lg">
                                            <label>Child</label>

                                            <select class="form-control" name="child">
                                                <option value="0" selected>0</option>
                                                <option value="1">01</option>
                                                <option value="2">02</option>
                                                <option value="3">03</option>
                                                <option value="4">04</option>
                                                <option value="5">05</option>
                                                <option value="6">06</option>
                                                <option value="7">07</option>
                                                <option value="8">08</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-4">
                                        <div class="form-group form-group-lg">
                                            <label>Infant</label>

                                            <select class="form-control" name="infants">

                                                <option value="0" selected>0</option>
                                                <option value="1">01</option>
                                                <option value="2">02</option>
                                                <option value="3">03</option>
                                                <option value="4">04</option>
                                                <option value="5">05</option>
                                                <option value="6">06</option>
                                                <option value="7">07</option>
                                                <option value="8">08</option>

                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-envelope input-icon input-icon-highlight"></i>
                                        <label>Email <span style="font-size:10px;">
                                           
                                            Real  Email Deals -  <span><a  href="https://www.palmflights.co.uk/privacy.php">Privacy Policy</a>
                                            </span></span>
                                            </label>
                                        <input class="form-control" name="customeremail" type="email"  required/>
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-mobile input-icon input-icon-highlight"></i>
                                     
                                        <label>Phone <span style="font-size:10px;">
                                            
                                            Call only deals <span>
                                            </span></span>
                                            </label>
                                        <input class="form-control" name="customerphone" type="number"  required/>
                                    </div>
                                    </div>


                                    <div class="col-md-3">
                                        <div class="form-group form-group-lg form-group-select-plus">
                                            <br />
                                            <div style="margin-top:9px;" class="hidden-xs"> </div>

                                            <button class="btn btn-primary btn-lg" type="submit" value="submit">Search Flights</button>
                                        </div>
                                    </div>
                                </div>
                           
                        </div>
                </form>
                                                        <script>
    $('#form-search-index-page-01').submit(function(event) {
        event.preventDefault();
        var email = $('#email').val();
 
        grecaptcha.ready(function() {
            grecaptcha.execute('6Le70_0lAAAAAEEnPWZ5M5HQ5L7tjetfP49Y2DbW', {action: 'subscribe_newsletter'}).then(function(token) {
                $('#form-search-index-page-01').prepend('<input type="hidden" name="token" value="' + token + '">');
                $('#form-search-index-page-01').prepend('<input type="hidden" name="action" value="subscribe_newsletter">');
                $('#form-search-index-page-01').unbind('submit').submit();
            });;
        });
  });
  </script>