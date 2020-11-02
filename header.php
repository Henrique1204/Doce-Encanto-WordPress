<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Doce Encanto Reborn - Bebês reborn, encontre o bebê ideal para você com a gente e conheça um pouco sobre a empresa.">
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="Doce Encanto Reborn <?php wp_title(" | "); ?> - Bebês reborn"/>
	<meta property="og:description" content="Doce Encanto Reborn - Bebês reborn, encontre o bebê ideal para você com a gente e conheça um pouco sobre a empresa"/>
	<meta property="og:url" content="https://doce-encanto-reborn.com"/>
	<meta property="og:image" content="https://doce-encanto.com/img/og-doce-encanto-reborn.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@400;700&family=Poly&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
    <title>Doce Encanto Reborn <?php wp_title(" | "); ?></title>
    <!-- Header WP -->
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="container">
            <h1 class="logo"><a href="/">Doce encanto reborn</a></h1>

            <nav class="menu-nav">
                <?php $args = array(
                    'menu' => 'principal',
                    'theme_location' => 'menu-principal',
                    'container' => false
                    );
                    wp_nav_menu($args);
                ?>
            </nav>
        </div>
    </header>
