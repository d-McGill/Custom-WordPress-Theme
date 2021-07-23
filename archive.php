<?php get_header(); ?>
<?php wp_head();?>
<div id="layout" >
  <?php if (have_posts()) : while (have_posts()) :the_post();?>
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
  <?php endwhile; endif;?>
</div>
<?php get_footer(); ?>
