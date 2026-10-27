

   <script 
src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6Le70_0lAAAAAEEnPWZ5M5HQ5L7tjetfP49Y2DbW"></script>

<form name="quote" id="form-search-result-sidebar-call-back-request" class="form" method="POST" 
action="<?php echo strip_tags(htmlspecialchars("emails-files/vr3-recaptcha/captcha-search-result-sidebar-call-back-request.php")); ?>">
<input type="hidden" name="form_name" value="cb-request">
<input type="hidden" name="pf_ts" value="<?php echo time(); ?>">
<div style="display:none !important; visibility:hidden !important; position:absolute !important; left:-9999px !important;">
    <label for="form_website_hp">Leave empty</label>
    <input type="text" name="form_website_hp" id="form_website_hp" tabindex="-1" autocomplete="off" value="" />
</div>
          <div class="form-group">

            <label>Full Name: </label>
          
          <div class="form-group" style="margin-top: -5px; margin-bottom: 50px;" >
            <div class="col-xs-12" style="padding-right:3px;padding-left:0px;">
              
              <input type="text" class="form-control" name="fname" placeholder="Full Name" minlength="3" maxlength="30"  required/>
            </div>
            <div class="col-xs-6" style="padding-right:0px;padding-left:0px; display: none">
              <input type="text" class="form-control" name="lname" placeholder="Last Name" minlength="3" maxlength="30" value="Vicks"/>
            </div>
          </div>
        </div>
          <div class="form-group">
              <?php
              include('ip_browser.php');
              ?>
            <label>Email: </label>

            <input type="email" class="form-control" name="email" id="email" placeholder="Email" maxlength="50" required />
          </div>
          <div class="form-group">
            <label>Contact Number: </label>
            <input type="test" class="form-control" name="phoneNumber" placeholder="Contact Number" minlength="7" maxlength="25" required />
          </div>
          <div class="form-group">
            <label>Flying From: </label>
            <input type="text" class="form-control" name="origin" placeholder="Origin" minlength="3" maxlength="100" required />
          </div>
          <div class="form-group">
            <label>Going To: </label>
            <input type="text" class="form-control" name="destination" placeholder="Destination" minlength="3" maxlength="100" required />
          </div>
          <div class="form-group">
            <label>Departure Date: </label>
            <input type="text" class="form-control" id="datepicker2" name="departing_date" min="<?php echo date("Y-m-d"); ?>" autocomplete="off" required />
          </div>
          <div class="form-group">
            <label>Return Date: </label>
            <input type="text" class="form-control" id="datepicker3" name="leaving_date" min="<?php echo date("Y-m-d"); ?>" autocomplete="off" />
          </div>
          <div class="form-group" style="display: none">
            <label>No. of Passengers: </label>
            <input type="number" name="passenger" class="form-control" min="1" value="1"/>
          </div>

          <input type="submit" class="btn btn-primary" value="submit" />
        </form>
<script>
    var isSubmittingSidebar = false;
    $('#form-search-result-sidebar-call-back-request').submit(function(event) {
        if (isSubmittingSidebar) {
            event.preventDefault();
            return false;
        }
        isSubmittingSidebar = true;
        event.preventDefault();
        
        var $btn = $(this).find('input[type="submit"], button[type="submit"]');
        var origText = $btn.is('input') ? $btn.val() : $btn.html();
        if ($btn.is('input')) {
            $btn.val('Processing, please wait...').prop('disabled', true).css('opacity', '0.7');
        } else {
            $btn.html('Processing, please wait...').prop('disabled', true).css('opacity', '0.7');
        }
 
        grecaptcha.ready(function() {
            grecaptcha.execute('6Le70_0lAAAAAEEnPWZ5M5HQ5L7tjetfP49Y2DbW', {action: 'subscribe_newsletter'}).then(function(token) {
                $('#form-search-result-sidebar-call-back-request').prepend('<input type="hidden" name="token" value="' + token + '">');
                $('#form-search-result-sidebar-call-back-request').prepend('<input type="hidden" name="action" value="subscribe_newsletter">');
                $('#form-search-result-sidebar-call-back-request').unbind('submit').submit();
            }).catch(function(err) {
                isSubmittingSidebar = false;
                $btn.prop('disabled', false).css('opacity', '1');
                if ($btn.is('input')) { $btn.val(origText); } else { $btn.html(origText); }
            });
        });
    });
</script>
