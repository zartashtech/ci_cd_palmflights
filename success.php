<?php include 'header-meta.php'; ?>
<title>Palm Flights LTD from London, UK | African Airfares Expert </title>
<meta name="description" content="We offer expert and well-trained travel agents for Palm Flights LTD from London, UK  who will guide through to the best deals. ">

<!-- Event snippet for 29 July Leads conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-816954148/7O3oCNrArcYZEKT2xoUD',
      'value': 1.0,
      'currency': 'GBP'
  });
</script>
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

    <?php //include 'index-facebook-widget.php'; ?>
    <div class="global-wrap">
        <?php include 'header.php'; ?>


        <div class="gap"></div>

        <div class="container">

         
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <i class="fa fa-check round box-icon-large box-icon-center box-icon-success mb30"></i>
                        <h2 class="text-center"><?php echo test_input($_GET['lastname']); ?>, your inquiry has been received!</h2>
                        
                        <h4 class="text-center">For Inquiry Status You may Call us </h4>
                        <ul class="list list-inline list-center">
                            <li>
                                <div class="gray_text" style="color: #b1b1b1; font-size: 24px; line-height: 30px;">
                                    Dial: <span style="color: #0ebcf2;"> 01864940096 </span>
                                </div>

                            </li>

                        </ul>
                    </div>
                </div>  

            <div class="gap"></div>
        </div>



        <?php include 'footer.php'; ?>
        <?php include 'footer-meta.php'; ?>
    </div>
</body>

</html>