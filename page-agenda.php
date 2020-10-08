<?php
/**
 */
?>

<?php
// Include header.php
get_template_part('templates/header');
?>
<?php


// Include nav.php
//get_template_part('templates/nav', 'bottom');

$class = 'bottom';
 set_query_var( 'class', $class );
 get_template_part('templates/nav', 'class');



?>




<section id="section-1" class="">
  <!--<article class="suzy-container">
    <h3>Actu</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ratione odio soluta harum commodi. Reprehenderit
      incidunt facilis ut esse laudantium, ipsa ullam, ea nam iste voluptas quae! Rerum, optio aliquid.</p>
  </article>-->


  
  <main class="masonry-container grid-masonry">

  <?php $image="38-blindsuns-thumb.jpg"; $color='black'; include 'templates/box-event.php';?>
  <?php $image="28-phia-menard-thumb.jpg"; $color='black'; include 'templates/box-event.php';?>



  <?php $image="38-blindsuns-thumb.jpg"; $color='black'; include 'templates/box-event.php';?>
  <?php $image="57-miserables-thumb.jpg"; $color='black'; include 'templates/box-event.php';?>
  <?php $image="65-boutelis-thumb.jpg"; $color='black'; include 'templates/box-event.php';?>
  <?php $image="63-acoustic-power-thumb.jpg"; $color='black'; include 'templates/box-event.php';?>


  <?php $image="46-amadani-thumb.jpg"; $color='primary'; include 'templates/box-event.php';?>
  <?php $image="67-candide-thumb.jpg"; $color='primary'; include 'templates/box-event.php';?>
  <?php $image="38-blindsuns-thumb.jpg"; $color='minor'; include 'templates/box-event.php';?>
  <?php $image="65-boutelis-thumb.jpg"; $color='primary'; include 'templates/box-event.php';?>
  <?php $color='third'; include 'templates/box-event.php';?>
  <?php $image="63-acoustic-power-thumb.jpg"; $color='primary'; include 'templates/box-event.php';?>
  <?php $image="46-amadani-thumb.jpg"; $color='primary'; include 'templates/box-event.php';?>
  <?php $image="33-salam-thumb.jpg"; $color='primary'; include 'templates/box-event.php';?>



  </main>
  <div class="link bottom">
      <a class="link-down" href="#section-4">
      <?php $color='#000'; include 'components/icon-link-down.php';?>
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

