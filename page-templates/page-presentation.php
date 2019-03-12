<?php
/*
 * Template Name: Presentation Template
 */
?>
<div id="presentation" <?php post_class('container'); ?> >
        <div class="presentation__items">
            <div class="video">
                <video autoplay loop muted>
                    <source src="<?= get_bloginfo("template_url"); ?>/video/headerclip.mp4" type="video/mp4"/>
                </video>
                <div class="video__button button">
                    <svg viewBox="0 0 20 20" preserveAspectRatio="xMidYMin meet" class="button__image">
                        <use xlink:href="#btToYT"></use>
                    </svg>
                    <span class="button__title"><?= pll__('Проиграть видео'); ?></span>
                </div>
            </div>
            <div class="iframe">
                <iframe name="smIFrame" src="https://www.youtube.com/embed/OrpoZ8U3-D4"
                        allow="autoplay; encrypted-media"></iframe>
            </div>
        </div>
    </div>