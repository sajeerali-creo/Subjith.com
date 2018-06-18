<?php
/* Template Name: home */
?>
<?php get_header(); ?>

<!--Content-->

  <div class="content" id="ajax-content">


        <div class="text-intro" id="site-type">

          <h1>My creative and Perfect Balancing</h1>
          <h1 class="typewrite"><span>Clicks</span></h1>
          <p>Please check my portfolio. All project is clean and simplicity modern style.</p>

        </div>


  <!--Portfolio grid-->

  <ul class="portfolio-grid">

<?php
  query_posts('category_name=photography,works' );
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

  <div id="ajax-sidebar"></div>


<?php get_footer(); ?>
