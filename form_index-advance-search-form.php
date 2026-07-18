<?php
include('connection-db.php');
?>
<div class="tab-pane fade" id="tab-3">


    <div class="tabbable">
        <ul class="nav nav-pills nav-sm nav-no-br mb10" id="flightChooseTab">
            <li class="active"><a href="#flight-search-3" data-toggle="tab">Round Trip</a>
            </li>
            <li><a href="#flight-search-4" data-toggle="tab">One Way</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="flight-search-3">
                <form name="search2" action="<?php echo strip_tags(htmlspecialchars("loading.php")); ?>" method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                        <label>From</label>
                                        <input type="hidden" name="trip_type" value="return" />
                                        <input class="form-control live-search" id="search5" placeholder="City, Airport, Country" type="text" name="origin" autocomplete="off" minlength="3" maxlength="100" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                        <label>To</label>
                                        <input class="form-control live-search" placeholder="City, Airport, Country" type="text" name="destination" autocomplete="off" minlength="3" maxlength="100" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-daterange" data-date-format="dd-mm-yyyy">
                                        <div>
                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                <label>DEPARTING</label>
                                                <input class="form-control" name="start" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-daterange" data-date-format="dd-mm-yyyy">
                                        <div>
                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                <label>Returning</label>
                                                <input class="form-control" name="end" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: none">
                                    <div class="form-group form-group-lg">
                                        <label>Class</label>

                                        <select class="form-control" name="class_name">
                                            <?php
                                            $sql = "SELECT class_name from classes ;";
                                            $result = mysqli_query($con, $sql);

                                            $num_results = mysqli_num_rows($result);
                                            for ($i = 0; $i < $num_results; $i++) {
                                                $row = mysqli_fetch_array($result);
                                                $class_name = $row['class_name'];
                                                echo '<option value="' . $class_name . '">' .  $class_name . '</option>';
                                            }

                                            ?>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-daterange" data-date-format="M d, D">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group form-group-lg">
                                            <label>Preferred Airline</label>

                                            <select class="form-control" name="airline_name" required>
                                                <?php
                                                $sql = "SELECT airline_name from airlines order by airline_name;";
                                                $result = mysqli_query($con, $sql);

                                                echo '<option value="ALL">ALL</option>';
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

                                    <div class="col-md-6">
                                        <div class="form-group form-group-lg">
                                            <label>Direct Flight Only</label>

                                            <select class="form-control" name="flight_route" required>
                                                <option selected="selected" value="Indirect">No</option>
                                                <option value="Direct">Yes</option>

                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="input-daterange" data-date-format="M d, D">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-lg">
                                            <label>Adult</label>

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
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-daterange" data-date-format="M d, D">
                                <div class="row">
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


                                    <div class="col-md-4">
                                        <div class="form-group form-group-lg form-group-select-plus">
                                            <label>.</label>
                                            <button class="btn btn-primary btn-lg" type="submit">Search Flights</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </form>
            <div class="tab-pane fade" id="flight-search-4">
                <form name="search3" action="<?php echo strip_tags(htmlspecialchars("loading.php")); ?>" method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                        <label>From</label>
                                        <input type="hidden" name="trip_type" value="oneway" />
                                        <input class="form-control live-search" id="search5" placeholder="City, Airport, Country" type="text" name="origin" autocomplete="off" minlength="3" maxlength="100" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                        <label>To</label>
                                        <input class="form-control live-search" id="search5" placeholder="City, Airport, Country" type="text" name="destination" autocomplete="off" minlength="3" maxlength="100" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-daterange" data-date-format="M d, D">
                                        <div>
                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                <label>DEPARTING</label>
                                                <input class="form-control" name="start" type="text" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group form-group-lg">
                                        <label>Class</label>

                                        <select class="form-control" name="class_name">
                                            <?php
                                            $sql = "SELECT class_name from classes ;";
                                            $result = mysqli_query($con, $sql);

                                            $num_results = mysqli_num_rows($result);
                                            for ($i = 0; $i < $num_results; $i++) {
                                                $row = mysqli_fetch_array($result);
                                                $class_name = $row['class_name'];
                                                echo '<option value="' . $class_name . '">' .  $class_name . '</option>';
                                            }

                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-daterange" data-date-format="M d, D">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group form-group-lg">
                                            <label>Preferred Airline</label>

                                            <select class="form-control" name="airline_name" required>
                                                <?php
                                                $sql = "SELECT airline_name from airlines order by airline_name;";
                                                $result = mysqli_query($con, $sql);

                                                echo '<option value="ALL">ALL</option>';
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
                                    <div class="col-md-3">
                                        <div class="form-group form-group-lg">
                                            <label>Direct Flight</label>

                                            <select class="form-control" name="flight_route" required>
                                                <option selected="selected" value="Indirect">No</option>
                                                <option value="Direct">Yes</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group form-group-lg">
                                            <label>Adult</label>

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

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-daterange" data-date-format="M d, D">
                                <div class="row">

                                    <div class="col-md-3">
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
                                    <div class="col-md-3">
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

                                    <div class="col-md-3">
                                        <div class="form-group form-group-lg form-group-select-plus">
                                            <label>.</label>

                                            <button class="btn btn-primary btn-lg" type="submit">Search Flights</button>
                                        </div>
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