<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/slimmenu.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/bootstrap-timepicker.js"></script>
<script src="js/nicescroll.js"></script>
<script src="js/dropit.js"></script>

<script src="js/owl-carousel.js"></script>

<script src="js/ionrangeslider.js"></script>
<script src="js/icheck.js"></script>
<script src="js/fotorama.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script src="js/typeahead.js"></script>
<script src="js/card-payment.js"></script>
<script src="js/magnific.js"></script>


<script src="js/fitvids.js"></script>
<script src="js/tweet.js"></script>
<script src="js/countdown.js"></script>
<script src="js/gridrotator.js"></script>
<script src="js/custom.js"></script>

<script>
    $(document).ready(function() {
        $(".fade1").fadeIn();
    });
    $(".not-so").click(function() {
        $(".fadout").fadeOut(1000);
    });
</script>
<script>
    $(document).ready(function() {
        $('input#date').datepicker({
            minDate: 0
        });
    });

    $(document).ready(function() {
        $('input#date').datepicker('setStartDate', new Date());
        $('input#date').attr({
            type: "text"
        });
    });
</script>