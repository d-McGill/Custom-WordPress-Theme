<?php get_header(); ?>
<div id="page-thumb-nail"><?php the_post_thumbnail();?></div>
  <?php if (have_posts()) : while (have_posts()) :the_post();?>
  <div id="page-date-author"><?php echo get_the_date();?> </div>
  <div id="page-category"><?php the_category();?></div>
    <div id="page-layout">
        <div id="page-title"><?php the_title();?></div>
        <div id="page-tags"> <?php the_tags( '',' - ', '' ); ?> </div>

        <div id="page-content"><?php the_content();?></div>

        <?php wcr_share_buttons(); ?>
      <?php endwhile; endif;?>
  </div>
<?php get_footer(); ?>
