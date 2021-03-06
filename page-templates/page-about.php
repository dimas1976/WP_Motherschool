<?php
/*
 * Template Name: About Template
 */
?>
<div id="aboutUs">
    <div class="aboutUs__container aboutUs__container--greenBG container">
        <div class="cloud cloud--anna right-side">
            <p class="cloud__text cloud__text--anna">
	            <?php
                    $post = get_page_by_title('About Anna', OBJECT, 'post');
                    echo $post -> post_content;
	            ?>
            </p>
        </div>
        <div class="avatar left-side">
            <img class="avatar__image" src="<?= get_bloginfo('template_url'); ?>/images/content/teachers/anna.jpg"
                 alt="Анна Бурдина-учитель русского языка">
        </div>
    </div>
    <div class="aboutUs__container aboutUs__container--greenPurpleBG container">
        <div class="cloud cloud--nadja left-side">
            <p class="cloud__text cloud__text--nadja">
                Надежда Крювель- дипломированый педагог по хореографии. Вот уже 30 лет, как после окончания школы ,
                мастер спорта международного класса по бальным танцам начала сама преподавать детям ритмику и танец
                в Областном дворце культуры г.Владимира. Там же она окончила колледж культуры по отделению
                хореографии и параллельно с ним психологический факультет педагогического университета. Два года в
                одной из частных танцевальных школ в Болгарии преподавала для малышей основы хореографии, а для
                детей постарше-спортивный бальный танец. С 2010 года ведет театр в русской школе выходного дня
                "Азбука" в нашем городе. Несколько лет назад стала преподавать основы раннего танцевального развития
                и в Школе мамы.
            </p>
        </div>
        <div class="avatar right-side">
            <img class="avatar__image" src="<?= get_bloginfo("template_url"); ?>/images/content/teachers/anna.jpg"
                 alt="Надежда Кровель-дипломированый педагог по хореографии">
        </div>
    </div>
    <div class="aboutUs__container aboutUs__container--purpleGreenBG container">
        <div class="cloud cloud--vika right-side">
            <p class="cloud__text cloud__text--vika">
                Виктория Аронова
                (окончила Луганский<br> педагогический институт, продолжает образование в Гамбурском университете,
                опыт
                работы с детьми более 15 лет) проводит игры,способствующие развитию логического и образного,
                ассоциативного мышления. При помощи специальных пособий и заданий на уроке формируются элементарные
                математические представления, закрепляется понятие о цвете, форме и величине.
            </p>
        </div>
        <div class="avatar left-side">
            <img class="avatar__image" src="<?= get_bloginfo("template_url"); ?>/images/content/teachers/vika.jpg"
                 alt="Виктория Аронова развивает логику и образное мышление у детей">
        </div>
    </div>
</div>
