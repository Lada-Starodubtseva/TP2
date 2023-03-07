<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mon 4w4</title>
  
  
    <?php wp_head(); ?>
</head>
<body class="site <?php echo(is_front_page() ? "no-aside": "") ?> ">
    <header class="site__entete">
    <section class="site__header__logo">
        <?php the_custom_logo(); ?>
        <?php wp_nav_menu(array(
                            "menu" => "entete",
                            "container" => "nav",
                            "container_class" => "menu__entete",
        )); ?>        
    <?= get_search_form() ?>
     </section>
    <h1> <a class="site_titre" href="<?= bloginfo('url'); ?>"> <?= bloginfo('name'); ?></a> </h1>
    <h2 class="site__description"><?= bloginfo('description'); ?> </h2>
    </header>


<?php 

if(! is_front_page()){
get_template_part("template-parts/aside");} ?>