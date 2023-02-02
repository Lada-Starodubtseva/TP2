<?php /**
 *  index.php est le model par défaut qui affiche un article
 * ne pas oublier les ; a la fin
 *  */ ?>

<?php get_header(); ?>

<main>
    <pre>single.php</pre>
    <h1>Bienvenue sur 4w4!</h1>
    <?php
        if(have_posts()):
            while(have_posts()):
                the_post(); // extrait un objet "post"?>
                <article>
                    <h3> <?php get_the_title(); //affiche le titre du post ?> </h3>
                    <?php the_content();?>
                </article>
           <?php endwhile; ?> 
        <?php  endif;?>
    

</main>
    <?php get_footer(); ?>
</body>
</html>