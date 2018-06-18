<?php
/* Template Name: about */
?>
<?php get_header(); ?>

<div class="content" id="ajax-content">


        <div class="text-intro">

          <h1>About us</h1>

          <div class="one-column">
            <p>Front-End Developer | UI/Web Designer | Video Producer</p>

          </div>


          <div class="two-column">

            <p>Hello, my name is Tomasz Mazurczak. I'm freelancer. I invite you to look at my work and thanks for liking the project.<br/><br/>

            Full corporate identity visual with various versions of the logo. The creative combination of letters of the company name: Bespoke Creative LTD. (B+C+L) gave the following effects work. We used soft nude shades colors which added prestige. Website done in HTML5 + CSS3 responsive version.
            <br/><br/>
            I encourage you to watch the presentation.

            </p>

          </div>


        </div>

        <div class="clear"></div>

        <div class="text-intro" id="site-type">

          <h1>Photography</h1>
          <p>All project is clean and simplicity modern style.</p>

        </div>


  <!--Portfolio grid-->

  <ul class="portfolio-grid">


    <?php
          query_posts(array('category_name'=>'photography,works','posts_per_page' => 1,'order_by'=>'id desc'));
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
  

<?php get_footer(); ?>
