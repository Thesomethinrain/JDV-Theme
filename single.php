<?php
// Include header.php
get_template_part('templates/header');
?>


<a href="#">
  <div class="timeline-previous">
    <i class="fa fa-chevron-left"></i>



<?php 
 $uri = get_template_directory_uri();
?>
    <span class="timeline-content"><img src="<?php echo $uri ?>/dist/images/datas/33-salam.jpg" alt="">
      <h5>Melissa Laveaux + Botibol</h5>
      <p>vendredi 14 novembre</p>
  </div>
</a>

<a href="#">
  <div class="timeline-next">
    <i class="fa fa-chevron-right"></i>

    <span class="timeline-content"><img src="<?php echo $uri ?>/dist/images/datas/38-blindsuns.jpg" alt="">Melissa Laveaux + Botibol
      <br /> vendredi 14 novembre</span>
  </div>
</a>





<section id="" class="primary">


  <div class="suzy-container">

    <main class="suzy-content">
      <div class="inner">

        <h1>1336 (parole de fralibs)</h1>

        <div class="suzy-cols-2">
          <article><img src="<?php echo $uri ?>/dist/images/datas/46-amadani.jpg" alt=""></article>
          <article><img src="<?php echo $uri ?>/dist/images/datas/38-blindsuns.jpg" alt=""></article>
        </div>
        <h5>Derrière « 1336 » se cache un décompte de jours de lutte, ceux passés de la fermeture de l’usine Fralib
          jusqu’à la fin du conflit entre Unilever et les ouvriers du groupe fabriquant les thés Lipton et
          Éléphant.
        </h5>

        <p class="column-2">1336 est aussi aujourd’hui la nouvelle marque des thés produits par la SCOP qu’ils ont créée
          en 2015.
          1336
          (parole de Fralibs) raconte ce combat de David et Goliath modernes. Après Paroles de Stéphanois,
          Philippe
          Durand prête sa voix à ces hommes et femmes qui, attachés à leur travail et refusant la fatalité,
          ont
          fait
          plier le géant économique. Le comédien donne corps aux rencontres qu’il a faites, aux interviews
          qu’il a
          menées auprès des Fralibs dans leur usine, à Gémenos près de Marseille, en gardant leurs paroles
          intactes.
          Cette épopée sociale, humaine, retrace les grands faits de cette aventure collective et rend un
          vibrant
          hommage au courage, à la pugnacité de ces ouvriers sauvant leur emploi et leur savoir-faire
          artisanal.<a href="">ipsum</a> dolor sit amet consectetur adipisicing elit. Magnam, quod quia ullam
          est
          consequatur
          sed dolor expedita voluptas iste vel nobis mollitia sint aliquid quas ad possimus temporibus
          excepturi?
          Soluta.</p>
        <p>Une « bulle de danse » de La Fabrique Chorégraphique rebondit et virevolte au gré de la saison du Jardin de
          Verre. Laissez‑vous surprendre le soir du spectacle…</p>


      </div>
    </main>
    <aside class="suzy-aside">
      <div class="inner">

        <h2>Philippe Durand</h2>

        <ul class="widget">
          <li><strong>vendredi 29 novembre</strong> [20h]</li><br />

          <li class="mention">Tout public <strong>à partir de 15 ans</strong> | durée 1h30</li>
          <li class="info">espace concert | Musiques</li>
        </ul>
        <ul class="widget">
          <li class=""><a href="" class="button whitefade">Tarif A</a><a href="" class="button blackfade">Reserver en
              ligne</a></li><br />
          <li class="">La billetterie est ouverte du mardi au vendredi de 12h à 19h et les soirs de spectacles</li>
          <!--<li class=""><a href="" class="">{{>picto-billet color="black" color-hover="red"}}</a></li>-->
        </ul>
        <ul class="widget">
          <li>
                        
          
          <?php $type="danse"; $image="46-amadani.jpg"; $color='third'; include 'templates/box-video.php';?>
        
        </li>
        </ul>


      </div>


    </aside>



  </div>


</section>

<section>


  <div class="suzy-container">
    <div class="inner suzy-cols-3">
      <article class="imgbox"><img src="<?php echo $uri ?>/dist/images/datas/46-amadani.jpg" alt=""></article>
      <article><img src="<?php echo $uri ?>/dist/images/datas/38-blindsuns.jpg" alt=""></article>
      <?php $type="danse"; $image="46-amadani.jpg"; $color='third'; include 'templates/box-video.php';?>
    </div>
    <h2>Derrière « 1336 » se cache un décompte de jours de lutte, ceux passés de la fermeture de l’usine Fralib
      jusqu’à la fin du conflit entre Unilever et les ouvriers du groupe fabriquant les thés Lipton et
      Éléphant.
    </h2>
    <hr>
    <h1>A voir également</h1>
    <div class="suzy-gallery shows">

      {{>template-musique image="33-salam.jpg" color="primary"}}
      {{>template-musique image="33-salam.jpg" color="primary"}}
      {{>template-musique image="33-salam.jpg" color="primary"}}

    </div>
  </div>


</section>





<!--
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<div id="articleSeul">
    <div class="precSuiv">
        <div class="articlePrec"><?php previous_post_link(); ?></div>
        <div class="articleSuiv"><?php next_post_link(); ?></div>
    </div>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <p>Les articles et le profil de <?php the_author_posts_link(); ?></p>
    <p>Publié le <?php the_date(); ?></p>
    <p>Catégorie(s) : <?php the_category(); ?></p>
    <p class="motsCles"><?php the_tags(); ?></p>
    <div id="commentaires">
    <h3>Les commentaires" de l'article</h3>
    <?php comments_template(); ?>
    </div>
</div>
<?php endwhile; ?>
<?php endif; ?>

-->










<?php get_sidebar(); ?>
<?php get_footer(); ?>
