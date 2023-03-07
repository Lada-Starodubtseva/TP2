<?php /**
 *  index.php est le model par défaut deu thème 4w4
 * ne pas oublier les ; a la fin
 *  */ ?>

<?php get_header(); ?>

<main class="site__main">
    <pre>front-page.php</pre>
    <h1>bienvenue sur 4w4</h1>
    <section class="blocflex">
<?php if(have_posts()):
        while(have_posts()): the_post(); ?>
        <?php if (in_category('galerie')){ 
            get_template_part("template-parts/categorie", "galerie");}
            else{
   get_template_part("template-parts/categorie", "4w4");} ?>
        <?php endwhile; ?>
       <?php endif;?>
</section>
</main>
    <?php get_footer(); ?>
</body>
</html>