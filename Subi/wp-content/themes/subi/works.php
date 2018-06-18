<?php
/* Template Name: works */
?>
<?php get_header(); ?>
<div class="content" id="ajax-content">


        <div class="text-intro">

          <h1>Projects</h1>
          <p>Please check my portfolio. All project is clean and simplicity modern style. You can buy this template.</p>

          <ul class="work-tab">
            <li><a href="#">Photography</a></li>
            <li><a href="#" class="active">Other Works</a></li>
          </ul>

        </div>


  <!--Portfolio grid-->

  <ul class="portfolio-grid">


    <?php
  query_posts('category_name=works' );
  while ( have_posts() ) : the_post();
?>
    <li class="grid-item" data-jkit="[show:delay=3000;speed=500;animation=fade]">
      <?php the_post_thumbnail('full',array("class"=>"img")); ?>
        <a href="<?php the_permalink();?>">
          <div class="grid-hover">
            <h1><?php echo get_the_title();?></h1>
            <p><?php echo get_post_meta($post->ID,'catogory',true);?></p>
          </div>
        </a>
    </li>

<?php
  endwhile;
?>  

  </ul>

  </div>



  <!--Home Sidebar-->

<div id="ajax-sidebar"></div>

<?php get_footer(); ?