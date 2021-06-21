<!-- <?php
/*
Template Name: registration
*/
?> -->


<?php get_header(); ?>
    <div class="container">
        <div class="registration">
            <div class="title">2  EASY STEPS TO REGISTER</div>
            <div class="registration__2-steps">
            <a href="#form" class="button button_registration">FILL IN THE FORM IN ENGLISH</a>
                <img src="<?php echo bloginfo('template_url');?>/assets/icons/conference-selection-arrow.png" alt="arrow">
                <button class="button button_registration">READ THOROUGHLY TERMS&CONDITIONS </button>
            </div>
            <form id="form" class="registration__form" action="#">
                <div class="registration__form__flex">
                    <label for="conference">Please, choose a conference:</label>
                    <input list="list" id="conference" placeholder="Wealth TOP FORUM Israel 22222">
                    <datalist id="list">
                        <option><input type="radio" name="conference" id="conference1" checked="cheked"><label for="conference1" class="button button_registration__form">Wealth TOP FORUM Israel 2011</label></option>
                        <option><input type="radio" name="conference" id="conference2" checked="cheked"><label for="conference2" class="button button_registration__form">Wealth TOP FORUM Israel 2012</label></option>
                        <option><input type="radio" name="conference" id="conference3" checked="cheked"><label for="conference3" class="button button_registration__form">Wealth TOP FORUM Israel 2013</label></option>
                    </datalist>
                </div>
                <div class="registration__form__flex">
                    <label>Please choose <span>delegate package</span>:</label>
                    <div class="registration__form__flex__buttons">
                        <input type="radio" name="package" id="package1" checked="cheked">
                        <label for="package1" class="button button_registration__form">Standard</label>
                        <input type="radio" name="package" id="package2" checked="cheked">
                        <label for="package2" class="button button_registration__form">Premium</label>
                    </div>
                </div>
                <div class="registration__form__flex">
                    <label for="Name">Name:</label>
                    <input id="Name">
                </div>
                <div class="registration__form__flex">
                    <label for="Surname">Surname:</label>
                    <input id="Surname">
                </div>
                <div class="registration__form__flex">
                    <label for="Company-Name">Company Name:</label>
                    <input id="Company-Name">
                </div>
                <div class="registration__form__flex">
                    <label for="Business-Area">Business Area:</label>
                    
                    <input list="list1" id="Business-Area" placeholder="Forex Companies">
                    <datalist id="list1">
                        <option><input type="radio" name="Business-Area" id="Business-Area1" checked="cheked"><label for="Business-Area1" class="button button_registration__form">Forex Companies</label></option>
                        <option><input type="radio" name="Business-Area" id="Business-Area2" checked="cheked"><label for="Business-Area2" class="button button_registration__form">Forex Companies</label></option>
                        <option><input type="radio" name="Business-Area" id="Business-Area3" checked="cheked"><label for="Business-Area3" class="button button_registration__form">Forex Companies</label></option>
                    </datalist>
                </div>
                <div class="registration__form__flex">
                    <label for="Position">Position:</label>
                    <input id="Position">
                </div>
                <div class="registration__form__flex">
                    <label for="E-mail-organizers">E-mail (for organizers):</label>
                    <input id="E-mail-organizers">
                </div>
                <div class="registration__form__flex">
                    <label for="E-mail-sponsors">E-mail (for sponsors):</label>
                    <input id="E-mail-sponsors">
                </div>
                <div class="registration__form__flex">
                    <label for="Mobile-Number-organizers">Mobile Number (for organizers):</label>
                    <input id="Mobile-Number-organizers">
                </div>
                <div class="registration__form__flex">
                    <label for="Country">Country:</label>
                    <input id="Country">
                </div>
                <div class="registration__form__flex">
                    <label for="Web-site">Web-site:</label>
                    <input id="Web-site">
                </div>
                <div class="registration__form__flex">
                    <label>Method of payment</label>
                    <div class="registration__form__flex__buttons">
                        <input type="radio" name="payment" id="payment1" checked="cheked">
                        <label for="payment1" class="button button_registration__form">free</label>
                        <input type="radio" name="payment" id="payment2" checked="cheked">
                        <label for="payment2" class="button button_registration__form"><img src="<?php echo bloginfo('template_url');?>/assets/icons/visa.png" alt="visa"></label>
                        <input type="radio" name="payment" id="payment3" checked="cheked">
                        <label for="payment3" class="button button_registration__form">Invoice</label>
                        <input type="radio" name="payment" id="payment4" checked="cheked">
                        <label for="payment4" class="button button_registration__form"><img src="<?php echo bloginfo('template_url');?>/assets/icons/paypal.png" alt="paypal"></label>
                    </div>
                </div>
                <div class="registration__form__checkbox">
                    <input type="checkbox" class="custom-checkbox" id="accept" name="happy" value="yes">
                    <label for="accept">I accept Terms&Conditions</label>
                    <button class="button button_form button_form_checkbox">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
    
    <?php get_footer(); ?>