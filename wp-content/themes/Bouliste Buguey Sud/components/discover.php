<div class="wrap">

    <div class="Discover_menu">

        <div class="Discover_menu_item">
            <img src="<?php echo(get_template_directory_uri()); ?>/images/decouverte.svg" alt="decouverte">
            <h3>Découvrir le sport</h3>
            <p class="menu_description"><?php the_field('discover');?></p>
            <a href="<?php echo get_permalink(8); ?>"><button class="Button_basic">En savoir plus</button></a>
        </div>

        <div class="Discover_menu_item">
            <img src="<?php echo(get_template_directory_uri()); ?>/images/association_icon.svg" alt="association">
            <h3>Association</h3>
            <p class="menu_description"><?php the_field('association');?></p>
            <a href="<?php echo get_permalink(8); ?>"><button class="Button_basic">En savoir plus</button></a>
        </div>

        <div class="Discover_menu_item">
            <img src="<?php echo(get_template_directory_uri()); ?>/images/agenda.svg" alt="agenda">
            <h3>Agenda</h3>
            <p class="menu_description"><?php the_field('agenda');?></p>
            <a href="<?php echo get_permalink(8); ?>"><button class="Button_basic">En savoir plus</button></a>
        </div>

        <div class="Discover_menu_item">
            <img src="<?php echo(get_template_directory_uri()); ?>/images/coupe.svg" alt="résultat">
            <h3>Résultats</h3>
            <p class="menu_description"><?php the_field('result');?></p>
            <a href="<?php echo get_permalink(8); ?>"><button class="Button_basic">En savoir plus</button></a>
        </div>

    </div>

</div>