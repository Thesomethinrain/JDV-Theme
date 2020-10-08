<?php
// Include header.php
get_template_part('templates/header');
?>
<?php
// Page 404
if ( !have_posts() ) : ?>
<article id="post-0" class="post error404not-found">
<h1 class="entry-title">Not Found</h1>
<div class="entry-content">
<p>Désolé, il n'y a rien sur cette page. Essayez de trouver ce que vous vouliez grâce à ce formulaire.</p>
<?php get_search_form(); ?>
</div>
</article>
<?php
endif;

// Include nav.php
//get_template_part('templates/nav', 'bottom');

$class = 'bottom';
 set_query_var( 'class', $class );
 get_template_part('templates/nav', 'class');



?>

<section id="section-1" class="cover-image">
  <main class="center">
    <div class="suzy-container">
      <div class="">
      <?php $color='#FFF'; include 'components/logo.php';?>

        <!--
        <?php $color='#418B9E'; include 'components/icon-actu.php';?>

        </a><a class="link-down icon-160"
            href="#section-5">
            <?php $color='#418B9E'; include 'components/icon-reperes.php';?>
        </a></p>
      </div>
      <div class="link bottom">
        <a class="link-down" href="#section-2">
          <?php $color='#FFF'; include 'components/icon-link-down.php';?>

        </a>
      </div>
-->
    </div>
  </main>
</section>


<section id="section-2" class="">
  <!--<article class="suzy-container">
    <h3>Actu</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ratione odio soluta harum commodi. Reprehenderit
      incidunt facilis ut esse laudantium, ipsa ullam, ea nam iste voluptas quae! Rerum, optio aliquid.</p>
  </article>-->
  <main class="masonry-container grid-masonry">

<?php

get_template_part('loop');

?>

  </main>

<!--
  <main class="masonry-container grid-masonry">

  <?php $color='primary'; include 'templates/box-news.php';?>
  <?php $image="28-phia-menard-thumb.jpg"; $color='third'; include 'templates/box-sticky.php';?>
  <?php $image="38-blindsuns-thumb.jpg"; $color='primary'; include 'templates/box-image.php';?>
  <?php $image="38-blindsuns.jpg"; $color='primary'; include 'templates/box-default.php';?>
  <?php $image="57-miserables-thumb.jpg"; $color='primary'; include 'templates/box-image.php';?>
  <?php $image="67-candide.jpg"; $color='minor'; include 'templates/box-default.php';?>
  <?php $color='black'; include 'templates/box-default.php';?>
  <?php $color='third'; include 'templates/box-default.php';?>
  <?php $image="46-amadani-thumb.jpg"; $color='black'; include 'templates/box-status.php';?>
  <?php $image="67-candide-thumb.jpg"; $color='white'; include 'templates/box-image.php';?>
  <?php $color='minor'; include 'templates/box-quote.php';?>
  <?php $image="65-boutelis.jpg"; $color='third'; include 'templates/box-default.php';?>
  <?php $image="65-boutelis-thumb.jpg"; $color='primary'; include 'templates/box-image.php';?>
  <?php $color='third'; include 'templates/box-quote.php';?>
  <?php $image="63-acoustic-power-thumb.jpg"; $color='primary'; include 'templates/box-image.php';?>
  <?php $image="46-amadani-thumb.jpg"; $color='primary'; include 'templates/box-image.php';?>
  <?php $image="63-acoustic-power.jpg"; $color='third'; include 'templates/box-default.php';?>
  <?php $image="33-salam-thumb.jpg"; $color='primary'; include 'templates/box-image.php';?>


</main>

-->





  <div class="link bottom">
      <a class="link-down" href="#section-4">
      <?php $color='#000'; include 'components/icon-link-down.php';?>
      </a>
    </div>
</section>

<section id="section-4" class="section cover-image">
  <main class="center">
    <div class="suzy-container">

    <?php $color='#FFF'; include 'components/logo-jbe.php';?>


      <div class="suzy-gallery">
        <article>Lorem ipsum dolor sit amet.</article>
        <article>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, mollitia?</article>
        <article>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</article>
      </div>
    </div>
    <div class="link bottom">
      <a class="link-down" href="#section-5">
      <?php $color='#FFF'; include 'components/icon-link-down.php';?>
      </a>
    </div>
  </main>

</section>


<section id="section-5" class="section">
  <main class="masonry-container grid-masonry">



  <?php $image="icon-acabotin.svg"; $color='primary'; include 'templates/box-picto.php';?>


  <?php $image="icon-jtempo.svg"; $color='primary'; include 'templates/box-picto.php';?>

  <?php $image="icon-ccroissants.svg"; $color='primary'; include 'templates/box-picto.php';?>

  <?php $image="icon-ces.svg"; $color='primary'; include 'templates/box-picto.php';?>

  <?php $image="icon-chaosmatic.svg"; $color='primary'; include 'templates/box-picto.php';?>

  <?php $image="icon-cob.svg"; $color='primary'; include 'templates/box-picto.php';?>

  <?php $image="icon-expos.svg"; $color='primary'; include 'templates/box-picto.php';?>

  <?php $image="icon-jeunepublic.svg"; $color='primary'; include 'templates/box-picto.php';?>

  <?php $image="icon-leszecs.svg"; $color='primary'; include 'templates/box-picto.php';?>

  <?php $image="icon-spectacles.svg"; $color='primary'; include 'templates/box-picto.php';?>

  <?php $image="icon-voisinages.svg"; $color='primary'; include 'templates/box-picto.php';?>


  </main>

  <div class="link">
    <a href="#section-1" class="link-up">
    
    <?php $color='#000'; include 'components/icon-link-up.php';?>
    
    </a>
  </div>

</section>



<?php
// Include sidebar.php
//get_template_part( 'templates/sidebar', 'index' );
?>

<?php
// Include footer.php
get_template_part('templates/footer');
?>

