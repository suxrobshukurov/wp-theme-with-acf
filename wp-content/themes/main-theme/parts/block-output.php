<?php
$blockData = $args['block'];
$textDataCasino = get_field('casino-option-text', 'option');

if ($blockData['show']):
    if ($blockData['has-anchor']):?>
        <div class="anchor" id="<?= $blockData['anchor']; ?>"></div>
    <?php endif; ?>
    <div class="ts of-h py-u-sm-40 py-o-xs-25 <?= $blockData['class-name']?>"
         style="background-color: <?= $blockData['bg']; ?>;color: <?= $blockData['color']; ?> ">
        <div class="container">
            <?= !empty($blockData['title']) ? '<h2 class="ta-u-sm-c ta-o-xs-c title  h2 0" style="color: ' . $blockData['text-color'] . '">' . $blockData['title'] . '</h2>' : ''; ?>
            <?= !empty($blockData['subtitle']) ? '<p class="ta-u-sm-c ta-o-xs-c title  title__sub wp-editor my-20 mx-u-sm-a fs-u-sm-15">' . $blockData['subtitle'] . '</p>' : ''; ?>
            <?php if($blockData['choice'] === 'v1'):
                $data = $blockData['v1'];
                $newsData = get_field('news-data', 'option');
            ?>
                <?php if(not_empty($data['news'])):?>
                <div class="row-u-sm mx-d-sm-n10 js-append-news">
                    <?php foreach ($data['news'] as $itemId):
                        $newData = get_field('new-data', $itemId)
                        ?>
                        <div class="col-u-sm-4 px-d-sm-10 mb-20">
                            <article class="ln__box h-100 d-f f-c p-u-lg-25 p-d-md-20 br-10 bg-w of-h fs-14 ps-r">
                                <?php if(!empty($newData['image'])) :?>
                                    <figure class="ln__thumb of-h mb-20 h-0 of-h br-6 ps-r">
                                        <img width="697"
                                             height="435"
                                             alt="<?=get_the_title($itemId);?>"
                                             loading="lazy"
                                             data-src="<?=$newData['image'];?>"
                                             class="br-6 wp-post-image ls-is-cached lazyloaded"
                                             src="<?=$newData['image'];?>">
                                        <noscript>
                                            <img width="697"
                                                 height="435"
                                                 alt="<?=get_the_title($itemId)?>"
                                                 loading="lazy"
                                                 data-src="<?=$newData['image'];?>"
                                                 class="br-6 wp-post-image lazyload"
                                                 src="<?=$newData['image'];?>"
                                            />
                                        </noscript>
                                    </figure>
                                <?php else:?>
                                    <figure class="ln__thumb of-h mb-20 h-0 of-h br-6 ps-r">
                                        <img width="360"
                                             height="180"
                                             alt="<?=get_the_title($itemId);?>"
                                             loading="lazy"
                                             data-src="<?=ALFA_IMG_DEFAULT;?>"
                                             class="br-6 wp-post-image ls-is-cached lazyloaded"
                                             src="<?=ALFA_IMG_DEFAULT;?>">
                                        <noscript>
                                            <img width="360"
                                                 height="180"
                                                 alt="<?=get_the_title($itemId)?>"
                                                 loading="lazy"
                                                 class="br-6 wp-post-image lazyload"
                                                 src="<?=ALFA_IMG_DEFAULT;?>"
                                            />
                                        </noscript>
                                    </figure>
                                <?php endif;?>
                                <?= !empty(get_the_title($itemId)) ?'<h3 class="h5 tc-b my-a">'. get_the_title($itemId).'</h3>':'';?>
                                <?php if(!empty(get_the_excerpt($itemId))):?>
                                    <div class="wp-editor my-20 tc-n">
                                        <?= esc_html_e(wp_trim_words(get_the_excerpt($itemId), 25, '...'));?>
                                    </div>
                                <?php endif;?>
                                <div class="d-f jc-sb">
                                    <span class="d-f ai-c">
                                        <svg class="mr-5" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.33325 0.5C4.60939 0.5 4.83325 0.723858 4.83325 1L4.83325 2.50001L4.96342 2.5H9.03658C9.08038 2.5 9.12377 2.5 9.16675 2.50001L9.16675 1C9.16675 0.723857 9.39061 0.5 9.66675 0.5C9.94289 0.5 10.1667 0.723858 10.1667 1L10.1667 2.50717C10.5808 2.51587 10.9445 2.53511 11.2612 2.57768C11.8612 2.65836 12.3665 2.83096 12.7678 3.23223C13.169 3.63351 13.3416 4.13876 13.4223 4.73883C13.5 5.31681 13.5 6.0517 13.5 6.96343V9.03657C13.5 9.9483 13.5 10.6832 13.4223 11.2612C13.3416 11.8612 13.169 12.3665 12.7678 12.7678C12.3665 13.169 11.8612 13.3416 11.2612 13.4223C10.6832 13.5 9.9483 13.5 9.03657 13.5H4.96343C4.0517 13.5 3.31681 13.5 2.73883 13.4223C2.13876 13.3416 1.63351 13.169 1.23223 12.7678C0.830956 12.3665 0.65836 11.8612 0.577683 11.2612C0.499976 10.6832 0.499987 9.94832 0.5 9.03659V9.03658V6.96342V6.96341C0.499987 6.05169 0.499976 5.31681 0.577683 4.73883C0.65836 4.13876 0.830956 3.63351 1.23223 3.23223C1.63351 2.83096 2.13876 2.65836 2.73883 2.57768C3.05546 2.53511 3.41917 2.51587 3.83325 2.50717L3.83325 1C3.83325 0.723857 4.05711 0.5 4.33325 0.5ZM9.16675 3.50003V3.66667C9.16675 3.94281 9.3906 4.16667 9.66675 4.16667C9.94289 4.16667 10.1667 3.94281 10.1667 3.66667V3.50743C10.5461 3.51561 10.8602 3.53277 11.1279 3.56877C11.6171 3.63453 11.8762 3.75483 12.0607 3.93934C12.2452 4.12385 12.3655 4.3829 12.4312 4.87208C12.4681 5.14598 12.4852 5.46835 12.4931 5.85943C12.443 5.84253 12.3893 5.83337 12.3334 5.83337H1.66675C1.61084 5.83337 1.55708 5.84255 1.50688 5.85948C1.51483 5.46838 1.53194 5.14599 1.56877 4.87208C1.63453 4.3829 1.75483 4.12385 1.93934 3.93934C2.12385 3.75483 2.3829 3.63453 2.87208 3.56877C3.13985 3.53277 3.45394 3.51561 3.83325 3.50743V3.66667C3.83325 3.94281 4.05711 4.16667 4.33325 4.16667C4.60939 4.16667 4.83325 3.94281 4.83325 3.66667V3.50003L5 3.5H9C9.05659 3.5 9.11216 3.5 9.16675 3.50003ZM1.5 7L1.50004 6.8049C1.55218 6.82334 1.60829 6.83337 1.66675 6.83337H12.3334C12.3918 6.83337 12.4479 6.82336 12.5 6.80496L12.5 7V9C12.5 9.95695 12.4989 10.6244 12.4312 11.1279C12.3655 11.6171 12.2452 11.8762 12.0607 12.0607C11.8762 12.2452 11.6171 12.3655 11.1279 12.4312C10.6244 12.4989 9.95694 12.5 9 12.5H5C4.04306 12.5 3.37565 12.4989 2.87208 12.4312C2.3829 12.3655 2.12385 12.2452 1.93934 12.0607C1.75483 11.8762 1.63453 11.6171 1.56877 11.1279C1.50106 10.6244 1.5 9.95695 1.5 9V7ZM5 9.16663C4.72386 9.16663 4.5 9.39048 4.5 9.66663C4.5 9.94277 4.72386 10.1666 5 10.1666H9C9.27614 10.1666 9.5 9.94277 9.5 9.66663C9.5 9.39048 9.27614 9.16663 9 9.16663H5Z" fill="var(--primary-variant)"></path>
                                        </svg>
                                        <time class="tc-pv fw-n fs-12"><?=get_the_date('j F Y', $itemId)?></time>
                                    </span>
                                    <a href="<?= get_permalink($itemId)?>" class="tc-n fw-m td-u fs-12 l-str">
                                        <?=!empty($newsData['more-btn'])?$newsData['more-btn']: 'read more';?>
                                    </a>
                                </div>
                            </article>
                        </div>

                    <?php endforeach;?>
                </div>
                <?php endif;?>
            <?php elseif($blockData['choice'] === 'v2'):
                $data = $blockData['v2'];
                ?>
                <?php if(not_empty($data['casino'][0])):?>
                    <div class="row-u-sm">
                        <?php foreach ($data['casino'] as $key => $item) :
                            $itemData = get_field('casino-data', $item);
                            ?>
                            <div class="col-u-md-3 col-o-sm-6 mb-u-sm-30 mb-o-xs-20">
                                <div class="cc br-10 of-h h-100 ps-r">
                                    <div class="br-u-sm-10  of-h bg-w h-100">
                                        <div class="row mx-n10 p-o-xs-10 f-u-sm-c h-100">
                                            <div class="col-o-xs-5 px-10 mb-o-xs-10">
                                                <figure class="cc__thumb ps-r br-o-xs-6 of-h" style="background-color: <?=$itemData['bg']?>">
                                                    <a href="<?= get_permalink($item)?>" class="cc__thumb__link foc p-20">
                                                        <img width="180"
                                                             height="180"
                                                             alt="<?= not_empty($itemData['logo']['alt']) ? $itemData['logo']['alt'] : $itemData['name'];?>"
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
                                                        <div class="cc__rating d-if ai-c mb-o-xs-15 py-8 px-10 bg-b br-10 tc-w">
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
                <?php endif;?>
            <?php elseif($blockData['choice'] === 'v3'):
                $data = $blockData['v3'];
                ?>
                <?php if(not_empty($data['slot'][0])) :?>
                <div class="row-u-sm ">
                    <?php foreach ($data['slot'] as $item) :
                        $itemData = get_field('slot-data', $item);
                        ?>
                        <div class="col-u-md-3 col-o-sm-6 mb-25">
                            <div class="ls__box h-100 p-20 d-f f-c br-10 of-h bg-w">
                                <figure class="mb-15" style="flex: 1">
                                    <a href="<?= get_permalink($item);?>" class="ls__thumb d-b ps-r of-h br-6 fs-0">
                                        <img width="650"
                                             height="450"
                                             alt="<?= not_empty($itemData['image']['alt']) ? $itemData['image']['alt'] : $itemData['name']?>"
                                             loading="lazy"
                                             data-src="<?=not_empty($itemData['image']['url']) ? $itemData['image']['url'] : ALFA_IMG_DEFAULT;?>"
                                             class="attachment-CF_slot_box size-CF_slot_box wp-post-image lazyloaded"
                                             src="<?=not_empty($itemData['image']['url']) ? $itemData['image']['url'] : ALFA_IMG_DEFAULT;?>"
                                            style="height: 192px"
                                        >
                                        <noscript>
                                            <img width="650"
                                                 height="450"
                                                 alt="<?= not_empty($itemData['image']['alt']) ? $itemData['image']['alt'] : $itemData['name']?>"
                                                 title="<?= not_empty($itemData['image']['title']) ? $itemData['image']['title'] : $itemData['name']?>"
                                                 loading="lazy"
                                                 class="attachment-CF_slot_box size-CF_slot_box wp-post-image lazyload"
                                                 src="<?=not_empty($itemData['image']['url']) ? $itemData['image']['url'] : ALFA_IMG_DEFAULT;?>"
                                                 style="height: 192px"
                                            />
                                        </noscript>
                                    </a>
                                </figure>

                                <h3 class="fs-15 fw-b ta-c tc-d my-a">
                                    <a href="<?=get_permalink($item);?>" >
                                        <?=not_empty($itemData['name']) ? $itemData['name'] : get_the_title($item);?>
                                    </a>
                                </h3>

                                <div class="row ai-c ng mt-15" style="flex: 1">
                                    <div class="col">
                                        <div class="row ai-c ng pr-10">
                                            <div class="col-auto">
                                                <svg class="mr-5" width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17.7774 7.6633L15.7654 7.06331C15.6263 6.5781 15.435 6.10937 15.1948 5.66531L16.1798 3.82332C16.2168 3.75379 16.2303 3.67421 16.2184 3.59639C16.2065 3.51857 16.1698 3.44666 16.1137 3.39132L14.6783 1.95133C14.623 1.89533 14.551 1.85867 14.4731 1.84678C14.3952 1.83489 14.3155 1.84841 14.2459 1.88533L12.4141 2.86333C11.9653 2.61172 11.4899 2.4105 10.9967 2.26333L10.3962 0.277341C10.3708 0.204151 10.3228 0.140901 10.2591 0.0966946C10.1954 0.0524886 10.1193 0.0296065 10.0418 0.0313419H8.01183C7.93384 0.0317046 7.858 0.0569225 7.79535 0.103325C7.7327 0.149728 7.6865 0.214895 7.66349 0.289341L7.0629 2.26933C6.56562 2.41572 6.08621 2.61696 5.63351 2.86933L3.83174 1.89733C3.76215 1.86041 3.68249 1.84689 3.60459 1.85878C3.52669 1.87067 3.45471 1.90733 3.39932 1.96333L1.9399 3.38532C1.88384 3.44066 1.84714 3.51257 1.83524 3.59039C1.82334 3.66821 1.83687 3.74779 1.87383 3.81732L2.84678 5.61731C2.59457 6.06767 2.39314 6.54458 2.2462 7.03931L0.258252 7.6393C0.183733 7.66229 0.118503 7.70844 0.0720543 7.77103C0.0256057 7.83362 0.000363099 7.90939 0 7.9873V10.0153C0.000363099 10.0932 0.0256057 10.169 0.0720543 10.2316C0.118503 10.2941 0.183733 10.3403 0.258252 10.3633L2.25821 10.9633C2.40676 11.4498 2.60815 11.9186 2.85879 12.3613L1.87383 14.2453C1.83687 14.3148 1.82334 14.3944 1.83524 14.4722C1.84714 14.55 1.88384 14.6219 1.9399 14.6773L3.3753 16.1113C3.43069 16.1673 3.50267 16.2039 3.58057 16.2158C3.65846 16.2277 3.73812 16.2142 3.80772 16.1773L5.66353 15.1873C6.10254 15.4239 6.56563 15.613 7.04488 15.7513L7.64547 17.7733C7.66848 17.8477 7.71468 17.9129 7.77733 17.9593C7.83998 18.0057 7.91582 18.0309 7.99381 18.0312H10.0238C10.1018 18.0309 10.1776 18.0057 10.2403 17.9593C10.3029 17.9129 10.3491 17.8477 10.3721 17.7733L10.9727 15.7453C11.4479 15.6063 11.9069 15.4172 12.3421 15.1813L14.2099 16.1773C14.2795 16.2142 14.3591 16.2277 14.437 16.2158C14.5149 16.2039 14.5869 16.1673 14.6423 16.1113L16.0777 14.6773C16.1338 14.6219 16.1705 14.55 16.1824 14.4722C16.1943 14.3944 16.1807 14.3148 16.1438 14.2453L15.1468 12.3853C15.3854 11.9489 15.5767 11.4883 15.7174 11.0113L17.7413 10.4113C17.8159 10.3883 17.8811 10.3421 17.9275 10.2796C17.974 10.217 17.9992 10.1412 17.9996 10.0633V8.0173C18.0031 7.94269 17.9837 7.86879 17.944 7.80551C17.9043 7.74223 17.8461 7.69261 17.7774 7.6633ZM9.02682 12.3313C8.3735 12.3313 7.73486 12.1377 7.19165 11.7751C6.64843 11.4125 6.22505 10.8971 5.97504 10.2941C5.72502 9.69115 5.65961 9.02764 5.78706 8.3875C5.91452 7.74737 6.22912 7.15937 6.69109 6.69786C7.15305 6.23634 7.74163 5.92205 8.38239 5.79472C9.02316 5.66739 9.68733 5.73274 10.2909 5.98251C10.8945 6.23228 11.4104 6.65524 11.7734 7.19792C12.1363 7.7406 12.33 8.37862 12.33 9.0313C12.33 9.90651 11.982 10.7459 11.3626 11.3647C10.7431 11.9836 9.90289 12.3313 9.02682 12.3313Z" fill="var(--primary-variant)"></path>
                                                </svg>
                                            </div>
                                            <div class="ls__providers col fs-14 tc-d fw-m">
                                                <?php foreach ($itemData['softwares'] as $key => $software) {
                                                    $seporat =  $key < count($itemData['softwares']) - 1 ? ", ": '';
                                                    if($software['value-type'] === 'link') {
                                                        echo '<a class="td-u" target="_blank" href="'.$software['value-link'].'">'.$software['value-link-text'].'</a>'. $seporat;
                                                    } elseif ($software['value-type'] === 'text') {
                                                        echo $software['value-text']. $seporat;
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if(not_empty($itemData['rating'])):?>
                                        <div class="col-auto ml-a">
                                            <div class="d-if ai-c py-8 px-10 bg-b br-10 tc-w fw-m">
                                                <svg class="mr-5 mt-n2" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 0L7.85714 3.95L12 4.6L9 7.65L9.71429 12L6 9.95L2.28571 12L3 7.65L0 4.6L4.14286 3.95L6 0Z" fill="var(--primary)"></path></svg>
                                                <span><?= $itemData['rating'];?></span>
                                            </div>
                                        </div>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
                <?php endif;?>
            <?php elseif($blockData['choice'] === 'v4'):
                $data = $blockData['v4'];
                ?>
                <?php if(not_empty($data['casino'][0])):?>
                    <div class="cl--ordered">
                    <?php foreach ($data['casino'] as $key => $item) :
                        $itemData = get_field('casino-data', $item);
                        $radIdForItem = random_int(0, 999999);
                        ?>
                        <div class="cl mb-25 ps-r br-10 bg-sv" data-casino-item id="casinoItem<?= ($key + 1) . $radIdForItem ?>">
                            <?php if($key === 0) :?>
                                <svg class="cl__star" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.7678 7.43769L18.8042 4.47213C17.6068 0.786892 12.3932 0.786891 11.1958 4.47213L10.2322 7.43769C9.96446 8.26174 9.19654 8.81966 8.33009 8.81966H5.21192C1.33703 8.81966 -0.274077 13.7781 2.86078 16.0557L5.38343 17.8885C6.08441 18.3978 6.37772 19.3006 6.10998 20.1246L5.14641 23.0902C3.949 26.7754 8.16692 29.8399 11.3018 27.5623L13.8244 25.7295C14.5254 25.2202 15.4746 25.2202 16.1756 25.7295L18.6982 27.5623C21.8331 29.8399 26.051 26.7754 24.8536 23.0902L23.89 20.1246C23.6223 19.3006 23.9156 18.3978 24.6166 17.8885L27.1392 16.0557C30.2741 13.7781 28.663 8.81966 24.7881 8.81966H21.6699C20.8035 8.81966 20.0355 8.26174 19.7678 7.43769Z" fill="var(--primary)" stroke="white" stroke-width="2"></path></svg>
                            <?php endif;?>
                            <div class="pl-10 py-10 pr-u-lg-20 pr-d-md-10 br-t-10">
                                <div class="row ai-u-sm-c mx-n10">
                                    <div class="col-u-lg-4 col-o-md-5 col-o-sm-auto col-o-xs-5 px-10">
                                        <div class="row-u-sm ai-u-sm-c mx-u-sm-n10">
                                            <div class="col-u-sm-auto px-u-sm-10">
                                                <figure class="br-6" style="background-color: <?=$itemData['bg']?>">
                                                    <a href="<?= get_permalink($item)?>"
                                                       class="cl__thumb foc p-20 of-h">
                                                        <img width="86"
                                                             height="86"
                                                             alt="<?= not_empty($itemData['logo']['alt']) ? $itemData['logo']['alt'] : $itemData['name'];?>"
                                                             loading="lazy"
                                                             class="attachment-CF_casino_card size-CF_casino_card wp-post-image ls-is-cached lazyloaded"
                                                             data-src="<?= not_empty($itemData['logo']['url']) ? $itemData['logo']['url'] : ALFA_IMG_DEFAULT;?>"
                                                             src="<?= not_empty($itemData['logo']['url']) ? $itemData['logo']['url'] : ALFA_IMG_DEFAULT;?>"
                                                                />
                                                        <noscript>
                                                            <img width="86"
                                                                 height="86"
                                                                 alt=""
                                                                 class="attachment-CF_casino_card size-CF_casino_card wp-post-image lazyload"
                                                                 loading="lazy"
                                                                 src="<?= not_empty($itemData['logo']['url']) ? $itemData['logo']['url'] : ALFA_IMG_DEFAULT;?>"
                                                            />
                                                        </noscript>
                                                    </a>
                                                </figure>

                                                <div class="d-u-sm-n mt-o-xs-n5 fw-o-xs-n fs-14 ta-o-xs-c ps-o-xs-r">
                                                    <div class="cc__rating d-o-xs-if ai-o-xs-c mb-o-xs-15 p-o-xs-5 bg-o-xs-b br-o-xs-6 tc-o-xs-w">
                                                        <svg class="mr-5 mt-n2" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 0L7.85714 3.95L12 4.6L9 7.65L9.71429 12L6 9.95L2.28571 12L3 7.65L0 4.6L4.14286 3.95L6 0Z" fill="var(--primary)"></path></svg>
                                                        <?=not_empty($itemData['rating']) ? $itemData['rating']: '';?>
                                                    </div>

                                                    <a href="<?= get_permalink($item)?>" class="tc-o-xs-d td-o-xs-u d-o-xs-b">
                                                        <?=$textDataCasino['read-more'] . ' ' . $itemData['name'];?>
                                                    </a>

                                                </div>
                                            </div>

                                            <div class="col-u-md d-d-sm-n px-u-md-10">
                                                <?php if($key === 0):?>
                                                    <p class="cl__rec d-u-md-ib px-u-md-10 py-u-md-5 mb-u-md-10 br-u-md-p bg-u-md-pv tc-p tt-u-md-u fw-u-md-n fs-u-lg-12 fs-o-md-11"><?= $data['top-text']?></p>
                                                <?php endif;?>
                                                <h3 class="h5 tc-d fw-b">
                                                    <a href="<?= get_permalink($item)?>" class="">
                                                        <?= $itemData['name'];?>
                                                    </a>
                                                </h3>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-u-lg-8 col-o-md-7 col-o-sm col-o-xs-7 px-10">
                                        <div class="row ai-u-sm-c f-o-xs-c mx-n10 fw-n h-o-xs-100">
                                            <div class="col-u-sm-4 my-o-xs-a px-10 ta-u-sm-c">
                                                <?php if($key === 0):?>
                                                    <p class="cl__rec d-u-md-n d-d-sm-ib px-d-sm-10 py-d-sm-5 mb-d-sm-10 br-d-sm-p bg-d-sm-p tt-d-sm-u fw-d-sm-n"><?= $data['top-text']?></p>
                                                <?php endif;?>

                                                <p class="mb-10 fs-12 fw-n tt-u-sm-u d-d-sm-n"><?= not_empty($itemData['welcome-bonus-title']) ? $itemData['welcome-bonus-title'] : $textDataCasino['welcome'];?></p>

                                                <?= not_empty($itemData['welcome-bonus']) ? '<p class="tc-pv fw-bl fs-u-sm-28 fs-o-xs-18">'.$itemData['welcome-bonus'] .'</p>': '';?>

                                            </div>

                                            <div class="col-u-sm-4 d-o-xs-n ta-u-sm-c px-u-sm-10">
                                                <div class="d-u-sm-if ai-u-sm-c mb-u-sm-15 py-u-sm-8 px-u-sm-10 bg-u-sm-b br-u-sm-10 fw-sb tc-u-sm-w">
                                                    <svg class="mr-5 mt-n2" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 0L7.85714 3.95L12 4.6L9 7.65L9.71429 12L6 9.95L2.28571 12L3 7.65L0 4.6L4.14286 3.95L6 0Z" fill="var(--primary)"></path></svg>
                                                    <?=not_empty($itemData['rating']) ? $itemData['rating']: '';?>
                                                </div>

                                                <a href="<?= get_permalink($item)?>"  class="d-b fs-14 tc-d td-u">
                                                    <?=$textDataCasino['read-more'] . ' ' . $itemData['name'];?>
                                                </a>

                                            </div>

                                            <div class="col-u-sm-4 px-10 ta-u-sm-c">
                                                <div class="cl__res d-o-xs-n d-u-sm-if ai-u-sm-c mb-u-sm-10 fs-u-sm-12">
                                                    <?= not_empty($itemData['advantages'][0]['value'])
                                                        ? '<div class="col-u-sm ta-l px-5">'.$itemData['advantages'][0]['value'] .'</div>
                                                            <div class="col-u-sm-auto px-u-sm-0"><svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.23875 3.1486C6.21651 2.78059 7.28498 2.7281 8.2941 2.9985C8.82756 3.14144 9.3759 2.82486 9.51884 2.29139C9.66178 1.75792 9.3452 1.20959 8.81174 1.06665C7.39897 0.688096 5.90311 0.761582 4.53425 1.27678C3.16539 1.79199 1.99229 2.72302 1.17971 3.93913C0.367135 5.15525 -0.0441056 6.59534 0.00374943 8.05716C0.0516046 9.51898 0.556151 10.9291 1.44653 12.0895C2.33691 13.2498 3.56838 14.1021 4.96801 14.5267C6.36763 14.9513 7.86509 14.9268 9.25008 14.4566C10.6351 13.9865 11.838 13.0943 12.6899 11.9055C13.5419 10.7166 14 9.29073 14 7.82813C14 7.27584 13.5523 6.82813 13 6.82813C12.4477 6.82813 12 7.27584 12 7.82813C12 8.87284 11.6728 9.89132 11.0642 10.7405C10.4557 11.5897 9.59647 12.227 8.6072 12.5628C7.61792 12.8986 6.54831 12.9161 5.54858 12.6128C4.54885 12.3096 3.66922 11.7008 3.03324 10.8719C2.39725 10.0431 2.03686 9.03588 2.00268 7.99172C1.9685 6.94756 2.26224 5.91893 2.84265 5.05027C3.42307 4.18162 4.26099 3.5166 5.23875 3.1486ZM13.0861 3.82013C13.4498 3.40449 13.4076 2.77273 12.992 2.40905C12.5764 2.04536 11.9446 2.08748 11.5809 2.50312L7.52493 7.13853L5.60017 5.69496C5.15834 5.36358 4.53154 5.45313 4.20017 5.89496C3.86879 6.33678 3.95834 6.96358 4.40017 7.29496L6.32493 8.73853C7.16188 9.36624 8.34117 9.24287 9.03009 8.45554L13.0861 3.82013Z" fill="#25B573"></path></svg></div>
                                                            '
                                                        :'';?>
                                                </div>

                                                <?php if(not_empty($itemData['link'])):?>
                                                    <button on="tap:AMP.navigateTo(url='<?= $itemData['link'];?>', target='_blank')"
                                                            data-href="<?= $itemData['link'];?>"
                                                            formtarget="_blank"
                                                            type="submit"
                                                            rel="nofollow"
                                                            target="_blank"
                                                            class="btn w-100 mt-o-xs-20 tt-u br-p tc-w btn--p"
                                                            title="<?= not_empty($itemData['link-text']) ? $itemData['link-text'] : $textDataCasino['reg'];?>"
                                                    >
                                                        <?= not_empty($itemData['link-text']) ? $itemData['link-text'] : $textDataCasino['reg'];?>
                                                    </button>
                                                <?php endif;?>
                                                <button
                                                    class="cl__btn-mi w-100 py-10 tc-n td-u fs-14 js-lc-more loaded"
                                                    on="tap:casinoItem<?= ($key + 1) . $radIdForItem ?>.toggleClass(class='cl--opened')"
                                                >
                                                    <?= not_empty($textDataCasino['more-info']) ? $textDataCasino['more-info'] :'';?>
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="ml-5 va-m" width="14px" height="14px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid"><g><path d="M50 19A31 31 0 1 0 81 50.00000000000001" fill="none" stroke="var(--neutral)" stroke-width="10" class="stroke"></path><path d="M49 -1L49 39L69 19L49 -1" fill="var(--neutral)" class="fill"></path>
                                                            <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform></g>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cl__mi py-15 px-20 bg-w br-b-10">
                                <div class="row-u-sm mx-u-lg-n20">
                                    <div class="col-u-sm-4 px-u-lg-20">
                                        <?= not_empty($itemData['general-title'])
                                            ? '<p class="tc-pv mb-10 fs-12">'. $itemData['general-title'].'</p>'
                                            : '<p class="tc-pv mb-10 fs-12">'. $textDataCasino['general-info'].'</p>'
                                        ;?>
                                        <?php foreach ($itemData['general-info'] as $item) :?>
                                        <?php if(not_empty($item['title']) || not_empty($item['text'])|| not_empty($item['link'])|| not_empty($item['page'])):?>
                                            <div class="cd__item fs-12 row mx-0">
                                                <?= not_empty($item['title']) ? '<div class="col pl-0 pr-5 ws-nw">'.$item['title'].'</div>':'';?>
                                                <?php if($item['value-type'] === 'text') {
                                                    echo '<div class="col-auto pl-5 pr-0">'.$item['text'].'</div>';
                                                } elseif ($item['value-type'] === 'link') {
                                                    echo '<div class="col-auto pl-5 pr-0">
                                                            <a class="td-u" href="'.$item['link'].'" target="_blank" rel="nofollow" >'
                                                            .$item['link-text'].
                                                            '</a></div>';
                                                } elseif ($item['value-type'] === 'page') {
                                                    echo '<div class="col-auto pl-5 pr-0">
                                                            <a class="td-u" href="'.$item['page'].'" target="_blank" rel="nofollow" >'
                                                            .$item['page-text'].
                                                            '</a>
                                                          </div>';
                                                } ?>
                                            </div>
                                        <?php endif;?>
                                        <?php endforeach;?>
                                        <?php if(not_empty($itemData['lang-value'])):?>
                                            <div class="cd__item fs-12 row mx-0">
                                                <?= not_empty($itemData['lang-title'])
                                                    ? '<div class="col-auto pl-0 pr-5 ws-nw">'.$itemData['lang-title'].'</div>'
                                                    : '<div class="col-auto pl-0 pr-5 ws-nw">'.$textDataCasino['languages'].'</div>'
                                                ;?>
                                                <div class="col pl-5 pr-0 ta-r"><?= $itemData['lang-value'];?></div>
                                            </div>
                                        <?php endif;?>
                                    </div>

                                    <div class="col-u-sm-4 px-u-lg-20">
                                        <p class="tc-pv mb-10 fs-12"><br></p>
                                        <?php if(not_empty($itemData['gtypes'][0]['text'])):?>
                                            <div class="cd__item fs-12 row mx-0">
                                                <?= not_empty($itemData['gtypes-title'])
                                                    ? '<div class="col pl-0 pr-5 ws-nw">'.$itemData['gtypes-title'].'</div>'
                                                    : '<div class="col pl-0 pr-5 ws-nw">'.$textDataCasino['game-types'].'</div>'
                                                ;?>
                                                <div class="col-8 pl-5 pr-0 ta-r">
                                                    <?php foreach ($itemData['gtypes'] as $key => $item) {
                                                        $seporat = $key < count($itemData['gtypes']) - 1 ? ', ': '';
                                                        echo $item['text'] . $seporat;
                                                    }?>
                                                </div>
                                            </div>
                                        <?php endif;?>

                                        <?php if(not_empty($itemData['providers'][0]['link']) || not_empty($itemData['providers'][0]['text'])):?>
                                            <div class="cd__item fs-12 row mx-0">
                                                <?= not_empty($itemData['softwate-title'])
                                                    ? '<div class="col pl-0 pr-5 ">'. $itemData['softwate-title'].'</div>'
                                                    :'<div class="col pl-0 pr-5">'. $textDataCasino['software-providers'].'</div>'
                                                ;?>
                                                <div class="col-8 pl-5 pr-0 ta-r">
                                                    <?php foreach ($itemData['providers'] as $key => $item) {
                                                        $seporat = $key < count($itemData['gtypes']) - 1 ? ', ': '';
                                                        if($item['value-type'] === 'text') {
                                                            echo $item['text'] . $seporat;
                                                        } elseif ($item['value-type'] === 'link') {
                                                            echo '<a class="td-u" href="'.$item['link'].'" target="_blank" rel="nofollow">'
                                                            .$item['link-text'].
                                                            '</a>' . $seporat;
                                                        }
                                                    } ?>
                                                </div>
                                            </div>
                                        <?php endif;?>
                                    </div>

                                    <div class="col-u-sm-4 px-u-lg-20">
                                        <?= not_empty($itemData['banking-title'])
                                            ? '<p class="tc-pv mb-10 fs-12">'.$itemData['banking-title'].'</p>'
                                            : '<p class="tc-pv mb-10 fs-12">'.$textDataCasino['banking'].'</p>'
                                        ;?>
                                        <?php if(not_empty($itemData['currencies'][0]['value-img']) || not_empty($itemData['currencies'][0]['value-text'])) :?>
                                        <div class="fs-12 py-8 mb-10">
                                        <?= not_empty($itemData['currencies-title'])
                                            ? '<div class="mb-10">'.$itemData['currencies-title'].'</div>'
                                            : '<div class="mb-10">'.$textDataCasino['currencies'].'</div>'
                                        ;?>
                                            <div class="d-f f-w m-n5 ai-c">
                                                <?php foreach ($itemData['currencies'] as $item) :?>
                                                    <?php if($item['value-type'] === 'text') :?>
                                                        <?= not_empty($item['value-text']) ? '<strong class=" m-5 py-5 px-5 br-6 bg-l tc-d fs-12">'. $item['value-text'].'</strong>':'';?>
                                                    <?php elseif ($item['value-type'] === 'image'):?>
                                                        <?php if(not_empty($item['value-img'])):?>
                                                            <span class=" m-5 py-5 px-5 br-6 bg-l tc-d fs-12 bg-w">
                                                                <img alt="<?= not_empty($item['value-img']['alt']) ? $item['value-img']['alt'] : 'none';?>"
                                                                     title="<?= not_empty($item['value-img']['title']) ? $item['value-img']['title'] : 'none';?>"
                                                                     height="16"
                                                                     width="19"
                                                                     data-src="<?= not_empty($item['value-img']['url']) ? $item['value-img']['url']: ALFA_IMG_DEFAULT;?>"
                                                                     class="attachment-CF_term size-CF_term ls-is-cached lazyloaded"
                                                                     src="<?= not_empty($item['value-img']['url']) ? $item['value-img']['url']: ALFA_IMG_DEFAULT;?>">
                                                                <noscript>
                                                                    <img alt="<?= not_empty($item['value-img']['alt']) ? $item['value-img']['alt'] : 'none';?>"
                                                                         title="<?= not_empty($item['value-img']['title']) ? $item['value-img']['title'] : 'none';?>"
                                                                         height="16"
                                                                         width="19"
                                                                         class="attachment-CF_term size-CF_term lazyload"
                                                                         src="<?= not_empty($item['value-img']['url']) ? $item['value-img']['url']: ALFA_IMG_DEFAULT;?>" />
                                                                </noscript>
                                                            </span>
                                                        <?php endif;?>
                                                    <?php endif;?>
                                                <?php endforeach;?>
                                            </div>
                                        </div>
                                        <?php endif;?>
                                        <?php if(not_empty($itemData['deposit'][0]['value-img']) || not_empty($itemData['deposit'][0]['value-text'])):?>
                                            <div class="py-8 fs-12">
                                                <?= not_empty($itemData['deposit-title'])
                                                    ? '<div class="mb-10">'.$itemData['deposit-title'].'</div>'
                                                    : '<div class="mb-10">'.$textDataCasino['deposit-methods'].'</div>'
                                                ;?>
                                                <div class="d-f f-w m-n5">
                                                    <?php foreach ($itemData['deposit'] as $item) :?>
                                                        <span class="cd__payment  foc m-5 br-6 of-h">
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
                                                </div>
                                            </div>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
                <?php endif;?>
            <?php endif;?>
        </div>
    </div>
<?php endif; ?>
