<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

    <?php while( have_posts() ) : the_post(); ?>

        <section id="product" <?php post_class( 'product robot' ) ?>>
            <div class="container section-bg">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box">
                            <h2 class="title"><?php the_title(); ?></h2>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <span id="<?php echo get_the_ID(); ?>" class="robots-upvote" >Upvote!</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                    <div class="p-large"><?php the_content(); ?></div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>