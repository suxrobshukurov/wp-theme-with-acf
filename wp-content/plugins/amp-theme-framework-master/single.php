<?php
$blocksData = get_field('page-data');
$authorData = get_field('author', 'option');
$newData = get_field('new-data');
$sidebarData = get_field('sidebar-data');
amp_header();?>
<style>
    .cf__cnt{max-width:850px;width:90%}.cf .wpcf7 .ajax-loader{display:none;margin-top:10px;margin-left:auto;margin-right:auto}.cf .wpcf7 .submitting .ajax-loader{display:block}.cf .wpcf7-form-control-wrap{display:block;margin-bottom:20px}.cf .wpcf7-not-valid{background:#ffe5e5}.cf .wpcf7-not-valid-tip{position:absolute;left:0;right:0;top:100%;padding:5px;font-size:11px;text-align:left}
    .title__sub{max-width:690px}.c__arow:not(:last-child){margin-bottom:1px}.ch__box{border:2px solid rgba(255,255,255,.2)}.ch__thumb{min-height:176px}.ch__bb{background:rgba(255,255,255,.1)}.ch__icn{width:36px;height:36px}.ch__bf li{line-height:1.2;background:url(../images/icons/check-benefits.svg) no-repeat 0 0}.ch__tc{color:rgba(255,255,255,.6);font-size:11px}.ch__tc a:hover{color:#fff}.cb a{color:inherit}.cb__ag{line-height:1.8571428571}.cb__ag li{background:url(../images/icons/check-casino-boxes.svg) no-repeat 0 4px}.cb__ag li:not(:last-child){margin-bottom:7px}.cb__deag{line-height:1.8571428571}.cb__deag li{background:url(../images/icons/uncheck-casino-boxes.svg) no-repeat 0 8px}.cb__deag li:not(:last-child){margin-bottom:7px}.cb__row:not(:last-child){border-bottom:1px solid rgba(35,34,34,.1)}.cb__flag{width:20px;height:15px}span.cb__flag.non-image {width: auto;}.cb__flag img:not(.lazyload):not(.lazyloading){position:absolute;top:0;left:-9999px;right:-9999px;bottom:0;margin:auto;max-width:none;width:auto;height:100%}.cb__pay{width:39px;height:26px}.cb__pay a{display:block;width:inherit;height:inherit}.cb__pay img{width:auto;max-height:100%}.cb__ck{margin-bottom:5px;line-height:1.8571428571;background:url(../images/icons/check-casino-boxes.svg) no-repeat left 5px}.cb__uck{margin-bottom:5px;line-height:1.8571428571;background:url(../images/icons/uncheck-casino-boxes.svg) no-repeat 2px 9px}.cb__tc{font-size:10px;line-height:1.3}.cb__tc a{color:var(--primary-variant)}@media (min-width: 992px){.c__athumb{width:40px;height:40px}.ch__thumb{width:274px}.cb__scr{max-height:158px}}@media (max-width: 991.98px){.c__athumb{width:50px;height:50px}}@media (min-width: 1230px){.ch__box .btn--p{width:264px}}@media (max-width: 767.98px){.ch__rating{position:absolute;top:30px;right:45px;z-index:5}.ch__wb{font-size:24px}}@media (min-width: 768px){.ch__wb{font-size:28px}}
    .nh__md{max-width:300px}.nh__md__avatar{width:40px;height:40px}.na__box{box-shadow:0 8px 14px rgba(0,0,0,.15)}.na__box__thumb{height:150px}.na__box__tc{color:#b1beb8;font-size:11px}.na__box__tc a{color:inherit}.nn>span{position:relative;display:flex;align-items:center;height:60px;border-radius:6px;border:1px solid var(--light)}.nn>span:hover{box-shadow:0 2px 8px rgba(0,0,0,.15)}.nn>span a{color:var(--dark)}.nn>span a::after{content:"";position:absolute;top:0;right:0;bottom:0;left:0;z-index:1;pointer-events:auto;background-color:rgba(0,0,0,0)}.nn>span a:hover{color:var(--primary-variant)}.nn>span a:hover path{fill:var(--primary)}.nn>span svg{position:absolute;top:0;bottom:0;margin:auto}.nn>span.prev{padding-left:50px;padding-right:20px}.nn>span.prev svg{left:20px}.nn>span.next{margin-left:auto;padding-left:20px;padding-right:50px}.nn>span.next svg{right:20px}@media (min-width: 992px){.nn>span{width:45%;flex:0 0 45%}}@media (max-width: 991.98px){.nn>span{margin-bottom:20px}}@media (min-width: 992px)and (max-width: 1229.98px){.ns__thumb{width:60px}}

</style>

    <article>
        <header class="nh bg-pv tc-w pb-o-xs-20">
            <div class="breadcrumbs py-10 fs-11">
                <div class="container">
                    <div class="breadcrumbs__list d-f f-w">
                        <!-- Breadcrumb NavXT 6.6.0 -->
                        <span property="itemListElement" typeof="ListItem">
                        <a property="item" typeof="WebPage" href="<?= get_home_url();?>" class="home">
                            <span property="name"><?= bloginfo('name')?></span>
                        </a>
                        <meta property="position" content="1">
                    </span>
                        <span property="itemListElement" typeof="ListItem">
                        <span property="name" class="post post-news current-item"><?= the_title();?></span>
                        <meta property="url" content="<?= get_permalink();?>">
                        <meta property="position" content="2">
                    </span>
                    </div>
                </div>
            </div>
            <div class="container py-u-sm-20 py-d-xs-10">
                <div class="row-u-md">
                    <div class="col-u-md-6 mb-d-sm-20">
                        <h1 class="h2 tc-in mb-u-sm-30 mb-o-xs-15"><?= the_title();?></h1>
                        <div class="wp-editor mb-u-sm-30 mb-o-xs-15"><?= the_excerpt();?></div>

                        <div class="nh__md row mx-u-md-0 mx-d-sm-a br-6 py-10 bg-w">
                            <div class="col-6 d-f px-10">
                                <?php if(!empty($authorData['image']) && !empty($authorData['name'])) :?>
                                    <figure class="nh__md__avatar as-c br-c of-h">
                                        <img alt="<?=$authorData['name'];?>"
                                             height="78" width="78"
                                             data-src="<?=$authorData['image'];?>"
                                             class="br-c lazyloaded"
                                             src="<?=$authorData['image'];?>">
                                        <noscript>
                                            <img alt="<?=$authorData['name'];?>"
                                                 height="78"
                                                 width="78"
                                                 data-src="<?=$authorData['image'];?>"
                                                 class="br-c lazyload"
                                                 src="<?=$authorData['image'];?>"
                                            />
                                        </noscript>
                                    </figure>
                                <?php endif;?>
                                <?php if(!empty($authorData['name']) || !empty($authorData['job'])):?>
                                    <div class="col pr-0">
                                        <?= !empty($authorData['name']) ? '<p class="d-ib mb-5 bg-pv br-6 tc-w py-2 px-5 fs-12">'.$authorData['name'].'</p>':'';?>
                                        <?= !empty($authorData['job']) ? '<div class="fs-12 fw-n tc-d">'.$authorData['job'].'</div>':'';?>
                                    </div>
                                <?php endif;?>
                            </div>
                            <div class="col-6 d-f px-10 a">
                                <figure class="col-auto as-c px-0">
                                    <svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.1517 1.92801C18.1517 1.40038 17.724 0.972656 17.1963 0.972656C16.6687 0.972656 16.241 1.40038 16.241 1.92801V3.83887H7.64289V1.92801C7.64289 1.40038 7.21516 0.972656 6.68753 0.972656C6.15991 0.972656 5.73218 1.40038 5.73218 1.92801V3.83887H3.39683C1.5838 3.83887 0 5.24275 0 7.08708V9.5708V11.4817V21.4693C0 23.338 1.52996 24.8565 3.39683 24.8565H13.8523C15.1595 26.5968 17.2407 27.7224 19.5849 27.7224C23.5421 27.7224 26.75 24.5145 26.75 20.5573C26.75 18.2131 25.6243 16.1318 23.8839 14.8246V11.4817V9.5708V7.08708C23.8839 5.24275 22.3001 3.83887 20.4871 3.83887H18.1517V1.92801ZM19.5849 25.8117C18.1303 25.8117 16.8138 25.2207 15.8624 24.2657L15.1433 23.3221C15.092 23.2547 15.0423 23.186 14.9944 23.116C14.5714 22.3588 14.3304 21.4862 14.3304 20.5573C14.3304 17.6553 16.6829 15.3028 19.5849 15.3028C20.3849 15.3028 21.1431 15.4816 21.8218 15.8014C22.0067 15.9073 22.1838 16.0244 22.3524 16.1519L23.3989 16.943C24.2917 17.8849 24.8393 19.1571 24.8393 20.5573C24.8393 23.4592 22.4868 25.8117 19.5849 25.8117ZM15.4308 14.3477C16.5357 13.6333 17.8531 13.2185 19.2664 13.2185C20.2246 13.2185 21.1397 13.4072 21.9732 13.7518V11.4817H1.91071V21.4693C1.91071 22.2756 2.57808 22.9458 3.39683 22.9458H12.7402C12.3959 22.1167 12.2073 21.2066 12.2073 20.2534C12.2073 18.7693 12.6688 17.3929 13.4562 16.2584H13.375V14.3477H15.4308ZM5.73218 6.7048V5.74958H3.39683C2.52424 5.74958 1.91071 6.40927 1.91071 7.08708V9.5708H21.9732V7.08708C21.9732 6.40927 21.3597 5.74958 20.4871 5.74958H18.1517V6.7048C18.1517 7.23243 17.724 7.66016 17.1963 7.66016C16.6687 7.66016 16.241 7.23243 16.241 6.7048V5.74958H7.64289V6.7048C7.64289 7.23243 7.21516 7.66016 6.68753 7.66016C6.15991 7.66016 5.73218 7.23243 5.73218 6.7048ZM3.82153 16.2584H5.73225V14.3477H3.82153V16.2584ZM10.5089 16.2584H8.59814V14.3477H10.5089V16.2584ZM5.73225 21.0352H3.82153V19.1245H5.73225V21.0352ZM8.59814 21.0352H10.5089V19.1245H8.59814V21.0352ZM18.7489 23.2848L23.5732 18.874L22.2839 17.4639L18.7489 20.6959L16.8857 18.9924L15.5964 20.4026L18.7489 23.2848Z" fill="#A4A4A4"></path></svg>
                                </figure>
                                <div class="col pr-0">
                                    <p class="d-ib mb-5 br-6 tc-pv py-2 fs-12"></p>
                                    <div class="fs-12 fw-n tc-d"><?= get_the_date()?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-u-md-6">
                        <figure class="mb-15 ta-c">
                            <img width="960"
                                 height="480"
                                 alt="<?= the_title();?>"
                                 loading="lazy"
                                 data-srcset="<?=not_empty($newData['image']) ? $newData['image'] : ALFA_IMG_DEFAULT;?>"
                                 class="br-6 wp-post-image lazyloaded"
                                 src="<?=not_empty($newData['image']) ? $newData['image'] : ALFA_IMG_DEFAULT;?>"
                            />
                            <noscript>
                                <img width="960"
                                     height="480"
                                     src="<?=not_empty($newData['image']) ? $newData['image'] : ALFA_IMG_DEFAULT;?>"
                                     class="br-6 wp-post-image"
                                     alt="<?= the_title();?>"
                                     loading="lazy"
                                />
                            </noscript>
                        </figure>
                    </div>
                </div>
            </div>
        </header>
        <div class="container py-u-sm-60 py-o-xs-30">
            <div class="row-u-md" >
                <div class="nc col-u-md wp-editor">
                    <?= amp_content();?>
                    <?php /* Todo кнопка предедущая запись */?>
                    <?php if(!empty(get_previous_post_link("%link", "%title", 1))):?>
                        <div class="nn d-u-md-f mt-20 fs-14 fw-sb">
                        <span class="prev">
                            <?= get_previous_post_link(
                                '%link',
                                '<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.55095 8.20705C0.160426 7.81653 0.160426 7.18336 0.55095 6.79284L6.91491 0.42888C7.30544 0.0383552 7.9386 0.0383552 8.32912 0.42888C8.71965 0.819404 8.71965 1.45257 8.32912 1.84309L3.67227 6.49995H13.7421C14.2944 6.49995 14.7421 6.94766 14.7421 7.49995C14.7421 8.05223 14.2944 8.49995 13.7421 8.49995H3.67227L8.32912 13.1568C8.71965 13.5473 8.71965 14.1805 8.32912 14.571C7.9386 14.9615 7.30544 14.9615 6.91491 14.571L0.55095 8.20705Z" fill="#929F99"></path>
                                        </svg> %title',
                                1
                            );?>
                        </span>
                        </div>
                    <?php endif;?>
                </div>
                <?php if(!empty($sidebarData)):?>
                    <div class="col-u-md-3">

                        <?php
                        foreach ($sidebarData as $block) :
                            get_template_part(
                                '/parts/sidebar/' .$block['acf_fc_layout'],
                                null,
                                ['block' => $block]
                            );
                        endforeach;
                        ?>
                    </div>
                <?php endif;?>
            </div>
        </div>

        <?php
        if(!empty($blocksData)) :
            foreach ($blocksData as $block) :
                get_template_part(
                    '/parts/' .$block['acf_fc_layout'],
                    null,
                    ['block' => $block]
                );
            endforeach;
        endif;
        ?>
    </article>
<?php amp_footer();?>