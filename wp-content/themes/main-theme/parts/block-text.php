<?php
$blockData = $args['block'];
$blockBg = '';
if($blockData['add-gradient']) {
//    $blockBg ='background-image: linear-gradient(to bottom, var(--secondary-variant) 50%, transparent 50%);';
    $blockBg ='background-image: linear-gradient(to '. $blockData['gradient']['to-way']. ', ';
    foreach ($blockData['gradient']['colors'] as $key => $item) {
        $seporat = $key < count($blockData['gradient']['colors']) - 1 ? ', ' : '';
        $blockBg .= $item['color'] . ' ' . $item['fill'].'%' . $seporat;
    }
    $blockBg .= ');';
} else {
    $blockBg = 'background-color:'. $blockData['bg'] .';';
}
if($blockData['show']):
    if($blockData['has-anchor']):?>
        <div class="anchor" id="<?= $blockData['anchor'] ;?>"></div>
    <?php endif;?>
    <div class="ts of-h py-u-sm-40 py-o-xs-25 <?= $blockData['class-name']?>" style="<?=$blockBg?> color: <?=$blockData['color'];?> ">
        <div class="container">
            <?= !empty($blockData['title']) ? '<h2 class="ta-u-sm-c ta-o-xs-c title  h2 0" style="color: '. $blockData['text-color'] .'">' . $blockData['title'] . '</h2>': '';?>
            <?= !empty($blockData['subtitle']) ? '<p class="ta-u-sm-c ta-o-xs-c title  title__sub wp-editor my-20 mx-u-sm-a fs-u-sm-15">'. $blockData['subtitle'].'</p>':'';?>
            <?php if(!empty($blockData['cols'][0]['content'])) :?>
                <div class="ts of-h py-o-xs-25 row-u-sm row-u-sm-<?= $blockData['cols-choise'] === 'default' || count($blockData['cols']) == 3 ? 'c' : $blockData['cols-choise']; ?>">
                    <?php foreach ($blockData['cols'] as $col) :?>
                        <?= !empty($col['content']) ? '<div class="wp-editor col">' . $col['content'] . '</div>' :'';?>
                    <?php endforeach;?>
                </div>
            <?php endif;?>
        </div>
    </div>
<?php endif;?>
