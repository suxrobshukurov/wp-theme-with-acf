<?php
$blocksData = get_field('page-data');
if(!empty($blocksData)) :
    foreach ($blocksData as $block) :
        get_template_part(
            '/parts/' .$block['acf_fc_layout'],
            null,
            ['block' => $block]
        );
    endforeach;
endif;
