<?php /* Template Name: Example Template */ ?>
<?php get_header(); ?>

<main class="container">
    <div class="row">
        <div class="col-12 col-lg-8">
            <h1><?php single_post_title(); ?></h1>
            <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
            <?php the_content();?>
        </div>
        <div class="col-12 col-lg-4">
            sidebee
        </div>
    </div>
</main>

<?php get_footer(); ?>