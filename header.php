<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php 
if ( is_user_logged_in() ):
	$current_user = wp_get_current_user(); 
?>
	<p>
        <?php echo $current_user->user_firstname; ?>
        <a href="<?php echo wp_logout_url(); ?>"> have a break </a>
	</p>
<?php else: ?>
    <p>
        <a href="<?php echo wp_login_url(); ?>"> Connecte-toi gros ! </a>
	</p>
<?php endif; ?>
    <?php wp_body_open(); ?>

    <div class="headerBann">
        <div class="bannLeft">
            <p>IMAGE</p>
        </div>
        <div class="bannRight">
            <p>Accueil</p>
            <p>Equipe</p>
            <p>Contact</p>
            <p>Avis</p>
        </div>

</div>  