 <script src="https://www.google.com/recaptcha/api.js?render=6Le70_0lAAAAAEEnPWZ5M5HQ5L7tjetfP49Y2DbW"></script>
<form class="mt30" id="newsletterForm" action="<?php echo strip_tags(htmlspecialchars("emails-files/vr3-recaptcha/captcha-contact-us.php")); ?>" method="POST">

<input type="hidden" name="form_name" value="contact-us">
                        <div class="row">
                            <div class="col-md-6 col-xs-12 col-12">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" name="name" type="text" minlength="3" maxlength="30" required />
                                </div>

                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="form-control" name="mail" type="email" maxlength="50" required />
                                </div>

                                <div class="form-group">
                                    <label>Phone</label>
                                    <input class="form-control" name="cell" type="text" minlength="7" maxlength="25" required />
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 col-12">
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control" rows="8" name="msg" minlength="7" maxlength="400" required></textarea>
                                </div>
                            </div>

                        </div>

                        <!-- <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" name="name" type="text" minlength="3" maxlength="30" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>E-mail</label>
                                   <input class="form-control" name="mail" type="email" maxlength="50" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" name="msg" minlength="7" maxlength="400" required></textarea>
                        </div> -->
                        <input class="btn btn-primary" name="btnSubmit"  type="submit" value="Send Message" />
                    </form>
                                        <script>
    $('#newsletterForm').submit(function(event) {
        event.preventDefault();
        var email = $('#email').val();
 
        grecaptcha.ready(function() {
            grecaptcha.execute('6Le70_0lAAAAAEEnPWZ5M5HQ5L7tjetfP49Y2DbW', {action: 'subscribe_newsletter'}).then(function(token) {
                $('#newsletterForm').prepend('<input type="hidden" name="token" value="' + token + '">');
                $('#newsletterForm').prepend('<input type="hidden" name="action" value="subscribe_newsletter">');
                $('#newsletterForm').unbind('submit').submit();
            });;
        });
  });
  </script>
