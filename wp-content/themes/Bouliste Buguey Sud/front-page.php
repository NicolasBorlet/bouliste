<?php get_header() ?>

<body>

    <div class="InteractiveHome">
        <?php include 'components/interactive_home.php' ?>
    </div>

    <div id="info" class="News">
        <?php include 'components/news.php' ?>
    </div>

    <div class="InteractiveMap" id="map">
        <?php include 'components/interactive_map.php' ?>
    </div>

    <div class="Discover">
        <?php include 'components/discover.php' ?>
    </div>
    
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?php echo(get_template_directory_uri()); ?>/js/map.js"></script>
<script src="<?php echo(get_template_directory_uri()); ?>/js/InteractiveHeader"></script>


<?php get_footer() ?>