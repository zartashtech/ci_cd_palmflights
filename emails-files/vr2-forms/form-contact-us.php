 <script src="https://www.google.com/recaptcha/api.js?render=6Le70_0lAAAAAEEnPWZ5M5HQ5L7tjetfP49Y2DbW"></script>
<form class="mt30" id="newsletterForm" action="<?php echo strip_tags(htmlspecialchars("emails-files/vr3-recaptcha/captcha-contact-us.php")); ?>" method="POST">

<input type="hidden" name="form_name" value="contact-us">
<input type="hidden" name="pf_ts" value="<?php echo time(); ?>">
<div style="display:none !important; visibility:hidden !important; position:absolute !important; left:-9999px !important;">
    <label for="form_website_hp">Leave empty</label>
    <input type="text" name="form_website_hp" id="form_website_hp" tabindex="-1" autocomplete="off" value="" />
</div>
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
    var isSubmittingContact = false;
    function resetContactSubmitBtn() {
        isSubmittingContact = false;
        var $btn = $('#newsletterForm').find('input[type="submit"], button[type="submit"]');
        $btn.prop('disabled', false).css('opacity', '1');
        if ($btn.is('input')) {
            $btn.val('Send Message');
        } else {
            $btn.html('Send Message');
        }
    }

    window.addEventListener('pageshow', function() {
        resetContactSubmitBtn();
    });

    $('#newsletterForm').submit(function(event) {
        if (isSubmittingContact) {
            event.preventDefault();
            return false;
        }
        isSubmittingContact = true;
        event.preventDefault();
        
        var $btn = $(this).find('input[type="submit"], button[type="submit"]');
        if ($btn.is('input')) {
            $btn.val('Sending, please wait...').prop('disabled', true).css('opacity', '0.7');
        } else {
            $btn.html('Sending, please wait...').prop('disabled', true).css('opacity', '0.7');
        }

        setTimeout(function() {
            if (isSubmittingContact) {
                resetContactSubmitBtn();
            }
        }, 8000);
 
        grecaptcha.ready(function() {
            grecaptcha.execute('6Le70_0lAAAAAEEnPWZ5M5HQ5L7tjetfP49Y2DbW', {action: 'subscribe_newsletter'}).then(function(token) {
                $('#newsletterForm').find('input[name="token"]').remove();
                $('#newsletterForm').find('input[name="action"]').remove();
                $('#newsletterForm').prepend('<input type="hidden" name="token" value="' + token + '">');
                $('#newsletterForm').prepend('<input type="hidden" name="action" value="subscribe_newsletter">');
                $('#newsletterForm').unbind('submit').submit();
            }).catch(function(err) {
                resetContactSubmitBtn();
            });
        });
    });
</script>
