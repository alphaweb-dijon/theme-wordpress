<?php
get_header()
?>
<div class="hero">
    <div class="texte">
    <h1><?= get_bloginfo( 'name' ); ?></h1>
        <h2><?= get_bloginfo('description')?></h2>
    </div>
</div>
<div class='projects'>
    <h2>Nos Projets</h2>
    <div class="container">
        <div class="justify-content-center">

        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            
            <a target='blank' href="<?php echo get_post_meta( get_the_ID(), 'lien', true ); ?>"><?php the_post_thumbnail()?></a>
    
        <?php endwhile; endif; ?>
        </div> <!-- ferme justify-content-center -->
    </div><!-- ferme container -->
</div><!-- ferme projects -->
<div>
    
</div>
<?php
get_footer()
?>
