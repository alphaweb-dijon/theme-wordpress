<div class='prestations'>
    <h2>Nos Prestations</h2>
    <div class="container">
        <div class="justify-content-center">

        <?php $loop = new WP_Query( array( 'post_type' => 'prestations', 'posts_per_page' => '10' ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <h1><?php the_title() ?></h1>
            <?php the_content() ?>
        <?php endwhile; wp_reset_query(); ?>
        </div> <!-- ferme justify-content-center -->
    </div><!-- ferme container -->
</div><!-- ferme prestations -->