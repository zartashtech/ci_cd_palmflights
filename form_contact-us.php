<?php include 'header-meta.php'; ?>

<title>Contact Us: Palm Flights LTD </title>
<meta name="description" content="We put forward a wide range of holiday activities including many activities and sightseeing excursions in over 250 destinations all over the world. ">


</head>

<body>

    <!-- FACEBOOK WIDGET -->
    <?php include 'index-facebook-widget.php'; ?>
    <!-- /FACEBOOK WIDGET -->
    <div class="global-wrap">
        <?php include 'header.php'; ?>

        <div class="container">
            <h1 class="page-title">Contact Us</h1>

            <?php
            $errorVal = str_replace("%20", " ", strip_tags(htmlspecialchars($_GET['error'])));
            $successVal = strip_tags(htmlspecialchars($_GET['msg']));
            if (isset($successVal) && $successVal != '') {
                echo "<h3 style='color:green;'>Your Message has been sent!</h3>";
            } else if (isset($errorVal) && $errorVal != '') {
                echo "<h3 style='color:red;'>" . $errorVal . "</h3>";
            }

            ?>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2480.9268857348143!2d0.106098315771589!3d51.55123967964237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a5ce7b0c3295%3A0xe47340fd92a07c5a!2s19%20Campus%20Ave%2C%20Dagenham%20RM8%202FW%2C%20UK!5e0!3m2!1sen!2s!4v1636858629189!5m2!1sen!2s" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                
           

        </div>
       
   
        <div class="container">
            <div class="gap">
                
                 </div>
            <div class="row">
                <div class="col-md-7">
                    <p> We here at www.Palmflights.co.uk   have qualified team of airfare experts having many years of experience in the Travel sector.</p>
                    <p>If you have any queries about our services  please drop us an email . We’ll be happy to answer your questions and we will try to resolve your query  on first priority .</p>

                    <br />

                    <?php if (isset($errorVal) && $errorVal != '') {
                        echo "<p style='color:red;'>" . $errorVal . "</p>";
                    } ?>

                    <?php include 'emails-files/vr2-forms/form-contact-us.php' ;?>
                    
                </div>
                <div class="col-md-4">
                    <aside class="sidebar-right">
                        <ul class="address-list list">
                            <li>
                                <h5>Email</h5><a href="mailto:admin@palmflights.co.uk">admin@palmflights.co.uk</a>
                            </li>
                            <li>
                                <h5>Phone Number</h5><a href="tel:02070961696">02070961696</a>
                            </li>
                            
                            <li>
                                <h5>Address </h5><a href="#">19 CAMPUS AVENUE DAGENHAM , <br> ENGLAND ,RM8 2FW</a>
                            </li>

                        </ul>
                    </aside>
                </div>
            </div>
            <div class="gap"></div>
        </div>

        <?php include 'footer.php'; ?>

        <?php include 'footer-meta.php'; ?>
    </div>
</body>

</html>