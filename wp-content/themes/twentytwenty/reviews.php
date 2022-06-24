<?php
/*
Template Name: reviews

*/
?>
<?php get_header() ?>
<section class="reviews reviews_page">
            <div class="container">
                <div class="title">
                    Отзывы наших клиентов
                </div>
                <div class="reviews_inner slideshow">
                <?php
                    global $post;
                    $myposts = get_posts([ 
                        'numberposts' => -1,
                        'category_name' => 'review_slider'
                    ]);
                    if( $myposts ){
                        foreach( $myposts as $post ){
                            setup_postdata( $post );
                            ?>
                            <!-- Вывод постов, функции цикла: the_title() и т.д. -->
                            <div class="review_item">
                                <div class="review_item-inner">
                                <div class="review_item-left">
                                    <?php the_post_thumbnail() ?>
                                </div>
                                <div class="review_item-right">
                                    <div class="review_item-title">
                                        <?php the_title(); ?>
                                    </div>
                                    <div class="review_item-text">
                                        <?php the_content() ?>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <?php 
                        }
                    } 
                    wp_reset_postdata(); // Сбрасываем $post
                    ?>  
                </div>
                <div class="pagingInfo"><span id="slide_num"></span><span id="slide_all"></span></div>
            </div>
        </section>
<?php get_footer(); ?>