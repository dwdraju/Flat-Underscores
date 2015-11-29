<?php
/**
* Template part for displaying Services page content in page-contact.php
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Flat_Underscores
*/
?>
<section id="title" class="emerald">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h1>Services</h1>
				<p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
			</div>
			<div class="col-sm-6">
				<ul class="breadcrumb pull-right">
					<li><a href="index.html">Home</a></li>
					<li class="active">Services</li>
				</ul>
			</div>
		</div>
	</div>
</section><!--/#title-->     

<section id="services">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="center gap">
					<h2>What we do</h2>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
				</div>                
			</div>
		</div>
		<div class="row">
			<?php $args = array( 'posts_per_page' => 3,'post_type'=>'service','offset'=>3 );

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
		</div><!--/.row-->
		<div class="gap"></div>
		<div class="row">
			<?php $args = array( 'posts_per_page' => 3, 'post_type'=>'service','offset'=>6 );

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
			</div><!--/.col-md-4--><?php endforeach; wp_reset_postdata();?>

		</div><!--/.row-->
		<hr>
		<div class="row">
			<div class="col-lg-12">
				<div class="center">
					<h2>What our clients say</h2>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
				</div>
				<div class="gap"></div>
				<div class="row">
					<div class="col-md-6">
						<blockquote>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
							<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
						</blockquote>
					</div>
					<div class="col-md-6">
						<blockquote>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
							<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!--/#services-->
