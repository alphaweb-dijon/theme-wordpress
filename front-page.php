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


<div class='prestations'>
    <h2>Nos Prestations</h2>
    <div class="container">
        <div class="justify-content-between" style="width: 100%;">
        <?php $loop = new WP_Query((array('post_type' => 'prestations','order'=>'ASC'))); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php the_title() ?></h5>
                    <p class="card-text"><?php the_content() ?></p>
                </div>
            </div>
            <?php endwhile; wp_reset_query(); ?>
        </div> <!-- ferme justify-content-center -->
    </div><!-- ferme container -->
</div><!-- ferme prestations -->

<div class='prestations'>
    <div class="container_contact">
        <?php $loop = new WP_Query((array('post_type' => 'contact','order'=>'ASC'))); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class=banner_contact_text'> 
                    <h5><?php the_title() ?></h5><br>
                    <?php the_content() ?>
                </div>
            <?php endwhile; wp_reset_query(); ?>
    </div><!-- ferme container_contact -->
</div><!-- ferme prestations -->

<?php
get_template_part('archive');
?>

<?php
get_footer()
?>
