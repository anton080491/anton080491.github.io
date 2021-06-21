<?php
/*
Template Name: Про компанию
*/
?>

<?php 
get_header() ;
?>

<div class="about" >
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 col-lg-5 offset-lg-1">
                <div class="about__img">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/about.jpg" alt="про компанию">
                </div>
            </div>
            <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 col-xl-5 offset-xl-1">
                <h1 class="title underlined">Про компанию</h1>
                <div class="about__text">
                    Наша компания уже больше десяти лет дарит позитивные эмоции детям и их родителям. Мы воплощаем все детские мечты и помогаем родителям дарить счастливое детство!
                    <br> <br>
                    Но и взрослые иногда так нуждаются в детских эмоциях! Мы можем и это, ведь так приятно почувствовать заботу даже когда тебе за... :)
                </div>
                <a href="#" class="button">Узнать больше</a>
            </div>
        </div>
    </div>
</div>

<?php
 get_footer();
?>