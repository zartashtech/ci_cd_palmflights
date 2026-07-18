<?php include 'header-meta.php'; ?>
<title>Hello Flights from London, UK | African Airfares Expert </title>
<meta name="description" content="We offer expert and well-trained travel agents for Hello Flights from London, UK  who will guide through to the best deals. ">


</head>

<body>

    <?php
    if (function_exists('test_input')) {
        // echo "Function Exists"; 
    } else {
        // echo "Function Not Found, This name Can be used!";
        function test_input($dataValidate)
        {
            $dataValidate = trim($dataValidate);
            $dataValidate = stripslashes($dataValidate);
            $dataValidate = htmlspecialchars($dataValidate);
            $dataValidate = strip_tags($dataValidate);
            return $dataValidate;
        }
    }
    ?>

    <?php include 'index-facebook-widget.php'; ?>
    <div class="global-wrap">
        <?php include 'header.php'; ?>


        <div class="gap"></div>

        <div class="container">

            <?php
            $errorVal = str_replace("%20", " ", strip_tags(htmlspecialchars($_GET['error'])));
            if (isset($errorVal) && $errorVal != '') { ?>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h3 class="text-center mb30">Booking details has not been processed.</h3>
                        <h5 class="text-center mb30" style="color: #ff0000!important;">
                            <?php echo $errorVal; ?>
                        </h5>
                        <?php echo "<center><h3><a href=\"javascript:history.go(-1)\"> &#8678; GO BACK</a></h3></center>"; ?>
                    </div>
                </div>
            <?php } else { ?>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <i class="fa fa-check round box-icon-large box-icon-center box-icon-success mb30"></i>
                        <h2 class="text-center"><?php echo test_input($_GET['firstname']); ?>, your inquiry has been received!</h2>
                        <ul class="order-payment-list list mb30">
                            <li>
                                <div class="row">
                                    <div class="col-xs-9">
                                        <p><i class="fa fa-plane"></i> Flight from
                                            <span style="color:blue;"> <?php echo test_input($_GET['origin']); ?></span>
                                        </p>
                                        
                                    </div>

                                    <div class="col-xs-3">
                                        <p class="text-right">
                                            <span class="text-lg">
                                                <?php if (test_input($_GET['total_fare']) != "") {
                                                        echo '&pound ' . test_input($_GET['total_fare']);
                                                    } ?>
                                            </span>
                                        </p>
                                    </div>

                                </div>
                            </li>

                        </ul>
                        <h4 class="text-center">For Inquiry Status You may Call us </h4>
                        <ul class="list list-inline list-center">
                            <li>
                                <div class="gray_text" style="color: #b1b1b1; font-size: 24px; line-height: 30px;">
                                    Dial: <span style="color: #EC1D23;"> 
                                    
                                    <a href="tel:02036171706">02036171706</a>
                                    </span>
                                </div>

                            </li>

                        </ul>
                    </div>
                </div>

            <?php } ?>

            <div class="gap"></div>
        </div>



        <?php include 'footer.php'; ?>
        <?php include 'footer-meta.php'; ?>
    </div>
</body>

</html>