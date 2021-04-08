<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Required meta tags -->
    <meta <?php bloginfo('charset') ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <title><?php bloginfo('name') ?></title>
    <?php wp_head()?>
</head>
<body>
    <div class="container-fluid full-website">
        <div class="row first-room">
            <div class="col-6">
                <h2><?php bloginfo('name'); ?></h2>
            </div>
            <div class="col-6 banner">
                <!-- <h2>banner</h2> -->
            </div>
        </div>
        <div class="row">
            <?php get_template_part('menu'); ?>
        </div>
        
        
            <!-- ------slider--------- -->
            <section>
                <div class="slider">
                    <?php get_template_part('slider'); ?>
                </div>
            </section>
        

        <div class="row">
            <div class="left-side">
                <?php get_template_part('postpage')?>
            </div>
            
            <div class="right-side">
                <?php get_sidebar(); ?>
                
            </div>
        </div>

        <div class="row">
            <div class="fifth-room">
                <?php get_template_part('footerwidget'); ?>
            </div>
            <!-- sixth room start  -->
            <div class="sixth-room">
                <h4>&copy;Copyright 2021 | All rights reserved by MD ABIR MALLIK</h4>
            </div>
        </div>
    
        <!-- javascript -->
        <script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>
        <script type="text/javascript" src="jquery.nivo.slider.js"></script>
        <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider();
        });
        </script>
        </div>
    </div>
    
    <?php wp_footer()?>
</body>
</html>