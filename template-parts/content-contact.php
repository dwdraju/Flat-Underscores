<?php
/**
* Template part for displaying Contact page content in page-contact.php
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Flat_Underscores
*
* Contact form 7 installation required Link: https://wordpress.org/plugins/contact-form-7/
*/
?>
<?php
	// Advanced Custom Field - Contact us
$contact_label			=	get_field('contact_us_label');
$contact_desc_label 	=	get_field('contact_us_desc_label'); 
$google_map				=	get_field('google_map_location');
?>
<section id="title" class="emerald">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<?php if($contact_label){?>
				<h1><?php echo $contact_label;?></h1>
				<?php } else{ ?>
				<h1>Contact Us</h1>
				<?php }?>
				<?php if($contact_desc_label):?>
					<p><?php echo $contact_desc_label;?></p>
				<?php endif;?>
			</div>
			<div class="col-sm-6">
				<ul class="breadcrumb pull-right">
					<li><a href="index.html">Home</a></li>
					<li class="active">Contact Us</li>
				</ul>
			</div>
		</div>
	</div>
</section><!--/#title-->    

<section id="contact-page" class="container">
	<div class="row">
		<div class="col-sm-8">
			<h4>Contact Form</h4>
			<div class="status alert alert-success" style="display: none"></div>
			<?php the_content();?>
			<!-- To contact form 7 
			<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
				<div class="row">
					<div class="col-sm-5">
						<div class="form-group">
							[text* your-first-name class:form-control placeholder "First Name"]
						</div>
						<div class="form-group">
							[text* your-last-name class:form-control placeholder "Last Name"]
						</div>
						<div class="form-group">
							[email* your-email class:form-control placeholder "Email Address"]
						</div>
						<div class="form-group">
							[submit class:btn class:btn-primary class:btn-lg "Send Message"]
						</div>
					</div>
					<div class="col-sm-7">
						[textarea* your-message class:form-control id:message *8 placeholder "Message"]
					</div>
				</div>
			</form>  -->
			
		</div><!--/.col-sm-8-->
		<div class="col-sm-4">
			<?php if($google_map):?>
				<h4>Our Location</h4>
				<iframe width="100%" height="215" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $google_map;?>"></iframe>
			<?php endif;?>
		</div><!--/.col-sm-4-->
	</div>
    </section><!--/#contact-page-->