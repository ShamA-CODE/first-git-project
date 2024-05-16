<meta name="viewport" content="width=device-width, initial-scale=1">
<?php 
/*
* Template Name: Show All Posts in Slider
*/
get_header();
?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/slick/slick-theme.css"/>

<main class="wp-block-group">
	<div class="post-slider-wrapper">
		<h2>Cricket Prediction</h2>

	<?php 
		$args_array = array(
			'posts_per_page'	=> -1,                
			'post_type' 		=> 'post_slider',
			'orderby' 			=> 'post_type',
			'order' 			=> 'DESC',
			'post_status' 		=> 'publish',
			);
			$get_slick_slider_post = get_posts( $args_array );
			
			//echo '<pre>'; print_r($get_slick_slider_post); echo '</pre>';

			if ( $get_slick_slider_post ) {
				echo '<div class="cricket-slider">';
				foreach ( $get_slick_slider_post as $post ) :
					setup_postdata( $post );
					?>
					<div class="post-wrapper">
						<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
						<div class="post-img"><a href="<?php the_permalink(); ?>"><img src="<?php echo $featured_img_url; ?>" alt="Image"></a></div>
						<div class="post-content">
							<div class="post-date"><?php the_author(); ?><span> | </span> <?php echo get_the_date(); ?> </div>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php the_excerpt(); ?>
							<a class="btn-read-more" href="<?php the_permalink(); ?>">Read more</a>
						</div>
					</div>
				<?php
				endforeach; 
				wp_reset_postdata();
				echo '</div>';
			}


	?>

		
	</div>
</main>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/slick/slick.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($){
	$('.cricket-slider').slick({
	slidesToShow: 3,
	slidesToScroll: 1,
	autoplay: false,
	autoplaySpeed: 2000,
	responsive: [
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]	
	});
});
</script>


<?php get_footer();?>