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

<?php include'emails-files/vr2-forms/form-search-index-page-01.php';?>

            </div>
        </div>
        <div class="tab-pane fade" id="flight-search-2">
            <form name="search1" action="<?php echo strip_tags(htmlspecialchars("loading.php")); ?>" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                    <label>From</label>
                                    <input type="hidden" name="trip_type" value="oneway" />
                                    <input type="hidden" name="airline_name" value="ALL" />
                                    <input type="hidden" name="class_name" value="Economy" />
                                    <input class="form-control live-search" id="search1" placeholder="City, Airport, Country" type="text" name="origin" autocomplete="off" minlength="3" maxlength="100" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                    <label>To</label>
                                    <input class="form-control live-search" id="search1" placeholder="City, Airport, Country" type="text" name="destination" autocomplete="off" minlength="3" maxlength="100" required />
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                    <div class="form-group form-group-lg form-group-icon-left input-daterange" data-date-format="dd-mm-yyyy"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                        <label>Departing</label>
                                        <input class="form-control" name="start" type="text" required />
                                    </div>
                                </div>
                           
                        </div>
                    </div>
                    

                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div >
                            <div class="row" style="display: none">
                                <div class="col-md-4">
                                    <div class="form-group form-group-lg">
                                        <label>Adults</label>

                                        <select class="form-control" name="adults" required>
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
                                <div class="col-md-4">
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
                                <div class="col-md-4">
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
                            <div class="col-md-12">
                            
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-envelope input-icon input-icon-highlight"></i>
                                        <label>Email</label>
                                        <input class="form-control" name="customeremail" type="email"  required/>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-mobile input-icon input-icon-highlight"></i>
                                     
                                        <label>Phone </label>
                                        <input class="form-control" name="customerphone" type="number"  required/>
                                    </div>
                                    </div>
                                </div>
                           
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        
                            <div class="row">
                                
                                    

                                
                                <div class="col-md-6">
                                        <div class="form-group form-group-lg form-group-select-plus">
                                            <br />
                                            <div style="margin-top:9px;"> </div>

                                            <button class="btn btn-primary btn-lg" type="submit">Search Flights</button>
                                        </div>
                                    </div>
                            </div>
                        
                    </div>
                </div>
        </div>
    </div>
</div>
</form>

</div>