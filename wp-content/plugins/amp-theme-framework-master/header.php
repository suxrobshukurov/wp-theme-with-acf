<?php amp_header_core() ;
$logoData = get_field('logo-data', 'option');
$searchData = get_field('search-data', 'option');
$faviconsData = get_field('favicons-data', 'option');?>
<!doctype html>
<html <?php language_attributes(); ?> amp>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?= wp_get_canonical_url();?>" rel="canonical">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&subset=cyrillic" rel="stylesheet" id="wt-sky-css--725574360">

    <?php /* Favicon */ ?>
    <?php if(not_empty($faviconsData['apple-icon'])):?>
        <?php foreach ($faviconsData['apple-icon'] as $item) :?>
            <?= not_empty($item) ? '<link rel="apple-touch-icon" sizes="'.$item['title'].'" href="'.$item['url'].'">':'';?>
        <?php endforeach;?>
    <?php endif;?>
    <?php if(not_empty($faviconsData['android-icon'])):?>
        <?php foreach ($faviconsData['android-icon'] as $item) :?>
            <?= not_empty($item) ? '<link rel="icon" type="image/png" sizes="'.$item['title'].'" href="'.$item['url'].'">':'';?>
        <?php endforeach;?>
    <?php endif;?>
    <?php if(not_empty($faviconsData['favicon-icon'])):?>
        <?php foreach ($faviconsData['favicon-icon'] as $item) :?>
            <?= not_empty($item) ? '<link rel="icon" type="image/png" sizes="'.$item['title'].'" href="'.$item['url'].'">':'';?>
        <?php endforeach;?>
    <?php endif;?>
    <?php if(not_empty($faviconsData['ms-icon'])):?>
        <?php foreach ($faviconsData['ms-icon'] as $item) :?>
            <?= not_empty($item) ? '<link name="msapplication-TileImage" sizes="'.$item['title'].'" href="'.$item['url'].'">':'';?>
        <?php endforeach;?>
    <?php endif;?>
    <meta name="theme-color" content="#ffffff">
    <?php /* EndFavicon */ ?>

    <style>
        body {
            min-height: 100vh;
        }
        nav ul.open li ul.sub-menu {
            display: block;
        }
    </style>
    <title><?= wp_title()?></title>
</head>
<body id="body">
<header class="header py-u-sm-10 py-o-xs-15 bg-w" id="scroll-top">
    <div class="container">
        <div class="row mx-n5 ai-c jc-sb">
            <div class="col-auto px-5 order-u-md-1">
                <a href="<?= get_home_url();?>" class="header__logo d-f ai-c" title="<?= bloginfo('name');?>">
                    <?php if(!empty($logoData['logo-header'])):?>
                        <img alt="<?=not_empty($logoData['logo-header']['alt']) ? $logoData['logo-header']['alt']: bloginfo('name');?>"
                             title="<?=not_empty($logoData['logo-header']['title']) ? $logoData['logo-header']['title']: bloginfo('name');?>"
                             height="29" width="232"
                             data-src="<?=$logoData['logo-header']['url'];?>"
                             class="wa mh-100 lazyloaded"
                             src="<?=$logoData['logo-header']['url'];?>">
                        <noscript>
                            <img src="<?=$logoData['logo-header']['url'];?>"
                                 class="wa mh-100"
                                 title="<?=not_empty($logoData['logo-header']['title']) ? $logoData['logo-header']['title']: bloginfo('name');?>"
                                 alt="<?=not_empty($logoData['logo-header']['alt']) ? $logoData['logo-header']['alt']: bloginfo('name');?>"
                                 height="29" width="232" />
                        </noscript>
                    <?php else:?>
                        <?= bloginfo('name');?>
                    <?php endif;?>
                </a>
            </div>

            <div class="col-auto d-f px-5 order-u-md-3">
                <button type="button" class="header__btn header__btn--search br-c bg-s ps-r js-search-header" on="tap:body.toggleClass(class='sho')">
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 2C7.51088 2 5.60322 2.79018 4.1967 4.1967C2.79018 5.60322 2 7.51088 2 9.5C2 11.4891 2.79018 13.3968 4.1967 14.8033C5.60322 16.2098 7.51088 17 9.5 17C11.4891 17 13.3968 16.2098 14.8033 14.8033C16.2098 13.3968 17 11.4891 17 9.5C17 7.51088 16.2098 5.60322 14.8033 4.1967C13.3968 2.79018 11.4891 2 9.5 2ZM2.78249 2.78249C4.56408 1.00089 6.98044 0 9.5 0C12.0196 0 14.4359 1.00089 16.2175 2.78249C17.9991 4.56408 19 6.98044 19 9.5C19 11.6823 18.2491 13.7873 16.8904 15.4693L20.0013 18.5858C20.3914 18.9767 20.3909 19.6098 20 20V20C19.6091 20.3902 18.976 20.3896 18.5858 19.9987L15.4769 16.8843C13.7936 18.2469 11.6856 19 9.5 19C6.98044 19 4.56408 17.9991 2.78249 16.2175C1.00089 14.4359 0 12.0196 0 9.5C0 6.98044 1.00089 4.56408 2.78249 2.78249Z" fill="var(--primary-variant)"></path>
                    </svg>
                </button>

                <button type="button" class="header__btn header__btn--menu d-u-md-n br-c bg-s ps-r js-main-menu" on="tap:body.toggleClass(class='mmo')">
                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1C0 0.447715 0.447715 0 1 0H19C19.5523 0 20 0.447715 20 1C20 1.55228 19.5523 2 19 2H1C0.447715 2 0 1.55228 0 1ZM0 8C0 7.44772 0.447715 7 1 7H19C19.5523 7 20 7.44772 20 8C20 8.55229 19.5523 9 19 9H1C0.447715 9 0 8.55229 0 8ZM1 14C0.447715 14 0 14.4477 0 15C0 15.5523 0.447715 16 1 16H19C19.5523 16 20 15.5523 20 15C20 14.4477 19.5523 14 19 14H1Z" fill="var(--primary-variant)"></path>
                    </svg>
                </button>
            </div>

            <div class="col-u-md-auto px-u-md-5 order-u-md-2">
                <?php
                wp_nav_menu( [
                    'theme_location'  => 'header_menu',
                    'menu'            => '',
                    'container'       => 'nav',
                    'container_class' => 'menu-primary-navigation-container',
                    'container_id'    => '',
                    'menu_class'      => 'primary-nav d-u-md-f fw-b fs-u-md-14 fs-o-sm-16 ta-d-sm-c bg-d-sm-w of-d-sm-h',
                    'menu_id'         => 'menu-primary-navigation',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s open">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ] );?>
            </div>
        </div>
    </div>
</header>
<div class="sf of-h mx-a js-defer-html">
    <div class="sf__hf ps-r">
        <div class="container">
            <form action="<?= home_url('/')?>" method="get" class="sf__form row mx-0 bg-w br-6">
                <input name="s" autocomplete="off" placeholder="<?=$searchData['placeholder']?>"
                       class="col px-20 fs-16">
                <button type="submit">
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M9.90332 2C7.9142 2 6.00654 2.79018 4.60002 4.1967C3.1935 5.60322 2.40332 7.51088 2.40332 9.5C2.40332 11.4891 3.1935 13.3968 4.60002 14.8033C6.00654 16.2098 7.9142 17 9.90332 17C11.8924 17 13.8001 16.2098 15.2066 14.8033C16.6131 13.3968 17.4033 11.4891 17.4033 9.5C17.4033 7.51088 16.6131 5.60322 15.2066 4.1967C13.8001 2.79018 11.8924 2 9.90332 2ZM3.18581 2.78249C4.9674 1.00089 7.38376 0 9.90332 0C12.4229 0 14.8392 1.00089 16.6208 2.78249C18.4024 4.56408 19.4033 6.98044 19.4033 9.5C19.4033 11.6823 18.6524 13.7873 17.2937 15.4693L20.4046 18.5858C20.7948 18.9767 20.7942 19.6098 20.4033 20C20.0124 20.3902 19.3793 20.3896 18.9891 19.9987L15.8802 16.8843C14.1969 18.2469 12.0889 19 9.90332 19C7.38376 19 4.9674 17.9991 3.18581 16.2175C1.40421 14.4359 0.40332 12.0196 0.40332 9.5C0.40332 6.98044 1.40421 4.56408 3.18581 2.78249Z"
                              fill="#92959F">
                        </path>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</div>