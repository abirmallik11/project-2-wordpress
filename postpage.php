<?php

    if(have_posts()){

        while(have_posts()) : the_post(); ?>

        <div class="content-element">
            <?php the_post_thumbnail(); ?>
            <p><?php the_content();?></p>
            <a href="<?php the_permalink();?>" class="readmore">Read More</a>
        </div>
        <?php
        endwhile;
    }

    else{

        echo "Post Not Available";
    }




?>





<!--  -->
            