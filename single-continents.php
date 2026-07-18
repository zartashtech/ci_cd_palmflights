<?php include 'header-meta.php'; ?>


</head>

<body>

    <!-- FACEBOOK WIDGET -->
    <?php include 'index-facebook-widget.php'; ?>
    <!-- /FACEBOOK WIDGET -->
    <div class="global-wrap">

        <?php include 'header.php'; ?>

        <div class="container">

            <ul class="breadcrumb">
                <li><a href="index.html">Home</a>
                </li>
                <li><a href="#">Continents</a>
                </li>
                <li><a href="#">Africa</a>
                </li>
                <li class="active">Deals</li>

            </ul>
            <h3 class="booking-title">521 Flights For African Destinations</h3>
            <div class="row">
                <div class="col-md-3">
                    <?php include 'form_search-results-leftbar-filters.php'; ?>
                </div>
                <div class="col-md-9">
                    <div class="nav-drop booking-sort">
                        <h5 class="booking-sort-title"><a href="#">Other Destinations:<i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i></a></h5>
                        <ul class="nav-drop-menu">
                            <li><a href="#">Accra</a>
                            </li>
                            <li><a href="#">Lagos</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="booking-list">


                        <?php include 'single-continents-loop.php'; ?>
                        <?php include 'single-continents-loop.php'; ?>
                        <?php include 'single-continents-loop.php'; ?>
                        <?php include 'single-continents-loop.php'; ?>


                    </ul>
                    <div class="row">
                        <div class="col-md-6">
                            <p><small>521 Flight found in New York. &nbsp; &nbsp; Showing 1 – 15</small>
                            </p>
                            <ul class="pagination">
                                <li class="active"><a href="#">1</a>
                                </li>
                                <li><a href="#">2</a>
                                </li>
                                <li><a href="#">3</a>
                                </li>
                                <li><a href="#">4</a>
                                </li>
                                <li><a href="#">5</a>
                                </li>
                                <li><a href="#">6</a>
                                </li>
                                <li><a href="#">7</a>
                                </li>
                                <li class="dots">...</li>
                                <li><a href="#">43</a>
                                </li>
                                <li class="next"><a href="#">Next Page</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 text-right">
                            <p>Not what you're looking for? <a class="popup-text" href="#search-dialog" data-effect="mfp-zoom-out">Try your search again</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
        </div>

        <?php include 'footer.php'; ?>
        <?php include 'footer-meta.php'; ?>
    </div>

    </div>
</body>

</html>