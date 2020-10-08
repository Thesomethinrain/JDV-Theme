<article class="default box grid-1 <?php if ($color) {echo $color;}?> <?php if ($type) {echo $type;} else {echo 'musique';}?>">
  <a href="">

  <?php 
  
  $uri = get_template_directory_uri();
  
  if ($image) { echo '<img src="'.$uri.'/dist/images/datas/'.$image.'" alt="">';} ?>


    <main class="">
      <h4>Lorem ipsum dolor sit amet, consectetur.</h4>
      <span class="more"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
      <p>Lorem ipsum  dolor sit amet consectetur adipisicing elit. Consequuntur voluptate recusandae officiis excepturi,
        dolorem, maiores labore eius temporibus doloribus hic voluptates animi rerum harum, ut expedita fugit ducimus
        officia! Facere.</p>
        
    </main>
    <footer>Publié le 11/12/21</footer>

<?php $image=false; ?>

  </a>
</article>