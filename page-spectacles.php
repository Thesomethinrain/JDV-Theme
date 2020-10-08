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
  <ul id="filters" class="inline inner white">
            <li class="button" data-filter="*"><i class="fa fa-tag"></i> Tous les articles</li>
            <li class="button" data-filter=".theatre"><i class="fa fa-tag"></i> Theatre</li>
            <li class="button" data-filter=".musique"><i class="fa fa-tag"></i> Musique</li>
            <li class="button" data-filter=".danse"><i class="fa fa-tag"></i> Danse</li>
        </ul>


  <main class="masonry-container grid-masonry">

  <?php $type="musique"; $image="38-blindsuns-thumb.jpg"; $color='black'; include 'templates/box-cal.php';?>
  <?php $type="theatre"; $image="28-phia-menard-thumb.jpg"; $color='primary'; include 'templates/box-cal.php';?>



  <?php $type="danse"; $image="38-blindsuns-thumb.jpg"; $color='third'; include 'templates/box-cal.php';?>
  <?php $type="musique"; $image="57-miserables-thumb.jpg"; $color='black'; include 'templates/box-cal.php';?>
  <?php $type="danse"; $image="65-boutelis-thumb.jpg"; $color='third'; include 'templates/box-cal.php';?>
  <?php $type="theatre"; $image="63-acoustic-power-thumb.jpg"; $color='primary'; include 'templates/box-cal.php';?>


  <?php $type="danse"; $image="46-amadani-thumb.jpg"; $color='third'; include 'templates/box-cal.php';?>
  <?php $type="theatre"; $image="67-candide-thumb.jpg"; $color='primary'; include 'templates/box-cal.php';?>
  <?php $type="musique"; $image="38-blindsuns-thumb.jpg"; $color='black'; include 'templates/box-cal.php';?>
  <?php $type="danse"; $image="65-boutelis-thumb.jpg"; $color='third'; include 'templates/box-cal.php';?>
  <?php $type="danse"; $color='third'; include 'templates/box-cal.php';?>
  <?php $type="musique"; $image="63-acoustic-power-thumb.jpg"; $color='black'; include 'templates/box-cal.php';?>
  <?php $type="danse"; $image="46-amadani-thumb.jpg"; $color='third'; include 'templates/box-cal.php';?>
  <?php $type="theatre"; $image="33-salam-thumb.jpg"; $color='primary'; include 'templates/box-cal.php';?>



  </main>
  <div class="link bottom inner">
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

