<article class="status imgbox grid-1 <?php if ($type) {echo $type;} else {echo 'musique';}?>">
  <a href="">

  <?php 

  $uri = get_template_directory_uri();
  
  if ($image) { echo '<img src="'.$uri.'/dist/images/datas/'.$image.'" alt="">';} ?>


    <div class="title">
    <ul id="" class="">
          <li class=""><strong>1336 (histoires de Fralib)</strong></li>
          <li class="">Philippe Durand</li>
        </ul>

    </div>
  </a>
    <div class="caption <?php if ($color) {echo $color;}?>">
      <div class="content">
        <ul id="" class="">
          <li class=""><strong>1336 (histoires de Fralib)</strong></li>
          <li class="">Philippe Durand</li>
        </ul>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus neque perferendis nihil reiciendis ea dicta excepturi ipsa autem harum labore dolores saepe exercitationem, adipisci ex dolor officia nisi fugiat aut.</p>
        <ul id="" class="inline">
          <li class="ml-s"><a class="button" href=""><span class="btn-caption">Infos</span> <i class="btn-icon fas fa-chevron-down"></i></a></li>
          <li class="ml-s"><a class="button" href=""><span class="btn-caption">Réserver</span><i class="btn-icon fas fa-shopping-basket"></i></a></li>
          <li class="ml-s"><a class="button" href=""><span class="btn-caption">Vidéo</span><i class="btn-icon fa fa-play-circle"></i></a></li>
        </ul>

      </div>
    </div>
</article>