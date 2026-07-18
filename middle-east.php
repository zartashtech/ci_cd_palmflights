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
                <li><a href="index.php">Home</a>
                </li>
                <li><a href="#">Continents</a>
                </li>
                <li><a href="middle-east.php">Middle East</a>
                </li>
                <li class="active">Deals</li>

            </ul>
            <h3 class="booking-title">Flights For Middle Eastern Destinations</h3>
            <div class="row">
                <div class="col-md-3">
                    <?php include 'form_search-results-leftbar-filters.php'; ?>
                </div>
                <div class="col-md-9">
                    <div class="nav-drop booking-sort" style="display: none;">
                        <h5 class="booking-sort-title"><a href="#">Other Destinations:<i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i></a></h5>
                        <ul class="nav-drop-menu">
                            <li><a href="#">Accra</a>
                            </li>
                            <li><a href="#">Lagos</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="booking-list">


                        <?php
                        include 'connection-db.php';

                        $sql = "select DISTINCT city,img_url from places where continent='Middle East' and status='active'";

                        $q = mysqli_query($con, $sql);
                        if (mysqli_query($con, $sql)) {
                            // echo "thek ha";

                        } else {
                            echo mysqli_error($con);
                        }

                        //echo $row=[city];

                        while ($row = mysqli_fetch_array($q)) {
                            $sql2 = "select place_string,destination_url,airport,airport_code from places where city='$row[city]'";

                            $q2 = mysqli_query($con, $sql2);

                            $row1 = mysqli_fetch_array($q2);
                            $london = "London, London Heathrow Arpt [LHR], United Kingdom";
                            $sql3 = "select * from flight_detail where origin='$london' and destination='$row1[place_string]' and class_name='Economy' and trip_type='return' order by adult_fare asc";
                            $q3 = mysqli_query($con, $sql3);

                            $rows = mysqli_fetch_array($q3);
                            // $rowCount = mysql_num_rows($rows);
                            $sql5 = "select * from places where place_string='$rows[destination]'";
                            $q5 = mysqli_query($con, $sql5);
                            $rows1 = mysqli_fetch_array($q5);

                            $ql4 = "select * from miscellaneous";
                            $q4 = mysqli_query($con, $ql4);
                            $ros = mysqli_fetch_array($q4);
                            ?>

                        <?php include 'single-continents-loop.php';
                        } ?>


                    </ul>
                    <div class="row" style="visibility:hidden">
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