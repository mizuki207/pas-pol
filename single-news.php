<h2><?php the_field('title'); ?></h2>

<?php
$date = get_field('date');
?>
<dl>
  <dd><?php echo date('Y.m.d', strtotime($date)); ?></dd>
</dl>

<img src="<?php the_field('news_img-1'); ?>" >

<p><?php the_field('text_filed'); ?></p>

<img src="<?php the_field('news_img-2'); ?>" >

<p><?php the_field('text_filed'); ?></p>

<img src="<?php the_field('news_img-3'); ?>" >

<h3><?php the_field('title'); ?></h3>

<p><?php the_field('recruitment_plans'); ?></p>

<img src="<?php the_field('news_img-4'); ?>" >

<h3><?php the_field('title_text_filed'); ?></h3>


<p><?php the_field('recruitment_details'); ?></p>


