<footer class="site__footer">
  <!-- <section class="lien">Colonne 1</section>
    <section class="lien">Colonne 2</section>
    <section class="lien">Colonne 3</section> -->


  <section class="site_footer_logo">
    <?php the_custom_logo(); ?>

    <nav class="footer1">
      <h5>Découvrez-en plus</h5>
      <?php wp_nav_menu(array(
                            "menu" => "footer1",
                            "container" => "nav",
                            "container_class" => "menu__footer",
        )); ?>
    </nav>

    <nav class="footer2">
      <h5>Nos réseaux sociaux</h5>
      <?php wp_nav_menu(array(
                            "menu" => "footer2",
                            "container" => "nav",
                            "container_class" => "menu__footer",
        )); ?>
    </nav>

  </section>



  <section class="site_footer_logo">
   


    <nav class="footer3">
      <h5>Evenements</h5>
      <?php wp_nav_menu(array(
                            "menu" => "PorteOuv",
                            "container" => "nav",
                            "container_class" => "menu__footer",
        )); ?>
    </nav>


</footer>

<?php wp_footer(); ?>


</body>

</html>