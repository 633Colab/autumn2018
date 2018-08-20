<?php get_header();?>
<div id="page-home">
    <div id="home-header">
       <?php get_template_part('template-parts/sections/section', 'header'); ?>
    </div>
    <?php get_template_part('template-parts/sections/section','icon'); ?>

    <?php get_template_part('template-parts/sections/section','portfolio'); ?>

    <?php get_template_part('template-parts/sections/section','timeline'); ?>
</div>

<?php get_footer(); ?>