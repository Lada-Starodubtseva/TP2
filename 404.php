<?php
/**
 * Modèle par défaut
 * 
 */
$image = "foret-conifer.jpg";
is_front_page();
?>
<?php get_header(); ?>

<body class="site no-aside">


    <section class="site__main__404__body">

        <main class="site__main__404">

            <h1>404.php</h1>
            <h2>Page non disponible</h2>

            <p>Page introuvable, Vous pouvez tenter une recherche!</p>

            <?= get_search_form() ?>

            <nav class="menu-notes-404">
                <h2>Les notes de cours</h2>
                <?php wp_nav_menu(array(
                            "menu" => "notes",
                            "container" => "nav",
                            "container_class" => "menu__main",
                    )); ?>

                <h2>Nos choix de cours</h2>
                <?php wp_nav_menu(array(
                            "menu" => "cours",
                            "container" => "nav",
                            "container_class" => "menu__main",
                    )); 
                    
                
            ?>

        </main>
    </section>
</body>
<?php get_footer(); ?>