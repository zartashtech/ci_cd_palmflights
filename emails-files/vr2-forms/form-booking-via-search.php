<script src="https://www.google.com/recaptcha/api.js?render=6Le70_0lAAAAAEEnPWZ5M5HQ5L7tjetfP49Y2DbW"></script>
<form id="form-booking-via-search" 
action="<?php echo strip_tags(htmlspecialchars("emails-files/vr3-recaptcha/captcha-booking-via-search.php?origin=$_GET[origin]&destination=$_GET[destination]&origin_city=$_GET[origin_city]&destination_city=$_GET[destination_city]&trip_type=$_GET[trip_type]&duration=$_GET[duration]&stopCount=$_GET[stopCount]&totalFare=$_GET[totalFare]&departing_date=$_GET[departing_date]&leaving_date=$_GET[leaving_date]&class_name=$_GET[class_name]&adults=$_GET[adults]&child=$_GET[child]&infants=$_GET[infants]&flexible_date=$_GET[flexible_date]&airline_name=$_GET[airline_name]")); ?>" method="post">


<?php
$trip_type = $_GET['trip_type'] ?? 'twoway'; // default to twoway if not set



if ($trip_type === "oneway") {
    echo '<input type="hidden" name="form_name" value="book-via-search-gds-oneway">';
} else {
    echo '<input type="hidden" name="form_name" value="book-via-search-gds-twoway">';
}
?>


<div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label>First & Last Name</label>
                <?php
                include('ip_browser.php');
                ?>
                <input name="query_form" type="hidden" class="form-control myht" value="Flight Search Booking" />
                <input class="form-control" type="text" name="firstname" minlength="3" maxlength="30" required />
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Phone Number</label>
                <input class="form-control" type="text" name="phoneNumber" minlength="7" maxlength="25" required />
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>E-mail</label>
                <input class="form-control" type="email" name="email" id="email" maxlength="50" required />
            </div>
        </div>
    </div>
    <?php include 'passengers.php'; ?>
    <br /><br />
    <div class="checkbox">
        <label>
            <input class="i-check" type="checkbox" required />I acknowledge that I have read and accept the <a href="https://www.palmflights.co.uk/terms.php">terms & conditions.</a>
        </label>
    </div>
    <input class="btn btn-primary" type="submit" value="Complete Booking" />
</form>
                                        <script>
    $('#form-booking-via-search').submit(function(event) {
        event.preventDefault();
        var email = $('#email').val();
 
        grecaptcha.ready(function() {
            grecaptcha.execute('6Le70_0lAAAAAEEnPWZ5M5HQ5L7tjetfP49Y2DbW', {action: 'subscribe_newsletter'}).then(function(token) {
                $('#form-booking-via-search').prepend('<input type="hidden" name="token" value="' + token + '">');
                $('#form-booking-via-search').prepend('<input type="hidden" name="action" value="subscribe_newsletter">');
                $('#form-booking-via-search').unbind('submit').submit();
            });;
        });
  });
  </script>
