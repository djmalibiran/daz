<?php
get_header();



if( get_field('hero_background_image') ): ?>
    <?php $image = get_field('hero_background_image'); ?>
    <div id="hero" class="container-fluid px-0 py-5 py-md-64 py-lg-96 text-white" style="background-image: url(<?php echo $image['url']; ?>); background-size: cover; background-position: center;">
        <div class="container">
            <?php  if( get_field('hero_text') ): ?>
                <h1><?php the_field('hero_text'); ?></h1>
                <?php 
                    $hero_btn = get_field('hero_button');
                    if( $hero_btn ): 
                        $hero_btn_url = $hero_btn['url'];
                        $hero_btn_title = $hero_btn['title'];
                        $hero_btn_target = $hero_btn['target'] ? $hero_btn['target'] : '_self';
                        ?>
                    <a class="btn btn-primary position-relative z-1" href="<?php echo esc_url( $hero_btn_url ); ?>" target="<?php echo esc_attr( $hero_btn_target ); ?>"><?php echo esc_html( $hero_btn_title ); ?></a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <?php the_content(); ?>
        </div>
    </div>
</div>


<?php 
if( get_field('test_f_label') ): ?>
    <h2><?php the_field('test_f_label'); ?></h2>
<?php endif;

get_footer();
?>