<header id="main-header"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <?php include 'header-top.php'; ?>

    <style>
        .flot-rightn {
            float: right;
            position: relative;
            margin-top: -33px;
        }

        .slimmenu-collapse-button {
            position: absolute;
            right: 82px;
        }

        a.btn.btn-primary.btn-xs.ntb-xs {
            background: rgba(33, 150, 243, 0.92);
            margin-top: -4px;
            border-color: rgba(33, 117, 243, 0.94);
            margin-right: 6px;
        }
        .input-container input {
    border: none;
    box-sizing: border-box;
    outline: 0;
    padding: .75rem;
    position: relative;
    width: 100%;
}

input[type="date"]::-webkit-calendar-picker-indicator {
    background: transparent;
    bottom: 0;
    color: transparent;
    cursor: pointer;
    height: auto;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    width: auto;
}
    </style>

    <div class="container" style="background-color: #000000; ">
        <div class="nav">
            <ul class="slimmenu" id="slimmenu">
                <li ><a href="index.php">Home</a> <!-- class="active" -->
                </li>
                <li><a href="about.php">About Us</a>
                </li>
          
                </li>
                <li><a href="hot-deals.php">Hot Deals</a>
                </li>
                <li><a href="#">Destinations</a>
                    <ul>
                        <li><a href="africa.php">Africa</a>
                            <ul>
                                <li><a href="#">5 Top Places</a>
                                    <ul>
                                        <li><a href="cheap-flights-to-accra.php">Accra</a></li>
                                        <li><a href="cheap-flights-to-entebbe.php">Entebbe</a> </li>
                                        <li><a href="cheap-flights-to-harare.php">Harare</a> </li>
                                        <li><a href="cheap-flights-to-kinshasa.php">Kinshasa</a></li>
                                        <li><a href="cheap-flights-to-lagos.php">Lagos</a> </li>

                                    </ul>
                                </li>
                                <li><a href="africa.php">All</a> </li>
                            </ul>
                        </li>
                        <li><a href="america.php">America</a>
                            <ul>
                                <li><a href="#">5 Top Places</a>
                                    <ul>
                                        <li><a href="cheap-flights-to-calgary.php">Calgary</a> </li>
                                        <li><a href="cheap-flights-to-chicago.php">Chicago</a> </li>
                                        <li><a href="cheap-flights-to-los-angeles.php">Los Angeles</a></li>
                                        <li><a href="cheap-flights-to-new-york.php">New York</a> </li>
                                        <li><a href="cheap-flights-to-ottawa.php">Ottawa</a></li>

                                    </ul>
                                </li>
                                <li><a href="america.php">All</a> </li>
                            </ul>
                        </li>
                        <li><a href="asia.php">Asia</a>
                            <ul>
                                <li><a href="#">5 Top Places</a>
                                    <ul>
                                        <li><a href="cheap-flights-to-bahrain.php">Bahrain</a> </li>
                                        <li><a href="cheap-flights-to-colombo.php">Colombo</a></li>
                                        <li><a href="cheap-flights-to-delhi.php">Delhi</a> </li>
                                        <li><a href="cheap-flights-to-islamabad.php">Islamabad</a></li>
                                        <li><a href="cheap-flights-to-shanghai.php">Shanghai</a> </li>
                                    </ul>
                                </li>
                                <li><a href="asia.php">All</a> </li>
                            </ul>
                        </li>
                        <li><a href="europe.php">Europe</a>
                            <ul>
                                <li><a href="#">5 Top Places</a>
                                    <ul>
                                        <li><a href="cheap-flights-to-athens.php">Athens</a> </li>
                                        <li><a href="cheap-flights-to-banjul.php">Banjul</a></li>
                                        <li><a href="cheap-flights-to-barcelona.php">Barcelona</a> </li>
                                        <li><a href="cheap-flights-to-geneva.php">Geneva</a></li>
                                        <li><a href="cheap-flights-to-perth.php">Perth</a> </li>
                                    </ul>
                                </li>
                                <li><a href="europe.php">All</a> </li>
                            </ul>
                        </li>
                        <li><a href="far-east.php">Far East</a>
                            <ul>
                                <li><a href="#">Top Places</a>
                                    <ul>
                                        <li><a href="cheap-flights-to-bangkok.php">Bangkok</a> </li>
                                        <li><a href="cheap-flights-to-jakarta.php">Jakarta</a></li>
                                        <li><a href="cheap-flights-to-kuala-lumpur.php">Kuala Lumpur</a> </li>
                                        <li><a href="cheap-flights-to-singapore.php">Singapore</a></li>
                                    </ul>
                                </li>
                                <li><a href="far-east.php">All</a> </li>
                            </ul>
                        </li>
                        <li><a href="middle-east.php">Middle East</a>
                            <ul>
                                <li><a href="#">5 Top Places</a>
                                    <ul>
                                        <li><a href="cheap-flights-to-amman.php">Amman</a> </li>
                                        <li><a href="cheap-flights-to-dubai.php">Dubai</a></li>
                                        <li><a href="cheap-flights-to-jeddah.php">Jeddah</a> </li>
                                        <li><a href="cheap-flights-to-muscat.php">Muscat</a></li>
                                        <li><a href="cheap-flights-to-kuwait.php">Kuwait</a> </li>
                                    </ul>
                                </li>
                                <li><a href="middle-east.php">All</a> </li>
                            </ul>
                        </li>
                    </ul>

                </li>
 <li><a href="terms.php">Terms & Conditions</a>
                </li>
                 <li><a href="privacy.php">Privacy Policy </a>
                </li>
                
                

                <li><a href="form_contact-us.php">Contact Us</a>
                </li>
            </ul>
            <div class="flot-rightn">
                <a class="btn btn-primary btn-xs ntb-xs" href="form_new-get-a-quote.php">Get A Quote</a>
            </div>
        </div>
    </div>
</header>

<script>
    $(document).ready(function() {
        //Get CurrentUrl variable by combining origin with pathname, this ensures that any url appendings (e.g. ?RecordId=100) are removed from the URL
        var CurrentUrl = window.location.origin + window.location.pathname;
        //Check which menu item is 'active' and adjust apply 'active' class so the item gets highlighted in the menu
        //Loop over each <a> element of the NavMenu container
        $('#slimmenu a').each(function(Key, Value) {
            //Check if the current url
            if (Value['href'] === CurrentUrl) {
                //We have a match, add the 'active' class to the parent item (li element).
                $(Value).parent().addClass('active');
            }
        });
    });
</script>