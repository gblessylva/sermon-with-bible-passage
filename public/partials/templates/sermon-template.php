<?php
/**
 *  Template Name: Sermons Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
function load_sermon_styles_styles() {
    if ( is_page_template( 'sermon.php' ) ) {
        wp_enqueue_style( 'sermon', get_stylesheet_directory_uri() . '/assets/sermon.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'load_sermon_styles_styles' );

get_header(); ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>
        <div class="sermon-container">
            <div class="sermon-wrapper">

        <?php

            // WP_Query arguments
            $args = array(
                'post_type'              => array( 'sermons' ),
                'nopaging'               => false,
                'paged'                  => '1',
                'posts_per_page'         => '9',
                'posts_per_archive_page' => '9',
                'order'                  => 'ASC',
                'orderby'                => 'date',
            );

            // The Query
            $sermon = new WP_Query( $args );

            // The Loop
            if ( $sermon->have_posts() ) {
                while ( $sermon->have_posts() ) {
                    $sermon->the_post();
                    ?>
         
                <div class="sermon-card">
                    <div class="sermon-thumb">
                        <? if(has_post_thumbnail()){
                            ?>
                                <img src="<?php the_post_thumbnail_url() ?>" alt="" srcset="">
                            <?php
                        }else{
                            ?>
                                 <img src="http://mistillas.cl/wp-content/uploads/2018/04/Nike-Epic-React-Flyknit-%E2%80%9CPearl-Pink%E2%80%9D-01.jpg" alt="" srcset="">
                            <?php
                        }

                        ?>
                    </div>
                    <div class="sermon-content">
                        <div class="sermon-meta">
        
                            <div class="sermon-title">
                             <h2><a href="<?php the_permalink(); ?>"><?php esc_attr_e(the_title()) ?></a></h2>
                            </div>
                            <div class="bible-passage">
                                <?php
                                     $sermon_bible_verse = get_post_meta( $post->ID, '_sermon_bible_verse', true);
                                     $sermon_bible_passage = get_post_meta( $post->ID, 'sermon_bible_passage', true);
                                ?>
                                <h4><?php echo $sermon_bible_verse; ?> </h4>
                                
                                <p><?php echo $sermon_bible_passage; ?></p>
                            </div>
                            <!-- <div class="excerpt">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae, cupiditate iure, minima nisi fugiat fugit ipsam excepturi tenetur rerum eos quasi deleniti assumenda ipsum.
                                    
                                </p>
                            </div> -->
                            <a href="<?php the_permalink(); ?>" class="sermon-btn">
                                Read Sermon
                            </a>
                        </div><!-- End of Sermon Meta  -->
                        
                    </div><!-- End of Sermon content  -->
                </div><!-- End of Sermon card  -->
        
                    <?php

                }
            } else {
                echo '<h1> No Sermons added yet  found </h1>';
            }

            // Restore original Post Data
            wp_reset_postdata();

        ?>

</div> <!-- End of Sermon wrapper  -->
    </div>

		
        
        


		<?php astra_pagination(); ?>

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->



<?php get_footer(); ?>
