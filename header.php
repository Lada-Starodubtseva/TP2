<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mon 4w4</title>


    <?php wp_head(); ?>
</head>

<body class= "custom-background site" site <?php echo(is_front_page() || is_404() ? "no-aside": "") ?> ">
    <header class="site__entete">





        <section class="site__header__logo">
            <?php the_custom_logo(); ?>

            <div class="menu__recherche">

                <input type="checkbox" id="chkBurger">
                <label id="burger" for="chkBurger">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Hamburger_icon.svg/2048px-Hamburger_icon.svg.png"
                        width="35" height="35">
                </label>

                <?php wp_nav_menu(array(
                        "menu" => "entete",
                        "container" => "nav",
                        "container_class" => "menu__entete",
                )); ?>



            </div>

        </section>
        <?= get_search_form() ?>
      
        <h1> <a class="site_titre" href="<?= bloginfo('url'); ?>"> <?= bloginfo('name'); ?></a> </h1>
        <h2 class="site__description"><?= bloginfo('description'); ?> </h2>

    </header>



    <?php 

if(! is_front_page() && ! is_404()){
get_template_part("template-parts/aside");} ?>