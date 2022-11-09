<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"> 

    <?php wp_head(); ?>

</head>

<body>

    <header>
        <nav id="nav" class="nav-menu">
            <a href="/" class="logo">Lettera</a>
            <div class="menu-mobile">
                <i class="material-icons" id="menuMobile">menu</i>
            </div>
           <!-- <ul id="mlist" class="menu-list">
                <li><a href="/">Home</a></li>
                <li><a href="/">Quem Somos</a></li>
                <li><a href="/">Serviços</a></li>
                <li><a href="/">Portfólio</a></li>
                <li><a href="/">Contato</a></li>
            </ul> -->

            <?php 
                $theme_location = 'primary';
                create_bootstrap_menu( $theme_location );
	        ?>
        </nav>

        <div class="header-text">

            <?php
            $destaques = array(
                'post_type' => 'header',
                'posts_per_page' => 1,
            );

            $destaquesheader = new WP_Query($destaques);
            if ($destaquesheader->have_posts()) :

                while ($destaquesheader->have_posts()) : $destaquesheader->the_post();

                $custom_post_type = get_post_meta($post->ID, 'custom_input', true);
            ?>

                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                    <button type="button" class="btn-header"><?php echo $custom_post_type; ?></button>

            <?php endwhile;
            endif; ?>

        </div>

    </header>

    <main>