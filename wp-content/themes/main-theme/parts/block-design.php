<?php
$blockData = $args['block'];
$authorData = get_field('author', 'option');
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
    <div class="ts py-u-sm-40 py-o-xs-25 <?= $blockData['class-name']?>" style="<?=$blockBg?>color: <?=$blockData['color'];?> ">
        <div class="container bg-inherit">
            <?= !empty($blockData['title']) ? '<h2 class="ta-u-sm-c ta-o-xs-c title  h2 0" style="color: '. $blockData['text-color'] .'">' . $blockData['title'] . '</h2>': '';?>
            <?= !empty($blockData['subtitle']) ? '<p class="ta-u-sm-c ta-o-xs-c title  title__sub wp-editor my-20 mx-u-sm-a fs-u-sm-15">'. $blockData['subtitle'].'</p>':'';?>
            <?php if($blockData['choice'] === 'v1'):
                $data = $blockData['v1'];
                $dataBg = $data['bg-card'] === 'image' ? 'background-image: url('.$data['bg-img'] . ')"': 'background-color:'.$data['bg-color'].';';
                ?>
                <div class="bnr px-u-sm-30 p-o-xs-20 ta-o-xs-c br-20" style="<?= $dataBg?>">
                <div class="row-u-sm ai-u-sm-c" style="min-height: 124px;">
                    <?php if(!empty($data['image']) && !empty($data['text'])):?>
                    <div class="col-u-sm-2 pr-u-sm-0 mb-o-xs-15">
                        <figure class="fs-0 pt-u-sm-10">
                            <?= '<img alt="'.$data['text'].'" height="118.7" width="190.4" data-src="'.$data['image'].'" class="d-o-xs-n ls-is-cached lazyloaded" src="'.$data['image'].'">';?>
                        </figure>
                    </div>
                    <?php endif;?>
                    <?php if(!empty($data['text'])) :?>
                    <div class="col-u-sm mb-o-xs-15 ta-c">
                        <?= '<h2 class="bnr__title tc-w" style="color: '. $data['text-color'].'">' .$data['text'].'</h2>';?>
                    </div>
                    <?php endif;?>
                    <?php if(!empty($data['btn-text']) && !empty($data['link'])):?>
                    <div class="col-u-sm-2 ta-u-sm-r">
                        <button on="tap:AMP.navigateTo(url='<?= get_permalink($data['link']);?>', target='_blank')"
                                data-href="<?= get_permalink($data['link']);?>"
                                formtarget="_blank"
                                type="submit"
                                class="btn btn--w btn--176 w-o-xs-100 tc-pv btn--p"
                                <?= 'title="' .$data['btn-text'].'"';?>
                                <?= 'style="background-color:'. $data['btn-bg'].'; color:'.$data['btn-color'].';"'?>
                        >
                            <?=$data['btn-text'];?>
                        </button>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <?php elseif ($blockData['choice'] === 'v2'):
                $data = $blockData['v2'];
                ?>
                <?php if(!empty($data[0]['title']) || !empty($data[0]['subtitle'])):?>
                <div class="row-u-sm row-u-sm-4  mx-u-sm-n10 mx-o-xs-n5">
                    <?php foreach ($data as $item):?>
                    <?php if(!empty($item['title']) || !empty($item['subtitle'])):?>
                        <div class="col my-u-sm-10 px-u-sm-10 px-o-xs-5">
                            <div class="cg row mx-0 f-u-sm-c h-100 ps-r p-u-md-20 p-o-sm-10 p-o-xs-20 br-10 ta-c bg-w">
                                <?php if(!empty($item['image']) && !empty($item['title'])):?>
                                    <figure class="cg__gr col-o-xs-auto px-0 mb-u-sm-25 mb-o-xs-20 foc">
                                    <img
                                        alt="<?= $item['title'];?>"
                                        height="82"
                                        width="72"
                                        data-src="<?= $item['image'];?>"
                                        class="attachment-CF_card_graphic size-CF_card_graphic ls-is-cached lazyloaded"
                                        src="<?= $item['image'];?>">
                                    <noscript><img src="<?= $item['image'];?>" class="attachment-CF_card_graphic size-CF_card_graphic" alt="<?= $item['title'];?>" height="82" width="72" /></noscript>
                                </figure>
                                <?php endif;?>
                                <?= !empty($item['title'])
                                    ? '<div class="h5 col-o-xs pl-o-xs-10 pl-u-sm-0 pr-0 as-o-xs-c mb-15 tc-d ta-u-sm-c ta-o-xs-l fw-b">' . $item['title'] .'</div>'
                                    :'';
                                ?>
                                <?= !empty($item['subtitle'])
                                    ? '<div class="wp-editor col-o-xs-12 px-0 fs-14">'. $item['subtitle'] . '</div>'
                                    : '';
                                ?>
                            </div>

                        </div>
                    <?php endif;?>
                    <?php endforeach;?>
                </div>
                <?php endif;?>
            <?php elseif ($blockData['choice'] === 'v3'):
                $data = $blockData['v3'];
                ?>
                <div class="container px-o-xs-0 bg-inherit">
                    <nav class="tlc__nav br-u-sm-20 p-u-md-20 p-o-sm-15 bg-inherit ps-r">
                        <amp-selector  class="row mx-u-md-n10 mx-o-sm-n5 m-o-xs-0" role="tablist" on="select:myTabPanels.toggle(index=event.targetOption, value=true)" keyboard-select-mode="focus">
                            <?php foreach ($data as $key => $item) :?>
                            <div class="col-u-sm col-o-xs-6 px-u-md-10 px-o-sm-5 px-o-xs-0" id="sample3-tab<?=$key + 1?>" role="tab" aria-controls="sample3-tabpanel<?=$key + 1?>" option="<?=$key?>" <?= $key === 0 ? 'selected':''?>>
                                <?php if(!empty($item['title']) || !empty($item['image'])):?>
                                <button
                                    data-list=""
                                    data-tab="<?= $key?>"
                                    class="tlc__btn w-100 px-10 fw-b fs-u-sm-16 fs-o-xs-13 br-u-sm-20 ps-r"
                                    title="<?=$item['title'];?>"
                                >
                                    <?php if(!empty($item['image']) && !empty($item['title'])):?>
                                        <span class="tlc__btn__icn mb-10 foc mx-a of-h">
                                        <img alt="<?=$item['title'];?>"
                                             height="28"
                                             width="45"
                                             data-src="<?=$item['image'];?>"
                                             class="ls-is-cached lazyloaded"
                                             src="<?=$item['image'];?>">
                                        <noscript>
                                            <img src="<?=$item['image'];?>"
                                                 class=""
                                                 alt="<?=$item['title'];?>"
                                                 height="28"
                                                 width="45" />
                                        </noscript>
                                    </span>
                                    <?php endif;?>
                                    <?= !empty($item['title']) ? '<strong>' . $item['title']. '</strong>':'';?>
                                </button>
                                <?php endif;?>
                            </div>
                            <?php endforeach;?>
                        </amp-selector>
                    </nav>
                </div>
                <?php if(!empty($item['page-data'])):?>
                    <amp-selector class="js-append-casinos tab-content" id="myTabPanels">
                        <?php foreach ($data as $key => $item) :?>
                        <div class="tab-item" data-item="<?= $key;?>" id="sample3-tabpanel<?=$key + 1?>" role="tabpanel" aria-labelledby="sample3-tab<?=$key + 1?>" option <?= $key === 0 ? 'selected':''?>>
                            <?php
                            foreach ($item['page-data'] as $block) :
                                get_template_part(
                                    '/parts/' .$block['acf_fc_layout'],
                                    null,
                                    ['block' => $block]
                                );
                            endforeach;
                            ?>
                        </div>
                        <?php endforeach;?>
                    </amp-selector>
                <?php endif;?>
            <?php elseif ($blockData['choice'] === 'v4'):
                $data = $blockData['v4'];
                ?>
                <?php if(!empty($data['list-cons'][0]['text']) && !empty($data['list-pros'])):?>
                    <div class="bg-u-sm-s br-10 of-h bg-s">
                        <div class="pc__box row-u-sm mx-u-sm-0">
                            <div class="col-u-sm px-u-sm-0">
                                <?php if($data['title-pros']):?>
                                <h3 class="d-f ai-c px-u-sm-40 px-o-xs-20 py-15 bg-sv">
                                    <svg width="26" height="25" viewBox="0 0 26 25" class="mr-10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 24.25L4.25 24.25L4.25 8L3 8C2.33696 8 1.70108 8.26339 1.23224 8.73223C0.763396 9.20107 0.500003 9.83696 0.500003 10.5L0.500004 21.75C0.500004 22.413 0.763397 23.0489 1.23224 23.5178C1.70108 23.9866 2.33696 24.25 3 24.25ZM23 8L14.25 8L15.6525 3.79C15.7776 3.41427 15.8117 3.01418 15.752 2.62269C15.6922 2.2312 15.5403 1.85952 15.3087 1.53824C15.0772 1.21697 14.7726 0.9553 14.4201 0.774793C14.0676 0.594285 13.6773 0.500102 13.2813 0.499999L13 0.499999L6.75 7.2975L6.75 24.25L20.5 24.25L25.4212 13.4387L25.5 13.0725L25.5 10.5C25.5 9.83696 25.2366 9.20107 24.7678 8.73223C24.2989 8.26339 23.663 8 23 8Z" fill="#7ABF8B"></path>
                                    </svg>
                                    <?= $data['title-pros'];?>
                                </h3>
                                <?php endif;?>
                                <ul class="pc__list pc__list--pros p-u-sm-40 p-o-xs-20">
                                    <?php foreach ($data['list-pros'] as $item) :?>
                                        <?= !empty($item['text']) ? '<li class="ps-r pl-20">' . $item['text'] .'</li>':'';?>
                                    <?php endforeach;?>
                                </ul>
                            </div>

                            <div class="col-u-sm px-u-sm-0">
                                <?php if($data['title-cons']):?>
                                <h3 class="d-f ai-c px-u-sm-40 px-o-xs-20 py-15 bg-sv">
                                    <svg width="26" height="25" viewBox="0 0 26 25" class="mr-10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M23 0.75L21.75 0.75L21.75 17H23C23.663 17 24.2989 16.7366 24.7678 16.2678C25.2366 15.7989 25.5 15.163 25.5 14.5V3.25C25.5 2.58696 25.2366 1.95107 24.7678 1.48223C24.2989 1.01339 23.663 0.75 23 0.75ZM3 17H11.75L10.3475 21.21C10.2224 21.5857 10.1883 21.9858 10.248 22.3773C10.3078 22.7688 10.4597 23.1405 10.6913 23.4618C10.9228 23.783 11.2274 24.0447 11.5799 24.2252C11.9324 24.4057 12.3227 24.4999 12.7187 24.5H13L19.25 17.7025L19.25 0.75L5.5 0.75L0.57875 11.5613L0.5 11.9275L0.5 14.5C0.5 15.163 0.763392 15.7989 1.23223 16.2678C1.70107 16.7366 2.33696 17 3 17Z" fill="#C9415B"></path>
                                    </svg>
                                    <?= $data['title-cons'];?>
                                </h3>
                                <?php endif;?>
                                <ul class="pc__list pc__list--cons p-u-sm-40 p-o-xs-20">
                                    <?php foreach ($data['list-cons'] as $item) :?>
                                        <?= !empty($item['text']) ? '<li class="ps-r pl-20">' . $item['text'] .'</li>':'';?>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endif;?>
            <?php elseif ($blockData['choice'] === 'v5'):
                $data = $blockData['v5'];
                ?>
                <?php if(!empty($data[0]['title']) || !empty($data[0]['subtitle'])):?>
                    <div class="row-u-sm row-u-sm-6">
                        <?php foreach ($data as $item) :?>
                        <div class="col my-15 ta-c">
                            <div class="bg-sv br-10 p-u-sm-40 p-o-xs-20 h-100 ta-o-xs-c">
                                <?php if(!empty($item['image']) && !empty($item['title'])):?>
                                    <figure class="mb-25">
                                        <img alt="<?=$item['title'];?>"
                                             height="200" width="200"
                                             data-src="<?=$item['image'];?>"
                                             class="attachment-full size-full ls-is-cached lazyloaded"
                                             src="<?=$item['image'];?>">
                                        <noscript>
                                            <img src="<?=$item['image'];?>"
                                                 class="attachment-full size-full"
                                                 alt="<?=$item['title'];?>"
                                                 height="200" width="200" />
                                        </noscript>
                                    </figure>
                                <?php endif;?>

                                <?= !empty($item['title']) ? '<h3 class="mb-25">' .$item['title'] .'</h3>':'';?>
                                <?= !empty($item['subtitle']) ? '<div class="wp-editor">'. $item['subtitle']. '</div>':'';?>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                <?php endif;?>
            <?php elseif ($blockData['choice'] === 'v6'):
                $data = $blockData['v6'];
                ?>
                <div class="br-6 bg-w p-u-sm-30 p-o-xs-25">
                    <div class="row-u-sm">
                        <?php if(!empty($data['name']) || !empty($data['image']) || !empty($authorData['name']) || !empty($authorData['image'])):?>
                            <div class="col-u-sm-auto d-o-xs-n">
                                <?php if(!empty($data['image']) || $authorData['image']):?>
                                    <figure class="mb-15 bg-w br-c ta-c">
                                        <img alt="<?= !empty($data['name']) ? $data['name'] : $authorData['name'];?>"
                                             height="78" width="78"
                                             data-src="<?= !empty($data['image']) ? $data['image'] : $authorData['image'];?>"
                                             class="br-c ls-is-cached lazyloaded"
                                             src="<?= !empty($data['image']) ? $data['image'] : $authorData['image'];?>"
                                        />
                                        <noscript>
                                            <img alt="<?= !empty($data['name']) ? $data['name'] : $authorData['name'];?>"
                                                 height="78" width="78"
                                                 class="br-c lazyload"
                                                 src="<?= !empty($data['image']) ? $data['image'] : $authorData['image'];?>"
                                            />
                                        </noscript>
                                    </figure>
                                <?php endif;?>
                                <?= !empty($data['name']) ? '<p class="bg-p br-6 tc-w py-5 px-10 fs-12">' . $data['name'].'</p>':'<p class="bg-p br-6 tc-w py-5 px-10 fs-12">' . $authorData['name'].'</p>';?>
                            </div>
                        <?php endif;?>
                        <div class="col-u-sm">
                            <div class="row-o-xs mx-0-xs-n10">
                                <?php if(!empty($data['image'])):?>
                                    <div class="col-o-xs-auto d-u-sm-n px-o-xs-10">
                                        <figure class="mb--15 bg-w br-c ta-c">
                                            <img alt="<?= $data['name'];?>"
                                                 height="78" width="78"
                                                 data-src="<?= $data['image'];?>"
                                                 class="br-c lazyload"
                                                 src="<?= $data['image'];?>"
                                            />
                                            <noscript>
                                                <img alt="<?= $data['name'];?>"
                                                     height="78" width="78"
                                                     class="br-c lazyload"
                                                     src="<?= $data['image'];?>"
                                                />
                                            </noscript>
                                        </figure>
                                    </div>
                                <?php endif;?>
                                <?php if(!empty($data['title']) || !empty($data['subtitle']) || !empty($data['name'])):?>
                                    <div class="col-o-xs px-o-xs-10">
                                        <?= !empty($data['title']) ? '<h3 class="mb-15 fs-18">' . $data['title']. '</h3>':'';?>
                                        <?= !empty($data['subtitle']) ? '<p class="mb-u-sm-20 mb-o-xs-10 fw-b tc-p fs-12 tt-u">'. $data['subtitle'].'</p>':'';?>
                                        <?= !empty($data['name']) ? '<p class="d-u-sm-n d-o-xs-ib mb-o-xs-15 bg-pv br-6 tc-w py-5 px-10 fs-12">' . $data['name']. '</p>':'';?>
                                    </div>
                                <?php endif;?>
                            </div>
                            <?= !empty($data['content']) ? '<div class="wp-editor fs-14">'. $data['content'] .'</div>':'';?>
                        </div>
                    </div>
                </div>
            <?php elseif ($blockData['choice'] === 'v7'):
                $data = $blockData['v7'];
                ?>
                <?php if(!empty($data[0]['title']) || !empty($data[0]['subtitle'])):?>
                    <?php foreach ($data as $key => $item):?>
                        <?php if(!empty($item['title']) || !empty($item['subtitle'])) :?>
                            <div class="<?= $key > 0 ? 'mt-30': '';?>">
                                <div class="ub__box bg-sv br-10 p-u-sm-40 p-o-xs-20 h-100 ta-o-xs-c">
                                    <div class="row-u-sm ai-u-sm-c mx-u-sm-n20">
                                        <?php if(!empty($item['image'])):?>
                                            <div class="col-u-sm-auto px-u-sm-20">
                                                <figure class="mb-25">
                                                    <img alt="<?=$item['title']?>"
                                                         height="177" width="200"
                                                         data-src="<?=$item['image']?>"
                                                         class="attachment-full size-full ls-is-cached lazyloaded"
                                                         src="<?=$item['image']?>"
                                                    >
                                                    <noscript>
                                                        <img src="<?= $item['image']?>"
                                                             class="attachment-full size-full"
                                                             alt="<?=$item['title']?>"
                                                             height="177" width="200"
                                                        />
                                                    </noscript>
                                                </figure>
                                            </div>
                                        <?php endif;?>
                                        <div class="col-u-sm px-u-sm-20">
                                            <?= !empty($item['title']) ? '<h3 class="mb-25">'. $item['title'] . '</h3>':'';?>
                                            <?= !empty($item['subtitle']) ? '<div class="wp-editor">' .$item['subtitle'] . '</div>':'';?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif;?>
                    <?php endforeach;?>
                <?php endif;?>
            <?php endif;?>
        </div>
    </div>
<?php endif;?>

