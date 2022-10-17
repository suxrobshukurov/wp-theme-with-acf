<?php
/*
    Template Name: Главная страница
    Template Post Type: page
*/
$searchData = get_field('search-data', 'option');
$blocksData = get_field('page-data');
get_header(); ?>

<div class="hh--tcl-space tc-w ta-u-sm-c ta-o-xs-c bg-u-sm-pv bg-o-xs-pv hh ps-r py-u-sm-80 py-o-xs-40">
    <div class="container">
        <div class="hh__cnt mx-a fs-u-sm-18 fs-o-xs-16">
            <?= not_empty(get_the_title()) ? '<h1 class="h1 mb-20 tc-p">'. get_the_title().'</h1>':'';?>
            <form action="<?= home_url('/')?>" method="get" class="hh__form row mx-a bg-w br-10 ps-u-md-r">
                <input name="s" placeholder="<?=$searchData['placeholder']?>" autocomplete="off" class="col px-20 fs-16 hh__h60 tc-b js-home-search" data-com.bitwarden.browser.user-edited="yes">
                <button type="submit" class="hh__h60 px-20 fs-0">
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.90332 2C7.9142 2 6.00654 2.79018 4.60002 4.1967C3.1935 5.60322 2.40332 7.51088 2.40332 9.5C2.40332 11.4891 3.1935 13.3968 4.60002 14.8033C6.00654 16.2098 7.9142 17 9.90332 17C11.8924 17 13.8001 16.2098 15.2066 14.8033C16.6131 13.3968 17.4033 11.4891 17.4033 9.5C17.4033 7.51088 16.6131 5.60322 15.2066 4.1967C13.8001 2.79018 11.8924 2 9.90332 2ZM3.18581 2.78249C4.9674 1.00089 7.38376 0 9.90332 0C12.4229 0 14.8392 1.00089 16.6208 2.78249C18.4024 4.56408 19.4033 6.98044 19.4033 9.5C19.4033 11.6823 18.6524 13.7873 17.2937 15.4693L20.4046 18.5858C20.7948 18.9767 20.7942 19.6098 20.4033 20C20.0124 20.3902 19.3793 20.3896 18.9891 19.9987L15.8802 16.8843C14.1969 18.2469 12.0889 19 9.90332 19C7.38376 19 4.9674 17.9991 3.18581 16.2175C1.40421 14.4359 0.40332 12.0196 0.40332 9.5C0.40332 6.98044 1.40421 4.56408 3.18581 2.78249Z" fill="#92959F"></path></svg>
                </button>
            </form>
        </div>
    </div>
</div>
<?= the_content();?>


<?php //if(!empty($blocksData)) :
//    foreach ($blocksData as $block) :
//        get_template_part(
//            '/parts/' .$block['acf_fc_layout'],
//            null,
//            ['block' => $block]
//        );
//    endforeach;
//endif; ?>

<?php get_footer(); ?>
