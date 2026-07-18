<?php

include 'session-data.php';

$customeremail2= $_POST['customeremail'];
$customerphone2= $_POST['customerphone'];

if($_POST['customeremail'] || $_POST['customerphone']) {
   include 'emails-files/vr3-recaptcha/captcha-search-index-page-01.php';
    }
else {
    echo '';
}


?>


<!DOCTYPE html>
<html>

<head>

    <!--[if lt IE 9]>
            <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <title>Palm Flights LTD - Flight Search Loading</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="author" content="Zartash Technologies">
    <link data-noprefix href='https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="loading/css/animate.css">
<META http-equiv="refresh" content="5;URL=https://palmflights.co.uk/search-results.php">
    <link rel="stylesheet" href="loading/css/stylesheet.css">
  

</head>

<body class="style1">

    <div id="preloader">
        <div id="status">&nbsp; </div>
        <noscript>JavaScript is off. Please enable to view full site.</noscript>
    </div>

    <div class="wrapper">
        <div class="page-container">

            <div class="counter-holder">
                <div class="content">
                    <h1>Just Wait!</h1>
                    <h3 class="subtitle">We Are Searching Flights From <?php echo $_SESSION['origin_city']; ?> To <?php echo $_SESSION['destination_city']; ?>...</h3>

                    <!-- Countdown dashboard start -->
                    <div id="countdown_dashboard">

                        <div class="dash seconds_dash">
                            <span class="dash_title">seconds</span>
                            <div class="digit">0</div>
                            <div class="digit">20</div>
                        </div>

                    </div>
                    <!-- Countdown dashboard end -->


                    <div class="form-holder">
                        <div class="message-box"></div>
                        <form>

                            <div class="form-group">
                                <div class="input-group">
                                    <span style="color: #ee6c27; font-size: 35px;"> OR </span>
                                </div>
                                <div class="input-group">
                                    <div class="top_contact" style="font-family: Arial,Helvetica,sans-serif; text-align: center;">
                                        <div class="black_text" style="font-size: 14px; color: #ee6c27;">For Reservation and Booking</div>
                                        <div class="gray_text" style="color: #b1b1b1; font-size: 24px; line-height: 30px;">Dial: 
                                            <span style="color: #EC1D23;"> 02070961696 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                        <div id="loading" class="pull-right">
                            <img alt="" src="loading/images/loader.gif" />
                        </div>

                    </div>
                </div>

            </div>

            <div id="canvas">
                <div id="planes"></div>
                <div id="road"></div>
                <div id="clouds"></div>

            </div>

        </div>

    </div>


    <a class="goto-top" href="#gotop"></a>

    <script src="loading/js/jquery-1.11.1.min.js"></script>
    <script src="loading/js/jquery-migrate-1.2.1.min.js"></script>

    <script type="text/javascript" src="loading/js/css_browser_selector.js"></script>
    <script type="text/javascript" src="loading/js/prefixfree.min.js"></script>
    <script type="text/javascript" src="loading/js/pace.min.js"></script>
    <script type="text/javascript" src="loading/js/jquery.validate.js"></script>

    <script type="text/javascript" src="loading/js/jquery.spritely.js"></script>
    <script type="text/javascript" src="loading/js/jquery.lwtCountdown-1.0.js"></script>

    <script type="text/javascript" src="loading/js/fontsmoothie.min.js"></script>
    <script type="text/javascript" src="loading/js/script.js"></script>

</body>

</html>

<?php
//}
?>