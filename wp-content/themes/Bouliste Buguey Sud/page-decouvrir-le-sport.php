<?php 
	$image_title = get_field('title_image');
    $image_test = get_field('test_image');
?>

<?php get_header() ?>
<body>

    <div class="ImageContent">
        <img src="<?php echo $image_title;?>" class="home_image">
        <p><?php the_field('discover_title');?><p>
    </div>

    <div class="Initiation">
        <?php include 'components/initiation.php' ?>
    </div>

    <div class="Test">
        <div class="Test_container">
            <div class="Test_content">

                <div class="Typography_title">
                    <?php the_field('test_title');?><font color="#FDB25B">.</font>
                </div>

                <div class="Typography_content">
                    <?php the_field('test_content');?>
                </div>

            </div>
            <div class="Test_image">
                <div class="TestImageContent">
                    <img src="<?php echo $image_test;?>" class="test_image">
                </div>
            </div>
        </div>
    </div>

    <div class="Rules">
        <?php include 'components/rules.php' ?>
    </div>

    <div class="Try">
        <div class="Typography_title">
            <?php the_field('try_title');?><font color="#FDB25B">.</font>
        </div>
        <div class="Try_block">
            <div class="Try_block_image">
                <img src="<?php echo get_template_directory_uri();?>/images/try.png">
            </div>
            <div class="Try_block_content">
                <p>
                    N’hesitez pas à venir essayer ce sport, vous pourriez bien être surpris ! 
                    <br><br>
                    Nous nous ferons un plaisir de vous accueillir et de vous transmettre notre passion.
                </p>
                <div class="Try_block_content_links">
                    <a href="<?php echo get_permalink(8); ?>"><button class="Button_basic">06 10 20 20 60 </button></a>
                    <a href="<?php echo get_permalink(8); ?>"><button class="Button_basic">belleyclub@gmail.com</button></a>
                </div>
            </div>
        </div>
    </div>

</body>
<?php get_footer() ?>
