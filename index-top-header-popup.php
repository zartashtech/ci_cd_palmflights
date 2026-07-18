<style>
    .fluid-container.my.fade.in.fixxxed-bar.fade1 {
        background: rgb(255, 29, 19);
        overflow: hidden;
        height: 33px;
        padding-top: 3px;
        color: white;
        font-weight: 700;
    }

    span.flot-left {
        float: left;
        padding-top: 3px;
        font: normal normal 14px/18px Arial, sans-serif;
    }

    span.flot-right {
        float: right;
    }

    button.btn.btn-primary.btn-sub {
        border-radius: 0;
        padding: 1px 10px;
        background: rgb(203, 200, 200);
        border-color: transparent !important;
        color: rgb(195, 13, 13);
        font-weight: 700;
    }

    input.form-control.ht-n {
        border-radius: 0;
        height: 24px;
        width: 80%;
        border: 0;

        margin-left: -10%;
    }

    img.not-so {
        margin-left: 0px;
        z-index: 999999999;
        top: 0;
        position: relative;
        width: 16px;
        height: 15px;
        right: -6px;
    }
</style>


<div class="fadout">
    <div class="fluid-container my fade in fixxxed-bar fade1 hidden-xs hidden-sm" style="display:none;">
        <div class="container conti">

            <?php
            if (isset($_GET['subsc'])) {
                echo '<span style="color:rgb(159, 249, 159)" > You have Successfully Subscribed.</span>';
            } else {
                echo "<span class='flot-left p-t'>Sign up to our email to win a £1000 holiday voucher and get our best deals!</span>";
            }
            ?>

            <span class="flot-right forming"> </span>
        </div>
    </div>
</div>
