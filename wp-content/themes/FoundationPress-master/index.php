<?php get_header(); ?>
<div class="row">
	<div class="small-12 large-8 columns" role="main">

	<?php if ( have_posts() ) : ?>

		<?php do_action('foundationPress_before_content'); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

		<?php do_action('foundationPress_before_pagination'); ?>

	<?php endif;?>



	<?php if ( function_exists('FoundationPress_pagination') ) { FoundationPress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
		</nav>
	<?php } ?>

	<?php do_action('foundationPress_after_content'); ?>

	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>



  
  <body>

    <header class="row" role="header">
      <div class="small-12 columns">
        <img src="images/weather.png">

        <ul>
          <li>107&#176;</li>
          <li>Partly Sunny</li>
        </ul>
        <img src="images/globe.png" class="logo">
        <a href="#" role="subscribe">Subscribe</a>
      </div>
    </header>
    <nav class="icon-bar five-up">
      <!--<input type=["search"]></input>-->
      <a class="item">
        <img src="images/menu.png">
        <label>Menu</label>
        <span class="x"></span>
      </a>
      
      <a class="item">
        <img src="images/metro.png">
        <label>Metro</label>
        <span class="x"></span>
      </a>
      
      <a class="item">
        <img src="images/sports.png">
        <label>Sports</label>
        <span class="x"></span>
      </a>
      
      <a class="item">
        <img src="images/news.png">
        <label >News</label>
        <span class="x"></span>
      </a>
      
      <a class="item">
        <img src="images/search.png">
        <label>Search</label>
      </a>
   </nav>

    <section class="row">
      <div class="small-12 columns">
        
        <div class="small-8 columns">
          <h1>US to slow troop withdrawal from Afghanistan</h1>
          <p>Before you get out the tiny violins, let me say I’m no Anwar Faisal, the rental titan whose 2,000 or so apartments </p>
        </div>
        <div class="small-4 columns">
          <img src="images/front-page.jpg">
        </div>
      
      </div>
    </section>
    
    
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
    <script>
      $(document).ready(function(){
        $("nav a img:last-child").click(function(){
          $("nav a").hide() 
           $("input").show();
        })
      });
    </script>
  </body>


