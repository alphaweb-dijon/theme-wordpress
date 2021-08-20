<?php
get_header()
?>
    <h1>L'équipe</h1>
<div class='prestations'>
    <div class="container">
        <div class="justify-content-between" style="width: 100%;">
        <?php $loop = new WP_Query((array('post_type' => 'equipe','order'=>'ASC'))); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php the_content()?>
            <?php endwhile; wp_reset_query(); ?>
        </div> <!-- ferme justify-content-center -->
    </div><!-- ferme container -->
</div><!-- ferme prestations -->

<div class='prestations'>
    <div class="container_contact">
        <?php $loop = new WP_Query((array('post_type' => 'presentation',))); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class=banner_contact_text'> 
                    <h5><?php the_title() ?></h5><br>
                    <?php the_content() ?>
                </div>
            <?php endwhile; wp_reset_query(); ?>
    </div><!-- ferme container_contact -->
</div><!-- ferme prestations -->

<?php
get_footer()
?>
