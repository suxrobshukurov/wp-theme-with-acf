<?php
$blocksData = get_field('page-data');
amp_header();?>
<main class="pt-u-sm-60 py-o-xs-40 ">
    <div class="container">
        <h1 class="ta-u-sm-c ta-o-xs-c title"><?= the_title()?></h1>
        <div class="wp-editor">
            <?= amp_content()?>
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
</main>


<?php amp_footer();?>
