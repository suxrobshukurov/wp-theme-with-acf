<div id="main">
    <h2>Рейтинги</h2>
	
	<div class="tablenav top">
        <div class="tabs">
            <div class="tab-btn active" data-tab="0">
                Новости
            </div>
            <div class="tab-btn" data-tab="1">
                Слоты
            </div>
            <div class="tab-btn" data-tab="2">
                Казино
            </div>
        </div>
	</div>
	
	<div class="tabs-content">
        <div class="tab-item active" data-item="0">
            <?php acf_form_head(); ?>
            <div id="primary" class="content-area">
                <div id="content" class="site-content" role="main">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php acf_form(array(
                            'post_id'       => 334,
                            'post_title'    => false,
                            'post_content'  => false,
                            'submit_value'  => __('Update meta')
                        )); ?>
                    <?php endwhile; ?>
                </div><!-- #content -->
            </div><!-- #primary -->

            <!--            --><?php //get_news_list();?>
            <a class="button button-primary" id="news-save">Сохранить</a>
        </div>
        <div class="tab-item" data-item="1">
            <?php get_slot_list(); ?>
            <a class="button button-primary" id="slot-save">Сохранить</a>
        </div>
        <div class="tab-item" data-item="2">
            <?php get_casino_list();?>
            <a class="button button-primary" id="casino-save">Сохранить</a>
        </div>
	</div>
</div>