<div class="bg-front bg-front-mob-rel">
    <div class="container">
        <div class="search-tabs search-tabs-bg search-tabs-abs-bottom">
            <div class="tabbable">
                <ul class="nav nav-tabs" id="myTab">

                    <li class="active"><a href="#tab-2" data-toggle="tab"><i class="fa fa-plane"></i> 
                            <span> FIND THE PERFECT FLIGHT </span>
                        </a>
                    </li>
                    <!--<li><a href="#tab-3" data-toggle="tab"><i class="fa fa-home"></i>-->
                    <!--        <span>Advance Search</span>-->
                    <!--    </a>-->
                    <!--</li>-->

                </ul>
                <div class="tab-content">

                    <?php include 'form_index-hidden-form.php'; ?>
                    <?php include 'form_index-search-form-cheap-flights.php'; ?>
                    <?php include 'form_index-advance-search-form.php'; ?>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.input-daterange input').datepicker('setStartDate', new Date());
        $('input#datepicker1').datepicker('setStartDate', new Date());
    });
</script>
