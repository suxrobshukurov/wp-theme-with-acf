<?php
/*
    Template Name: Казино
    Template Post Type: post, page
*/
$casinoData = get_field('casino-data');
$textData = get_field('casino-option-text', 'option');
$blocksData = get_field('page-data');

get_header();
?>
<article class="of-h">
    <div class="bg-pv tc-w">
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
        <div class="container pt-o-xs-10 pb-u-md-40 pb-d-sm-15">
            <div class="row-u-sm ai-u-sm-c">
                <div class="col-u-sm">
                    <h1 class="h2 mb-15 tc-w"><?= the_title();?></h1>
                </div>

                <div class="col-u-sm-auto ps-o-xs-r">
                    <div class="ch__rating d-if ai-c py-u-sm-8 px-u-sm-10 px-5 fs-14 bg-b br-10 tc-w">
                        <svg class="mr-5 mt-n2" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.85714 3.95L12 4.6L9 7.65L9.71429 12L6 9.95L2.28571 12L3 7.65L0 4.6L4.14286 3.95L6 0Z" fill="var(--primary)"></path>
                        </svg>
                        <?= $casinoData['rating'];?>
                    </div>
                </div>
            </div>

            <div class="ch__box p-u-lg-25 p-o-md-15 p-u-sm-25 p-o-xs-20 br-20">
                <div class="row-u-md ml-u-md-0">
                    <?php if (not_empty($casinoData['logo'])):?>
                        <div class="col-u-md-auto px-u-md-0 mb-d-sm-15">
                            <figure class="ch__thumb h-100 p-15 foc br-15" style="background-color: <?=$casinoData['bg']?>">
                                <img width="170"
                                     height="170"
                                     alt="<?= not_empty($casinoData['logo']['alt']) ? $casinoData['logo']['alt'] : $casinoData['name'];?>"
                                     title="<?= not_empty($casinoData['logo']['title']) ? $casinoData['logo']['title'] : $casinoData['name'];?>"
                                     loading="lazy"
                                     data-src="<?= not_empty($casinoData['logo']['url']) ? $casinoData['logo']['url'] : ALFA_IMG_DEFAULT;?>"
                                     class="attachment-CF_casino_review size-CF_casino_review wp-post-image lazyloaded"
                                     src="<?= not_empty($casinoData['logo']['url']) ? $casinoData['logo']['url'] : ALFA_IMG_DEFAULT;?>"
                                >
                                <noscript>
                                    <img width="170"
                                         height="170"
                                         src="<?= not_empty($casinoData['logo']['url']) ? $casinoData['logo']['url'] : ALFA_IMG_DEFAULT;?>"
                                         class="attachment-CF_casino_review size-CF_casino_review wp-post-image"
                                         alt="<?= not_empty($casinoData['logo']['alt']) ? $casinoData['logo']['alt'] : $casinoData['name'];?>"
                                         title="<?= not_empty($casinoData['logo']['title']) ? $casinoData['logo']['title'] : $casinoData['name'];?>"
                                         loading="lazy"
                                    />
                                </noscript>
                            </figure>
                        </div>
                    <?php endif;?>

                    <div class="col-u-md d-u-md-f f-u-md-c mb-d-sm-20 pl-u-lg-30 pr-o-md-0">
                        <?php if(not_empty($casinoData['welcome-bonus'])):?>
                            <div class="ch__bb mb-25 p-u-sm-20 p-o-xs-15 br-10">
                                <p class="mb-10 tt-u tc-p fs-12"><?=not_empty($casinoData['welcome-bonus-title']) ? $casinoData['welcome-bonus-title'] : $textData['welcome']?></p>
                                <?= '<h2 class="ch__wb tc-w"><strong>' . $casinoData['welcome-bonus'].'</strong></h2>';?>
                            </div>
                        <?php endif;?>

                        <div class="row jc-u-sm-sb mx-n5 mt-u-md-a ta-o-xs-c">
                            <?php if(not_empty($casinoData['min-deposit']) || $casinoData['min-deposit'] === '0'):?>
                                <div class="col-u-sm-auto col px-5">
                                    <div class="row-u-sm ai-u-sm-fe mx-n5">
                                        <div class="col-u-sm-auto px-5">
                                            <figure class="ch__icn mb-10 mx-a p-5 foc br-c bg-p">
                                                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.25 1H6.75C5.1303 1 4.0177 1.00219 3.18203 1.11633C2.37676 1.22631 1.97932 1.42316 1.70117 1.70572C1.42086 1.99047 1.22418 2.40067 1.11492 3.22627C1.00206 4.07904 1 5.21306 1 6.85714V9.14286C1 10.7869 1.00206 11.921 1.11492 12.7737C1.22418 13.5993 1.42086 14.0095 1.70117 14.2943C1.97932 14.5768 2.37676 14.7737 3.18203 14.8837C4.0177 14.9978 5.1303 15 6.75 15H11.25C12.8697 15 13.9823 14.9978 14.818 14.8837C15.6232 14.7737 16.0207 14.5768 16.2988 14.2943C16.5791 14.0095 16.7758 13.5993 16.8851 12.7737C16.917 12.5328 16.94 12.2695 16.9566 11.9786C16.7059 12 16.3941 12 16 12H14C13.0572 12 12.5858 12 12.2929 11.7071C12 11.4142 12 10.9428 12 10C12 9.05719 12 8.58579 12.2929 8.29289C12.5858 8 13.0572 8 14 8H16C16.4172 8 16.742 8 17 8.02537V6.85714C17 5.21306 16.9979 4.07904 16.8851 3.22627C16.7758 2.40067 16.5791 1.99047 16.2988 1.70572C16.0207 1.42316 15.6232 1.22631 14.818 1.11633C13.9823 1.00219 12.8697 1 11.25 1ZM17.9997 9.74203C18 9.54871 18 9.34907 18 9.14286V6.85714C18 3.62466 18 2.00841 17.0115 1.00421C16.023 0 14.432 0 11.25 0H6.75C3.56802 0 1.97703 0 0.988515 1.00421C0 2.00841 0 3.62465 0 6.85714V9.14286C0 12.3753 0 13.9916 0.988515 14.9958C1.97703 16 3.56802 16 6.75 16H11.25C14.432 16 16.023 16 17.0115 14.9958C17.8364 14.1578 17.9729 12.8935 17.9955 10.6195C18 10.439 18 10.234 18 10C18 9.90978 18 9.82388 17.9997 9.74203ZM16.9997 9.75104C16.9985 9.40426 16.9933 9.1919 16.9723 9.03598L16.9713 9.02869L16.964 9.02769C16.7738 9.00212 16.4997 9 16 9H14C13.5003 9 13.2262 9.00212 13.036 9.02769L13.0287 9.02869L13.0277 9.03598C13.0021 9.22617 13 9.50033 13 10C13 10.4997 13.0021 10.7738 13.0277 10.964L13.0287 10.9713L13.036 10.9723C13.2262 10.9979 13.5003 11 14 11H16C16.4997 11 16.7738 10.9979 16.964 10.9723L16.9713 10.9713L16.9723 10.964C16.9847 10.8715 16.9916 10.759 16.9954 10.6104C16.9981 10.3422 16.9992 10.0564 16.9997 9.75104ZM3.5 4C3.5 3.72386 3.72386 3.5 4 3.5H7C7.27614 3.5 7.5 3.72386 7.5 4C7.5 4.27614 7.27614 4.5 7 4.5H4C3.72386 4.5 3.5 4.27614 3.5 4Z" fill="var(--primary-variant)"></path>
                                                </svg>
                                            </figure>
                                        </div>
                                        <div class="col-u-sm px-5">
                                            <?='<p class="mb-5 fs-24 tc-w fw-b">'.$casinoData['min-deposit'].'</p>';?>
                                            <p class="fs-12 tc-p"><?=not_empty($casinoData['min-deposit-title']) ? $casinoData['min-deposit-title'] : $textData['min-deposit']?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif;?>
                            <?php if(not_empty($casinoData['min-withdrawal']) || $casinoData['min-withdrawal'] === '0'):?>
                                <div class="col-u-sm-auto col px-5">
                                    <div class="row-u-sm ai-u-sm-fe mx-n5">
                                        <div class="col-u-sm-auto px-5">
                                            <figure class="ch__icn mb-10 mx-a p-5 foc br-c bg-p">
                                                <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14 1H4C3.02892 1 2.40121 1.00212 1.9387 1.06431C1.50496 1.12262 1.36902 1.21677 1.29289 1.29289C1.21677 1.36902 1.12262 1.50496 1.06431 1.9387C1.00212 2.40121 1 3.02892 1 4V4.01907C1.06011 4.00665 1.12358 4 1.18919 4H16.8108C16.8764 4 16.9399 4.00665 17 4.01907V4C17 3.02892 16.9979 2.40121 16.9357 1.9387C16.8774 1.50496 16.7832 1.36902 16.7071 1.29289C16.631 1.21677 16.495 1.12262 16.0613 1.06431C15.5988 1.00212 14.9711 1 14 1ZM1 9V4.98093C1.06011 4.99335 1.12358 5 1.18919 5H16.8108C16.8764 5 16.9399 4.99335 17 4.98093V9C17 9.97108 16.9979 10.5988 16.9357 11.0613C16.8774 11.495 16.7832 11.631 16.7071 11.7071C16.631 11.7832 16.495 11.8774 16.0613 11.9357C15.5988 11.9979 14.9711 12 14 12H4C3.02892 12 2.40121 11.9979 1.9387 11.9357C1.50496 11.8774 1.36902 11.7832 1.29289 11.7071C1.21677 11.631 1.12262 11.495 1.06431 11.0613C1.00212 10.5988 1 9.97108 1 9ZM0.585786 0.585786C0 1.17157 0 2.11438 0 4V9C0 10.8856 0 11.8284 0.585786 12.4142C1.17157 13 2.11438 13 4 13H14C15.8856 13 16.8284 13 17.4142 12.4142C18 11.8284 18 10.8856 18 9V4C18 2.11438 18 1.17157 17.4142 0.585786C16.8284 0 15.8856 0 14 0H4C2.11438 0 1.17157 0 0.585786 0.585786ZM3.5 9C3.22386 9 3 9.22386 3 9.5C3 9.77614 3.22386 10 3.5 10H5.5C5.77614 10 6 9.77614 6 9.5C6 9.22386 5.77614 9 5.5 9h2.5Z" fill="var(--primary-variant)"></path>
                                                </svg>
                                            </figure>
                                        </div>
                                        <div class="col-u-sm px-5">
                                            <?= '<p class="mb-5 fs-24 tc-w fw-b">'. $casinoData['min-withdrawal'].'</p>';?>
                                            <p class="fs-12 tc-p"><?=not_empty($casinoData['min-withdrawal-title']) ? $casinoData['min-withdrawal-title'] : $textData['min-withdrawal']?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif;?>
                            <?php if(not_empty($casinoData['free-spins'])):?>
                                <div class="col-u-sm-auto col px-5">
                                    <div class="row-u-sm ai-u-sm-fe mx-n5">
                                        <div class="col-u-sm-auto px-5">
                                            <figure class="ch__icn mb-10 mx-a p-5 foc br-c bg-p">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.4443 1.6853C6.08879 0.58649 8.02219 0 10 0C12.6512 0.00304367 15.193 1.05759 17.0677 2.93229C18.9424 4.807 19.997 7.34877 20 10C20 11.9778 19.4135 13.9112 18.3147 15.5557C17.2159 17.2002 15.6541 18.4819 13.8268 19.2388C11.9996 19.9957 9.98891 20.1937 8.0491 19.8079C6.10929 19.422 4.32746 18.4696 2.92894 17.0711C1.53041 15.6725 0.578004 13.8907 0.192152 11.9509C-0.193701 10.0111 0.00433271 8.00043 0.761209 6.17317C1.51809 4.3459 2.79981 2.78412 4.4443 1.6853ZM16.2888 13.0536L18.0238 14.055C18.5843 12.9489 18.9081 11.7382 18.9747 10.5H16.9747C16.9119 11.3873 16.679 12.2543 16.2888 13.0536ZM9.5 18.9746V16.9746C8.61263 16.912 7.74559 16.6792 6.94615 16.2889L5.94445 18.0236C7.05068 18.5842 8.26161 18.9081 9.5 18.9746ZM13.0539 16.2889C12.2544 16.6792 11.3874 16.912 10.5 16.9746V18.9746C11.7384 18.9081 12.9493 18.5842 14.0556 18.0236L13.0539 16.2889ZM6.66658 14.9888C7.65328 15.6481 8.81332 16 10 16C11.5908 15.9983 13.1159 15.3656 14.2407 14.2407C15.3656 13.1159 15.9983 11.5908 16 10C16 8.81331 15.6481 7.65327 14.9888 6.66658C14.3295 5.67988 13.3925 4.91085 12.2961 4.45672C11.1997 4.0026 9.99335 3.88378 8.82946 4.11529C7.66558 4.3468 6.59648 4.91824 5.75736 5.75736C4.91825 6.59647 4.3468 7.66557 4.11529 8.82946C3.88378 9.99334 4.0026 11.1997 4.45673 12.2961C4.91085 13.3925 5.67989 14.3295 6.66658 14.9888ZM3.02535 10.5H1.02535C1.09189 11.7382 1.41572 12.9489 1.9762 14.055L3.71095 13.0536C3.3208 12.2543 3.08804 11.3873 3.02535 10.5ZM3.7112 6.94635L1.9762 5.945C1.41572 7.05107 1.09189 8.26181 1.02535 9.5h2.02535C3.08812 8.61268 3.32097 7.74572 3.7112 6.94635ZM10.5 1.02535V3.02535C11.3874 3.08804 12.2544 3.32083 13.0539 3.71105L14.0556 1.97645C12.9493 1.41582 11.7384 1.0919 10.5 1.02535ZM6.94615 3.71105C7.74559 3.32083 8.61263 3.08804 9.5 3.02535V1.02535C8.26161 1.09191 7.05068 1.41583 5.94445 1.97645L6.94615 3.71105ZM16.2891 6.94635C16.6792 7.74574 16.912 8.6127 16.9747 9.5H18.9747C18.9082 8.26183 18.5845 7.05109 18.0241 5.945L16.2891 6.94635ZM15.7941 6.07725L17.5255 5.0778C16.845 4.04102 15.959 3.15491 14.9223 2.4743L13.9223 4.20555C14.6587 4.7058 15.2938 5.34087 15.7941 6.07725ZM6.07775 4.20565L5.078 2.4743C4.0412 3.15488 3.15509 4.04099 2.4745 5.0778L4.206 6.07725C4.70628 5.3409 5.34137 4.70586 6.07775 4.20565ZM4.206 13.9228L2.4745 14.9222C3.15509 15.959 4.0412 16.8451 5.078 17.5257L6.07775 15.7943C5.34137 15.2941 4.70628 14.6591 4.206 13.9228ZM13.922 15.7945L14.922 17.5257C15.9587 16.8451 16.8447 15.959 17.5253 14.9222L15.7938 13.9228C15.2935 14.6591 14.6584 15.2942 13.922 15.7945ZM12.5101 9.13706C12.6586 9.04932 12.8275 9.00207 13 9C13.2652 9 13.5196 9.10536 13.7071 9.29289C13.8946 9.48043 14 9.73478 14 10C14 10.2652 13.8946 10.5196 13.7071 10.7071C13.5196 10.8946 13.2652 11 13 11C12.8275 10.9979 12.6586 10.9507 12.5101 10.8629C12.3616 10.7752 12.2387 10.6501 12.1537 10.5H11.4079C11.3333 10.7092 11.2132 10.8991 11.0562 11.0562C10.8991 11.2132 10.7092 11.3333 10.5 11.4079V12.1537C10.65 12.2387 10.7752 12.3616 10.8629 12.5101C10.9506 12.6586 10.9979 12.8275 11 13C11 13.2652 10.8946 13.5196 10.7071 13.7071C10.5196 13.8946 10.2652 14 10 14C9.73478 14 9.48043 13.8946 9.29289 13.7071C9.10536 13.5196 9 13.2652 9 13C9.00209 12.8275 9.04936 12.6586 9.13709 12.5101C9.22482 12.3616 9.34995 12.2387 9.5 12.1537V11.4079C9.29083 11.3333 9.10086 11.2132 8.94384 11.0562C8.78682 10.8991 8.66668 10.7092 8.5921 10.5H7.8463C7.76127 10.6501 7.63838 10.7752 7.48988 10.8629C7.34138 10.9507 7.17247 10.9979 7 11C6.73478 11 6.48043 10.8946 6.29289 10.7071C6.10536 10.5196 6 10.2652 6 10C6 9.73478 6.10536 9.48043 6.29289 9.29289C6.48043 9.10536 6.73478 9 7 9C7.17247 9.00206 7.34138 9.04932 7.48988 9.13705C7.63838 9.22479 7.76127 9.34993 7.8463 9.5H8.5921C8.66668 9.29083 8.78682 9.10086 8.94384 8.94384C9.10086 8.78682 9.29083 8.66668 9.5 8.5921V7.84635C9.34995 7.76129 9.22482 7.63838 9.13709 7.48988C9.04936 7.34137 9.00209 7.17247 9 7C9 6.73478 9.10536 6.48043 9.29289 6.29289C9.48043 6.10536 9.73478 6 10 6C10.2652 6 10.5196 6.10536 10.7071 6.29289C10.8946 6.48043 11 6.73478 11 7C10.9979 7.17247 10.9506 7.34137 10.8629 7.48988C10.7752 7.63838 10.65 7.76129 10.5 7.84635V8.5921C10.7092 8.66668 10.8991 8.78682 11.0562 8.94384C11.2132 9.10086 11.3333 9.29083 11.4079 9.5H12.1537C12.2387 9.34994 12.3616 9.22479 12.5101 9.13706ZM9.72221 10.4157C9.80444 10.4707 9.90111 10.5 10 10.5C10.1326 10.4998 10.2596 10.4471 10.3534 10.3534C10.4471 10.2596 10.4998 10.1326 10.5 10C10.5 9.90111 10.4707 9.80444 10.4157 9.72221C10.3608 9.63999 10.2827 9.5759 10.1913 9.53806C10.1 9.50022 9.99944 9.49031 9.90245 9.50961C9.80546 9.5289 9.71637 9.57652 9.64645 9.64645C9.57652 9.71637 9.5289 9.80546 9.50961 9.90245C9.49031 9.99944 9.50022 10.1 9.53806 10.1913C9.5759 10.2827 9.63999 10.3608 9.72221 10.4157Z" fill="var(--primary-variant)"></path></svg>
                                            </figure>
                                        </div>
                                        <div class="col-u-sm px-5">
                                            <?= '<p class="mb-5 fs-24 tc-w fw-b">'.$casinoData['free-spins'].'</p>';?>
                                            <p class="fs-12 tc-p"><?=not_empty($casinoData['free-spins-title']) ? $casinoData['free-spins-title'] : $textData['free']?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif;?>
                        </div>
                    </div>

                    <div class="col-u-md-auto d-u-md-f f-u-md-c">
                        <?php if(not_empty($casinoData['advantages'][0]['value'])):?>
                            <ul class="ch__bf mb-10 fs-14 fw-m">
                                <?php foreach ($casinoData['advantages'] as $key => $item) :?>
                                    <?= not_empty($item['value']) && $key < 3 ? '<li class="mb-15 pl-25 ps-r">'. $item['value'].'</li>':'';?>
                                <?php endforeach;?>
                            </ul>
                        <?php endif;?>
                        <?php if (not_empty($casinoData['link'])):?>
                            <div class="mt-u-md-a">
                                <button
                                    on="tap:AMP.navigateTo(url='<?=$casinoData['link'];?>', target='_blank')"
                                    data-href="<?=$casinoData['link'];?>"
                                    formtarget="_blank"
                                    type="submit"
                                    class="btn btn--p tc-pv br-p tc-w tt-u w-100"
                                >
                                    <?= not_empty($casinoData['link-text']) ? $casinoData['link-text'] : $textData['reg']?>
                                </button>
                            </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cb container pt-u-sm-30 pt-o-xs-15 fs-14">
        <div class="row-u-md mb-u-md-30 mb-d-sm-20">
            <?php if(not_empty($casinoData['intro'])) :?>
                <div class="col-u-md-6 mb-d-sm-20">
                    <div class="h-100 bg-l br-10 p-20">
                        <h2 class="mb-15 fs-16"><?= not_empty($casinoData['Introduction-title']) ? $casinoData['Introduction-title']: $textData['introduction'];?></h2>
                        <div class="cb__scr pr-20 mr-n20 wp-editor of-a js-scrollbar" data-simplebar="init">
                            <?= $casinoData['intro'];?>
                        </div>
                    </div>
                </div>
            <?php endif;?>
            <?php if(not_empty($casinoData['advantages'][0]['value'])):?>
                <div class="col-u-sm mb-d-sm-20">
                    <div class="h-100 bg-l br-10 p-20">
                        <h2 class="mb-15 fs-16"><?= not_empty($casinoData['advantages-title']) ? $casinoData['advantages-title'] : $textData['advantages']?></h2>
                        <div class="cb__scr pr-20 mr-n20 of-a js-scrollbar" data-simplebar="init">
                            <ul class="cb__ag">
                                <?php foreach ($casinoData['advantages'] as $item) :?>
                                    <?= not_empty($item['value'])? '<li class="ps-r pl-25">'. $item['value'].'</li>':'';?>
                                <?php endforeach;?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endif;?>
            <?php if(not_empty($casinoData['disadvantages'][0]['value'])):?>
                <div class="col-u-sm">
                    <div class="h-100 bg-l br-10 p-20">
                        <h2 class="mb-15 fs-16"><?= not_empty($casinoData['disadvantages-title']) ? $casinoData['disadvantages-title'] : $textData['disadvantages']?></h2>
                        <div class="cb__scr pr-20 mr-n20 of-a js-scrollbar" data-simplebar="init">
                            <ul class="cb__deag">
                                <?php foreach ($casinoData['disadvantages'] as $item) :?>
                                    <?= not_empty($item['value'])? '<li class="ps-r pl-25">'. $item['value'].'</li>':'';?>
                                <?php endforeach;?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endif;?>

        </div>
        <div class="mb-u-md-30 mb-d-sm-20 bg-l br-10 p-20 px-u-lg-30">
            <h2 class="mb-15 fs-16 ta-u-md-c"><?= not_empty($casinoData['general-title']) ? $casinoData['general-title']: $textData['general-info'];?></h2>
            <div class="row-u-md jc-u-lg-sb">
                <div class="col-u-lg-3 col-o-md-4">
                    <?php foreach ($casinoData['general-info'] as $item):?>
                        <?php if(not_empty($item['title'])|| not_empty($item['text']) || not_empty($item['link'])):?>
                            <div class="cb__row py-12 row ai-c ng">
                                <?= not_empty($item['title']) ? '<p class="col">'.$item['title'].'</p>':'';?>
                                <?php if($item['value-type'] === 'link') :?>
                                    <?= not_empty($item['link']) && not_empty($item['link-text'])
                                        ? '<p class="col-auto"><a href="'.$item['link'].'" target="_blank" rel="nofollow"><strong class="fw-m pl-10">'.$item['link-text']. '</strong></a></p>'
                                        :'';?>
                                <?php elseif ($item['value-type'] === 'text'):?>
                                    <?= not_empty($item['text']) ? '<p class="col-auto"><strong class="fw-m pl-10">'.$item['text'].'</strong></p>':'';?>
                                <?php endif;?>
                            </div>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>

                <div class="col-u-md-8">
                    <div class="row-u-md">
                        <?php if(not_empty($casinoData['lang-value']) || not_empty($casinoData['lang-title']) || not_empty($textData['languages'])):?>
                            <div class="col-u-lg-5 col-o-md mb-d-sm-15">
                                <p class="pt-12"><?= not_empty($casinoData['lang-title']) ? $casinoData['lang-title'] : $textData['languages'];?></p>
                                <?= not_empty($casinoData['lang-value']) ? '<p class="mt-25">'. $casinoData['lang-value']. '</p>':'';?>
                            </div>
                        <?php endif;?>

                        <?php if(not_empty($casinoData['countries-title']) || not_empty($textData['countries']) || count($casinoData['countries']) > 0):?>
                            <div class="col-u-lg-5 col-o-md ml-u-md-a mb-d-sm-15">
                                <p class="pt-12"><?= not_empty($casinoData['countries-title']) ? $casinoData['countries-title'] : $textData['countries'];?></p>
                                <?php if(not_empty($casinoData['countries'][0]['value-img'])|| not_empty($casinoData['countries'][0]['value-text'])):?>
                                    <div class="d-f f-w mx-n5" data-cbFlags>
                                        <?php foreach ($casinoData['countries'] as $item) :?>
                                            <?php if($item['value-type'] === 'image'):?>
                                                <span class="cb__flag mt-25 mx-5 ps-r of-h">
                                                    <?php if(not_empty($item['value-img'])):?>
                                                        <img width="20"
                                                             height="15"
                                                             alt="<?= not_empty($item['value-img']['alt']) ? $item['value-img']['alt'] : 'none'?>"
                                                             title="<?= not_empty($item['value-img']['title']) ? $item['value-img']['title'] : 'none'?>"
                                                             data-src="<?= not_empty($item['value-img']['url']) ? $item['value-img']['url'] : ALFA_IMG_DEFAULT;?>"
                                                             class=" lazyloaded"
                                                             src="<?= not_empty($item['value-img']['url']) ? $item['value-img']['url'] : ALFA_IMG_DEFAULT;?>"
                                                        >
                                                        <noscript>
                                                            <img width="20"
                                                                 height="15"
                                                                 src="<?= not_empty($item['value-img']['url']) ? $item['value-img']['url'] : ALFA_IMG_DEFAULT;?>"
                                                                 alt="<?= not_empty($item['value-img']['alt']) ? $item['value-img']['alt'] : 'none'?>"
                                                                 title="<?= not_empty($item['value-img']['title']) ? $item['value-img']['title'] : 'none'?>"
                                                            >
                                                        </noscript>
                                                    <?php endif;?>
                                                </span>
                                                <?php elseif ($item['value-type'] === 'text'):?>
                                                <span class="cb__flag mt-25 mx-5 ps-r of-h non-image">
                                                    <?= $item['value-text'];?>
                                                </span>
                                                <?php endif;?>
                                            </span>
                                        <?php endforeach;?>
                                        <button class="cb__flag mt-25 mx-5 fs-11 js-more-options">204+</button>
                                    </div>
                                <?php endif;?>
                            </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-u-md-30 mb-d-sm-20 bg-l br-10 p-20 px-u-md-30">
            <h2 class="mb-15 fs-16 ta-u-md-c"><?= not_empty($casinoData['banking-title']) ? $casinoData['banking-title']: $textData['banking'];?></h2>
            <div class="row-u-md jc-u-lg-sb">
                <?php if(not_empty($casinoData['min-deposit']) || not_empty($casinoData['min-withdrawal']) || not_empty($casinoData['max-withdrawal']) || not_empty($casinoData['time-withdrawal'])):?>
                    <div class="col-u-lg-3 col-o-md-4">
                        <?php if(not_empty($casinoData['min-deposit']) && (not_empty($casinoData['min-deposit-title']) || not_empty($textData['min-deposit']))):?>
                            <div class="cb__row py-12 row ai-c ng">
                                <p class="col"><?=not_empty($casinoData['min-deposit-title']) ? $casinoData['min-deposit-title'] : $textData['min-deposit']?></p>
                                <p class="col-auto"><strong class="fw-m pl-10"><?= $casinoData['min-deposit'];?></strong></p>
                            </div>
                        <?php endif;?>
                        <?php if(not_empty($casinoData['min-withdrawal']) && (not_empty($casinoData['min-withdrawal-title']) || not_empty($textData['min-withdrawal']))):?>
                            <div class="cb__row py-12 row ai-c ng">
                                <p class="col"><?=not_empty($casinoData['min-withdrawal-title']) ? $casinoData['min-withdrawal-title'] : $textData['min-withdrawal']?></p>
                                <p class="col-auto"><strong class="fw-m pl-10"><?= $casinoData['min-withdrawal'];?></strong></p>
                            </div>
                        <?php endif;?>
                        <?php if(not_empty($casinoData['max-withdrawal']) && (not_empty($casinoData['max-withdrawal-title']) || not_empty($textData['max-withdrawal']))):?>
                            <div class="cb__row py-12 row ai-c ng">
                                <p class="col"><?=not_empty($casinoData['max-withdrawal-title']) ? $casinoData['max-withdrawal-title'] : $textData['max-withdrawal']?></p>
                                <p class="col-auto"><strong class="fw-m pl-10"><?= $casinoData['max-withdrawal'];?></strong></p>
                            </div>
                        <?php endif;?>
                        <?php if(not_empty($casinoData['time-withdrawal']) && (not_empty($casinoData['time-withdrawal-title']) || not_empty($textData['withdrawal-time']))):?>
                            <div class="cb__row py-12 row ai-c ng">
                                <p class="col"><?=not_empty($casinoData['time-withdrawal-title']) ? $casinoData['time-withdrawal-title'] : $textData['withdrawal-time']?></p>
                                <p class="col-auto"><strong class="fw-m pl-10"><?= $casinoData['time-withdrawal'];?></strong></p>
                            </div>
                        <?php endif;?>
                    </div>
                <?php endif;?>

                <div class="col-u-md-8">
                <?php if((not_empty($casinoData['currencies'][0]['value-text']) || not_empty($casinoData['currencies'][0]['value-img'])) && (not_empty($casinoData['currencies-title']) || not_empty($textData['currencies']))):?>
                    <p class="pb-12"><?= not_empty($casinoData['currencies-title']) ? $casinoData['currencies-title']: $textData['currencies'];?></p>
                    <?php if(not_empty($casinoData['currencies'][0]['value-img']) || not_empty($casinoData['currencies'][0]['value-text'])) :?>
                        <div class="d-f f-w mx-n5">
                            <?php foreach ($casinoData['currencies'] as $item) :?>
                                <?php if($item['value-type'] === 'text') :?>
                                    <?= not_empty($item['value-text']) ? '<strong class="cb__crr mt-12 mx-5 py-10 px-5 br-6 tt-u fs-12 bg-w">'. $item['value-text'].'</strong>':'';?>
                                <?php elseif ($item['value-type'] === 'image'):?>
                                    <?php if(not_empty($item['value-img'])):?>
                                        <span class="cb__pay foc mt-12 mx-5 of-h br-4 fs-10 ta-c bg-w">
                                            <img alt="<?= not_empty($item['value-img']['alt']) ? $item['value-img']['alt'] : 'none';?>"
                                                 title="<?= not_empty($item['value-img']['title']) ? $item['value-img']['title'] : 'none';?>"
                                                 height="32"
                                                 width="38"
                                                 data-src="<?= not_empty($item['value-img']['url']) ? $item['value-img']['url']: ALFA_IMG_DEFAULT;?>"
                                                 class="attachment-CF_term size-CF_term ls-is-cached lazyloaded"
                                                 src="<?= not_empty($item['value-img']['url']) ? $item['value-img']['url']: ALFA_IMG_DEFAULT;?>">
                                            <noscript>
                                                <img alt="<?= not_empty($item['value-img']['alt']) ? $item['value-img']['alt'] : 'none';?>"
                                                     title="<?= not_empty($item['value-img']['title']) ? $item['value-img']['title'] : 'none';?>"
                                                     height="32"
                                                     width="38"
                                                     class="attachment-CF_term size-CF_term lazyload"
                                                     src="<?= not_empty($item['value-img']['url']) ? $item['value-img']['url']: ALFA_IMG_DEFAULT;?>" />
                                            </noscript>
                                        </span>
                                    <?php endif;?>
                                <?php endif;?>
                            <?php endforeach;?>
                        </div>
                    <?php endif;?>
                <?php endif;?>

                    <div class="row-u-md">
                        <?php if(count($casinoData['deposit']) > 0 && not_empty($casinoData['deposit-title']) || not_empty($textData['deposit-methods'])):?>
                            <div class="col-u-lg-5 col-o-md mt-15">
                                <p class="py-12"><?= not_empty($casinoData['deposit-title']) ? $casinoData['deposit-title'] : $textData['deposit-methods'];?></p>
                                <?php if(not_empty($casinoData['deposit'][0]['value-img']) || not_empty($casinoData['deposit'][0]['value-text'])):?>
                                    <div class="d-f f-w mx-n5" data-deposit-methods>
                                    <?php foreach ($casinoData['deposit'] as $item) :?>
                                        <span class="cb__pay foc mt-12 mx-5 of-h br-4 fs-10 ta-c">
                                        <?php if($item['value-type'] === 'image'):?>
                                            <?php if(not_empty($item['value-img'])):?>
                                                <img alt="<?= not_empty($item['value-img']['alt']) ? $item['value-img']['alt'] : 'none';?>"
                                                     title="<?= not_empty($item['value-img']['title']) ? $item['value-img']['title'] : 'none';?>"
                                                     height="250"
                                                     width="500"
                                                     data-src="<?= not_empty($item['value-img']['url']) ? $item['value-img']['url'] : ALFA_IMG_DEFAULT;?>"
                                                     class="attachment-CF_term size-CF_term ls-is-cached lazyloaded"
                                                     src="<?= not_empty($item['value-img']['url']) ? $item['value-img']['url'] : ALFA_IMG_DEFAULT;?>">
                                                <noscript>
                                                    <img alt="<?= not_empty($item['value-img']['alt']) ? $item['value-img']['alt'] : 'none';?>"
                                                         title="<?= not_empty($item['value-img']['title']) ? $item['value-img']['title'] : 'none';?>"
                                                         height="250"
                                                         width="500"
                                                         class="attachment-CF_term size-CF_term lazyload"
                                                         src="<?= not_empty($item['value-img']['url']) ? $item['value-img']['url'] : ALFA_IMG_DEFAULT;?>"
                                                    />
                                                </noscript>
                                            <?php endif;?>
                                        <?php elseif ($item['value-type'] === 'text'):?>
                                            <?= not_empty($item['value-text']) ? $item['value-text'] : '';?>
                                        <?php endif;?>
                                        </span>
                                    <?php endforeach;?>
                                        <button class="cb__pay bg-w mt-12 mx-5 fs-11 br-4 js-more-options">16+</button>
                                    </div>
                                <?php endif;?>
                            </div>
                        <?php endif;?>
                        <?php if(count($casinoData['withdrawal']) > 0 && not_empty($casinoData['withdrawal-title']) || not_empty($textData['withdrawal-methods'])):?>
                            <div class="col-u-lg-5 col-o-md ml-u-md-a mt-15">
                                <p class="py-12"><?= not_empty($casinoData['withdrawal-title']) ? $casinoData['withdrawal-title'] : $textData['withdrawal-methods'];?></p>
                                <?php if(not_empty($casinoData['withdrawal'][0]['value-img']) || not_empty($casinoData['withdrawal'][0]['value-text'])):?>
                                    <div class="d-f f-w mx-n5" data-withdrawal-methods>
                                        <?php foreach ($casinoData['withdrawal'] as $item) :?>
                                            <span class="cb__pay foc mt-12 mx-5 of-h br-4 fs-10 ta-c">
                                        <?php if($item['value-type'] === 'image'):?>
                                            <?php if(not_empty($item['value-img'])):?>
                                                <img alt="<?= not_empty($item['value-img']['alt']) ? $item['value-img']['alt'] : 'none';?>"
                                                     title="<?= not_empty($item['value-img']['title']) ? $item['value-img']['title'] : 'none';?>"
                                                     height="250"
                                                     width="500"
                                                     data-src="<?= not_empty($item['value-img']['url']) ? $item['value-img']['url'] : ALFA_IMG_DEFAULT;?>"
                                                     class="attachment-CF_term size-CF_term ls-is-cached lazyloaded"
                                                     src="<?= not_empty($item['value-img']['url']) ? $item['value-img']['url'] : ALFA_IMG_DEFAULT;?>">
                                                <noscript>
                                                    <img alt="<?= not_empty($item['value-img']['alt']) ? $item['value-img']['alt'] : 'none';?>"
                                                         title="<?= not_empty($item['value-img']['title']) ? $item['value-img']['title'] : 'none';?>"
                                                         height="250"
                                                         width="500"
                                                         class="attachment-CF_term size-CF_term lazyload"
                                                         src="<?= not_empty($item['value-img']['url']) ? $item['value-img']['url'] : ALFA_IMG_DEFAULT;?>"
                                                    />
                                                </noscript>
                                            <?php endif;?>
                                        <?php elseif ($item['value-type'] === 'text'):?>
                                            <?= not_empty($item['value-text']) ? $item['value-text'] : '';?>
                                        <?php endif;?>
                                        </span>
                                        <?php endforeach;?>
                                        <button class="cb__pay bg-w mt-12 mx-5 fs-11 br-4 js-more-options">16+</button>
                                    </div>
                                <?php endif;?>
                            </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-u-md mb-u-md-30 mb-d-sm-20">
            <?php if(not_empty($casinoData['providers'][0]['text']) || not_empty($casinoData['providers'][0]['link'])):?>
                <div class="col-u-md-6 mb-d-sm-20">
                    <div class="h-100 bg-l br-10 pt-20 px-20 pb-10">
                        <h2 class="mb-20 ta-u-md-c fs-16"><?= not_empty($casinoData['softwate-title']) ? $casinoData['softwate-title']: $textData['software-providers'];?></h2>
                        <div class="cb__scr pr-20 mr-n20 of-a js-scrollbar" data-simplebar="init">
                            <div class="row-u-sm ai-u-sm-c mx-0">
                                <?php foreach ($casinoData['providers'] as $item):?>
                                    <?php if(not_empty($item['text']) || not_empty($item['link'])):?>
                                        <div class="col-u-sm-4 pl-20 pr-u-sm-25 <?= $item['has-check'] ? 'cb__ck' : 'cb__uck';?>">
                                            <?php if($item['value-type'] === 'link') {
                                                echo '<a class="td-u" target="_blank" href="'. $item['link'].'" >'.$item['link-text'].'</a>';
                                            } elseif ($item['value-type'] === 'text') {
                                                echo $item['text'];
                                            } else {
                                                echo $item['text'];
                                            }?>
                                        </div>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif;?>
            <?php if(not_empty($casinoData['gtypes'][0]['text'])):?>
                <div class="col-u-md-6">
                    <div class="h-100 bg-l br-10 pt-20 px-20 pb-10">
                        <h2 class="mb-20 ta-u-md-c fs-16"><?= not_empty($casinoData['gtypes-title']) ? $casinoData['gtypes-title']: $textData['game-types'];?></h2>
                        <div class="cb__scr pr-20 mr-n20 of-a js-scrollbar" data-simplebar="init">
                            <div class="row-u-sm ai-u-sm-c mx-0">
                                <?php foreach ($casinoData['gtypes'] as $item):?>
                                    <?php if(not_empty($item['text'])):?>
                                        <div class="col-u-sm-4 pl-20 pr-u-sm-25 <?= $item['has-check'] ? 'cb__ck' : 'cb__uck';?>">
                                            <?= $item['text'];?>
                                        </div>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif;?>
        </div>
        <div class="row-u-md mb-u-md-30 mb-d-sm-20">
            <?php if(not_empty($casinoData['phone']) || not_empty($casinoData['email']) || not_empty($casinoData['live-chat'])|| not_empty($casinoData['working-hours'])):?>
                <div class="col-u-md-6 mb-d-sm-20">
                    <div class="h-100 bg-l br-10 p-20">
                        <h2 class="mb-20 ta-u-md-c fs-16"><?= not_empty($casinoData['support-title']) ? $casinoData['support-title'] : $textData['support'];?></h2>
                        <div class="row-u-sm mx-u-sm-n5 ">
                            <?php if(not_empty($casinoData['phone']) && not_empty($casinoData['phone-title']) || not_empty($textData['phone']) ):?>
                                <div class="col-u-sm-6 mb-o-xs-15 px-5">
                                    <div class="row mx-0">
                                        <div class="col-auto px-0">
                                            <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0672 7.16689C13.961 5.52513 13.3337 3.95789 12.2686 2.75962C11.0925 1.43649 9.47028 0.666626 7.74996 0.666626C6.02964 0.666626 4.40743 1.43649 3.23131 2.75962C2.16619 3.95788 1.53894 5.52512 1.43276 7.16688C1.42745 7.16671 1.42211 7.16663 1.41675 7.16663C1.14061 7.16663 0.916748 7.39048 0.916748 7.66663V9.66663C0.916748 9.94277 1.14061 10.1666 1.41675 10.1666V10.3333C1.41675 11.622 2.46142 12.6667 3.75008 12.6667C5.03874 12.6667 6.08342 11.622 6.08342 10.3333V8.33333C6.08342 7.04467 5.03874 6 3.75008 6C3.31133 6 2.90087 6.1211 2.55029 6.33169C2.77192 5.2392 3.26316 4.22899 3.97872 3.42398C4.97896 2.29872 6.33554 1.66663 7.74996 1.66663C9.16438 1.66663 10.521 2.29872 11.5212 3.42399C12.2367 4.22895 12.7279 5.2391 12.9496 6.33152C12.5991 6.12103 12.1887 6 11.7501 6C10.4614 6 9.41675 7.04467 9.41675 8.33333V10.3333C9.41675 11.622 10.4614 12.6667 11.7501 12.6667C13.0387 12.6667 14.0834 11.622 14.0834 10.3333V10.1666C14.3595 10.1665 14.5833 9.94271 14.5833 9.66663V7.66663C14.5833 7.39048 14.3594 7.16663 14.0833 7.16663C14.0779 7.16663 14.0725 7.16672 14.0672 7.16689ZM10.4167 8.33333C10.4167 7.59695 11.0137 7 11.7501 7C12.4865 7 13.0834 7.59695 13.0834 8.33333V10.3333C13.0834 11.0697 12.4865 11.6667 11.7501 11.6667C11.0137 11.6667 10.4167 11.0697 10.4167 10.3333V8.33333ZM3.75008 7C3.0137 7 2.41675 7.59695 2.41675 8.33333V10.3333C2.41675 11.0697 3.0137 11.6667 3.75008 11.6667C4.48646 11.6667 5.08342 11.0697 5.08342 10.3333V8.33333C5.08342 7.59695 4.48646 7 3.75008 7Z" fill="var(--primary-variant)"></path>
                                            </svg>
                                        </div>
                                        <div class="col pl-10 pr-0">
                                            <p class="mb-5"><?= not_empty($casinoData['phone-title'])? $casinoData['phone-title'] : $textData['phone'];?>:</p>
                                            <?= not_empty($casinoData['phone']) ? '<p class="fw-m">'. $casinoData['phone'].'</p>':'';?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif;?>
                            <?php if(not_empty($casinoData['email']) && not_empty($casinoData['email-title']) || not_empty($textData['email']) ):?>
                                <div class="col-u-sm-6 mb-o-xs-15 px-5">
                                    <div class="row mx-0">
                                        <div class="col-auto px-0">
                                            <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.5833 4.76837e-06H5.91663L5.8508 2.38419e-06C4.96431 -4.74453e-05 4.2005 -9.02414e-05 3.58884 0.0821453C2.93332 0.170277 2.30497 0.369022 1.79531 0.878684C1.28565 1.38835 1.0869 2.0167 0.998771 2.67221C0.916536 3.28387 0.916579 4.04769 0.916628 4.93417L0.916631 5L0.916628 5.06583C0.916579 5.95232 0.916536 6.71614 0.998771 7.3278C1.0869 7.98331 1.28565 8.61166 1.79531 9.12133C2.30497 9.63099 2.93332 9.82973 3.58884 9.91786C4.2005 10.0001 4.96431 10.0001 5.8508 10L5.91663 10H8.5833L8.64913 10C9.53562 10.0001 10.2994 10.0001 10.9111 9.91786C11.5666 9.82973 12.195 9.63099 12.7046 9.12133C13.2143 8.61166 13.413 7.98331 13.5012 7.3278C13.5834 6.71614 13.5833 5.95232 13.5833 5.06584L13.5833 5L13.5833 4.93417C13.5833 4.04769 13.5834 3.28387 13.5012 2.67221C13.413 2.0167 13.2143 1.38835 12.7046 0.878684C12.195 0.369022 11.5666 0.170277 10.9111 0.0821453C10.2994 -9.02414e-05 9.53561 -4.74453e-05 8.64913 2.38419e-06L8.5833 4.76837e-06ZM1.9816 2.87007C2.05185 2.29084 2.19808 1.89013 2.50242 1.58579C3.0882 1 4.03101 1 5.91663 1H8.5833C10.4689 1 11.4117 1 11.9975 1.58579C12.3019 1.89013 12.4481 2.29084 12.5183 2.87007L12.3597 2.55279L7.92078 4.77224C7.49849 4.98339 7.00143 4.98339 6.57914 4.77224L2.14024 2.55279L1.9816 2.87007ZM1.93152 3.56647C1.91663 3.97274 1.91663 4.44563 1.91663 5C1.91663 6.88562 1.91663 7.82843 2.50242 8.41422C3.0882 9 4.03101 9 5.91663 9H8.5833C10.4689 9 11.4117 9 11.9975 8.41422C12.5833 7.82843 12.5833 6.88562 12.5833 5C12.5833 4.44563 12.5833 3.97274 12.5684 3.56647L8.368 5.66667C7.66418 6.01858 6.83575 6.01858 6.13193 5.66667L1.93152 3.56647Z" fill="var(--primary-variant)"></path></svg>
                                        </div>
                                        <div class="col pl-10 pr-0">
                                            <p class="mb-5"><?= not_empty($casinoData['email-title'])? $casinoData['email-title'] : $textData['email'];?>:</p>
                                            <?= not_empty($casinoData['email']) ? '<p class="fw-m">'. $casinoData['email'].'</p>':'';?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif;?>
                        </div>
                        <div class="row-u-sm mx-u-sm-n5 mt-u-sm-30">
                        <?php if(not_empty($casinoData['live-chat']) && not_empty($casinoData['live-chat-title']) || not_empty($textData['live']) ):?>
                            <div class="col-u-sm-6 mb-o-xs-15 px-5">
                                <div class="row mx-0">
                                    <div class="col-auto px-0">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.0833 6.99996V10.3939C13.0833 12.0173 11.7673 13.3333 10.1439 13.3333H6.74996C3.25216 13.3333 0.416626 10.4978 0.416626 6.99996C0.416626 3.50216 3.25216 0.666626 6.74996 0.666626C10.2478 0.666626 13.0833 3.50216 13.0833 6.99996ZM6.74996 1.66663C3.80444 1.66663 1.41663 4.05444 1.41663 6.99996C1.41663 9.94548 3.80444 12.3333 6.74996 12.3333H10.1439C11.215 12.3333 12.0833 11.465 12.0833 10.3939V6.99996C12.0833 4.05444 9.69548 1.66663 6.74996 1.66663ZM4.25 6.33337C4.25 6.05723 4.47386 5.83337 4.75 5.83337H8.75C9.02614 5.83337 9.25 6.05723 9.25 6.33337C9.25 6.60952 9.02614 6.83337 8.75 6.83337H4.75C4.47386 6.83337 4.25 6.60952 4.25 6.33337ZM6.75 8.5C6.47386 8.5 6.25 8.72386 6.25 9C6.25 9.27614 6.47386 9.5 6.75 9.5H8.75C9.02614 9.5 9.25 9.27614 9.25 9C9.25 8.72386 9.02614 8.5 8.75 8.5H6.75Z" fill="var(--primary-variant)"></path></svg>
                                    </div>
                                    <div class="col pl-10 pr-0">
                                        <p class="mb-5"><?= not_empty($casinoData['live-chat-title'])? $casinoData['live-chat-title'] : $textData['live'];?>:</p>
                                        <?= not_empty($casinoData['live-chat']) ? '<p class="fw-m">'. $casinoData['live-chat'].'</p>':'';?>
                                    </div>
                                </div>
                            </div>
                        <?php endif;?>
                        <?php if(not_empty($casinoData['working-hours']) && not_empty($casinoData['working-hours-title']) || not_empty($textData['working']) ):?>
                            <div class="col-u-sm-6 mb-o-xs-15 px-5">
                                <div class="row mx-0">
                                    <div class="col-auto px-0">
                                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.58333 12.6667C10.0811 12.6667 12.9167 9.83114 12.9167 6.33333C12.9167 2.83553 10.0811 0 6.58333 0C3.08553 0 0.25 2.83553 0.25 6.33333C0.25 9.83114 3.08553 12.6667 6.58333 12.6667ZM11.9167 6.33333C11.9167 9.27885 9.52885 11.6667 6.58333 11.6667C3.63781 11.6667 1.25 9.27885 1.25 6.33333C1.25 3.38781 3.63781 1 6.58333 1C9.52885 1 11.9167 3.38781 11.9167 6.33333ZM7.08325 4C7.08325 3.72386 6.85939 3.5 6.58325 3.5C6.30711 3.5 6.08325 3.72386 6.08325 4V6.08333C6.08325 6.49755 6.41904 6.83333 6.83325 6.83333H9.58325C9.85939 6.83333 10.0833 6.60948 10.0833 6.33333C10.0833 6.05719 9.85939 5.83333 9.58325 5.83333H7.08325V4Z" fill="var(--primary-variant)"></path></svg>
                                    </div>
                                    <div class="col pl-10 pr-0">
                                        <p class="mb-5"><?= not_empty($casinoData['working-hours-title'])? $casinoData['working-hours-title'] : $textData['working'];?>:</p>
                                        <?= not_empty($casinoData['working-hours']) ? '<p class="fw-m">'. $casinoData['working-hours'].'</p>':'';?>
                                    </div>
                                </div>
                            </div>
                        <?php endif;?>
                        </div>
                    </div>
                </div>
            <?php endif;?>
            <?php if(not_empty($casinoData['welcome-bonus']) || not_empty($casinoData['free-spins']) || not_empty($casinoData['wagering'])):?>
                <div class="col-u-md-6">
                    <div class="h-100 bg-l br-10 p-20">
                        <h2 class="mb-20 ta-u-md-c fs-16"><?=not_empty($casinoData['bonus-title']) ? $casinoData['bonus-title'] : $textData['bonus']?></h2>

                        <div class="row-u-sm jc-u-sm-sb mx-u-sm-n5">
                        <?php if(not_empty($casinoData['welcome-bonus']) && not_empty($casinoData['welcome-bonus-title']) || not_empty($textData['welcome']) ):?>
                            <div class="col-u-sm-5 mb-o-xs-15 px-u-sm-5">
                                <div class="row mx-0">
                                    <div class="col-auto px-0">
                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.74999 0C7.01511 0 7.26952 0.105469 7.45702 0.292968L8.24966 1.08536L8.24999 1.08569L9.04296 0.292968C9.23045 0.105469 9.48486 0 9.74998 0H11.25C11.6103 0 11.9426 0.193843 12.1201 0.507312C12.2976 0.820811 12.293 1.20556 12.1074 1.5144L10.75 3.49999H4.74999L3.39256 1.5144C3.20703 1.20556 3.20237 0.82078 3.37987 0.507312C3.55737 0.193843 3.88965 0 4.24999 0H6.74999ZM9.74998 1H11.2477L10.2223 2.49999H5.2777L4.25224 1H6.74999L6.74991 1.00008L6.75002 1.00019L7.54299 1.7929L8.24999 2.49968L8.95698 1.7929L9.74995 1.00019L9.75006 1.00007L9.74998 1ZM4.24999 1H4.25003L4.25005 1.00005L4.24999 1ZM2.78967 8.37307C3.39585 7.26008 4.20961 6.24086 5.09912 5.5H10.4009C11.2904 6.24086 12.1041 7.26008 12.7103 8.37307C13.3777 9.59845 13.75 10.8568 13.75 11.8945C13.75 12.7681 13.5538 13.3259 13.2956 13.6986C13.0375 14.0711 12.655 14.3491 12.1227 14.553C10.9914 14.9863 9.4483 15 7.74999 15C6.05167 15 4.5086 14.9863 3.37729 14.553C2.84493 14.3491 2.46244 14.0711 2.2044 13.6986C1.94622 13.3259 1.75 12.7681 1.75 11.8945C1.75 10.8568 2.12229 9.59845 2.78967 8.37307ZM4.74999 4.5H10.75C12.986 6.19965 14.75 9.38824 14.75 11.8945C14.75 16 11.031 16 7.74999 16C4.46899 16 0.75 16 0.75 11.8945C0.75 9.38824 2.51393 6.19965 4.74999 4.5Z" fill="var(--primary-variant)"></path></svg>
                                    </div>
                                    <div class="col pl-10 pr-0">
                                        <p class="mb-5"><?= not_empty($casinoData['welcome-bonus-title'])? $casinoData['welcome-bonus-title'] : $textData['welcome'];?>:</p>
                                        <?= not_empty($casinoData['welcome-bonus']) ? '<p class="fw-m">'. $casinoData['welcome-bonus'].'</p>':'';?>
                                    </div>
                                </div>
                            </div>
                        <?php endif;?>
                        <?php if(not_empty($casinoData['free-spins']) && not_empty($casinoData['free-spins-title']) || not_empty($textData['free']) ):?>
                            <div class="col-u-sm mb-o-xs-15 px-u-sm-5">
                                <div class="row mx-0">
                                    <div class="col-auto px-0">
                                        <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.57926 8.37623L8.57926 4.87624L9.0093 4.49995L8.57926 4.12366L4.57926 0.623657L3.92075 1.37623L5.79607 3.01714C4.63701 3.10506 3.52479 3.52824 2.59743 4.23983C1.54957 5.04388 0.796297 6.17123 0.454447 7.44703C0.112598 8.72283 0.201275 10.0758 0.706725 11.296C1.21218 12.5163 2.10615 13.5357 3.25 14.1961C4.39385 14.8565 5.72365 15.121 7.03316 14.9486C8.34267 14.7762 9.55869 14.1765 10.4926 13.2426C11.4266 12.3086 12.0263 11.0926 12.1987 9.7831C12.3711 8.4736 12.1066 7.1438 11.4462 5.99995C11.3081 5.7608 11.0023 5.67886 10.7631 5.81693C10.524 5.955 10.4421 6.2608 10.5801 6.49995C11.1305 7.45316 11.3509 8.56132 11.2072 9.65258C11.0636 10.7438 10.5638 11.7572 9.78554 12.5355C9.00725 13.3138 7.99389 13.8135 6.90263 13.9572C5.81138 14.1008 4.70321 13.8804 3.75 13.3301C2.79679 12.7797 2.05181 11.9303 1.6306 10.9134C1.2094 9.89648 1.1355 8.76902 1.42037 7.70585C1.70525 6.64269 2.33297 5.70323 3.20619 5.03318C4.07942 4.36313 5.14933 3.99995 6.25 3.99995C6.42324 3.99995 6.5759 3.91184 6.66562 3.778L7.49071 4.49995L3.92075 7.62366L4.57926 8.37623Z" fill="var(--primary-variant)"></path></svg>
                                    </div>
                                    <div class="col pl-10 pr-0">
                                        <p class="mb-5"><?= not_empty($casinoData['free-spins-title'])? $casinoData['free-spins-title'] : $textData['free'];?>:</p>
                                        <?= not_empty($casinoData['free-spins']) || $casinoData['free-spins'] === '0' ? '<p class="fw-m">'. $casinoData['free-spins'].'</p>':'';?>
                                    </div>
                                </div>
                            </div>
                        <?php endif;?>
                        <?php if(not_empty($casinoData['wagering']) && not_empty($casinoData['wagering-title']) || not_empty($textData['wagering']) ):?>
                            <div class="col-u-sm mb-o-xs-15 px-u-sm-5">
                                <div class="row mx-0">
                                    <div class="col-auto px-0">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 1.5C3.73858 1.5 1.5 3.73858 1.5 6.5C1.5 8.05436 2.2092 9.44363 3.32285 10.3611C3.11388 9.77983 3 9.15321 3 8.5C3 5.46243 5.46243 3 8.5 3C9.1532 3 9.77981 3.11387 10.3611 3.32285C9.44358 2.20914 8.05436 1.5 6.5 1.5ZM3.77241 11.8455L3.92303 11.5509C4.90926 13.0275 6.59105 14 8.5 14C11.5376 14 14 11.5376 14 8.5C14 6.52981 12.9641 4.80157 11.4072 3.83027L11.7712 3.6318C10.7546 1.76706 8.77564 0.5 6.5 0.5C3.18629 0.5 0.5 3.18629 0.5 6.5C0.5 8.83236 1.83092 10.853 3.77241 11.8455ZM8.5 4C6.01472 4 4 6.01472 4 8.5C4 10.9853 6.01472 13 8.5 13C10.9853 13 13 10.9853 13 8.5C13 6.01472 10.9853 4 8.5 4ZM10.0606 10.7677C10.2559 10.963 10.5725 10.963 10.7677 10.7677C10.963 10.5725 10.963 10.2559 10.7677 10.0606L7.2322 6.5251C7.03694 6.32983 6.72036 6.32984 6.5251 6.5251C6.32984 6.72036 6.32983 7.03694 6.5251 7.2322L10.0606 10.7677Z" fill="var(--primary-variant)"></path></svg>
                                    </div>
                                    <div class="col pl-10 pr-0">
                                        <p class="mb-5"><?= not_empty($casinoData['wagering-title'])? $casinoData['wagering-title'] : $textData['wagering'];?>:</p>
                                        <?= not_empty($casinoData['wagering']) || $casinoData['wagering'] === '0'? '<p class="fw-m">'. $casinoData['wagering'].'</p>':'';?>
                                    </div>
                                </div>
                            </div>
                        <?php endif;?>
                        </div>
                        <?= not_empty($casinoData['term']) ? '<div class="cb__tc tc-n mt-u-sm-30">'. $casinoData['term'].'</div>':'';?>
                    </div>
                </div>
            <?php endif;?>
        </div>
    </div>
    <?php if(not_empty(get_the_content())):?>
        <div class="container">
            <div class="wp-editor mb-30"><?= the_content()?></div>
        </div>
    <?php endif;?>


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
</article>
<?php get_footer()?>