<?php
/*
    Template Name: Слот
    Template Post Type: post, page
*/
$slotData = get_field('slot-data');
$textData = get_field('slot-option-text', 'option');
$textDataCasino = get_field('casino-option-text', 'option');
$blocksData = get_field('page-data');
amp_header();?>
<style>
    .sh__fi img{max-width:none;width:auto;min-height:100%}.sh__cb{background:rgba(35,34,34,.1)}.sh__cc__badge{position:absolute;top:9px;left:-44px;z-index:3;border-top:1px solid #fff;border-bottom:1px solid #fff;transform:rotate(-45deg)}.sh__cc__thumb__link{position:absolute;top:0;right:0;bottom:0;left:0}.sh__cc__tc{color:#92959f;font-size:10px}.sh__cc__tc a{color:inherit}.sh__play{position:absolute;top:0;right:0;bottom:0;left:0;z-index:2;background:rgba(35,34,34,.5)}.sh__play:hover{color:var(--primary)}.sh__play__circle{position:relative}.sh__play__circle::before{content:"";position:absolute;top:-10px;right:-10px;bottom:-10px;left:-10px;border-radius:50%;border:2px solid rgba(255,255,255,.5)}.sh__iframe{height:0;padding-bottom:56.25%}.sh__qf a{color:inherit}@media (min-width: 1230px){.sh__fi{height:428px}}@media (min-width: 992px)and (max-width: 1229.98px){.sh__fi{height:395px}}@media (max-width: 767.98px){.sh__fi{height:250px}.sh__cc__thumb{height:91px}.sh__cc__rating{margin-top:-10px;box-shadow:0 0 0 2px #fff}.sh__play__circle{width:70px;height:70px}.sh__play__circle svg{width:25px}}@media (min-width: 992px){.sh__cc__thumb{padding-bottom:73.3333333333%}}@media (min-width: 768px)and (max-width: 991.98px){.sh__cc__thumb{padding-bottom:50%}}@media (min-width: 768px){.sh__cc__rating{position:absolute;top:10px;right:10px;z-index:3}.sh__play__circle{width:100px;height:100px}}
    .title__sub{max-width:690px}.c__arow:not(:last-child){margin-bottom:1px}.ch__box{border:2px solid rgba(255,255,255,.2)}.ch__thumb{min-height:176px}.ch__bb{background:rgba(255,255,255,.1)}.ch__icn{width:36px;height:36px}.ch__bf li{line-height:1.2;background:url(../images/icons/check-benefits.svg) no-repeat 0 0}.ch__tc{color:rgba(255,255,255,.6);font-size:11px}.ch__tc a:hover{color:#fff}.cb a{color:inherit}.cb__ag{line-height:1.8571428571}.cb__ag li{background:url(../images/icons/check-casino-boxes.svg) no-repeat 0 4px}.cb__ag li:not(:last-child){margin-bottom:7px}.cb__deag{line-height:1.8571428571}.cb__deag li{background:url(../images/icons/uncheck-casino-boxes.svg) no-repeat 0 8px}.cb__deag li:not(:last-child){margin-bottom:7px}.cb__row:not(:last-child){border-bottom:1px solid rgba(35,34,34,.1)}.cb__flag{width:20px;height:15px}span.cb__flag.non-image {width: auto;}.cb__flag img:not(.lazyload):not(.lazyloading){position:absolute;top:0;left:-9999px;right:-9999px;bottom:0;margin:auto;max-width:none;width:auto;height:100%}.cb__pay{width:39px;height:26px}.cb__pay a{display:block;width:inherit;height:inherit}.cb__pay img{width:auto;max-height:100%}.cb__ck{margin-bottom:5px;line-height:1.8571428571;background:url(../images/icons/check-casino-boxes.svg) no-repeat left 5px}.cb__uck{margin-bottom:5px;line-height:1.8571428571;background:url(../images/icons/uncheck-casino-boxes.svg) no-repeat 2px 9px}.cb__tc{font-size:10px;line-height:1.3}.cb__tc a{color:var(--primary-variant)}@media (min-width: 992px){.c__athumb{width:40px;height:40px}.ch__thumb{width:274px}.cb__scr{max-height:158px}}@media (max-width: 991.98px){.c__athumb{width:50px;height:50px}}@media (min-width: 1230px){.ch__box .btn--p{width:264px}}@media (max-width: 767.98px){.ch__rating{position:absolute;top:30px;right:45px;z-index:5}.ch__wb{font-size:24px}}@media (min-width: 768px){.ch__wb{font-size:28px}}
</style>
<article>
    <div class="pb-u-lg-40 pb-10 bg-pv tc-w">
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
        <div class="container">
            <div class="row mb-o-sm-30 mb-o-xs-20">
                <div class="col-u-md-9">
                    <h1 class="h2 mb-u-sm-30 mb-o-xs-20 tc-in"><?= the_title();?></h1>
                    <?php if(not_empty($slotData['image']) || not_empty($slotData['iframe-src'])) :?>
                        <figure class="sh__fi foc mb-u-sm-30 mb-o-xs-20 of-h br-10 ps-r">
                            <img width="960"
                                 height="428"
                                 alt="<?= not_empty($slotData['image']['alt']) ? $slotData['image']['alt'] : $slotData['name'] ;?>"
                                 title="<?= not_empty($slotData['image']['title']) ? $slotData['image']['title'] : $slotData['name'] ;?>"
                                 loading="lazy"
                                 data-src="<?= not_empty($slotData['image']['url']) ? $slotData['image']['url'] : ALFA_IMG_DEFAULT;?>"
                                 class="attachment-CF_single_slot size-CF_single_slot wp-post-image lazyloaded"
                                 src="<?= not_empty($slotData['image']['url']) ? $slotData['image']['url'] : ALFA_IMG_DEFAULT;?>">
                            <noscript>
                                <img width="960"
                                     height="428"
                                     src="<?= not_empty($slotData['image']['url']) ? $slotData['image']['url'] : ALFA_IMG_DEFAULT;?>">
                                     class="attachment-CF_single_slot size-CF_single_slot wp-post-image"
                                     alt="<?= not_empty($slotData['image']['alt']) ? $slotData['image']['alt'] : $slotData['name'] ;?>"
                                     title="<?= not_empty($slotData['image']['title']) ? $slotData['image']['title'] : $slotData['name'] ;?>"
                                     loading="lazy" />
                            </noscript>
                            <?php if(not_empty($slotData['iframe-src']) && (not_empty($slotData['play-btn']) || not_empty($textData['play']))):?>
                                <button type="button" class="sh__play tt-u w-100 fw-b fs-u-sm-20 fs-o-xs-16 js-demo-play">
                                    <span class="sh__play__circle d-f ai-c jc-c mx-a mb-25 br-c bg-w">
                                        <svg width="33" height="40" viewBox="0 0 33 40" class="ml-5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M33 20L0 39.0526L0 0.947441L33 20Z" fill="var(--primary)"></path>
                                        </svg>
                                    </span>
                                    <?= not_empty($slotData['play-btn']) ? $slotData['play-btn'] : $textData['play'];?>
                                </button>
                            <?php endif;?>
                        </figure>
                        <?php if(not_empty($slotData['iframe-src'])) :?>
                            <div class="sh__iframe d-n ps-r mb-u-sm-30 mb-o-xs-20 br-10 of-h">
                                <iframe class="ps-a w-100 h-100"
                                        frameborder="0"
                                        src=""
                                        data-src="<?=$slotData['iframe-src']?>"
                                ></iframe>
                            </div>
                        <?php endif;?>
                    <?php endif;?>
                </div>
                <?php if(not_empty($slotData['casino'][0])) :
                    $item = get_field('casino-data', $slotData['casino'][0]);
                    ?>
                    <div class="col-u-md-3">
                        <div class="sh__cb br-6 bg-tr-10">
                            <h2 class="ta-c py-15 px-d-md-15 px-u-lg-40 tc-w fs-u-sm-20 fs-o-xs-16"><span class="tc-p"><br><?= get_the_title($slotData['casino'][0])?></span></h2>
                            <div class="sh__cc br-10 of-h h-100 ps-r">
                                <div class="br-u-sm-10 of-h bg-w h-100">
                                    <div class="row mx-n10 p-o-xs-10 f-u-sm-c h-100">
                                        <div class="col-o-xs-5 px-10 mb-o-xs-10">
                                            <figure class="sh__cc__thumb ps-r br-o-xs-6 of-h" style="background-color: <?=$item['bg']?>">
                                                <a href="<?= get_permalink($slotData['casino'][0])?>" class="sh__cc__thumb__link foc p-20">
                                                    <img width="180"
                                                         height="180"
                                                         alt="<?= not_empty($item['logo']['alt']) ? $item['logo']['alt'] : $item['name'];?>"
                                                         title="<?= not_empty($item['logo']['title']) ? $item['logo']['title'] : $item['name'];?>"
                                                         loading="lazy"
                                                         data-src="<?= not_empty($item['logo']['url']) ? $item['logo']['url'] : ALFA_IMG_DEFAULT;?>"
                                                         class="attachment-CF_casino_card size-CF_casino_card wp-post-image lazyloaded"
                                                         src="<?= not_empty($item['logo']['url']) ? $item['logo']['url'] : ALFA_IMG_DEFAULT;?>"
                                                    >
                                                    <noscript>
                                                        <img width="180"
                                                             height="180"
                                                             alt="<?= not_empty($item['logo']['alt']) ? $item['logo']['alt'] : $item['name'];?>"
                                                             title="<?= not_empty($item['logo']['title']) ? $item['logo']['title'] : $item['name'];?>"
                                                             loading="lazy"
                                                             src="<?= not_empty($item['logo']['url']) ? $item['logo']['url'] : ALFA_IMG_DEFAULT;?>"
                                                            />
                                                    </noscript>
                                                </a>
                                            </figure>
                                            <?php if(not_empty($item['rating'])):?>
                                                <div class="mt-o-xs-n5 fw-n fs-14 ta-o-xs-c ps-o-xs-r">
                                                    <div class="sh__cc__rating d-if ai-c mb-o-xs-15 py-8 px-10 bg-b br-10 tc-w">
                                                        <svg class="mr-5 mt-n2" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 0L7.85714 3.95L12 4.6L9 7.65L9.71429 12L6 9.95L2.28571 12L3 7.65L0 4.6L4.14286 3.95L6 0Z" fill="var(--primary)"></path></svg>
                                                        <?=$item['rating'];?>
                                                    </div>
                                                    <a href="<?= get_permalink($slotData['casino'][0])?>" class="tc-o-xs-d td-o-xs-u d-o-xs-b d-u-sm-n"><?= $textDataCasino['read-more']?></a>
                                                </div>
                                            <?php endif;?>
                                        </div>
                                        <div class="col-o-xs-7 col-u-sm px-10 mb-o-xs-10">
                                            <div class="d-f f-c h-100 pb-u-sm-25 px-u-lg-25 px-u-sm-15 ta-u-sm-c fw-n tc-b">
                                                <div class="my-o-xs-a py-o-xs-10 mt-u-sm-n20 ps-r">
                                                    <?php if(not_empty($item['welcome-bonus-title']) || not_empty($textDataCasino['welcome'])):?>
                                                        <p class="d-u-sm-ib mb-10 px-u-sm-30 py-u-sm-15 fs-u-sm-12 fs-o-xs-14 fw-n tt-u-sm-u bg-u-sm-w br-u-sm-10">
                                                            <?= not_empty($item['welcome-bonus-title']) ? $item['welcome-bonus-title'] : $textDataCasino['welcome']?>
                                                        </p>
                                                    <?php endif;?>
                                                    <?php if(not_empty($item['welcome-bonus'])):?>
                                                        <p class="mb-u-sm-15 tc-pv fw-bl fs-u-sm-28 fs-o-xs-18"><?= $item['welcome-bonus'];?></p>
                                                    <?php endif;?>
                                                </div>
                                                <?php if(not_empty($item['link'])):?>
                                                    <button on="tap:AMP.navigateTo(url='<?= $item['link'];?>', target='_blank')"
                                                        data-href="<?= $item['link'];?>"
                                                        formtarget="_blank"
                                                        type="submit"
                                                        rel="nofollow"
                                                        target="_blank"
                                                        class="btn mt-u-sm-a mt-o-xs-20 mb-u-sm-10 w-100 tt-u fw-bl br-p tc-w btn--p"
                                                        title="<?= not_empty($item['link-text']) ? $item['link-text'] : $textDataCasino['reg'];?>"
                                                    >
                                                        <?= not_empty($item['link-text']) ? $item['link-text'] : $textDataCasino['reg'];?>
                                                    </button>
                                                <?php endif;?>
                                                <a href="<?= get_permalink($slotData['casino'][0])?>" class="tc-o-xs-d td-o-xs-u d-o-xs-n" ><?= $textDataCasino['read-more']?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif;?>
            </div>

            <?= not_empty($slotData['fact-title']) ? '<h2 class="mb-20 tc-in">' . $slotData['fact-title'] . '</h2>':'';?>

            <div class="row-u-sm fs-14 sh__qf">
                <?php if(not_empty($slotData['softwares'][0]['value-text']) || not_empty($slotData['softwares'][0]['value-link'])):?>
                    <div class="col-u-lg-3 col-o-md-4 col-o-sm-6 mb-10">
                        <div class="row ai-c mx-0 py-15 px-10 br-6 bg-tr-10">
                            <div class="col-auto px-5 fs-0">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2 0H16C17.11 0 18 0.9 18 2V16C18 17.1 17.11 18 16 18H2C0.89 18 0 17.1 0 16V2C0 0.9 0.89 0 2 0ZM2 2V16H16V2H2ZM5.06726 12.3667L4.03874 10.6417C3.97017 10.5333 3.99588 10.4 4.09017 10.3167L5.17868 9.49167L5.17634 9.46894C5.16001 9.31056 5.1444 9.15908 5.1444 9C5.1444 8.83333 5.16154 8.675 5.18725 8.50833L4.09874 7.68333C4.00446 7.6 3.97017 7.46667 4.03874 7.35833L5.06726 5.63333C5.13582 5.525 5.26439 5.48333 5.38438 5.525L6.66146 6.025C6.91859 5.825 7.21857 5.66667 7.52713 5.54167L7.71569 4.21667C7.7414 4.09167 7.84426 4 7.97282 4H10.0299C10.1584 4 10.2613 4.09167 10.287 4.20833L10.4755 5.53333C10.7927 5.65833 11.0755 5.825 11.3412 6.025L12.6183 5.525C12.7383 5.48333 12.8668 5.525 12.9354 5.63333L13.9639 7.35833C14.0325 7.46667 13.9982 7.60833 13.9039 7.68333L12.8154 8.50833L12.8178 8.53103C12.8341 8.68942 12.8497 8.84092 12.8497 9C12.8497 9.15833 12.8411 9.325 12.8154 9.48333L13.9039 10.3083C13.9982 10.3917 14.0325 10.525 13.9639 10.6333L12.9354 12.3583C12.8668 12.4667 12.7383 12.5083 12.6183 12.4667L11.3412 11.9667C11.0755 12.1667 10.7841 12.3333 10.4755 12.4583L10.287 13.7833C10.2613 13.9083 10.1584 14 10.0299 14H7.97282C7.84426 14 7.7414 13.9083 7.71569 13.7917L7.52713 12.4667C7.21 12.3417 6.92716 12.175 6.66146 11.975L5.38438 12.475C5.26439 12.5167 5.13582 12.475 5.06726 12.3667ZM11 9C11 10.1046 10.1046 11 9 11C7.89543 11 7 10.1046 7 9C7 7.89543 7.89543 7 9 7C10.1046 7 11 7.89543 11 9Z" fill="var(--primary)"></path></svg>
                            </div>
                            <div class="col px-5 fw-m"><?= not_empty($slotData['softwares-title']) ? $slotData['softwares-title'] : $textData['softwares'];?></div>
                            <div class="col-auto px-5 mt-10" style="line-height: 1.2">
                                <?php foreach ($slotData['softwares'] as $key => $item) {
                                    $seporat =  $key < count($slotData['softwares']) - 1 ? ", ": '';
                                    if($item['value-type'] === 'link') {
                                        echo '<a class="td-u" target="_blank" href="'.$item['value-link'].'">'.$item['value-link-text'].'</a>'. $seporat;
                                    } elseif ($item['value-type'] === 'text') {
                                        echo $item['value-text']. $seporat;
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                <?php endif;?>
                <?php if(not_empty($slotData['platform'])) :?>
                    <div class="col-u-lg-3 col-o-md-4 col-o-sm-6 mb-10">
                        <div class="row ai-c mx-0 py-15 px-10 br-6 bg-u-sm-tr-10">
                            <div class="col-auto px-5 fs-0">
                                <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18 0H5C3.897 0 3 0.897 3 2V4H2C0.897 4 0 4.897 0 6V16C0 17.103 0.897 18 2 18H8C9.103 18 10 17.103 10 16H18C19.103 16 20 15.103 20 14V2C20 0.897 19.103 0 18 0ZM7.997 16H2V6H8L7.997 16ZM17.997 14H10V6C10 4.897 9.103 4 8 4H5V2H18L17.997 14Z" fill="var(--primary)"></path></svg>
                            </div>
                            <div class="col px-5 fw-m"><?=not_empty($slotData['platform-title']) ? $slotData['platform-title'] : $textData['platform']?></div>
                            <div class="col-auto px-5 fw-n"><?= $slotData['platform'] ;?></div>
                        </div>
                    </div>
                <?php endif;?>
                <?php if(not_empty($slotData['free'])):?>
                    <div class="col-u-lg-3 col-o-md-4 col-o-sm-6 mb-10">
                        <div class="row ai-c mx-0 py-15 px-10 br-6 bg-u-md-tr-10 bg-o-xs-tr-10">
                            <div class="col-auto px-5 fs-0">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.94 15.7839H16.1955C16.695 15.7839 17.1 16.1889 17.1 16.6884C17.1 17.188 16.695 17.593 16.1955 17.593H11.7V13.0658C11.7 12.5688 12.1029 12.1658 12.6 12.1658C13.0971 12.1658 13.5 12.5688 13.5 13.0658V14.6352C15.147 13.3055 16.2 11.2794 16.2 9C16.2 5.59994 13.8509 2.73996 10.6982 1.97351C10.2477 1.86397 9.9 1.47916 9.9 1.01547C9.9 0.471687 10.3715 0.0428095 10.903 0.15768C14.9573 1.03391 18 4.65697 18 9C18 11.7045 16.812 14.1286 14.94 15.7839ZM1.8 9C1.8 6.7206 2.853 4.68543 4.5 3.36482V4.93417C4.5 5.43123 4.90294 5.83417 5.4 5.83417C5.89706 5.83417 6.3 5.43123 6.3 4.93417V0.407035H1.80452C1.30497 0.407035 0.9 0.812004 0.9 1.31156C0.9 1.81111 1.30497 2.21608 1.80452 2.21608H3.06C1.188 3.87136 0 6.29548 0 9C0 13.343 3.04265 16.9661 7.09697 17.8423C7.62848 17.9572 8.1 17.5283 8.1 16.9845C8.1 16.5208 7.75234 16.136 7.30177 16.0265C4.14915 15.26 1.8 12.4001 1.8 9ZM13.4537 6.12229C13.102 5.76886 12.53 5.76886 12.1783 6.12229L7.722 10.601L5.81268 8.68209C5.46102 8.32866 4.88898 8.32866 4.53732 8.68209C4.18814 9.03302 4.18814 9.60014 4.53732 9.95107L7.722 13.1518L13.4537 7.39128C13.8029 7.04034 13.8029 6.47323 13.4537 6.12229Z" fill="var(--primary)"></path></svg>
                            </div>
                            <div class="col px-5 fw-m"><?= not_empty($slotData['free-title']) ? $slotData['free-title'] : $textData['free'];?></div>
                            <div class="col-auto px-5 fw-n"><?= $slotData['free'];?></div>
                        </div>
                    </div>
                <?php endif;?>
                <?php if(not_empty($slotData['reels'])):?>
                    <div class="col-u-lg-3 col-o-md-4 col-o-sm-6 mb-10">
                        <div class="row ai-c mx-0 py-15 px-10 br-6 bg-u-lg-tr-10">
                            <div class="col-auto px-5 fs-0">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H16V2H0V0ZM0 16H16V18H0V16ZM4 4H2V14H4V4ZM7 4H9V14H7V4ZM14 4H12V14H14V4Z" fill="var(--primary)"></path></svg>
                            </div>
                            <div class="col px-5 fw-m"><?= not_empty($slotData['reels-title']) ? $slotData['reels-title'] : $textData['reels'];?></div>
                            <div class="col-auto px-5 fw-n"><?= $slotData['reels']?></div>
                        </div>
                    </div>
                <?php endif;?>
                <?php if(not_empty($slotData['volatility'])) :?>
                    <div class="col-u-lg-3 col-o-md-4 col-o-sm-6 mb-10">
                        <div class="row ai-c mx-0 py-15 px-10 br-6 bg-d-sm-tr-10 bg-tr-10">
                            <div class="col-auto px-5 fs-0">
                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.1499 6.42012L18.3799 4.57012L18.3899 4.56012C19.3926 6.10644 19.9484 7.89976 19.996 9.74207C20.0437 11.5844 19.5813 13.404 18.6599 15.0001C18.4837 15.3053 18.23 15.5586 17.9244 15.7342C17.6189 15.9098 17.2723 16.0015 16.9199 16.0001H3.06993C2.7209 15.998 2.3785 15.9046 2.07676 15.7292C1.77502 15.5537 1.52444 15.3024 1.34993 15.0001C0.239679 13.0575 -0.186999 10.7987 0.138146 8.58494C0.46329 6.37119 1.52147 4.33045 3.14342 2.78913C4.76537 1.24782 6.85738 0.294989 9.08482 0.0830575C11.3123 -0.128874 13.5464 0.412337 15.4299 1.62012L13.5799 2.85012C12.0419 2.08076 10.2969 1.82747 8.60367 2.12782C6.91039 2.42816 5.35898 3.26615 4.17941 4.51755C2.99984 5.76895 2.25491 7.36714 2.05507 9.07519C1.85522 10.7832 2.2111 12.5102 3.06993 14.0001H16.9299C17.5907 12.8534 17.9567 11.5607 17.9951 10.2378C18.0335 8.91495 17.7431 7.6032 17.1499 6.42012ZM9.23911 11.844C8.99632 11.7434 8.77574 11.5959 8.58999 11.4099C8.40404 11.2242 8.25652 11.0036 8.15587 10.7608C8.05522 10.518 8.00342 10.2578 8.00342 9.99492C8.00342 9.73209 8.05522 9.47184 8.15587 9.22904C8.25652 8.98625 8.40404 8.76567 8.58999 8.57992L17.08 2.91992L11.42 11.4099C11.2342 11.5959 11.0137 11.7434 10.7709 11.844C10.5281 11.9447 10.2678 11.9965 10.005 11.9965C9.74216 11.9965 9.48191 11.9447 9.23911 11.844Z" fill="var(--primary)"></path></svg>
                            </div>
                            <div class="col px-5 fw-m"><?= not_empty($slotData['volatility-title']) ? $slotData['volatility-title'] : $textData['volatility']?></div>
                            <div class="col-auto px-5 fw-n"><?= $slotData['volatility'];?></div>
                        </div>
                    </div>
                <?php endif;?>
                <?php if(not_empty($slotData['released'])) :?>
                    <div class="col-u-lg-3 col-o-md-4 col-o-sm-6 mb-10">
                        <div class="row ai-c mx-0 py-15 px-10 br-6 bg-o-sm-tr-10 bg-tr-10">
                            <div class="col-auto px-5 fs-0">
                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16 2H15V0H13V2H5V0H3V2H2C0.89 2 0.00999999 2.9 0.00999999 4L0 18C0 19.1 0.89 20 2 20H16C17.1 20 18 19.1 18 18V4C18 2.9 17.1 2 16 2ZM16 18H2V8H16V18ZM16 6H2V4H16V6ZM9 13C9 11.8954 9.89543 11 11 11H12C13.1046 11 14 11.8954 14 13V14C14 15.1046 13.1046 16 12 16H11C9.89543 16 9 15.1046 9 14V13Z" fill="var(--primary)"></path></svg>
                            </div>
                            <div class="col px-5 fw-m"><?= not_empty($slotData['released-title']) ? $slotData['released-title']: $textData['released'];?></div>
                            <div class="col-auto px-5 fw-n"><?= $slotData['released'];?></div>
                        </div>
                    </div>
                <?php endif;?>
                <?php if(not_empty($slotData['wild'])) :?>
                    <div class="col-u-lg-3 col-o-md-4 col-o-sm-6 mb-10">
                        <div class="row ai-c mx-0 py-15 px-10 br-6 bg-o-md-tr-10 bg-o-xs-tr-10 bg-tr-10">
                            <div class="col-auto px-5 fs-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.938" height="17.906" viewBox="0 0 16.938 17.906"><path d="M12.431,10.84v-0.3A3.559,3.559,0,0,0,11.3,7.954,3.789,3.789,0,0,0,8.631,6.86,4.494,4.494,0,0,0,5.755,7.954a3.889,3.889,0,0,0-1.232,2.687v0.3a3.878,3.878,0,0,0-1.849,3.383A3.511,3.511,0,0,0,3.8,16.81,4.183,4.183,0,0,0,6.474,17.9H6.68a4.137,4.137,0,0,0,1.849-.4,3.46,3.46,0,0,0,1.951.4,3.734,3.734,0,0,0,2.568-1.094,3.512,3.512,0,0,0,1.13-2.488A3.548,3.548,0,0,0,12.431,10.84Zm-0.719,4.577a2.171,2.171,0,0,1-1.232.5,3.081,3.081,0,0,1-.924-0.2,1.734,1.734,0,0,0-1.027-.2,3.752,3.752,0,0,0-1.027.2,1.279,1.279,0,0,1-.924.2,1.728,1.728,0,0,1-1.232-.5,1.623,1.623,0,0,1-.514-1.194,1.791,1.791,0,0,1,.822-1.592A2.246,2.246,0,0,0,6.68,10.74v-0.1a1.859,1.859,0,0,1,.514-1.293,1.731,1.731,0,0,1,1.335-.5,1.728,1.728,0,0,1,1.232.5,1.807,1.807,0,0,1,.514,1.194h0v0.2A2.032,2.032,0,0,0,11.3,12.631a1.6,1.6,0,0,1,.822,1.592A1.257,1.257,0,0,1,11.712,15.417ZM4.009,6.86a4.163,4.163,0,0,0-.822-1.99c-0.411-.6-0.719-1.095-0.719-1.095a0.568,0.568,0,0,0-.514-0.3,0.539,0.539,0,0,0-.411.2A5.7,5.7,0,0,0,.826,4.87,4.163,4.163,0,0,0,0,6.86,1.921,1.921,0,0,0,1.955,8.75,2.012,2.012,0,0,0,4.009,6.86ZM16.128,4.87a6.965,6.965,0,0,0-.719-1.095A0.789,0.789,0,0,0,15,3.576a0.539,0.539,0,0,0-.411.2,5.7,5.7,0,0,0-.719,1.194,4.163,4.163,0,0,0-.822,1.99A1.921,1.921,0,0,0,15,8.85,1.989,1.989,0,0,0,16.95,6.959,4.036,4.036,0,0,0,16.128,4.87Zm-10.168.4A1.92,1.92,0,0,0,7.912,3.377a4.163,4.163,0,0,0-.822-1.99A4.4,4.4,0,0,0,6.372.193a0.524,0.524,0,0,0-.822,0,5.7,5.7,0,0,0-.719,1.194,4.163,4.163,0,0,0-.822,1.99A1.92,1.92,0,0,0,5.961,5.268Zm5.032,0a1.92,1.92,0,0,0,1.951-1.891,4.162,4.162,0,0,0-.822-1.99A6.015,6.015,0,0,1,11.4.193a0.524,0.524,0,0,0-.822,0,5.7,5.7,0,0,0-.719,1.194,4.163,4.163,0,0,0-.822,1.99A1.92,1.92,0,0,0,10.993,5.268Z" fill="var(--primary)"></path></svg>
                            </div>
                            <div class="col px-5 fw-m"><?= not_empty($slotData['wild-text']) ? $slotData['wild-text'] : $textData['wild'];?></div>
                            <div class="col-auto px-5 fw-n"><?= $slotData['wild'];?></div>
                        </div>
                    </div>
                <?php endif;?>
                <?php if(not_empty($slotData['rols'])):?>
                    <div class="col-u-lg-3 col-o-md-4 col-o-sm-6 mb-10">
                        <div class="row ai-c mx-0 py-15 px-10 br-6 bg-o-md-tr-10 bg-tr-10">
                            <div class="col-auto px-5 fs-0">
                                <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M18 0H0V2H18V0ZM18 15H0V17H18V15ZM0 10H18V12H0V10ZM18 5H0V7H18V5Z" fill="var(--primary)"></path></svg>
                            </div>
                            <div class="col px-5 fw-m"><?= not_empty($slotData['rols-title'])? $slotData['rols-title'] : $textData['rols']?></div>
                            <div class="col-auto px-5 fw-n"><?= $slotData['rols'];?></div>
                        </div>
                    </div>
                <?php endif;?>
                <?php if(not_empty($slotData['rtp'])) :?>
                    <div class="col-u-lg-3 col-o-md-4 col-o-sm-6 mb-10">
                        <div class="row ai-c mx-0 py-15 px-10 br-6 bg-tr-10">
                            <div class="col-auto px-5 fs-0">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 0C4.032 0 0 4.032 0 9C0 13.968 4.032 18 9 18H16.2C17.19 18 18 17.19 18 16.2V9C18 4.032 13.968 0 9 0ZM9 16.2C6.399 16.2 4.113 14.814 2.853 12.744L5.508 10.089L8.469 12.6L12.6 8.478V9C12.6 9.49706 13.0029 9.9 13.5 9.9C13.9971 9.9 14.4 9.49706 14.4 9V5.4H10.8C10.3029 5.4 9.9 5.80294 9.9 6.3C9.9 6.79706 10.3029 7.2 10.8 7.2H11.322L8.37 10.152L5.4 7.65L2.079 10.98C1.899 10.35 1.8 9.684 1.8 9C1.8 5.031 5.031 1.8 9 1.8C12.969 1.8 16.2 5.031 16.2 9C16.2 12.969 12.969 16.2 9 16.2ZM15.75 16.65C15.255 16.65 14.85 16.245 14.85 15.75C14.85 15.255 15.255 14.85 15.75 14.85C16.245 14.85 16.65 15.255 16.65 15.75C16.65 16.245 16.245 16.65 15.75 16.65Z" fill="var(--primary)"></path></svg>
                            </div>
                            <div class="col px-5 fw-m"><?= not_empty($slotData['rtp-title']) ? $slotData['rtp-title'] : $textData['rtp'];?></div>
                            <div class="col-auto px-5 fw-n"><?= $slotData['rtp'];?></div>
                        </div>
                    </div>
                <?php endif;?>
                <?php if(not_empty($slotData['theme'])):?>
                    <div class="col-u-lg-3 col-o-md-4 col-o-sm-6 mb-10">
                        <div class="row ai-c mx-0 py-15 px-10 br-6 bg-u-lg-tr-10 bg-o-sm-tr-10">
                            <div class="col-auto px-5 fs-0">
                                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.1053 0H1.89474C0.852632 0 0 0.8 0 1.77778V14.2222C0 15.2 0.852632 16 1.89474 16H16.1053C17.1474 16 18 15.2 18 14.2222V1.77778C18 0.8 17.1474 0 16.1053 0ZM16.1053 1.77778V4.44444H1.89474V1.77778H16.1053ZM11.3684 14.2222H6.63158V6.22222H11.3684V14.2222ZM1.89474 6.22222H4.73684V14.2222H1.89474V6.22222ZM13.2632 14.2222V6.22222H16.1053V14.2222H13.2632Z" fill="var(--primary)"></path></svg>
                            </div>
                            <div class="col px-5 fw-m"><?= not_empty($slotData['theme-title']) ? $slotData['theme-title'] : $textData['theme'];?></div>
                            <div class="col-auto px-5 fw-n"><?= $slotData['theme'];?></div>
                        </div>
                    </div>
                <?php endif;?>
                <?php if(not_empty($slotData['autoplay'])):?>
                    <div class="col-u-lg-3 col-o-md-4 col-o-sm-6 mb-10">
                        <div class="row ai-c mx-0 py-15 px-10 br-6 bg-u-lg-tr-10 bg-o-xs-tr-10">
                            <div class="col-auto px-5 fs-0">
                                <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78103 7L7.23558 7L3.96285 3.5L0.690124 7L3.14467 7C3.14467 10.8675 6.07376 14 9.69012 14C10.6084 14 11.4807 13.7943 12.2711 13.4277C12.767 13.1977 12.8381 12.5541 12.4648 12.1548C12.1816 11.852 11.7297 11.7939 11.3431 11.9434C10.8271 12.1428 10.2686 12.25 9.69012 12.25C6.98194 12.25 4.78103 9.89625 4.78103 7ZM7.11492 0.569644C6.61578 0.800554 6.54425 1.44816 6.91987 1.84987C7.20135 2.1509 7.64911 2.21214 8.03343 2.06332C8.55188 1.86256 9.10886 1.75 9.69012 1.75C12.3983 1.75 14.5992 4.10375 14.5992 7L12.1447 7L15.4174 10.5L18.6901 7L16.2356 7C16.2356 3.1325 13.3065 4.02196e-07 9.69012 5.60272e-07C8.77408 6.00313e-07 7.90381 0.20469 7.11492 0.569644Z" fill="var(--primary)"></path></svg>
                            </div>
                            <div class="col px-5 fw-m"><?= not_empty($slotData['autoplay-title']) ? $slotData['autoplay-title']: $textData['autoplay'];?></div>
                            <div class="col-auto px-5 fw-n"><?= $slotData['autoplay'];?></div>
                        </div>
                    </div>
                <?php endif;?>
                <?php if(not_empty($slotData['paylines'])):?>
                    <div class="col-u-lg-3 col-o-md-4 col-o-sm-6 mb-10">
                        <div class="row ai-c mx-0 py-15 px-10 br-6 bg-u-lg-tr-10">
                            <div class="col-auto px-5 fs-0">
                                <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12.3636 0C13.2636 0 14 0.73125 14 1.625V8.375C14 9.26875 13.2636 10 12.3636 10H1.63636C0.736364 10 0 9.26875 0 8.375V1.625C0 0.73125 0.736364 0 1.63636 0H12.3636ZM2 8H12V2H2V8ZM18 12.375V3.4375H16V12H2.45455V14H16.3636C17.2636 14 18 13.2688 18 12.375ZM7 7C8.10457 7 9 6.10457 9 5C9 3.89543 8.10457 3 7 3C5.89543 3 5 3.89543 5 5C5 6.10457 5.89543 7 7 7Z" fill="var(--primary)"></path></svg>
                            </div>
                            <div class="col px-5 fw-m"><?= not_empty($slotData['paylines-title']) ? $slotData['paylines-title'] : $textData['paylines'];?></div>
                            <div class="col-auto px-5 fw-n"><?= $slotData['paylines'];?></div>
                        </div>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
    <?php if(not_empty($slotData['casino-title']) || not_empty($textData['casino'])):?>
        <div class="tc-b ta-u-sm-c ta-o-xs-c bg-u-sm-s bg-o-xs-s title pt-u-sm-80 pt-o-xs-30">
            <div class="container">
                <h2 class="h2"><?= not_empty($slotData['casino-title']) ? $slotData[''] : $textData['casino'] .' ' . $slotData['name']?></h2>
            </div>
        </div>
    <?php endif;?>
    <?php if(not_empty($slotData['casino'][1])):?>
    <div class="tc--b bg-u-sm-s bg-o-xs-s lc pt-40 pb-20" >
        <div class="container">
            <div class="row-u-sm">
                <?php foreach ($slotData['casino'] as $key => $item) :
                    if($key === 0) continue;
                    $itemData = get_field('casino-data', $item);
                    ?>
                    <div class="col-u-md-3 col-o-sm-6 mb-u-sm-30 mb-o-xs-20">
                        <div class="cc br-10 of-h h-100 ps-r">
                            <div class="br-u-sm-10  of-h bg-w h-100">
                                <div class="row mx-n10 p-o-xs-10 f-u-sm-c h-100">
                                    <div class="col-o-xs-5 px-10 mb-o-xs-10">
                                        <figure class="sh__cc__thumb ps-r br-o-xs-6 of-h" style="background-color: <?=$itemData['bg']?>">
                                            <a href="<?= get_permalink($item)?>" class="sh__cc__thumb__link foc p-20">
                                                <img width="180"
                                                     height="180"
                                                     alt="<?= not_empty($itemData['logo']['alt']) ? $itemData['logo']['alt'] : $itemData['name'];?>"
                                                     title="<?= not_empty($itemData['logo']['title']) ? $itemData['logo']['title'] : $itemData['name'];?>"
                                                     loading="lazy"
                                                     data-src="<?= not_empty($itemData['logo']['url']) ? $itemData['logo']['url'] : ALFA_IMG_DEFAULT;?>"
                                                     class="attachment-CF_casino_card size-CF_casino_card wp-post-image lazyloaded"
                                                     src="<?= not_empty($itemData['logo']['url']) ? $itemData['logo']['url'] : ALFA_IMG_DEFAULT;?>"
                                                >
                                                <noscript>
                                                    <img width="180"
                                                         height="180"
                                                         alt="<?= not_empty($itemData['logo']['alt']) ? $itemData['logo']['alt'] : $itemData['name'];?>"
                                                         title="<?= not_empty($itemData['logo']['title']) ? $itemData['logo']['title'] : $itemData['name'];?>"
                                                         loading="lazy"
                                                         src="<?= not_empty($itemData['logo']['url']) ? $itemData['logo']['url'] : ALFA_IMG_DEFAULT;?>"
                                                    />
                                                </noscript>
                                            </a>
                                        </figure>

                                        <?php if(not_empty($itemData['rating'])):?>
                                            <div class="mt-o-xs-n5 fw-n fs-14 ta-o-xs-c ps-o-xs-r">
                                                <div class="sh__cc__rating d-if ai-c mb-o-xs-15 py-8 px-10 bg-b br-10 tc-w">
                                                    <svg class="mr-5 mt-n2" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 0L7.85714 3.95L12 4.6L9 7.65L9.71429 12L6 9.95L2.28571 12L3 7.65L0 4.6L4.14286 3.95L6 0Z" fill="var(--primary)"></path></svg>
                                                    <?=$itemData['rating'];?>
                                                </div>
                                                <a href="<?= get_permalink($item)?>" class="tc-o-xs-d td-o-xs-u d-o-xs-b d-u-sm-n"><?= $textDataCasino['read-more']?></a>
                                            </div>
                                        <?php endif;?>
                                    </div>
                                    <div class="col-o-xs-7 col-u-sm px-10 mb-o-xs-10">
                                        <div class="d-f f-c h-100 pb-u-sm-25 px-u-lg-25 px-u-sm-15 ta-u-sm-c fw-n tc-b">
                                            <div class="my-o-xs-a py-o-xs-10 mt-u-sm-n20 ps-r">
                                                <?php if(not_empty($itemData['welcome-bonus-title']) || not_empty($textDataCasino['welcome'])):?>
                                                    <p class="d-u-sm-ib mb-10 px-u-sm-30 py-u-sm-15 fs-u-sm-12 fs-o-xs-14 fw-n tt-u-sm-u bg-u-sm-w br-u-sm-10">
                                                        <?= not_empty($itemData['welcome-bonus-title']) ? $itemData['welcome-bonus-title'] : $textDataCasino['welcome']?>
                                                    </p>
                                                <?php endif;?>
                                                <?php if(not_empty($itemData['welcome-bonus'])):?>
                                                    <p class="mb-u-sm-15 tc-pv fw-bl fs-u-sm-28 fs-o-xs-18"><?= $itemData['welcome-bonus'];?></p>
                                                <?php endif;?>
                                            </div>
                                            <?php if(not_empty($itemData['link'])):?>
                                                <button on="tap:AMP.navigateTo(url='<?= $itemData['link'];?>', target='_blank')"
                                                        data-href="<?= $itemData['link'];?>"
                                                        formtarget="_blank"
                                                        type="submit"
                                                        rel="nofollow"
                                                        target="_blank"
                                                        class="btn mt-u-sm-a mt-o-xs-20 mb-u-sm-10 w-100 tt-u fw-bl br-p tc-w btn--p"
                                                        title="<?= not_empty($itemData['link-text']) ? $itemData['link-text'] : $textDataCasino['reg'];?>"
                                                >
                                                    <?= not_empty($itemData['link-text']) ? $itemData['link-text'] : $textDataCasino['reg'];?>
                                                </button>
                                            <?php endif;?>
                                            <a href="<?= get_permalink($item)?>" class="tc-o-xs-d td-o-xs-u d-o-xs-n"><?= $textDataCasino['read-more']?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
    <?php endif;?>
    <div class="container py-30 wp-editor"><?= amp_content()?></div>
</article>
<?php
if(not_empty($blocksData)) :
    foreach ($blocksData as $block) :
        get_template_part(
            '/parts/' .$block['acf_fc_layout'],
            null,
            ['block' => $block]
        );
    endforeach;
endif;
?>
<?php amp_footer()?>
