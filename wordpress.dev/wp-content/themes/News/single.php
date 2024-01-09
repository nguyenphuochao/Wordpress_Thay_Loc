<?php get_header(); ?>
<?php while (have_posts()) : ?>
    <?php the_post(); ?>
    <!-- Page Header-->
    <?php
    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
    ?>
    <header class="masthead" style="background-image: url('<?php echo $featured_img_url; ?>')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h1><?php the_title(); ?></h1>
                        <h2 class="subheading"><?php the_excerpt(); ?></h2>
                        <span class="meta">
                            Posted by
                            <a href="#!"><?php the_author(); ?></a>
                            on <?php the_date(); ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Post Content-->
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </article>
<?php endwhile; ?>
<?php get_footer(); ?>