<article class="image imgbox grid-1 <?php if ($type) {echo $type;} else {echo 'musique';}?>">
  <a href="">

  <?php 

  $uri = get_template_directory_uri();
  
  if ($image) { echo '<img src="'.$uri.'/dist/images/datas/'.$image.'" alt="">';} ?>


    <div class="title">
      <h1>10.12.2019</h1>
      <h6>Théâtre - Tout public à partir de 15 ans</h6>

    </div>
    
    <div class="caption <?php if ($color) {echo $color;}?>">
      <div class="content">
        <ul id="" class="">
          <li class=""><strong>1336 (histoires de Fralib)</strong></li>
          <li class="">Philippe Durand</li>
        </ul>

      </div>
    </div>


    <?php $image=false; ?>



  </a>
</article>