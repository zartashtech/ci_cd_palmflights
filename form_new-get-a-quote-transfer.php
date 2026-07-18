    <?php include 'header-meta.php' ; ?>
</head>

<body>
     <?php //include 'page-preloader.php' ; ?>

    <!-- Header Area -->
     <header class="main_header_arae">
        <!-- Top Bar -->

        <?php include 'header-top.php' ; ?>

        <!-- Navbar Bar -->

        <?php include 'header-menu.php' ; ?>
    </header>
    
     <!-- search -->
    <?php include 'form_index-search-form-cheap-flights.php' ; ?>

    <!-- Common Banner Area -->
    <section id="common_banner" style="background-image: url(assets/img/breadcrum-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>GET A QUOTE</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span>Get a Quote</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dashboard Area -->
    <section id="dashboard_main_arae" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dashboard_common_table">
                        <h3 style="display:none;">GET A QUOTE</h3>
                        <div class="profile_update_form">
                            
                            <?php include 'emails-files/vr2-forms/form-ask-for-price.php' ; ?>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <?php include 'index-subscribe.php' ; ?>

    <?php include 'footer.php' ; ?>
    
    <?php include 'footer-copyrights.php' ; ?>


    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap.bundle.js"></script>
    <!-- Meanu js -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- owl carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- wow.js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Custom js -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/add-form.js"></script>
</body>

</html>