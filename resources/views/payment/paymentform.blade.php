    <div class="bg-master-light padding-30 b-rad-lg">
        <h2 class="pull-left no-margin">Debit Card</h2>
        <ul class="list-unstyled pull-right list-inline no-margin">
            <li>
                <a href="#">
                    <img width="51" height="32" data-src-retina="../assets/img/form-wizard/visa2x.png" data-src="assets/img/form-wizard/visa.png" class="brand" alt="logo" src="assets/img/form-wizard/visa.png">
                </a>
            </li>
            <li>
                <a href="#" class="hint-text">
                    <img width="51" height="32" data-src-retina="../assets/img/form-wizard/amex2x.png" data-src="assets/img/form-wizard/amex.png" class="brand" alt="logo" src="assets/img/form-wizard/amex.png">
                </a>
            </li>
            <li>
                <a href="#" class="hint-text">
                    <img width="51" height="32" data-src-retina="../assets/img/form-wizard/mastercard2x.png" data-src="assets/img/form-wizard/mastercard.png" class="brand" alt="logo" src="assets/img/form-wizard/mastercard.png">
                </a>
            </li>
        </ul>
        <div class="clearfix"></div>
        <div class="form-group form-group-default required m-t-25">
            <label>Card holder's name</label>
            <input name="holder_name" type="text" class="form-control" placeholder="Name on the card" required>
        </div>
        <div class="form-group form-group-default required">
            <label>Card number</label>
            <input name="card_number" type="text" class="form-control" placeholder="8888-8888-8888-8888" required>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Expiration</label>
                <br>
                <select name="month">
                    <option selected>Jan (01)</option>
                    <option>Feb (02)</option>
                    <option>Mar (03)</option>
                    <option>Apr (04)</option>
                    <option>May (05)</option>
                    <option>Jun (06)</option>
                    <option>Jul (07)</option>
                    <option>Aug (08)</option>
                    <option>Sep (09)</option>
                    <option>Oct (10)</option>
                    <option>Nov (11)</option>
                    <option>Dec (12)</option>
                </select>
                <select name="year">
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                </select>
            </div>
            <div class="col-md-2 col-md-offset-4">
                <div class="form-group required">
                    <label>CVC Code</label>
                    <input name="cvv" type="text" class="form-control" placeholder="000" required>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div align="center">
        <button type="submit" id="submit" class="btn btn-primary"><i class="fa fa-card"></i>  Pay Now </button>
    </div>
