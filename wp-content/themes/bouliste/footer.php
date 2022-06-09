    <footer>
        <div class="wrap">
            <div class="FooterContainer">
                <div class="FooterContainer_content FooterContainer_content_1">
                    <p>
                        <?php the_field('footer_menu_title');?>
                    </p>
                    <?php  wp_nav_menu(); ?>
                </div>
                <div class="FooterContainer_content FooterContainer_content_2">
                    <div class="FooterContainer_content_2_logo">
                        <img width="280" height="110" src="<?php echo get_template_directory_uri();?>/images/Logo_White.png">
                    </div>
                </div>
                <div class="FooterContainer_content FooterContainer_content_3">
                    <p>
                        <?php the_field('footer_title');?>
                    </p>
                    <table>
                        <tr>
                            <td class="title">Adresse Mail</td>
                            <td><?php the_field('footer_mail');?></td>
                        </tr>
                        <tr>
                            <td class="title">Numéro de téléphone</td>
                            <td><?php the_field('footer_number');?></td>
                        </tr>
                        <tr>
                            <td class="title">Adresse</td>
                            <td><?php the_field('footer_adresse');?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="FooterBottom">
                <a href=""> Mentions légales </a>
                <a href=""> Politique de confidentialité </a>
            </div>
        </div>
    </footer>