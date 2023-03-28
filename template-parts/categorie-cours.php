  <?php
/**
 * categorie-cours permet d'afficher un article bloc
 * qui s'integredans la liste des cours qu'accède avec category/cours
 *
 */ 


 $titre = get_the_title();
 $sigle = substr($titre, 0, 7);
 $titre_long = substr($titre, 7,  -5);
 $durree = "90";
?>

  <article class="blockflex__article">
    <h5><a href="<?php the_permalink(); ?>"><?php $sigle?></a></h5>
    <h6><?= $titre_long;?></h6>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p><!-- Prend les 15 premiers mots du excerpt -->
    <h6><?= $durree; ?></h6>
    <p><?php the_field('enseignant') ?> </p>
    <p><?php the_field('domaine') ?> </p>
  </article>


  <?php
  //the_excerpt() // echo du résumé du post (wordpress -> post -> excerpt)
  //the_content() // echo le contenu complet post
?>