<style>
    .step-01>h2>a {
        padding: 10px;
        padding-top: 6px;
        text-align: center;
        text-decoration: none;
        background: rgb(253, 253, 253);
        color: #0ebcf2;
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
        height: 24px !important;
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

    select#inq_trip_mdl {
        padding-top: 3px;
    }
</style>

<?php
include('ip_browser.php');
?>

<div class="modal fade bs-example-modal-sm" id="modal1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content myhdr1">
            <div class="modal-header myhdr">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body modal-body2">

                <div class="step-01 ">
                    <h2><a href="tel:01864940096">01864940096</a></h2>
                </div>
                <span class="or">OR</span>
                <hr id="hr" />


                <h4>Fill The Form</h4>

                <form name="pop" id="inqfrmmdl" onsubmit="return validateForm()" class="inquiry-modal" action="<?php echo strip_tags(htmlspecialchars("mailer-inquiry.php")); ?>" method="POST">
                    <?php
                    include('ip_browser.php');
                    ?>

                    <input name="query_form" type="hidden" class="form-control myht" value="Book Now Popup" />
                    <div class="n-form">
                        <div class="main-glyph">
                            <input class="form-control LoNotSensitive" type="text" placeholder="Name" name="name" minlength="3" maxlength="30" required />
                            <span id="name" style="color:red;" class="name_err"> </span>
                        </div>
                        <div class="main-glyph">
                            <input class="form-control LoNotSensitive" type="text" placeholder="Contact" name="cell" minlength="7" maxlength="25" pattern="[0-9].{0}|.{8,}" required />
                            <span id="cell" style="color:red;" class="cell_err"> </span>
                        </div>
                        <div class="main-glyph">
                            <input class="form-control LoNotSensitive" type="email" placeholder="Email" name="inq_email" maxlength="50" required />
                            <span id="email" style="color:red;" class="email_err"> </span>
                        </div>
                        <div class="n-form">
                            <select name="inq_trip" id="inq_trip_mdl" class="form-control LoNotSensitive">
                                <option value="Round Trip">Round Trip</option>
                                <option value="One Way">One Way</option>
                            </select>
                        </div>

                        <div class="row">

                            <div class="col-xs-6" style="padding-right:5px;">
                                <div class="n-form">
                                    <input type="text" class="form-control LoNotSensitive" placeholder="Flying From" name="flying_from" minlength="3" maxlength="100" required />
                                    <span id="origin" style="color:red;" class="origin_err"> </span>
                                </div>

                            </div>

                            <div class="col-xs-6" style="padding-left:5px;">
                                <div class="n-form">
                                    <input type="text" class="form-control LoNotSensitive" placeholder="Flying To" name="flying_to" minlength="3" maxlength="100" required />
                                    <span id="destination" style="color:red;" class="destination_err"> </span>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-xs-6" id="dep_date_mdl_container" style="padding-right:5px;">
                                <div class="n-form">
                                    <label>Departure Date</label>
                                    <input type="text" id="date" class="form-control hasDatepicker LoNotSensitive" placeholder="Departure Date" name="dep_date" min="<?php echo date("Y-m-d"); ?>" autocomplete="off" required />
                                    <span id="dep" style="color:red;" class="dep_erequired"> </span>
                                </div>

                            </div>

                            <div class="col-xs-6" id="ret_date_mdl_container" style="padding-left:5px;">
                                <div class="n-form">
                                    <label>Return Date</label>
                                    <input type="text" id="date" class="form-control hasDatepicker LoNotSensitive" placeholder="Return Date" name="ret_date" min="<?php echo date("Y-m-d"); ?>" autocomplete="off" required />
                                </div>
                            </div>

                        </div>

                        <textarea class="form-control tx2 LoNotSensitive" placeholder="Message Any Request" name="inq_message" maxlength="400"></textarea>
                        
                        <br>

<p>
                                            <label>
                                                <input type="checkbox" required="">
                                                <span style="font-size: 15px"> &nbsp; &nbsp; I agree with all
                                                    <a href="terms.php">
                                                        <span style="color:#0ebcf2;">Terms and Conditions</span>
                                                    </a>
                                                </span>
                                            </label>
</p>



                        <button class="btn btn-success" type="submit" id="inq_sbt_btn_mdl">SUBMIT</button><img src="#" alt="Loading..." class="inquiry-loading-mdl" style="display: none; "><em class="fa fa-check fa-2x inq-done-mdl" style="display: none; "></em>
                    </div>

                </form>
                <div id="results"></div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('input#date').datepicker({
            minDate: 0
        });
    });
</script>
<script>
    function validateForm() {
        var name = document.forms["pop"]["name"].value;
        var cell = document.forms["pop"]["cell"].value;
        var email = document.forms["pop"]["inq_email"].value;
        var origin = document.forms["pop"]["flying_from"].value;
        var destination = document.forms["pop"]["flying_to"].value;

        if (name == null || name == "") {
            document.getElementById("name").innerHTML = "Please provide your  Name!";
            return false;
            name.focus();

        } else {
            $('.name_err').hide();
        }
        if (cell == null || cell == "") {
            document.getElementById("cell").innerHTML = "Please provide your Contact Number!";
            return false;
            cell.focus();
        }

        var y = document.forms["pop"]["cell"].value;

        if (isNaN(y)) {
            document.getElementById("cell").innerHTML = "Plese Enter valid Contact number, containing only numbers";
            return false;
            cell.focus();

        } else if (y.length < 8)

        {
            document.getElementById("cell").innerHTML = "Plese Enter valid Contact number, containing Minimum 8 digits";
            return false;
            cell.focus();

        } else {
            $('.cell_err').hide();
        }

        if (email == null || email == "") {
            document.getElementById("email").innerHTML = "Please provide your Email";
            return false;
            email.focus();

        }
        var x = document.forms["pop"]["inq_email"].value;

        var atpos = x.indexOf("@");
        var dotpos = x.lastIndexOf(".");
        if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
            document.getElementById("email").innerHTML = "Not a valid E-mail address. Please provide valid Email Address";
            return false;
            email.focus();
        } else {
            $('.email_err').hide();
        }
        if (origin == null || origin == "") {

            document.getElementById("origin").innerHTML = "Origin Required!";
            return false;
            origin.focus();

        } else {
            $('.origin_err').hide();
        }
        if (destination == null || destination == "") {

            document.getElementById("destination").innerHTML = "Destination Required!";
            return false;
            destination.focus();

        } else {
            $('.destination_err').hide();
        }

    }
</script>