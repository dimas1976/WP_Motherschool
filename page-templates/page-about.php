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
                    $article = ( get_bloginfo("language") == 'de-DE' ) ? 'Über Anna' : 'О Анне';
                    $post = get_page_by_title($article, OBJECT, 'post');
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
	            <?php
                    $article = ( get_bloginfo("language") == 'de-DE' ) ? 'Über Nadja' : 'О Наде';
                    $post = get_page_by_title($article, OBJECT, 'post');
                    echo $post -> post_content;
	            ?>
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
                <?php
                    $article = ( get_bloginfo("language") == 'de-DE' ) ? 'Über Victoria' : 'О Вике';
                    $post = get_page_by_title($article, OBJECT, 'post');
                    echo $post -> post_content;
                ?>
            </p>
        </div>
        <div class="avatar left-side">
            <img class="avatar__image" src="<?= get_bloginfo("template_url"); ?>/images/content/teachers/vika.jpg"
                 alt="Виктория Аронова развивает логику и образное мышление у детей">
        </div>
    </div>
</div>
