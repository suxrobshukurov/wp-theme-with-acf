<?php
$blockData = $args['block'];
$headerData = get_field('header-data', 'option');
if ($blockData['show']):
    if ($blockData['has-anchor']):?>
        <div class="anchor" id="<?= $blockData['anchor']; ?>"></div>
    <?php endif; ?>
    <div class="ts of-h py-u-sm-40 py-o-xs-25 <?= $blockData['class-name']?>"
         style="background-color: <?= $blockData['bg']; ?>;color: <?= $blockData['color']; ?> ">
        <div class="container">
            <?= !empty($blockData['title']) ? '<h2 class="ta-u-sm-c ta-o-xs-c title  h2 0" style="color: ' . $blockData['text-color'] . '">' . $blockData['title'] . '</h2>' : ''; ?>
            <?= !empty($blockData['subtitle']) ? '<p class="ta-u-sm-c ta-o-xs-c title  title__sub wp-editor my-20 mx-u-sm-a fs-u-sm-15">' . $blockData['subtitle'] . '</p>' : ''; ?>
            <?php if ($blockData['choice'] === 'v1'):
                $data = $blockData['v1'];
                ?>
                <?php if (!empty($data[0]['question']) && !empty($data[0]['answer'])): ?>
                    <?php foreach ($data as $item) :
                        $ranIdForItem = random_int(0, 999999);
                    ?>
                        <?php if (!empty($item['question']) && !empty($item['answer'])): ?>
                            <div class="faq br-10 p-u-sm-30 p-o-xs-20" [class]="openFaq ? 'faq br-10 p-u-sm-30 p-o-xs-20 active': 'faq br-10 p-u-sm-30 p-o-xs-20'" id="faqitem<?= $ranIdForItem?>">
                                <button
                                        type="button"
                                        class="faq__q fw-u-sm-b fw-o-xs-sb fs-u-sm-18 fs-o-xs-16 ta-l ps-r w-100"
                                        [class]="openFaq ? 'faq__q fw-u-sm-b fw-o-xs-sb fs-u-sm-18 fs-o-xs-16 ta-l ps-r w-100 active' :'faq__q fw-u-sm-b fw-o-xs-sb fs-u-sm-18 fs-o-xs-16 ta-l ps-r w-100<a'"
                                        data-parent=".faq"
                                        on="tap:faqitem<?= $ranIdForItem?>.toggleClass(class='active')"
                                ><?=$item['question'] ;?><span class="faq__i"></span></button>
                                <?= '<div class="wp-editor mt-15">' . $item['answer'] . '</div>' ;?>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <script type="application/ld+json">{"@context": "https://schema.org","@type": "FAQPage","mainEntity": [<?php foreach ($data as $key => $item) : ?>{"@type": "Question","name": "<?=$item['question']?>","acceptedAnswer": {"@type": "Answer","text": "<?=$item['answer']?>"}}<?= count($data) > ($key + 1) ? ',' :'';?><?php endforeach;?>]}</script>
            <?php endif; ?>
            <?php elseif ($blockData['choice'] === 'v2'):
                $data = $blockData['v2'];
                ?>
                <?php if(!empty($data[0]['title']) && !empty($data[0]['content'])):?>
                    <?php foreach ($data as $key => $item) :?>
                        <?php if(!empty($item['title']) && !empty($item['content'])) :?>
                            <div class="ht__step mb-20 p-u-sm-40 p-o-xs-20 ps-r bg-s" data-step="<?= $key + 1?>">
                                <div class="row-u-sm ai-u-sm-c">
                                    <?php if(!empty($item['image'])) :?>
                                        <figure class="col-u-sm-3 mb-o-xs-20 ta-c">
                                            <img alt="<?=$item['title'];?>"
                                                 height="251" width="208"
                                                 data-src="<?=$item['image'];?>"
                                                 class="attachment-full size-full ls-is-cached lazyloaded"
                                                 src="<?=$item['image'];?>">
                                            <noscript>
                                                <img src="<?=$item['image'];?>"
                                                     class="attachment-full size-full"
                                                     alt="<?=$item['title'];?>"
                                                     height="251" width="208"
                                                />
                                            </noscript>
                                        </figure>
                                    <?php endif;?>
                                    <div class="col-u-sm ta-o-xs-c">
                                        <h3 class="h4"><?= $item['title'];?></h3>
                                        <div class="wp-editor mt-20 fs-15"><?= $item['content'];?></div>
                                    </div>
                                </div>
                            </div>
                        <?php endif;?>
                    <?php endforeach;?>
                <script type="application/ld+json">{"@context": "http://schema.org","@type": "HowTo","image": {"@type": "ImageObject","url": "<?=$headerData['logo']?>"},"name": "<?=$blockData['title']?>","description": "<?=$blockData['subtitle']?>","totalTime": "PT2M","step": [<?php foreach ($data as $key => $item) :?>{"@type": "HowToStep","name": "<?=$item['title'];?>","text": "<?=$item['content'];?>","image": "<?=$item['image'];?>","url": "<?= get_permalink() . '#step' . ($key + 1);?>"}<?= count($data) > ($key + 1) ? ',' :'';?><?php endforeach;?>]}</script>
                <?php endif;?>
            <?php elseif ($blockData['choice'] === 'v3'):
                $data = $blockData['v3'];
                ?>
                <?php if(!empty($data['title']) || (!empty($data[0]['title']) && !empty($data[0]['link']))):?>
                    <div class="tc bg-s py-u-sm-30 px-u-sm-40 p-o-xs-20 br-10 active" id>
                        <?php if(!empty($data['title'])):?>
                            <button type="button" class="tc__title pr-50 fw-b ta-l w-100 ps-r js-state active" data-parent=".tc">
                                <svg width="23" height="24" class="mr-10 va-m" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7116 0.774658C15.1166 0.774658 13.587 1.40825 12.4592 2.53605L10.7222 4.27305C10.2926 4.70263 10.2926 5.39911 10.7222 5.82869C11.1518 6.25826 11.8483 6.25826 12.2778 5.82869L14.0148 4.09169C14.7301 3.37647 15.7001 2.97466 16.7116 2.97466C17.7231 2.97466 18.6931 3.37647 19.4083 4.09169C20.1236 4.80691 20.5254 5.77696 20.5254 6.78843C20.5254 7.79991 20.1236 8.76996 19.4083 9.48518L15.9334 12.959C15.2182 13.6739 14.2483 14.0756 13.237 14.0756C12.2258 14.0756 11.2559 13.6739 10.5407 12.959C10.111 12.5295 9.41453 12.5297 8.98505 12.9593C8.55556 13.389 8.5557 14.0855 8.98537 14.515C10.1131 15.6423 11.6424 16.2756 13.237 16.2756C14.8316 16.2756 16.3609 15.6423 17.4887 14.515L17.4887 14.5149L20.9638 11.0409L20.964 11.0408C22.0918 9.91301 22.7254 8.38338 22.7254 6.78843C22.7254 5.19348 22.0918 3.66385 20.964 2.53605C19.8362 1.40825 18.3065 0.774658 16.7116 0.774658ZM9.76306 7.72449C8.16848 7.72449 6.63917 8.35776 5.5114 9.48506L5.51136 9.4851L2.03624 12.9591L2.03611 12.9592C0.908311 14.087 0.274719 15.6167 0.274719 17.2116C0.274719 18.8066 0.908311 20.3362 2.03611 21.464C3.16391 22.5918 4.69354 23.2254 6.28849 23.2254C7.88344 23.2254 9.41307 22.5918 10.5409 21.464L12.2779 19.727C12.7075 19.2974 12.7075 18.6009 12.2779 18.1714C11.8483 17.7418 11.1518 17.7418 10.7222 18.1714L8.98524 19.9084C8.27002 20.6236 7.29997 21.0254 6.28849 21.0254C5.27702 21.0254 4.30697 20.6236 3.59175 19.9084C2.87653 19.1931 2.47472 18.2231 2.47472 17.2116C2.47472 16.2002 2.87648 15.2302 3.59162 14.515L3.59175 14.5149L7.06671 11.041C7.78193 10.3261 8.7518 9.92449 9.76306 9.92449C10.7743 9.92449 11.7442 10.3261 12.4594 11.041C12.8891 11.4705 13.5855 11.4704 14.015 11.0407C14.4445 10.611 14.4444 9.91455 14.0147 9.48506C12.8869 8.35776 11.3576 7.72449 9.76306 7.72449Z" fill="black"></path>
                                </svg>
                                <?= $data['title'];?>
                                <span class="tc__i m-a ps-a br-c"></span>
                            </button>
                        <?php endif;?>
                        <?php if(!empty($data['links'][0]['title']) && !empty($data['links'][0]['link'])):?>
                            <div class="tc__list mt-u-sm-30 mt-o-xs-15">
                                <?php foreach ($data['links'] as $item):?>
                                    <?php if(!empty($item['title']) && !empty($item['link'])):?>
                                        <p class="tc__item mt-12 bg-w br-6 fs-15">
                                            <a href="#<?=$item['link'];?>" class="d-b px-u-sm-20 px-o-xs-10 py-10 js-anchor"><?=$item['title']?></a>
                                        </p>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </div>
                        <?php endif;?>
                    </div>
                <?php endif;?>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
