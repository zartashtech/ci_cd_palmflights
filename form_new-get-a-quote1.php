<?php include 'header-meta.php'; ?>

<!-- Page Title -->
<title>Cheapest Flights by Palm Flights LTD </title>

<!-- Meta Tags -->
<meta name="description" content="We offer expert and well-trained travel agents for Palm Flights LTD from London, UK  who will guide through to the best deals.">

</head>

<body>

    <!-- FACEBOOK WIDGET -->
    <?php include 'index-facebook-widget.php'; ?>
    <!-- /FACEBOOK WIDGET -->
    <div class="global-wrap">

        <?php include 'header.php'; ?>

        <div class="container">

            <ul class="breadcrumb">
                <li><a href="index.php">Home</a>
                </li>
                <li>Deals
                </li>
            </ul>

            <header class="booking-item-header qwe1">
                <div class="row">
                    <div class="col-md-5">
                        <h2 class="lh1em">GET A QUOTE</h2>
                        <p class="lh1em text-small"><i class="fa fa-map-marker"></i> Fill the form carefully!</p>
                        <ul class="list list-inline text-small">
                            <li><a href="mailto:info@palmflights.co.uk"><i class="fa fa-envelope"></i> info@palmflights.co.uk</a>
                            </li>
                            <li><i class="fa fa-phone"></i> <a href="tel:01864940096">01864940096</a>
                            </li>
                            <li id="msg">
                            </li>

                        </ul>
                         <?php include 'emails-files/vr2-forms/form-ask-for-price.php' ; ?>
                    </div>
                    <div class="col-md-7">
                        <div class="img-wdth visible-lg  visible-md">
                            <img src="img/best-price.jpg" alt="price-bnr" />
                        </div>
                    </div>
                </div>
            </header>


            <style>
                header.booking-item-header.qwe1 {
                    border-top: 1px solid #f2f2f2;
                    margin-top: 1%;
                    padding-top: 1%;
                }


                .container.cont2 {
                    width: 86%;
                    margin: auto;
                    margin-top: 6%;
                    margin-bottom: 6%;
                    padding: 2%;
                    background: white;
                }

                .up-bdy {
                    overflow: auto;
                    background: rgb(237, 237, 237);
                    margin: 0%;
                    margin-top: 3%;
                    margin-bottom: 3%;
                }

                label.col-sm-2.control-label {
                    font-size: 12px;
                    padding-top: 3px;
                }

                label.col-sm-4.control-label {
                    padding-top: 3px;
                }

                label.left {
                    text-align: left !important;
                }

                .myht {
                    height: 29px;
                    padding-top: 3px;
                }

                .main-flot {
                    margin: auto;
                    text-align: center;
                    margin-bottom: 20px;
                    border-bottom: 1px solid rgb(237, 237, 237);
                    padding-bottom: 2%;
                    width: 50%;
                }

                button.btn.btn-default.btn-m {
                    margin-left: 13px;
                }

                button.btn.btn-default.btn-m.btn-m2 {
                    padding: 5px 35px;
                }

                .main-glyph {
                    position: relative;
                }

                .main-glyph>span.glyphicon {
                    position: absolute;
                    right: 22px;
                    top: 7px;
                    color: rgb(196, 196, 196);
                }

                ul#myTab {
                    width: 282px;
                    margin: auto;
                    position: relative;
                    top: 35px;
                }

                .nav-tabs.navi {
                    border-bottom: 1px solid rgba(221, 221, 221, 0);
                }

                select.sele {
                    background: rgb(249, 249, 249) !important;
                    padding-top: 3px !important;
                    padding-left: 7px;
                }

                .co-xs-12.center {
                    text-align: center;
                }

                div#home {
                    margin-top: 20px;
                }

                .nav-tabs.navi>li.active>a,
                .nav-tabs.navi>li.active>a:focus,
                .nav-tabs.navi>li.active>a:hover {
                    color: white;
                    cursor: default;
                    background-color: #2196f3eb;
                    border: 1px solid #2175f3f0;
                    border-bottom-color: transparent;
                }

                .nav-tabs.navi>li>a:hover {
                    border-color: #eee #eee #ddd;
                    color: white;
                    cursor: default;
                    background-color: #2196f3eb;
                }

                .nav-tabs.navi>li>a {
                    margin-right: 2px;
                    line-height: 1.42857143;
                    border: 1px solid transparent;
                    border-radius: 0;
                    background: rgb(255, 255, 255);
                    color: blue;
                    margin-right: 10px;
                }

                div#profile {
                    width: 50%;
                    margin: auto;
                    margin-top: 2%;
                }

                .img-wdth {
                    width: 41%;
                    float: right;
                    margin-right: -15px;
                }
            </style>

            <div class="up-bdy">

                <ul class="nav nav-tabs  navi" role="tablist" id="myTab">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Get A Quote</a>
                    </li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Call Back Request</a>
                    </li>
                </ul>
                <div class="container cont2">
                    <?php

                    if (function_exists('curl_get_contents')) {
                        // echo "Function Exists"; 
                    } else {
                        // echo "Function Not Found, This name Can be used!";
                        function curl_get_contents($url)
                        {
                            $ch = curl_init($url);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                            $data = curl_exec($ch);
                            curl_close($ch);
                            return $data;
                        }
                    }

                    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
                        $real_ip_adress = $_SERVER['HTTP_CLIENT_IP'];
                    }

                    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                        $real_ip_adress = $_SERVER['HTTP_X_FORWARDED_FOR'];
                    } else {
                        $real_ip_adress = $_SERVER['REMOTE_ADDR'];
                    }

                    $ip = $real_ip_adress;
                    $iptolocation = 'http://api.hostip.info/country.php?ip=' . $ip;
                    // $ip_country = file_get_contents($iptolocation);
                    $ip_country = curl_get_contents($iptolocation);

                    ?>


                    <div class="tab-content">

                        <div role="tabpanel" class="tab-pane active" id="home">
                            <form name="qq" class="form-horizontal" role="form" method="post" onsubmit="return check()" action="<?php echo strip_tags(htmlspecialchars("mailer-quote-mail.php")); ?>">

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


                                <div class="form-group">
                                    <label class="col-sm-2  control-label">Travel Class:</label>
                                    <div class="col-sm-4">
                                        <select class="form-control sele myht" name="class_name" id="sel1" required>
                                            <option vaue="Economy">Economy</option>
                                            <option vAUE="First">First</option>
                                            <option value="Business">Business</option>
                                            <option value="Premium Economy">Premium Economy</option>
                                        </select>
                                    </div>

                                    <label class="col-sm-2  control-label">Preferable Airline:</label>
                                    <div class="col-sm-4">
                                        <select class="form-control sele myht" id="sel2" name="airline_name" required>

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

                                <div class="form-group">
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
                                                <input type="checkbox" required />
                                                <span style="font-size: 15px"> &nbsp; &nbsp; I agree with all
                                                    <a href="terms.php">
                                                        <span style="color:#0ebcf2;">Terms and Conditions</span>
                                                    </a>
                                                </span>
                                            </label>
                                        </p>

                                        <button type="submit" class="btn btn-default btn-m" id="submit">Submit</button>
                                    </div>

                                </div>

                            </form>
                        </div>


                        <div role="tabpanel" class="tab-pane" id="profile">

                            <form class="form-horizontal" id="form2" role="form" method="POST" action="<?php echo strip_tags(htmlspecialchars('mailer-req-call-back.php')); ?>">
                                <div class="form-group">
                                    <input name="query_form" type="hidden" class="form-control myht" value="Request Call Back" />

                                    <label class="control-label left" style="text-align: left;">Full Name:</label>

                                    <div class="main-glyph">
                                        <input type="text" class="form-control myht" placeholder="Name" name="fname" minlength="3" maxlength="30" required="required" />
                                        <span class="glyphicon glyphicon-user"></span>
                                        <input type="hidden" name="lname" value="" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label left">Email:</label>

                                    <div class="main-glyph">
                                        <input type="email" class="form-control myht" placeholder="example@some.where" name="email" maxlength="50" required="required" />
                                        <span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <label class="control-label left">Contact Number:</label>

                                    <div class="main-glyph">
                                        <input type="text" class="form-control myht" placeholder="Number" name="phoneNumber" minlength="7" maxlength="25" required="required" />
                                        <span class="glyphicon glyphicon-user"></span>
                                    </div>
                                    <!--sm5-->
                                </div>
                                <div class="form-group">
                                    <label class="control-label left">Origin:</label>

                                    <div class="main-glyph">
                                        <input type="text" class="form-control myht" placeholder="city, specific airport, country" name="origin" minlength="3" maxlength="100" required="required" />
                                        <span class="glyphicon glyphicon-map-marker"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label left">Going To:</label>

                                    <div class="main-glyph">
                                        <input type="text" class="form-control myht" placeholder="city, specific airport, country" name="destination" minlength="3" maxlength="100" required="required" />
                                        <span class="glyphicon glyphicon-map-marker"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label left">Departure Date:</label>

                                    <div class="main-glyph">
                                        <input name="departing_date" class="form-control myht date" id="date" type="text" placeholder="dd/mm/yy" min="<?php echo date("Y-m-d"); ?>" autocomplete="off" required="required" />
                                        <input type="hidden" class="form-control myht" name="leaving_date" value="" />
                                        <span class="glyphicon glyphicon-user">

                                    </div>
                                </div>
                                <!--form group-->
                                <div class="form-group text-center">
                                    <input type="submit" class="btn btn-default  btn-lg btn-m" value="Submit" id="submit" />
                                </div>
                                <!--form group-->

                            </form>
                            <!-- </div> -->
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <style>
        .step-01>h2>a {
            padding: 10px;
            padding-top: 6px;
            text-align: center;
            text-decoration: none;
            background: rgb(253, 253, 253);
            color: blue;
            margin-top: -15px;
            border-radius: 5px;
            -webkit-box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.75);
            box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.44);
            position: relative;
            top: 1px;
            display: inline-block;
            font-family: 'Glyphicons Halflings';
            font-style: normal;
            font-weight: 400;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            transition: all 400ms;
        }

        .step-01>h2>a:hover {
            background: rgba(253, 253, 253, 0.95);
        }

        .step-01>h2>a:before {
            content: "\e182";
            margin-right: 10px;
            font-size: 15px;
        }

        .step-01>h2 {
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }

        .myhdr1 {
            background: rgb(255, 255, 255) !important;
        }

        .main-glyph>input.form-control,
        .n-form>input.form-control,
        .n-form>select.form-control {
            height: 29px !important;
            font-size: 10px;
            margin-bottom: 7px;
        }

        .myhdr {
            border-bottom: 1px solid rgba(229, 229, 229, 0);
            padding-top: 29px;
        }

        button#inq_sbt_btn_mdl {
            margin-top: 13px;
        }

        hr#hr {
            margin-top: 20px;
            margin-bottom: 20px;
            border: 0;
            border-top: 1px solid #B9B9B9;
        }

        span.or {
            display: block;
            position: absolute;
            background: rgb(255, 255, 255);
            left: 44%;
            padding-left: 5px;
            padding-right: 5px;
            color: rgb(148, 148, 148);
        }

        .modal-body2 {
            position: relative;
            padding: 37px;
            padding-top: 0;
            margin-top: -24px;
        }

        select#inq_trip_mdl {
            padding-left: 9px;
            color: rgba(127, 127, 127, 0.84);
        }

        button#inq_sbt_btn_mdl {
            margin-top: 13px;
            background: #0ebcf2;
            border: #0ebcf2;
        }

        .modal-body2>h4 {
            text-align: center;
            color: #0ebcf2;
        }

        button#inq_sbt_btn_mdl:focus {
            outline-color: darkblue;
        }

        .main-glyph {
            position: relative;
        }

        .main-glyph>span.glyphicon {
            position: absolute;
            right: 10px;
            top: 6px;
            color: rgb(196, 196, 196);
        }

        textarea.form-control.tx2 {
            font-size: 11px;
        }

        .step-01>h2>a:before {
            content: "\e201";
            margin-right: 10px;
            font-size: 15px;
        }
    </style>




    <div class="modal fade bs-example-modal-sm" id="modal1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-sm">
            <div class="modal-content myhdr1">
                <div class="modal-header myhdr">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body modal-body2">

                    <div class="step-01">
                        <h2><a href="tel:02039502322">020 3983 9340</a></h2>
                    </div>
                    <span class="or">OR</span>
                    <hr id="hr" />

                    <h4>Fill The Form</h4>

                    <form name="inqfrmmdl" id="inqfrmmdl" class="inquiry-modal" action="<?php echo strip_tags(htmlspecialchars('mailer-req-call-back.php')); ?>" method="POST">

                        <div class="n-form">
                            <input name="query_form" type="hidden" class="form-control myht" value="Request Call Back" />
                            <input name="query_date" type="hidden" value='<?php echo strip_tags(htmlspecialchars(date("Y-m-d h:i:sa"))); ?>' />
                            <input name="ip" type="hidden" value="<?php echo strip_tags(htmlspecialchars($ip)); ?>" />
                            <input name="ip_country" type="hidden" value="<?php echo strip_tags(htmlspecialchars($ip_country)); ?>" />
                            <div class="main-glyph">
                                <input class="form-control" type="text" placeholder="Name" name="name" id="name" minlength="3" maxlength="30" required="required" />
                                <span class="glyphicon glyphicon-user"></span>
                            </div>
                            <div class="main-glyph">
                                <input class="form-control" type="text" placeholder="Contact" name="cell" id="email" maxlength="50" required="required" />
                                <span class="glyphicon glyphicon-earphone"></span>
                            </div>
                            <div class="main-glyph">
                                <input class="form-control" type="email" placeholder="Email" name="inq_email" maxlength="50" required="required" />
                                <span class="glyphicon glyphicon-envelope"></span>
                            </div>
                            <div class="n-form">
                                <select name="inq_trip" id="inq_trip_mdl" class="form-control">
                                    <option value="Round Trip">Round Trip</option>
                                    <option value="One Way">One Way</option>
                                </select>
                            </div>

                            <div class="row">

                                <div class="col-xs-6" style="padding-right:5px;">
                                    <div class="n-form">
                                        <input type="text" class="form-control" placeholder="Flying From" name="flying_from" maxlength="100" required="required" />
                                    </div>

                                </div>

                                <div class="col-xs-6" style="padding-left:5px;">
                                    <div class="n-form">
                                        <input type="text" class="form-control" placeholder="Flying To" name="flying_to" maxlength="100" required="required" />
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-xs-6" id="dep_date_mdl_container" style="padding-right:5px;">
                                    <div class="n-form">
                                        <input type="date" id="date" class="form-control hasDatepicker" placeholder="Departure Date" name="dep_date" min="<?php echo date("Y-m-d"); ?>" autocomplete="off" required required="required" />
                                    </div>

                                </div>

                                <div class="col-xs-6" id="ret_date_mdl_container" style="padding-left:5px;">
                                    <div class="n-form">
                                        <input type="text" id="date" class="form-control hasDatepicker" placeholder="Return Date" name="ret_date" min="<?php echo date("Y-m-d"); ?>" autocomplete="off" />
                                    </div>
                                </div>

                            </div>

                            <textarea class="form-control tx2" placeholder="Message Any Request" name="inq_message" maxlength="400"></textarea>

                            <button class="btn btn-success" type="submit" id="inq_sbt_btn_mdl">SUBMIT</button>
                            <img src="#" alt="Loading..." class="inquiry-loading-mdl" style="display: none;" />
                            <em class="fa fa-check fa-2x inq-done-mdl" style="display: none;"></em>
                        </div>

                    </form>
                    <div id="results"></div>
                </div>
            </div>
        </div>
    </div>


    <?php include 'footer.php'; ?>

    <?php include 'footer-meta.php'; ?>
    <script>
        // $(document).ready(function () {
        //     $('input#date').datepicker('setStartDate', new Date());
        //     $('input#date').attr({ type: "text" });

        // });


        /* remove space from input value */
        function removeGlobalSpace(val) {
            if (val) {
                return val.replace(/ /g, "");
            }
            return val;
        }

        function check() {
            // console.log(document.forms['qq'].elements);

            var qqFormElements = document.forms['qq'].elements;

            var name = qqFormElements.ful_name.value;
            var email = qqFormElements.email.value;
            var cell = qqFormElements.phoneNumber.value;
            var origin = qqFormElements.origin.value;
            var destination = qqFormElements.destination.value;
            var letters = /^[0-9,. a-zA-Z]+$/;

            // var name = document.qq.ful_name.value;
            // var email =  document.qq.email.value;
            // var cell=document.qq.phoneNumber.value;


            // Returns successful data submission message when the entered information is stored in database.
            var dataString = 'ful_name=' + name + '&email=' + email + '&phoneNumber=' + cell;
            /* remove space global */
            // const fulNameVal = name.replace(/ /g, "");

            if (name == "" || removeGlobalSpace(name) == "") {

                document.getElementById("name").innerHTML = "Please provide your Name!";
                qqFormElements.ful_name.focus();
                return false;

            } else if (name && (removeGlobalSpace(name).length < 3 || name.length > 30)) {
                document.getElementById("name").innerHTML = "Not a valid Name. PLease provide Valid Name!";
                qqFormElements.ful_name.focus();
                return false;

            } else {
                $('.name_err').hide();
            }


            if (email == "" || removeGlobalSpace(email) == "") {
                document.getElementById("email").innerHTML = "Please provide your Email!";
                qqFormElements.email.focus();
                return false;
            }


            var x = qqFormElements.email.value;
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");

            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                document.getElementById("email").innerHTML = "Not a valid E-mail address. Please provide valid Email Address";
                qqFormElements.email.focus();
                return false;

            } else if (removeGlobalSpace(email).length > 50) {
                document.getElementById("email").innerHTML = "Email length can not exceed 50 characters";
                qqFormElements.email.focus();
                return false;

            } else {
                $('.email_err').hide();
            }


            if (cell == "" || removeGlobalSpace(cell) == "") {

                document.getElementById("cell").innerHTML = "Please provide your Contact Number!";
                qqFormElements.phoneNumber.focus();
                return false
            }

            var y = qqFormElements.phoneNumber.value;


            if (isNaN(y)) {
                document.getElementById("cell").innerHTML = "Plese Enter valid Contact number, containing only numbers";
                qqFormElements.phoneNumber.focus();
                return false;

            } else if (y.length < 8) {
                document.getElementById("cell").innerHTML = "Plese Enter valid Contact number, containing Minimum 8 digits";
                qqFormElements.phoneNumber.focus();
                return false;

            } else if (y.length > 25) {
                document.getElementById("cell").innerHTML = "Plese Enter valid Contact number, containing Maximum 25 digits";
                qqFormElements.phoneNumber.focus();
                return false;

            } else {
                $('.cell_err').hide();
            }


            if (origin == "" || removeGlobalSpace(origin) == "") {
                /* document.quote.origin.value == "" */

                /* alert("Please provide your Origin !"); */
                document.getElementById("origin").innerHTML = "Please provide your Origin!";
                qqFormElements.origin.focus();
                /* document.quote.origin.focus(); */
                return false;
            } else if (!origin.match(letters)) {

                document.getElementById("origin").innerHTML = "Origin can not contains special characters except comma!";
                qqFormElements.origin.focus();
                return false;

            } else {
                $('.origin_err').hide();
            }

            if (destination == "" || removeGlobalSpace(destination) == "") {
                /* document.quote.destination.value == "" */

                /* alert("Please provide your Destination !"); */
                document.getElementById("destination").innerHTML = "Please provide your destination!";
                qqFormElements.destination.focus();
                /* document.quote.destination.focus(); */
                return false;
            } else if (!destination.match(letters)) {

                document.getElementById("destination").innerHTML = "Destination can not contains special characters except comma!";
                qqFormElements.origin.focus();
                return false;

            } else {
                $('.destination_err').hide();
            }


            if (qqFormElements.departing_date.value == "" || removeGlobalSpace(qqFormElements.departing_date.value) == "") {

                document.getElementById("dep").innerHTML = "Please provide your Departure Date!";
                qqFormElements.departing_date.focus();
                return false;

            }

            var CurrentDate = new Date();
            CurrentDate.setHours(0, 0, 0, 0);
            var DepartureDate = new Date(qqFormElements.departing_date.value);
            var leavingDate = new Date(qqFormElements.leaving_date.value);

            if (DepartureDate < CurrentDate) {
                document.getElementById("dep").innerHTML = "Departure Date can not be less than today!";
                qqFormElements.departing_date.focus();
                return false;

            } else if (leavingDate && leavingDate < DepartureDate) {
                document.getElementById("dep").innerHTML = "Departure Date can not be greater than Returning Date!";
                qqFormElements.departing_date.focus();
                return false;

            } else {
                $('.dep_err').hide();
            }


            $.ajax({
                type: "POST",
                url: " ",
                data: dataString,
                cache: false,
                success: function() {
                    document.getElementById("msg").innerHTML = "Your Form has been Submitted Successfully.";
                }
            });
        }
    </script>

    <style>
        .main-glyph>input.form-control,
        .n-form>input.form-control,
        .n-form>select.form-control {
            height: 29px !important;
            font-size: 10px;
            margin-bottom: 7px;
            padding-top: 4px;
        }
    </style>
</body>

</html>