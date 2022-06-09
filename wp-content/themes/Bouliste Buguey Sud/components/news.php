<div class="News_contain">
    <div class="Wrap">
        <div class="News_contain_content">
            <div class="News_contain_content_left">
                <img src="<?php echo(get_template_directory_uri()); ?>/images/info.svg" alt="information">
                <h3>Info du moment</h3>
            </div>
            <div class="News_contain_content_right">
            <p class="title"><?php the_field('news');?></p>
            <p class="subtitle"><?php the_field('texte_news');?></p>
            </div>
        </div>
    </div>
</div>