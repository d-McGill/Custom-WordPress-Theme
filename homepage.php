<?php /* Template Name: Homepage*/ ?>
<?php get_header(); ?>
<?php wp_head();?>

<div id="header">
<div id="inner-header-text">
  <p class="header-title">Hello World, I'm Dan</p>
  <p class="header-small">a creative dude looking for oppourtinies</p>
  </div>
  <div id="button-wrap">
  <div id="head-button"><a href="https://dmcgillz.co.uk/blog">BLOG</a></div>
  <div id="head-button"><a href="https://dmcgillz.co.uk/say-hello">Contact</a></div>
	  
</div>
</div>

<div id="layout">

<div id="about">
<div id="inner-about">
<h2 class="second-title">Where I am</h2>
<p>Currently studying BSc (Hons) Software Engineering at Manchester Metropolitan University.
Passionate and hard working with a creative twist, looking for an opportunity to develop current
skills and grow as an individual in the technology industry.
Sociable personality and a keen eye for detail, an effective team player. Willingness to
learn and will always take on board feedback to progress. Also I love to eat pizza and skateboard. </p></div>
<img src="http://dmcgillz.co.uk/wp-content/uploads/2020/05/undraw_skateboard_d6or-1.png"/>

</div>




<div id="latest">
  <h2 class="second-title">Latest Projects</h2>
  <ul style="margin-top:-3%;">
  <?php $the_query = new WP_Query( 'cat=9&posts_per_page=3' ); ?>
  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
  <li style="display: inline;">
    <div id="card">
      <a href="<?php the_permalink();?>">
      <div id="thumb-nail"><?php the_post_thumbnail();?></div></a>

      <div id="category-text"><?php the_category();?></div>
      <div id="date-author"><?php echo get_the_date();?> </div>

      <div id="inner-card">

        <div id="title"><?php the_title();?></div>
        <div id="tags"> <?php the_tags( '','  -  ', '' ); ?> </div>
          <a href="<?php the_permalink();?>"><div id="content"><?php the_excerpt();?></div></a>
      </div>
    </div>
  </li>

<?php
endwhile;
  wp_reset_postdata();
  ?>
  </ul>
</div>



<div class="skillz">
  <h2 class="second-title">Perks</h2>
  <div class="bar learning" data-skill="PHP"></div>
  <div class="bar back basic" data-skill="JavaScript"></div>
   <div class="bar back basic" data-skill="Python"></div>
  <div class="bar back intermediate" data-skill="Java"></div>
  <div class="bar back intermediate" data-skill="SQL"></div>
  <div class="bar front advanced" data-skill="CSS3"></div>
  <div class="bar front advanced" data-skill="HTML5"></div>
  <div class="bar front advanced" data-skill="WordPress"></div>
   <div class="bar front expert" data-skill="Fortnite"></div>
</div>









<div id="latest">
  <h2 class="second-title">Life is a Journey</h2>
  <ul style="margin-top:-3%;">
  <?php $the_query = new WP_Query( 'cat=16&posts_per_page=3' ); ?>
  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
  <li style="display: inline;">
    <div id="card">
      <a href="<?php the_permalink();?>">
      <div id="thumb-nail"><?php the_post_thumbnail();?></div></a>

      <div id="category-text"><?php the_category();?></div>
      <div id="date-author"><?php echo get_the_date();?> </div>

      <div id="inner-card">

        <div id="title"><?php the_title();?></div>
        <div id="tags"> <?php the_tags( '','  -  ', '' ); ?> </div>
          <a href="<?php the_permalink();?>"><div id="content"><?php the_excerpt();?></div></a>
      </div>
    </div>
  </li>

<?php
endwhile;
  wp_reset_postdata();
  ?>
  </ul>
</div>




<div id="hire-me">
  <h2 class="second-title">Like My Style, Want to hire me?</h2>
  <div id="head-button"><a href="http://dmcgillz.co.uk/say-hello">Say Hello</a></div>





</div>










</div>
<?php get_footer(); ?>
