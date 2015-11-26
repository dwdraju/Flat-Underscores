<?php
/**
* Template part for displaying About Us page content in page-about.php
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Flat_Underscores
*/
?>

<?php 
// Advanced Custom Field - About
$about_bread        =   get_field('about_text');
$about_desc_bread   =   get_field('about_description');
$about_us_tag       =   get_field('about_us_tag');
$about_us_main      =   get_field('about_us_main');

//ACF Team
$team_label         =   get_field('team_label');
$team_desc_label    =   get_field('team_description_label');

?>
<section id="title" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <?php if($about_bread){?>
                <h1><?php echo $about_bread ; ?></h1>
                <?php } else {?> 
                <h1>About Us</h1>
                <?php } ?>

                <?php if($about_desc_bread):?>
                    <p><?php echo $about_desc_bread;?></p>
                <?php endif; ?>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb pull-right">
                    <li><a href="<?php bloginfo('url');?>">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
    </div>
</section><!--/#title-->

<section id="about-us" class="container">
    <div class="row">
        <div class="col-sm-6">
            <?php if($about_us_tag):?>
                <h2>What we are</h2>
            <?php endif;?>
            <?php if($about_us_main):?>  
                <p><?php echo $about_us_main;?></p>
            <?php endif; ?>    
        </div><!--/.col-sm-6-->
        <div class="col-sm-6">
            <h2>Our Skills</h2>
            <div>
                <?php if(have_rows('skills')):?>
                    <?php while(have_rows('skills')): the_row();?>
                        <?php 
                        $skill_label    =   get_sub_field('skill_tag');
                        $skill_progress =   get_sub_field('skill_progress');
                        ?>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: <?php if('skill_progress'): echo $skill_progress; endif; ?>%;">
                                <span><?php echo $skill_label;?></span>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>    
            </div>
        </div><!--/.col-sm-6-->
    </div><!--/.row-->

    <div class="gap"></div>
    <?php if($team_label){?>
    <h1 class="center"><?php echo $team_label;?></h1>
    <?php } else {?>
    <h1 class="center">Meet the Team</h1>
    <?php } ?>
    <?php if($team_desc_label):?>
        <p class="lead center"><?php echo $team_desc_label;?></p>
    <?php endif; ?>
    <div class="gap"></div>

    <div id="meet-the-team" class="row">
        <?php if(have_rows('team_members')):?>
            <?php while(have_rows('team_members')): the_row();?>
                <?php
                $m_image    =   get_sub_field('member_image'); 
                $m_name     =   get_sub_field('member_name');
                $m_desg     =   get_sub_field('member_designation');
                $m_desc     =   get_sub_field('member_description');

                
                ?>
                <div class="col-md-3 col-xs-6">
                    <div class="center">
                        <p><img class="img-responsive img-thumbnail img-circle" src="<?php echo $m_image['url'];?>" alt="<?php echo $m_image['alt'];?>" ></p>
                        <h5>David J. Robbins<small class="designation muted"><?php echo $m_desg;?></small></h5>
                        <p><?php echo $m_desc;?></p>
                        <?php 
                        if(have_rows('social_connects')):
                            while(have_rows('social_connects')): the_row();


                        ?>
                        <a class="btn btn-social btn-facebook" href="<?php echo get_sub_field('facebook');?>"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="<?php echo get_sub_field('google-plus');?>"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="<?php echo get_sub_field('twitter');?>"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="<?php echo get_sub_field('linkedin');?>"><i class="icon-linkedin"></i></a>
                    <?php endwhile;?>
                <?php endif;?>
            </div>
        </div>

        
    <?php endwhile;?>
<?php endif;?>
</div><!--/#meet-the-team-->
    </section><!--/#about-us-->