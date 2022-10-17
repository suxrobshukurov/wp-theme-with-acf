<?php
$blockData = $args['block'];

if($blockData['show']):
    ?>
    <?php if ($blockData['choice'] === 'v1'):
        $data = $blockData['v1'];
        ?>
        <?= !empty($data['title']) ? '<h3 class="h5 mb-15 tc-d">'. $data['title'] .'</h3>':'';?>
        <?php if(count($data['news']) > 0):?>
            <?php foreach ($data['news'] as $item) :
                $itemData = get_field('new-data', $item)
            ?>
                <div class="p-u-lg-15 p-o-md-10 p-d-sm-15 mb-10 bg-l br-10 row mx-0 ps-r">
                    <?php if(!empty($itemData['image']) && !empty(get_the_title($item))):?>
                        <div class="col-auto pl-0 pr-u-lg-15 pr-o-md-10 pr-d-sm-15">
                            <figure class="ns__thumb">
                                <img width="90"
                                     height="65"
                                     alt="<?= get_the_title($item)?>"
                                     loading="lazy"
                                     data-src="<?= $itemData['image']?>"
                                     class="br-6 wp-post-image lazyloaded"
                                     src="<?= $itemData['image']?>">
                                <noscript>
                                    <img width="90"
                                         height="65"
                                         alt="<?= get_the_title($item)?>"
                                         loading="lazy"
                                         data-src="<?= $itemData['image']?>"
                                         class="br-6 wp-post-image lazyload"
                                         src="<?= $itemData['image']?>" />
                                </noscript>
                            </figure>
                        </div>
                    <?php else:?>
                    <div class="col-auto pl-0 pr-u-lg-15 pr-o-md-10 pr-d-sm-15 default-img" style="background-image: url(<?=ALFA_IMG_DEFAULT;?>)">
                        <div class="ns__thumb"></div>
                    </div>
                    <?php endif;?>
                    <?php if(!empty(get_permalink($item)) && !empty(get_the_title($item))) :?>
                        <div class="col as-c px-0">
                            <h3 class="fw-m fs-14">
                                <a href="<?= get_permalink($item)?>" class="l-str">
                                    <?= get_the_title($item)?>
                                </a>
                            </h3>
                        </div>
                    <?php endif;?>
                </div>
            <?php endforeach;?>
        <?php endif;?>
    <?php elseif ($blockData['choice'] === 'v2'):
        $data = $blockData['v2'];
        $casinoData = get_field('casino-data', $data['casino']);
        $textDataCasino = get_field('casino-option-text', 'option');
    ?>
        <div class="na__box mb-30 p-lg-30 p-20 br-6 ta-c">
            <figure class="mb-10 br-6 of-h" style="background-color:  <?=$casinoData['bg']?>">
                <a href="<?= get_permalink($data['casino'])?>" target="_blank" class="na__box__thumb foc p-20">
                    <img width="270"
                        height="154"
                        alt="<?= not_empty($casinoData['logo']['alt']) ? $casinoData['logo']['alt'] : $casinoData['name'];?>"
                        title="<?= not_empty($casinoData['logo']['title']) ? $casinoData['logo']['title'] : $casinoData['name'];?>"
                        loading="lazy"
                        data-src="<?= not_empty($casinoData['logo']['url']) ? $casinoData['logo']['url'] : ALFA_IMG_DEFAULT;?>"
                        class="attachment-CF_casino_card size-CF_casino_card wp-post-image lazyloaded"
                        src="<?= not_empty($casinoData['logo']['url']) ? $casinoData['logo']['url'] : ALFA_IMG_DEFAULT;?>"
                    >
                    <noscript>
                        <img width="270"
                             height="154"
                             alt="<?= not_empty($casinoData['logo']['alt']) ? $casinoData['logo']['alt'] : $casinoData['name'];?>"
                             title="<?= not_empty($casinoData['logo']['title']) ? $casinoData['logo']['title'] : $casinoData['name'];?>"
                             loading="lazy"
                             src="<?= not_empty($casinoData['logo']['url']) ? $casinoData['logo']['url'] : ALFA_IMG_DEFAULT;?>"
                        />
                    </noscript>
                </a>
            </figure>
            <?php if(not_empty($casinoData['welcome-bonus-title']) || not_empty($textDataCasino['welcome'])):?>
                <p class="mb-10 fs-12 fw-n tt-u">
                    <?= not_empty($casinoData['welcome-bonus-title']) ? $casinoData['welcome-bonus-title'] : $textDataCasino['welcome']?>
                </p>
            <?php endif;?>
            <?php if(not_empty($casinoData['welcome-bonus'])):?>
                <p class="mb-10 tc-pv fw-bl fs-u-sm-28 fs-o-xs-18"><?= $casinoData['welcome-bonus'];?></p>
            <?php endif;?>

            <button on="tap:AMP.navigateTo(url='<?= $casinoData['link'];?>', target='_blank')"
                    data-href="<?= $casinoData['link'];?>"
                    formtarget="_blank"
                    type="submit"
                    rel="nofollow"
                    target="_blank"
                    class="btn mt-u-sm-15 tt-u fw-bl br-p w-100 tc-w btn--p"
                    title="<?= not_empty($casinoData['link-text']) ? $casinoData['link-text'] : $textDataCasino['reg'];?>"
            >
                <?= not_empty($casinoData['link-text']) ? $casinoData['link-text'] : $textDataCasino['reg'];?>
            </button>
        </div>
    <?php endif;?>

<?php endif;?>
