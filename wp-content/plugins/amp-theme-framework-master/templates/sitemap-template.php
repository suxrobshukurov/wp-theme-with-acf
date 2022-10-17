<?php
/*
    Template Name: Карта сайта
    Template Post Type: page
*/
amp_header();
?>
<div class="sh--bs tc-w ta-u-sm-c ta-o-xs-c bg-u-sm-pv bg-o-xs-pv sh py-u-sm-80 pt-o-xs-40 pb-o-xs-30 ps-r">  <div class="container">
        <div class="sh__cnt px-15 mx-u-sm-a">
            <h1 class="h1 tc-w"><?= the_title()?></h1>
        </div>
    </div>
</div>
<div class="ts of-h py-u-sm-40 py-o-xs-25">
    <div class="container">
        <div class="wp-editor ">
            <?= amp_content()?>
            <?php query_posts('showposts=1000'); ?>
            <div class="html_sitemap">
                <ul class="ul--arr">
                    <?php while (have_posts()) : the_post(); ?>
                        <li>
                            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                        </li>
                    <?php endwhile;?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php amp_footer(); ?>

