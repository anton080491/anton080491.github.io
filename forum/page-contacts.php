<?php
/*
Template Name: contacts
*/
?> 

<?php get_header(); ?>
    <div class="contacts">
        <div class="container">
            <div class="contacts__wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6821.968296800112!2d34.789577574878535!3d31.24886214082259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15026640029f8777%3A0x8dee8012deb5dd8!2z0JHQtdGN0YAt0KjQtdCy0LAsINCY0LfRgNCw0LjQu9GM!5e0!3m2!1sru!2sdk!4v1611585996053!5m2!1sru!2sdk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <div class="contacts__info">
                    <div class="contacts__info__block">
                        <div class="contacts__info__block__title">DELEGATE ENQUIRIES</div>
                        <div class="contacts__info__block__name">Tony Bradley</div>
                        <span><a href="mailto:tony.bradley@allanlloyds.com">E: tony.bradley@allanlloyds.com</a></span>
                        <a href="tel:+421221025322">P: +421 221 025 322</a>
                    </div>
                    <div class="contacts__info__block">
                        <div class="contacts__info__block__title">BUSINESS DEVELOPMENT</div>
                        <div class="contacts__info__block__name">Sam Khalaf</div>
                        <span><a href="mailto:tony.bradley@allanlloyds.com">E: bus.dev@allanlloyds.com</a></span>
                        <a href="tel:+421221025322">P: +421 221 025 324</a>
                    </div>
                    <div class="contacts__info__block">
                        <div class="contacts__info__block__title">COMMUNICATIONS DEPARTMENT</div>
                        <div class="contacts__info__block__name">Michael Sheridan</div>
                        <span><a href="mailto:tony.bradley@allanlloyds.com">E: michael.sheridan@allanlloyds.com</a></span>
                        <a href="tel:+421221025322">P: +421 221 025 322</a>
                    </div>
                    <div class="contacts__info__block">
                        <div class="contacts__info__block__title">MARKETING</div>
                        <div class="contacts__info__block__name">Amy Taylor</div>
                        <span><a href="mailto:tony.bradley@allanlloyds.com">E: amy.taylor@allanlloyds.com</a></span>
                        <a href="tel:+421221025322">P: +421 221 025 322</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="feedback">
        <div class="container">
            <div class="title title_feedback">FEEDBACK</div>
            <div class="feedback__wrapper">        
                <form class="feedback__form" action="#">
                    <label for="textarea">Your appeal</label>
                    <textarea name="" id="textarea" cols="30" rows="10"></textarea>
                    <label for="e-mail">How to contact you?</label>
                    <div>
                        <input type="text" id="e-mail" placeholder="E-mail">
                        <input type="text" id="name" placeholder="Your name">
                    </div>
                    <button type="submit" class="button button_form">SEND</button> 
                </form>
                <div class="feedback__desk">
                    <span>You can also ask questions by phone of a hot line:</span><br><br>
                    <a href="tel:+421221025322">+421 221 025 322</a>
                    <p>The answers to many questions already in our <span><a href="#">FAQ</a></span></p>
                    <p><span>All suggestions and comments are considered mandatory!</span></p>
                </div>
            </div>
        </div>
    </div>
    
    
    <?php get_footer(); ?>