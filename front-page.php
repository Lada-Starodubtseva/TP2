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
        <article>
  <h3>  <a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h3>
    <?php the_permalink(); ?>
        <?= wp_trim_words(get_the_excerpt(), 10, " ... ") ?>
        </article>
        <?php endwhile; ?>
       <?php endif;?>
</section>
</main>
    <?php get_footer(); ?>
</body>
</html>