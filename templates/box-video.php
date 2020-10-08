<article class="imgbox video event">

<?php 

$uri = get_template_directory_uri();

if ($image) { echo '<img src="'.$uri.'/dist/images/datas/'.$image.'" alt="">';} ?>




<h2 class="title"><i class="far fa-play-circle fa-2x"></i></h2>
    <div class="caption <?php if ($color) {echo $color;}?>">
        <ul id="" class="content">
            <li class="">
                <i class="far fa-play-circle"></i> vidéo
            </li>

        </ul>

    </div>

    

    <div class="modal">
    <div class="white inner">
        <iframe width="100%" height="400" src="https://www.youtube.com/embed/ucLPuUJJw4o" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>


    <div class="close_button">
        <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30" enable-background="new 0 0 30 30"
            xml:space="preserve">
            <polygon fill="#000" points="30,0.465 29.535,0 15,14.535 0.465,0 0,0.465 14.535,15 0,29.535 0.465,30 15,15.465 29.535,30 30,29.535 
          15.465,15 " /></svg>
    </div>


</div>



</article>