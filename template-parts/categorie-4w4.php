<?php

/**

 * categorie-cours permet d'afficher un article bloc

 * qui s'integredans la liste des cours qu'accède avec category/cours

 *

 */

$titre = get_the_title();

$sigle = substr($titre, 0, 7);

$titre_long = substr($titre, 7,  -5);





 $titre = get_the_title();

 if (substr($titre,0,1) == '0'){$titre = substr($titre,1);}

?>




<article class="blockflex__article">
 <figure class = "blocflex__figure">

   
 <?php
    $id_premiere_image=0;
    if(has_post_thumbnail()){
        the_post_thumbnail('thumbnail');
        if($id_premiere_image== 0){
          $id_premiere_image = get_the_ID();
        }}else
        {echo the_post_thumbnail( 25,"thumbnail");}
        ?>


  <h5><a href="<?php the_permalink(); ?>"><?php $sigle?></a></h5>

  <h6><?= $titre;?></h6>

 </h6> <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>

 <h6><?= $durree; ?></h6>

</article>
</figure>












