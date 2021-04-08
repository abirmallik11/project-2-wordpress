<div class="slider-wrapper theme-dark">
                        <div id="slider" class="nivoSlider">
                        
                        <?php
                        
                            $myslider= new WP_Query(array(

                                'post_type' => 'our_slider',
                            ));
                        
                            if($myslider->have_posts())
                            {
                                while(have_posts()) : the_post();

                                the_post_thumbnail();

                            endwhile;
                            }

                            else
                            {
                                echo "No post Found";
                            };
                        
                        
                        
                        ?>





                        </div>
                        <div id="htmlcaption" class="nivo-html-caption">
                            <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
                        </div>
</div>

