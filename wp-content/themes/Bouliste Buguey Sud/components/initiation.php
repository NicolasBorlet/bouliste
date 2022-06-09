<div class="Typography_title">
    <?php the_field('title_clubs');?><font color="#FDB25B">.</font>
</div>

<div class="InteractiveHome_video">				
    <video class="videoenboucle" width="980" height="523" autoplay loop muted>
        <source src="<?php echo(get_template_directory_uri()); ?>/videos/video.webm" type="video/webm">
    </video>
</div>

<div class="Typography_content">
    <?php the_field('initition_content');?>
</div>