<div class='prestations'>
    <h2>Nos Prestations</h2>
    <div class="container">
        <div class="justify-content-center">

        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            
            <?php the_title() ?>
            
            <?php the_content() ?>
    
        <?php endwhile; endif; ?>
        </div> <!-- ferme justify-content-center -->
    </div><!-- ferme container -->
</div><!-- ferme projects -->