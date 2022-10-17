<?php
$logoData = get_field('logo-data', 'option');
$footerData = get_field('footer-data', 'option')
?>
<footer class="footer tc-w bg-pv fs-14">
    <div class="container py-u-md-50 py-d-sm-30">
        <div class="row-u-md">
            <?php if ( is_active_sidebar( 'first-col-widget' ) ) : ?>
                <div class="col-u-md order-u-md-2 widget-content">
                    <?php dynamic_sidebar( 'first-col-widget' ); ?>
                </div>
            <?php endif; ?>

            <?php if ( is_active_sidebar( 'second-col-widget' ) ) : ?>
                <div class="col-u-md order-u-md-2 widget-content">
                    <?php dynamic_sidebar( 'second-col-widget' ); ?>
                </div>
            <?php endif; ?>

            <?php if ( is_active_sidebar( 'three-col-widget' ) ) : ?>
                <div class="col-u-md order-u-md-2 widget-content">
                    <?php dynamic_sidebar( 'three-col-widget' ); ?>
                </div>
            <?php endif; ?>
            <?php if ( is_active_sidebar( 'four-col-widget' ) ) : ?>
                <div class="col-u-md order-u-md-2 widget-content">
                    <?php dynamic_sidebar( 'four-col-widget' ); ?>
                </div>
            <?php endif; ?>


            <div class="col-fl mt-d-sm-20 pr-u-md-40 order-u-md-1">
                <a href="<?= get_home_url();?>" class="d-u-md-ib d-d-sm-n mb-u-md-25" >
                    <?php if(!empty($logoData['logo-footer'])):?>
                        <img alt="<?=not_empty($logoData['logo-footer']['alt']) ? $logoData['logo-footer']['alt']: bloginfo('name');?>"
                             title="<?=not_empty($logoData['logo-footer']['title']) ? $logoData['logo-footer']['title']: bloginfo('name');?>"
                             height="29"
                             width="232"
                             data-src="<?=$logoData['logo-footer']['url'];?>"
                             class=" mh-100 ls-is-cached lazyloaded"
                             src="<?=$logoData['logo-footer']['url'];?>">
                        <noscript>
                            <img src="<?=$logoData['logo-footer']['url'];?>"
                                 class=" mh-100"
                                 alt="<?=not_empty($logoData['logo-footer']['alt']) ? $logoData['logo-footer']['alt']: bloginfo('name');?>"
                                 title="<?=not_empty($logoData['logo-footer']['title']) ? $logoData['logo-footer']['title']: bloginfo('name');?>"
                                 height="29"
                                 width="232"/>
                        </noscript>
                    <?php else:?>
                        <?= bloginfo('name');?>
                    <?php endif;?>
                </a>

                <?= not_empty($footerData['description']) ? '<div class="wp-editor mb-25">'. $footerData['description'].'</div>':'';?>
            </div>
        </div>
    </div>
    <?php if(not_empty($footerData['recoms'][0])) :?>
        <div class="recoms py-10">
            <div class="container">
                <ul class="d-f f-w ai-c jc-c">
                    <?php foreach ($footerData['recoms'] as $item) :?>
                        <li class="py-10">
                            <img alt="<?=$item['alt'];?>"
                                 title="<?=$item['title'];?>"
                                 height="25" 
                                 width="100"
                                 data-src="<?=$item['url'];?>"
                                 class="attachment-full size-full lazyload"
                                 src="<?=$item['url'];?>"
                            >
                            <noscript>
                                <img src="<?=$item['url'];?>"
                                     class="attachment-full size-full"
                                     alt="<?=$item['alt'];?>"
                                     title="<?=$item['title'];?>"
                                     height="25" 
                                     width="100"
                                />
                            </noscript>
                        </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
    <?php endif;?>

    <div class="copyrights bg-w fs-10 fw-n ta-o-xs-c">
        <div class="container">
            <div class="row-u-sm ai-u-sm-c jc-u-sm-sb">
                <p class="col-u-sm-auto tc-pv py-12">© <?= date('Y') ?> <?= not_empty($footerData['copywriter']) ? '/ ' . $footerData['copywriter']: '';?></p>
                <?php if(not_empty($footerData['sitemap'])):?>
                    <p class="col-u-sm-auto tc-n py-12">
                        <a href="<?= $footerData['sitemap'];?>"
                           target="_blank"
                           rel="nofollow"
                           class="fw-b tc-pv"
                        >
                            <?= $footerData['sitemap-text']?>
                        </a>
                    </p>
                <?php endif;?>
            </div>
        </div>
    </div>
</footer>
<a href="#scroll-top" class="scroll-top js-anchor foc bg-p br-c">
    <svg enable-background="new 0 0 32 32" height="32px" version="1.1" viewBox="0 0 32 32" width="32px"
         xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <path d="M18.221,7.206l9.585,9.585c0.879,0.879,0.879,2.317,0,3.195l-0.8,0.801c-0.877,0.878-2.316,0.878-3.194,0  l-7.315-7.315l-7.315,7.315c-0.878,0.878-2.317,0.878-3.194,0l-0.8-0.801c-0.879-0.878-0.879-2.316,0-3.195l9.587-9.585  c0.471-0.472,1.103-0.682,1.723-0.647C17.115,6.524,17.748,6.734,18.221,7.206z"
        fill="#fff"></path>
    </svg>
</a>

<?php wp_footer() ?>
</body>
</html>