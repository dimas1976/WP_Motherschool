<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wprig
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta name="allow-search" content="YES">
    <meta name="" http-equiv="expires" content="0">
    <meta name="revisit-after" content="3 days">
    <meta name="audience" content="All">
    <meta name="author" content="Dimitri Kogan">
    <link rel="apple-touch-icon" sizes="57x57" href="<?= get_bloginfo("template_url"); ?>/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= get_bloginfo("template_url"); ?>/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= get_bloginfo("template_url"); ?>/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= get_bloginfo("template_url"); ?>/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= get_bloginfo("template_url"); ?>/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= get_bloginfo("template_url"); ?>/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= get_bloginfo("template_url"); ?>/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= get_bloginfo("template_url"); ?>/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_bloginfo("template_url"); ?>/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?= get_bloginfo("template_url"); ?>/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_bloginfo("template_url"); ?>/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= get_bloginfo("template_url"); ?>/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_bloginfo("template_url"); ?>/images/favicon/favicon-16x16.png">
    <!--<link rel="manifest" href="<?/*= get_bloginfo("template_url"); */?>/images/favicon/manifest.json">-->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= get_bloginfo("template_url"); ?>/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="profile" href="http://gmpg.org/xfn/11">


	<?php if ( ! wprig_is_amp() ) : ?>
		<script>document.documentElement.classList.remove("no-js");</script>
	<?php endif; ?>

    <script>
        var templateUrl = '<?= get_bloginfo("template_url"); ?>';
        /*! loadCSS. [c]2017 Filament Group, Inc. MIT License */
        (function(w){
            "use strict";
            /* exported loadCSS */
            var loadCSS = function( href, before, media ){
                // Arguments explained:
                // `href` [REQUIRED] is the URL for your CSS file.
                // `before` [OPTIONAL] is the element the script should use as a reference for injecting our stylesheet <link> before
                // By default, loadCSS attempts to inject the link after the last stylesheet or script in the DOM. However, you might desire a more specific location in your document.
                // `media` [OPTIONAL] is the media type or query of the stylesheet. By default it will be 'all'
                var doc = w.document;
                var ss = doc.createElement( "link" );
                var ref;
                if( before ){
                    ref = before;
                }
                else {
                    var refs = ( doc.body || doc.getElementsByTagName( "head" )[ 0 ] ).childNodes;
                    ref = refs[ refs.length - 1];
                }

                var sheets = doc.styleSheets;
                ss.rel = "stylesheet";
                ss.href = href;
                // temporarily set media to something inapplicable to ensure it'll fetch without blocking render
                ss.media = "only x";

                // wait until body is defined before injecting link. This ensures a non-blocking load in IE11.
                function ready( cb ){
                    if( doc.body ){
                        return cb();
                    }
                    setTimeout(function(){
                        ready( cb );
                    });
                }
                // Inject link
                // Note: the ternary preserves the existing behavior of "before" argument, but we could choose to change the argument to "after" in a later release and standardize on ref.nextSibling for all refs
                // Note: `insertBefore` is used instead of `appendChild`, for safety re: http://www.paulirish.com/2011/surefire-dom-element-insertion/
                ready( function(){
                    ref.parentNode.insertBefore( ss, ( before ? ref : ref.nextSibling ) );
                });
                // A method (exposed on return object for external use) that mimics onload by polling document.styleSheets until it includes the new sheet.
                var onloadcssdefined = function( cb ){
                    var resolvedHref = ss.href;
                    var i = sheets.length;
                    while( i-- ){
                        if( sheets[ i ].href === resolvedHref ){
                            return cb();
                        }
                    }
                    setTimeout(function() {
                        onloadcssdefined( cb );
                    });
                };

                function loadCB(){
                    if( ss.addEventListener ){
                        ss.removeEventListener( "load", loadCB );
                    }
                    ss.media = media || "all";
                }

                // once loaded, set link's media back to `all` so that the stylesheet applies once it loads
                if( ss.addEventListener ){
                    ss.addEventListener( "load", loadCB);
                }
                ss.onloadcssdefined = onloadcssdefined;
                onloadcssdefined( loadCB );
                return ss;
            };
            // commonjs
            if( typeof exports !== "undefined" ){
                exports.loadCSS = loadCSS;
            }
            else {
                w.loadCSS = loadCSS;
            }
        }( typeof global !== "undefined" ? global : this ));
        loadCSS(templateUrl + '/less/styles.css');
    </script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php require_once('images/svg/svg_defs.svg'); ?>
<div id="preloader">
    <div class="preloader__container">
        <p class="preloader__text">Подождите, идёт загрузка...</p>
        <progress class="preloader__progress" value="0" max="100"></progress>
    </div>
</div>
<header id="header">
    <div class="container header__container">
        <ul id="language-switcher"><?php pll_the_languages();?></ul>
    </div>
</header>
<div class="hamburger">
    <svg class="hamburger__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1160 1280"
         preserveAspectRatio="xMidYMid meet">
        <use xlink:href="#lenkrad"></use>
    </svg>
    <span class="hamburger__title">Меню</span>
</div>
<div class="button button-mobile">
    <a href="https://www.youtube.com/watch?v=OrpoZ8U3-D4&t=1s">
        <svg viewBox="0 0 20 20" preserveAspectRatio="xMidYMin meet" class="button-mobile__image">
            <use xlink:href="#btToYT"></use>
        </svg>
        <span class="button__title">Проиграть видео</span>
    </a>
</div>
<nav id="navigation">
    <div class="container navigation__menuItemsContainer">
	    <?php
            $menu_items = (pll_current_language() == 'ru') ? (array) wp_get_nav_menu_items('wp_motherschool_menu_ru') : (array) wp_get_nav_menu_items('wp_motherschool_menu_de');
	    ?>
        <ul class="menu-list">
            <li class="navigation__menuItem" data-scroll="aboutUs">
                <a href="#">
                    <svg viewBox="0 0 380 370" preserveAspectRatio="xMinYMin meet" class="menu-item-image aboutUs-icon">
                        <use xlink:href="#aboutUs-symbol"></use>
                    </svg>
                    <span class="menu-item-title menu-item-title--about"><?= $menu_items[0]->{'post_title'} ?></span>
                </a>
            </li>
            <li class="navigation__menuItem" data-scroll="news">
                <a href="#">
                    <svg viewBox="0 0 470 330" preserveAspectRatio="xMinYMin meet" class="menu-item-image news-icon">
                        <use xlink:href="#news-symbol"></use>
                    </svg>
                    <span class="menu-item-title menu-item-title--news"><?= $menu_items[1]->{'post_title'}?></span>
                </a>
            </li>
            <li class="navigation__menuItem" data-scroll="gallery">
                <a href="#">
                    <svg viewBox="0 0 119 143" preserveAspectRatio="xMidYMin meet" class="menu-item-image gallery-icon">
                        <use xlink:href="#gallery-symbol"></use>
                    </svg>
                    <span class="menu-item-title menu-item-title--gallery"><?= $menu_items[2]->{'post_title'} ?></span>
                </a>
            </li>
            <li class="navigation__menuItem" data-scroll="contact">
                <a href="#">
                    <svg data-scroll="contact" viewBox="0 0 600 246" preserveAspectRatio="xMidYMin meet"
                         class="menu-item-image contact-icon">
                        <use xlink:href="#contact-symbol"></use>
                    </svg>
                    <span class="menu-item-title menu-item-title--contact"><?= $menu_items[3]->{'post_title'}?></span>
                </a>
            </li>
        </ul>

    </div>
</nav>
