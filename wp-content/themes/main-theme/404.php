<?php
$data = get_field('page-404-data', 'option');
get_header();?>
<main class="bg-s">
    <header class="mb-40 py-u-sm-60 py-u-sm-30 tc-w ta-c bg-pv">
        <h1 class="tc-w"><?= $data['title']?></h1>
    </header>
    <div class="container ts of-h py-o-xs-25 row-u-sm row-u-sm">
        <div class="col d-f jc-c f-c ai-c mb-40">
            <img
                src="<?= not_empty($data['image']['url']) ? $data['image']['url'] : ALFA_404_IMG_DEFAULT;?>"
                alt="<?= not_empty($data['image']['alt']) ? $data['image']['alt'] : $data['title'];?>"
                title="<?= not_empty($data['image']['title']) ? $data['image']['title'] : $data['title'];?>"
                height="100"
                width="350"
            >
            <button
                    on="tap:AMP.navigateTo(url='<?= get_home_url()?>', target='_blank')"
                    data-href="<?= get_home_url()?>"
                    formtarget="_blank"
                    type="submit"
                    class="btn btn--w w-o-xs-100 tc-pv btn--p"
                    title="<?= $data['btn-text'];?>"
                    style="background-color:#5eeaa7; color:#5e34ff;"
            >
                <?= $data['btn-text'];?>
            </button>
        </div>
    </div>
</main>
<?php get_footer();?>
