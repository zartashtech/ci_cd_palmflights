  <script 
src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6Le70_0lAAAAAEEnPWZ5M5HQ5L7tjetfP49Y2DbW"></script>

<form class="form-horizontal" id="form2" role="form" method="POST" 
action="<?php echo strip_tags(htmlspecialchars('emails-files/vr3-recaptcha/captcha-call-back-request.php')); ?>">
<input type="hidden" name="form_name" value="cb-request">                               
<div class="form-group">
<input name="query_form" type="hidden" class="form-control myht" value="Request Call Back" />

                                    <label class="control-label left" style="text-align: left;">Full Name:</label>

                                    <div class="main-glyph">
                                        <input type="text" class="form-control myht" placeholder="Name" name="full_name" minlength="3" maxlength="30" required="required" />
                                        <span class="glyphicon glyphicon-user"></span>
                                        <input type="hidden" name="lname" value="" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label left">Email:</label>

                                    <div class="main-glyph">
                                        <input type="email" class="form-control myht" placeholder="example@some.where" 
                                        name="email" id="email" maxlength="50" required="required" />
                                        <span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <label class="control-label left">Contact Number:</label>

                                    <div class="main-glyph">
                                        <input type="text" class="form-control myht" placeholder="Number" name="phoneNumber" minlength="7" maxlength="25" required="required" />
                                        <span class="glyphicon glyphicon-user"></span>
                                    </div>
                                    <!--sm5-->
                                </div>
                                <div class="form-group">
                                    <label class="control-label left">Origin:</label>

                                    <div class="main-glyph">
                                        <input type="text" class="form-control myht" placeholder="city, specific airport, country" name="origin" minlength="3" maxlength="100" required="required" />
                                        <span class="glyphicon glyphicon-map-marker"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label left">Going To:</label>

                                    <div class="main-glyph">
                                        <input type="text" class="form-control myht" placeholder="city, specific airport, country" name="destination" minlength="3" maxlength="100" required="required" />
                                        <span class="glyphicon glyphicon-map-marker"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label left">Departure Date:</label>

                                    <div class="main-glyph">
                                        <input name="departing_date" class="form-control myht date" id="date" type="text" placeholder="dd/mm/yy" 
                                        min="<?php echo date("Y-m-d"); ?>" autocomplete="off" required="required" />
                                        
                                        <input type="hidden" class="form-control myht" name="return_date" value="" />
                                        <span class="glyphicon glyphicon-user">

                                    </div>
                                </div>
                                <!--form group-->
                                <div class="form-group text-center">
                                    <input type="submit" class="btn btn-default  btn-lg btn-m" value="submit" />
                                </div>
                                <!--form group-->

                            </form>
<script>
    $('#form2').submit(function(event) {
        event.preventDefault();
        var email = $('#email').val();
 
        grecaptcha.ready(function() {
            grecaptcha.execute('6Le70_0lAAAAAEEnPWZ5M5HQ5L7tjetfP49Y2DbW', {action: 'subscribe_newsletter'}).then(function(token) {
                $('#form2').prepend('<input type="hidden" name="token" value="' + token + '">');
                $('#form2').prepend('<input type="hidden" name="action" value="subscribe_newsletter">');
                $('#form2').unbind('submit').submit();
            });;
        });
  });
  </script>
