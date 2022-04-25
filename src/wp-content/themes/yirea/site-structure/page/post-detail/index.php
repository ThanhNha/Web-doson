<main id="single">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="sub-title">
                    <h3><?php the_title();?></h3>
                    <div class="post-time ">
                        <div class="item-parent">
                            <div class="item-reading">
                                <p class="list-item"><?php  $post_date = get_the_date( 'd-m-Y' ); echo $post_date;?></p>
                                <p class="list-item"><?php  global $post; echo wp_reading_time() . " read"; ?></p>
                                <p class="list-author">
                                    <?php
                                        $author_id = get_post_field ('post_author');
                                        $first_name = get_the_author_meta( 'first_name' , $author_id ); 
                                        $last_name = get_the_author_meta( 'last_name' , $author_id ); 
                                        echo  " Words by " .  $first_name . " " .  $last_name;
                                    ?>
                                </p>
                            </div>
                            
                            <div class="item-categorie hover-text">
                                    <?php
                                        $categories = get_the_category($post->ID);
                                        foreach( $categories as $category ) : ?> 
                                        <?php 
                                                if ( $category->name !== "All") 
                                            : ?>
                                            <a href="<?php echo get_term_link($category->term_id); ?>"><?php echo $category->name;  ?></a>  
                                        <?php endif ; ?>
                                    <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <?php the_content();?>
                </div>
            </div>
        </div>
    </div>


<section id="related" class="d-flex align-items-center darkTheme"  style="min-height: 655px;">
    <div class="container-fluid p-0">
        <div class="wrapp">
            <div class="related-title  d-flex justify-content-between align-items-center">
                <h2>Related Articles</h2>
                <div class="view-all">
                    <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'News' ) ) ); ?>">View All</a>
                </div>
            </div>
            <div class="splideRelated">
                <div class="splide__track">
                    <ul class="splide__list">
                            <?php
                            $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID),
                                'numberposts' => 3,
                                'post__not_in' => array($post->ID) ) );
                                
                                if( $related ) foreach( $related as $post ) {
                                    setup_postdata($post); ?>
                                    <li class="splide__slide ">
                                        <?php 
                                            $image = get_post_thumbnail_id();
                                            $size = 'large'; // (thumbnail, medium, large, full or custom size)
                                            if( $image  ) {
                                                echo  '<a href=" ' . get_permalink()  . ' ">'  . wp_get_attachment_image( $image, $size, "", array( "class" => "bg-hover" ) ) .'</a>';
                                            } else {
                                                //show image default
                                            }
                                        ?>
                                        <div class="post"> 
                                            <h3 class="post-title d-flex justify-content-between align-items-center">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                <?php 
                                                    $id = get_the_ID();
                                                    $catagories = get_the_category($id);
                                                    if ( ! empty( $categories ) ) {
                                                        if (! empty($catagories[1]) ) {
                                                            echo '<span>'. get_the_category( $id )[1]->name .'</span>';
                                                        } else {
                                                            echo '<span>'. get_the_category( $id )[0]->name .'</span>';
                                                        }  
                                                    }
                                                ?>
                                            </h3>
                                            <h5><?php the_excerpt(); ?></h5>
                                        </div> 
                                    </li>
                                    <?php 
                                }
                            wp_reset_postdata(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- import addThis icon social --> 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-613ef4e16c41a874"></script>
</main>

