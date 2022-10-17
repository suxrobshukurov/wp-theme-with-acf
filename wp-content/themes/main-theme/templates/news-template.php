<?php
/*
    Template Name: Список всех новостей
    Template Post Type: page
*/
global $post;
$blocksData = get_field('page-data');
$newsData = get_field('news-data', 'option');

if (is_front_page()) {
    $currentPage = (get_query_var("page")) ? get_query_var("page") : 1;
} else {
    $currentPage = (get_query_var("paged")) ? get_query_var("paged") : 1;
}

$params = array(
    'post_type' => 'post',
    'category_name' => 'news',
    'posts_per_page' => 9, // количество постов на странице
    "paged"          => $currentPage,  // текущая страница
);
$posts_Query = new WP_Query($params);

$pagination = paginate_links([
    "base"    => str_replace(999999999, "%#%", get_pagenum_link(999999999)),
    "format"  => "",
    "current" => max(1, $currentPage),
    "total"   => $posts_Query->max_num_pages,
]);

get_header();?>
<div class="tc-w ta-u-sm-c ta-o-xs-c bg-u-sm-pv bg-o-xs-pv sh py-u-sm-80 pt-o-xs-40 pb-o-xs-30 ps-r">
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
        <div class="sh__cnt px-15 mx-u-sm-a">

            <h1 class="h1 tc-w"><?= the_title();?></h1>
            <div class="wp-editor mx-a mt-u-sm-30 mt-o-xs-15 fs-u-sm-20 fs-o-xs-16 of-h " style="height: 496px;" data-limit_desktop="70" data-limit_mobile="140">
                <?= the_content();?>
            </div>

            <button class="btn-rm btn-rm--w br-p mt-u-sm-30 mt-o-xs-20 js-text-expand js-text-expand">
                read more
                <svg width="8" height="7" viewBox="0 0 8 7" fill="none" class="ml-5" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6.5L0.535898 0.5L7.4641 0.5L4 6.5Z" fill="white"></path>
                </svg>
            </button>
        </div>
    </div>
</div>
<div class="bg-u-sm-s bg-o-xs-s ln pt-u-sm-60 pt-o-xs-30 pb-u-sm-30 ">
    <div class="container">
        <?php if ($posts_Query->have_posts()) :?>
        <div class="row-u-sm mx-d-sm-n10">
            <?php while($posts_Query->have_posts()) :
                $posts_Query->the_post();
                $newData = get_field('new-data', $post->ID)
                ?>
                <div class="col-u-sm-4 px-d-sm-10 mb-20">
                    <article class="ln__box h-100 d-f f-c p-u-lg-25 p-d-md-20 br-10 bg-w of-h fs-14 ps-r">
                        <?php if(!empty($newData['image'])) :?>
                            <figure class="ln__thumb of-h mb-20 h-0 of-h br-6 ps-r">
                                <img width="697"
                                     height="435"
                                     alt="<?=the_title();?>"
                                     loading="lazy"
                                     data-src="<?=$newData['image'];?>"
                                     class="br-6 wp-post-image ls-is-cached lazyloaded"
                                     src="<?=$newData['image'];?>">
                                <noscript>
                                    <img width="697"
                                         height="435"
                                         alt="<?=the_title()?>"
                                         loading="lazy"
                                         data-src="<?=$newData['image'];?>"
                                         class="br-6 wp-post-image lazyload"
                                         src="<?=$newData['image'];?>"
                                    />
                                </noscript>
                            </figure>
                        <?php else:?>
                            <div class="ln__thumb of-h mb-20 h-0 of-h br-6 ps-r default-img" style="background-image: url(<?=ALFA_IMG_DEFAULT;?>)"></div>
                        <?php endif;?>
                        <?= !empty($post->post_title) ?'<h3 class="h5 tc-b my-a">'. $post->post_title.'</h3>':'';?>
                        <?php if(!empty($post->post_excerpt)):?>
                            <div class="wp-editor my-20 tc-n">
                                <?= esc_html_e(wp_trim_words($post->post_excerpt, 25, '...'));?>
                            </div>
                        <?php endif;?>
                        <div class="d-f jc-sb">
                            <span class="d-f ai-c">
                                <svg class="mr-5" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.33325 0.5C4.60939 0.5 4.83325 0.723858 4.83325 1L4.83325 2.50001L4.96342 2.5H9.03658C9.08038 2.5 9.12377 2.5 9.16675 2.50001L9.16675 1C9.16675 0.723857 9.39061 0.5 9.66675 0.5C9.94289 0.5 10.1667 0.723858 10.1667 1L10.1667 2.50717C10.5808 2.51587 10.9445 2.53511 11.2612 2.57768C11.8612 2.65836 12.3665 2.83096 12.7678 3.23223C13.169 3.63351 13.3416 4.13876 13.4223 4.73883C13.5 5.31681 13.5 6.0517 13.5 6.96343V9.03657C13.5 9.9483 13.5 10.6832 13.4223 11.2612C13.3416 11.8612 13.169 12.3665 12.7678 12.7678C12.3665 13.169 11.8612 13.3416 11.2612 13.4223C10.6832 13.5 9.9483 13.5 9.03657 13.5H4.96343C4.0517 13.5 3.31681 13.5 2.73883 13.4223C2.13876 13.3416 1.63351 13.169 1.23223 12.7678C0.830956 12.3665 0.65836 11.8612 0.577683 11.2612C0.499976 10.6832 0.499987 9.94832 0.5 9.03659V9.03658V6.96342V6.96341C0.499987 6.05169 0.499976 5.31681 0.577683 4.73883C0.65836 4.13876 0.830956 3.63351 1.23223 3.23223C1.63351 2.83096 2.13876 2.65836 2.73883 2.57768C3.05546 2.53511 3.41917 2.51587 3.83325 2.50717L3.83325 1C3.83325 0.723857 4.05711 0.5 4.33325 0.5ZM9.16675 3.50003V3.66667C9.16675 3.94281 9.3906 4.16667 9.66675 4.16667C9.94289 4.16667 10.1667 3.94281 10.1667 3.66667V3.50743C10.5461 3.51561 10.8602 3.53277 11.1279 3.56877C11.6171 3.63453 11.8762 3.75483 12.0607 3.93934C12.2452 4.12385 12.3655 4.3829 12.4312 4.87208C12.4681 5.14598 12.4852 5.46835 12.4931 5.85943C12.443 5.84253 12.3893 5.83337 12.3334 5.83337H1.66675C1.61084 5.83337 1.55708 5.84255 1.50688 5.85948C1.51483 5.46838 1.53194 5.14599 1.56877 4.87208C1.63453 4.3829 1.75483 4.12385 1.93934 3.93934C2.12385 3.75483 2.3829 3.63453 2.87208 3.56877C3.13985 3.53277 3.45394 3.51561 3.83325 3.50743V3.66667C3.83325 3.94281 4.05711 4.16667 4.33325 4.16667C4.60939 4.16667 4.83325 3.94281 4.83325 3.66667V3.50003L5 3.5H9C9.05659 3.5 9.11216 3.5 9.16675 3.50003ZM1.5 7L1.50004 6.8049C1.55218 6.82334 1.60829 6.83337 1.66675 6.83337H12.3334C12.3918 6.83337 12.4479 6.82336 12.5 6.80496L12.5 7V9C12.5 9.95695 12.4989 10.6244 12.4312 11.1279C12.3655 11.6171 12.2452 11.8762 12.0607 12.0607C11.8762 12.2452 11.6171 12.3655 11.1279 12.4312C10.6244 12.4989 9.95694 12.5 9 12.5H5C4.04306 12.5 3.37565 12.4989 2.87208 12.4312C2.3829 12.3655 2.12385 12.2452 1.93934 12.0607C1.75483 11.8762 1.63453 11.6171 1.56877 11.1279C1.50106 10.6244 1.5 9.95695 1.5 9V7ZM5 9.16663C4.72386 9.16663 4.5 9.39048 4.5 9.66663C4.5 9.94277 4.72386 10.1666 5 10.1666H9C9.27614 10.1666 9.5 9.94277 9.5 9.66663C9.5 9.39048 9.27614 9.16663 9 9.16663H5Z" fill="var(--primary-variant)"></path>
                                </svg>
                                <time class="tc-pv fw-n fs-12"><?=get_the_date('j F Y')?></time>
                            </span>

                            <a href="<?= get_permalink()?>" class="tc-n fw-m td-u fs-12 l-str">
                                <?=!empty($newsData['more-btn'])?$newsData['more-btn']: 'read more';?>
                            </a>
                        </div>
                    </article>
                </div>
            <?php endwhile;
            wp_reset_postdata();
            ?>
        </div>

        <div class="lnp d-f jc-c ps-r pb-30">
            <?= $pagination?>
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

<?php get_footer();?>
