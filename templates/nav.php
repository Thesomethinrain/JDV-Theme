<div id="burger"><?php $color='#FFFFFF'; include 'components/menu-tag.php';?></div>
  <nav class="" 
    <?php 
    if(isset($class)){
        echo 'id="navfix-'.$class.'">'; 
      }else{
        echo 'id="navfix">'; 
      }
    ?>

<?php
			// Navigation principale
			//wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>


  	<ul class="menu-global">
<?php $color='#1EAEDB'; include 'components/menu-tag.php';?>
  		<li><a href="<?php echo site_url(); ?>">Accueil</a></li>
  		<li><a href="<?php echo site_url(); ?>/compagnie">Compagnie</a></li>
  		<li><a href="<?php echo site_url(); ?>/spectacles">Spectacles</a></li>
  		<li><a href="<?php echo site_url(); ?>/calendrier">Calendrier</a></li>
  		<li><a href="<?php echo site_url(); ?>/pad">padLOBA</a></li>
  		<li><a href="<?php echo site_url(); ?>/territoire">Territoires&nbsp;artistiques</a></li>
  		<li><a href="<?php echo site_url(); ?>/contact">Contact</a></li>
  	</ul>
  </nav>

