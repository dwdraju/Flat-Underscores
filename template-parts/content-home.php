<?php
/**
* Template part for displaying home page content in page-home.php
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Flat_Underscores
*/
?>

<?php
//Advanced Custom Field Latest Project
$latest_project_header 	=	get_field('latest_project_header_title');
$latest_project_desc    = 	get_field('latest_project_header_description');

//Advanced Custom Field Testimonial
$testimonial_header		=	get_field('home_testimonial_title');
$testimonial_desc 		=	get_field('home_testimonial_description');

?>
<section id="main-slider" class="no-margin">
<div class="carousel slide wet-asphalt">
	<ol class="carousel-indicators">
		<li data-target="#main-slider" data-slide-to="0" class="active"></li>
		<li data-target="#main-slider" data-slide-to="1"></li>
		<li data-target="#main-slider" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="item active" style="background-image: url(<?php bloginfo('stylesheet_directory');?>/assets/images/slider/bg1.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="carousel-content centered">
							<h2 class="animation animated-item-1">Powerful and Responsive Web Design</h2>
							<p class="animation animated-item-2">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.item-->
		<div class="item" style="background-image: url(<?php bloginfo('stylesheet_directory');?>/assets/images/slider/bg2.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="carousel-content center centered">
							<h2 class="boxed animation animated-item-1">Clean, Crisp, Powerful and Responsive Web Design</h2>
							<p class="boxed animation animated-item-2">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
							<br>
							<a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.item-->
		<div class="item" style="background-image: url(<?php bloginfo('stylesheet_directory');?>/assets/images/slider/bg3.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="carousel-content centered">
							<h2 class="animation animated-item-1">Powerful and Responsive Web Design Theme</h2>
							<p class="animation animated-item-2">Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
							<a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
						</div>
					</div>
					<div class="col-sm-6 hidden-xs animation animated-item-4">
						<div class="centered">
							<div class="embed-container">
								<iframe src="//player.vimeo.com/video/69421653?title=0&amp;byline=0&amp;portrait=0&amp;color=a22c2f" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.item-->
	</div><!--/.carousel-inner-->
</div><!--/.carousel-->
<a class="prev hidden-xs" href="#main-slider" data-slide="prev">
	<i class="icon-angle-left"></i>
</a>
<a class="next hidden-xs" href="#main-slider" data-slide="next">
	<i class="icon-angle-right"></i>
</a>
</section><!--/#main-slider-->

<section id="services" class="emerald">
<div class="container">
	<div class="row">
	<?php $args = array( 'posts_per_page' => 3, 'post_type'=>'service' );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); 
?>

			<div class="col-md-4 col-sm-6">
				<div class="media">
					<div class="pull-left">
						<i class="<?php echo get_post_meta( get_the_ID(),'service-icon',true );?>"></i>
					</div>
					<div class="media-body">
						<h3 class="media-heading"><?php the_title();?></h3>
						<p><?php the_content();?></p>
					</div>
				</div>
			</div><!--/.col-md-4-->
		<?php endforeach; wp_reset_postdata();?>
	</div>
</div>
</section><!--/#services-->

<section id="recent-works">
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<?php if(!empty($latest_project_header)):
			?>
			<h3><?php echo $latest_project_header; ?></h3>
		<?php endif;?>
		<?php if(!empty($latest_project_desc)):?>
			<p><?php echo $latest_project_desc ?></p>
		<?php endif;?>	
		<div class="btn-group">
			<a class="btn btn-danger" href="#scroller" data-slide="prev"><i class="icon-angle-left"></i></a>
			<a class="btn btn-danger" href="#scroller" data-slide="next"><i class="icon-angle-right"></i></a>
		</div>
		<p class="gap"></p>
	</div>
	<div class="col-md-9">
		<div id="scroller" class="carousel slide">
			<div class="carousel-inner">
				<!-- Active Item, preferred =3 -->
				<div class="item active">
					<div class="row">
						<?php if(have_rows('latest_projects')): ?>
							<?php while(have_rows('latest_projects')): the_row();
							$pr_image=get_sub_field('latest_project_image');
							$pr_title=get_sub_field('latest_project_title'); 
							$pr_f_image=get_sub_field('latest_project_full_image');
						//Check active state - true/false
							if(get_sub_field('latest_project_active')):
								?>
							
							<div class="col-xs-4">
								<div class="portfolio-item">
									<div class="item-inner">
										<img class="img-responsive" src="<?php echo $pr_image['url'];?>" alt="<?php echo $pr_image['alt'];?>">
										<h5>
											<?php if($pr_title): echo $pr_title; endif; ?>
										</h5>
										<div class="overlay">
											<a class="preview btn btn-danger" title="<?php if($pr_title): echo $pr_title; endif; ?>" href="<?php echo $pr_f_image['url'];?>" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
										</div>
									</div>
								</div>
							</div> 
						<?php endif ;endwhile;?>
					<?php endif; ?>

				</div><!--/.row-->
			</div><!--/.item active-->
			<!-- Inactive items -->
			<div class="item">
				<div class="row">
					<?php if(have_rows('latest_projects')): ?>
						<?php while(have_rows('latest_projects')): the_row();

						$pr_image	 	=	get_sub_field('latest_project_image');
						$pr_title 		=	get_sub_field('latest_project_title'); 
						$pr_f_image 	=	get_sub_field('latest_project_full_image');				
							//Check active state - true/false
						if(!get_sub_field('latest_project_active')): ?>								
						<div class="col-xs-4">
							<div class="portfolio-item">
								<div class="item-inner">
									<img class="img-responsive" src="<?php echo $pr_image['url'];?>" alt="<?php echo $pr_image['alt'];?>">
									<h5>
										<?php if($pr_title): echo $pr_title; endif; ?>
									</h5>
									<div class="overlay">
										<a class="preview btn btn-danger" title="<?php if($pr_title): echo $pr_title; endif; ?>" href="<?php echo $pr_f_image['url'];?>" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
									</div>
								</div>
							</div>
						</div> 
					<?php endif; ?>
				<?php endwhile;?>
			<?php endif; ?>

		</div><!--/.row-->
	</div><!--/.item-->
	
</div>
</div>
</div>
</div><!--/.row-->
</div>
</section><!--/#recent-works-->

<section id="testimonial" class="alizarin">
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="center">
				
				<?php if($testimonial_header): ?>
					<h2><?php echo $testimonial_header;?></h2>
				<?php endif; ?>
				<?php if($testimonial_desc):?>	
					<p><?php echo $testimonial_desc;?></p>
				<?php endif; ?>	
			</div>
			<div class="gap"></div>
			<div class="row">
				<div>
					<?php if(have_rows('testimonials')): ?>
						<?php while(have_rows('testimonials')):the_row();
						$testifier		=	get_sub_field('home_testifier');
						$testimonial 	=	get_sub_field('home_testimonial');
						?>
						<div class="col-md-6">
							<blockquote>
								<p><?php echo $testimonial;?></p>
								<small><?php echo $testifier;?></small>
							</blockquote>
						</div>
					<?php endwhile;?>
				<?php endif; ?>
			</div>
			
		</div>
	</div>
</div>
</div>
</section><!--/#testimonial-->
