<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package proetis
 */

?>
<div class="fullscreen-bg">
    <div class="overlay">
       
        <p>
	        <span class="text">Делаем сайты профессионально,</span> <br> <span class="text">Работа с нами - надежность и качественный результат</span><br>	
        </p>
        
    </div>
		<video loop autoplay poster="<?php echo get_template_directory_uri(); ?>/img/biz.jpg" class="fullscreen-bg__video">
        	<source src="video/Working-Space.mp4" type="video/mp4">
    	</video>
</div>


<?php the_content(); ?>
