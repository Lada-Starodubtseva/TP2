<?php /**
 *  category.php est le model par défaut pour afficher une archive d'articles
 * ne pas oublier les ; a la fin
 * 
 * htps:localhost:8000/4w4gr1/category/cours/
 * htps:localhost:8000/4w4gr1/category/notes-4w4/
 *  */ ?>

<?php get_header(); ?>
<?php /* ?>
<main>
    <pre>category.php</pre>
    <h1>bienvenue sur 4w4</h1>
    <section class="blockflex">
<?php if(have_posts()):
        while(have_posts()): the_post(); ?>
        <article>
  <h3>  <a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h3>
            <hr>
        <?= wp_trim_words(get_the_excerpt(), 10, " ... ") ?>
        </article>
        <?php endwhile; ?>
       <?php endif;?>
</section>
</main>
<?php */ ?>


<main class="site__main">
   <section class="blockflex">
      <?php
      $category = get_queried_object();
      $args = array(
         'category_name' => $category->slug,
         'orderby' => 'title',
         'order' => 'ASC'
      );
      // creation d'une nouvelle requete
      $query = new WP_Query( $args );
      // toute le reste de l'extraction de données est basée sur la nouvelle
      //requete de contenue dans le $query
      if ( $query->have_posts() ) :
         while ( $query->have_posts() ) : $query->the_post(); 
         get_template_part("template-parts/categorie", $category->slug);
 ?>
         <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata();?>
   </section>
</main>
    <?php get_footer(); ?>
</body>
</html>