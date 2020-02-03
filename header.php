<?php
 if( has_custom_logo() ) { 
  the_custom_logo(); 
    } else { ?>
    <h1 class="navbar-brand mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>


<?php } ?>

<!DOCTYPE html>
 <html>
        <head>

        <?php wp_head();?>

         </head>

<body <?php body_class();?>>


<header class="sticky-top">


            <div class="container">
            <?php wp_nav_menu(


                array(

                    'theme_location' => 'top-menu' , 
                    'menu_class' => 'navigation'
                    
                )

            );?>
            </div>

   
<div id="header-image">
    <? php the_custom_logo();?>
    
       <?php
                $logo_sticky = $protocol . str_replace( array( 'http://', 'https://' ), '', $params['sticky_image']['url'] );
             ?>

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="Custom-logo rel="home">
                <?php echo '<img src="' . $logo_sticky . '" alt="' . get_bloginfo( 'name' ) . '" style="max-width: ' . esc_attr( $sticky_width ) . 'px;" />'; ?>
            </a>
</div>



</header>



