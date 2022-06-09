<?php 
	$image_title = get_field('title_image');
?>

<?php get_header() ?>
<body>

    <div class="ImageContent">
        <img src="<?php echo $image_title;?>" class="home_image">
        <p><?php the_field('discover_title');?><p>
    </div>

    <div class="Try">
        <div class="Typography_title">
            <?php the_field('association_title');?><font color="#FDB25B"> ?</font>
        </div>
        <div class="Try_block">
            <div class="Try_block_image">
                <img src="<?php echo get_template_directory_uri();?>/images/try.png">
            </div>
            <div class="Try_block_content">
                <p>
                Nous sommes une association regroupant tous les clubs de boules lyonnaises du secteur 9 de l’Ain, qui correspond au secteur Bugey Sud.  
                    <br><br>
                    Nous créons des compétitions pour tous les niveaux.
                </p>
            </div>
        </div>
    </div>

    <div class="Palmares">

        <div class="Typography_title">
                <p><?php the_field('palmares_title');?><font color="#FDB25B">.</font><p>
        </div>

        <div class="Palmares_trophies">
            <p><?php the_field('palmares_trophies_one');?></p>
            <p><?php the_field('palmares_trophies_two');?></p>
            <p><?php the_field('palmares_trophies_three');?></p>
            <p><?php the_field('palmares_trophies_four');?></p>
            <p><?php the_field('palmares_trophies_five');?></p>
            <p><?php the_field('palmares_trophies_six');?></p>
            <p><?php the_field('palmares_trophies_seven');?></p>
            <p><?php the_field('palmares_trophies_eight');?></p>
            <p><?php the_field('palmares_trophies_nine');?></p> 
            <p><?php the_field('palmares_trophies_ten');?></p>
        </div>

    </div>

    <div class="Partenaires">

        <div class="Typography_title">
            <p><?php the_field('partenaires_title');?><font color="#FDB25B">.</font><p>
        </div> 

        <div class="Partenaires_list">
            <img src="<?php echo get_template_directory_uri();?>/images/gesler.png">
            <img src="<?php echo get_template_directory_uri();?>/images/ain.png">
            <img src="<?php echo get_template_directory_uri();?>/images/logocarrouf.png">
        </div>

    </div>

    <div class="Try">
        <div class="Typography_title">
            <?php the_field('club_title');?><font color="#FDB25B">.</font>
        </div> 
        <div class="Try_block">
            <div class="Try_block_image">
                <img src="<?php echo get_template_directory_uri();?>/images/try.png">
            </div>
            <div class="Try_block_content">
                <div class="Typography_subtitle">
                    <?php the_field('club_subtitle');?>
                </div> 
                <ul>
                    <li><p><strong>Président: </strong><?php the_field('carte_artemare_president');?></p></li> 
                    <li><p><strong>Adresse: </strong><?php the_field('carte_artemare_adresse');?></p></li>
                    <li><p><strong>Horaire d'entrainement: </strong><?php the_field('carte_artemare_horaire');?></p></li>
                </ul>
                <div class="Try_block_content_links">
                    <a href="<?php echo get_permalink(8); ?>"><button class="Button_basic"><?php the_field('carte_artemare_telephone');?></button></a>
                    <a href="<?php echo get_permalink(8); ?>"><button class="Button_basic"><?php the_field('carte_artemare_mail');?></button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="Try">
        <div class="Try_block Try_block_reverse">
            <div class="Try_block_image">
                <img src="<?php echo get_template_directory_uri();?>/images/try.png">
            </div>
            <div class="Try_block_content Try_block_reverse_content">
                <div class="Typography_subtitle">
                    <?php the_field('club_subtitle_belley');?>
                </div> 
                <ul>
                    <li><p><strong>Président: </strong><?php the_field('carte_belley_president');?></p></li> 
                    <li><p><strong>Adresse: </strong><?php the_field('carte_belley_adresse');?></p></li>
                    <li><p><strong>Horaire d'entrainement: </strong><?php the_field('carte_belley_horaire');?></p></li>
                </ul>
                <div class="Try_block_content_links">
                    <a href="<?php echo get_permalink(8); ?>"><button class="Button_basic"><?php the_field('carte_belley_telephone');?></button></a>
                    <a href="<?php echo get_permalink(8); ?>"><button class="Button_basic"><?php the_field('carte_belley_mail');?></button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="Try">
        <div class="Try_block">
            <div class="Try_block_image">
                <img src="<?php echo get_template_directory_uri();?>/images/try.png">
            </div>
            <div class="Try_block_content">
                <div class="Typography_subtitle">
                    <?php the_field('club_subtitle_boulodrome');?>
                </div> 
                <ul>
                    <li><p><strong>Président: </strong><?php the_field('carte_boulodrome_president');?></p></li> 
                    <li><p><strong>Adresse: </strong><?php the_field('carte_boulodrome_adresse');?></p></li>
                    <li><p><strong>Horaire d'entrainement: </strong><?php the_field('carte_boulodrome_horaire');?></p></li>
                </ul>
                <div class="Try_block_content_links">
                    <a href="<?php echo get_permalink(8); ?>"><button class="Button_basic"><?php the_field('carte_boulodrome_telephone');?></button></a>
                    <a href="<?php echo get_permalink(8); ?>"><button class="Button_basic"><?php the_field('carte_boulodrome_mail');?></button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="Try">
        <div class="Try_block Try_block_reverse">
            <div class="Try_block_image">
                <img src="<?php echo get_template_directory_uri();?>/images/try.png">
            </div>
            <div class="Try_block_content Try_block_reverse_content">
                <div class="Typography_subtitle">
                    <?php the_field('club_subtitle_ceyzerieu');?>
                </div> 
                <ul>
                    <li><p><strong>Président: </strong><?php the_field('carte_ceyzerieu_president');?></p></li> 
                    <li><p><strong>Adresse: </strong><?php the_field('carte_ceyzerieu_adresse');?></p></li>
                    <li><p><strong>Horaire d'entrainement: </strong><?php the_field('carte_ceyzerieu_horaire');?></p></li>
                </ul>
                <div class="Try_block_content_links">
                    <a href="<?php echo get_permalink(8); ?>"><button class="Button_basic"><?php the_field('carte_ceyzerieu_telephone');?></button></a>
                    <a href="<?php echo get_permalink(8); ?>"><button class="Button_basic"><?php the_field('carte_ceyzerieu_mail');?></button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="Try">
        <div class="Try_block">
            <div class="Try_block_image">
                <img src="<?php echo get_template_directory_uri();?>/images/try.png">
            </div>
            <div class="Try_block_content">
                <div class="Typography_subtitle">
                    <?php the_field('club_subtitle_champagne');?>
                </div> 
                <ul>
                    <li><p><strong>Président: </strong><?php the_field('carte_champagne_president');?></p></li> 
                    <li><p><strong>Adresse: </strong><?php the_field('carte_champagne_adresse');?></p></li>
                    <li><p><strong>Horaire d'entrainement: </strong><?php the_field('carte_champagne_horaire');?></p></li>
                </ul>
                <div class="Try_block_content_links">
                    <a href="<?php echo get_permalink(8); ?>"><button class="Button_basic"><?php the_field('carte_champagne_telephone');?></button></a>
                    <a href="<?php echo get_permalink(8); ?>"><button class="Button_basic"><?php the_field('carte_champagne_mail');?></button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="Try">
        <div class="Try_block Try_block_reverse">
            <div class="Try_block_image">
                <img src="<?php echo get_template_directory_uri();?>/images/try.png">
            </div>
            <div class="Try_block_content Try_block_reverse_content">
                <div class="Typography_subtitle">
                    <?php the_field('club_subtitle_culoz');?>
                </div> 
                <ul>
                    <li><p><strong>Président: </strong><?php the_field('carte_culoz_president');?></p></li> 
                    <li><p><strong>Adresse: </strong><?php the_field('carte_culoz_adresse');?></p></li>
                    <li><p><strong>Horaire d'entrainement: </strong><?php the_field('carte_culoz_horaire');?></p></li>
                </ul>
                <div class="Try_block_content_links">
                    <a href="<?php echo get_permalink(8); ?>"><button class="Button_basic"><?php the_field('carte_culoz_telephone');?></button></a>
                    <a href="<?php echo get_permalink(8); ?>"><button class="Button_basic"><?php the_field('carte_culoz_mail');?></button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="Try">
        <div class="Try_block">
            <div class="Try_block_image">
                <img src="<?php echo get_template_directory_uri();?>/images/try.png">
            </div>
            <div class="Try_block_content">
                <div class="Typography_subtitle">
                    <?php the_field('club_subtitle_hotonnes');?>
                </div> 
                <ul>
                    <li><p><strong>Président: </strong><?php the_field('carte_hotonnes_president');?></p></li> 
                    <li><p><strong>Adresse: </strong><?php the_field('carte_hotonnes_adresse');?></p></li>
                    <li><p><strong>Horaire d'entrainement: </strong><?php the_field('carte_hotonnes_horaire');?></p></li>
                </ul>
                <div class="Try_block_content_links">
                    <a href="<?php echo get_permalink(8); ?>"><button class="Button_basic"><?php the_field('carte_hotonnes_telephone');?></button></a>
                    <a href="<?php echo get_permalink(8); ?>"><button class="Button_basic"><?php the_field('carte_hotonnes_mail');?></button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="Try">
        <div class="Try_block Try_block_reverse">
            <div class="Try_block_image">
                <img src="<?php echo get_template_directory_uri();?>/images/try.png">
            </div>
            <div class="Try_block_content Try_block_reverse_content">
                <div class="Typography_subtitle">
                    <?php the_field('club_subtitle_peyrieu');?>
                </div> 
                <ul>
                    <li><p><strong>Président: </strong><?php the_field('carte_peyrieu_president');?></p></li> 
                    <li><p><strong>Adresse: </strong><?php the_field('carte_peyrieu_adresse');?></p></li>
                    <li><p><strong>Horaire d'entrainement: </strong><?php the_field('carte_peyrieu_horaire');?></p></li>
                </ul>
                <div class="Try_block_content_links">
                    <a href="<?php echo get_permalink(8); ?>"><button class="Button_basic"><?php the_field('carte_peyrieu_telephone');?></button></a>
                    <a href="<?php echo get_permalink(8); ?>"><button class="Button_basic"><?php the_field('carte_peyrieu_mail');?></button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="Try">
        <div class="Try_block">
            <div class="Try_block_image">
                <img src="<?php echo get_template_directory_uri();?>/images/try.png">
            </div>
            <div class="Try_block_content">
                <div class="Typography_subtitle">
                    <?php the_field('club_subtitle_st_benoit');?>
                </div> 
                <ul>
                    <li><p><strong>Président: </strong><?php the_field('carte_st_benoit_president');?></p></li> 
                    <li><p><strong>Adresse: </strong><?php the_field('carte_st_benoit_adresse');?></p></li>
                    <li><p><strong>Horaire d'entrainement: </strong><?php the_field('carte_st_benoit_horaire');?></p></li>
                </ul>
                <div class="Try_block_content_links">
                    <a href="<?php echo get_permalink(8); ?>"><button class="Button_basic"><?php the_field('carte_st_benoit_telephone');?></button></a>
                    <a href="<?php echo get_permalink(8); ?>"><button class="Button_basic"><?php the_field('carte_st_benoit_mail');?></button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="Try">
        <div class="Try_block Try_block_reverse">
            <div class="Try_block_image">
                <img src="<?php echo get_template_directory_uri();?>/images/try.png">
            </div>
            <div class="Try_block_content Try_block_reverse_content">
                <div class="Typography_subtitle">
                    <?php the_field('club_subtitle_virieu');?>
                </div> 
                <ul>
                    <li><p><strong>Président: </strong><?php the_field('carte_virieu_president');?></p></li> 
                    <li><p><strong>Adresse: </strong><?php the_field('carte_virieu_adresse');?></p></li>
                    <li><p><strong>Horaire d'entrainement: </strong><?php the_field('carte_virieu_horaire');?></p></li>
                </ul>
                <div class="Try_block_content_links">
                    <a href="<?php echo get_permalink(8); ?>"><button class="Button_basic"><?php the_field('carte_virieu_telephone');?></button></a>
                    <a href="<?php echo get_permalink(8); ?>"><button class="Button_basic"><?php the_field('carte_virieu_mail');?></button></a>
                </div>
            </div>
        </div>
    </div>

</body>
<?php get_footer() ?>
