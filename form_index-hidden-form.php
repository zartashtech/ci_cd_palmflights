<div style="display:none;">

    <div class="row">


        <div class="col-md-2" style="display:none;">
            <h4 class="title"></h4>
            <div class="form-group">
                <label>Preferred Airline </label>

                <div class="selector">

                    <select class="full-width" name="airline_name">
                        <option value="ALL">ALL</option>

                    </select><span class="custom-select full-width">ALL</span>
                </div>
            </div>
            <div class="form-group">
                <label>Class</label>
                <div class="selector">
                    <select class="full-width" name="class_name">

                        <option value="Economy" selected="">Economy</option>
                        <option value="First">First</option>
                        <option value="Business">Business</option>
                        <option value="PremiumEconomy">PremiumEconomy</option>
                        <option value="PremiumFirst">PremiumFirst</option>
                    </select><span class="custom-select full-width">Economy</span>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <h4 class="title">Defaults</h4>

            <div class="col-xs-7" style="display:none;">
                <label>Change Defaults</label>
                <div style="height:5px;"></div>
                <label class="checkbox-inline">
                    <input name="flexible_date" type="checkbox" id="inlineCheckbox1" value="yes" checked=""> ± 3 days
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox2" value="Direct" name="flight_route" checked> Direct flights only
                </label>
            </div>

        </div>

    </div>
</div>