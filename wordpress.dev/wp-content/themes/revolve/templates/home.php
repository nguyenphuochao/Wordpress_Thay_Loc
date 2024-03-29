<?php
/* Template Name: HomePage */
?>
<?php get_header(); ?>
<!-- Slider -->
<section class="slider mt-4">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-lg-12 col-sm-12 col-md-12 slider-wrap">
                <?php
                $args = array(
                    'posts_per_page' => 5,
                );
                $the_query = new WP_Query($args);
                while ($the_query->have_posts()) :
                    $the_query->the_post();
                ?>
                    <div class="slider-item">
                        <div class="slider-item-content">
                            <div class="post-thumb mb-4">
                                <a href="blog-single.html">
                                    <img src="<?php echo get_theme_file_uri('assets/images/slider/slider1.jpg') ?>" alt="" class="img-fluid">
                                </a>
                            </div>

                            <div class="slider-post-content">
                                <span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing"><?php the_terms(get_the_ID(), 'category') ?></span>
                                <h3 class="post-title mt-1"><a href="blog-single.html"><?php the_title(); ?></a></h3>
                                <span class=" text-muted  text-capitalize"><?php echo get_the_date(); ?></span>
                            </div>
                        </div>
                    </div>
                <?php endwhile ?>
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <article class="post-grid mb-5">
                            <a class="post-thumb mb-4 d-block" href="blog-single.html">
                                <img src="<?php echo get_theme_file_uri('assets/images/news/f1.jpg') ?>" alt="" class="img-fluid w-100">
                            </a>
                            <span class="cat-name text-color font-extra text-sm text-uppercase letter-spacing-1">Explore</span>
                            <h3 class="post-title mt-1"><a href="blog-single.html">The best place to explore to enjoy</a></h3>

                            <span class="text-muted letter-spacing text-uppercase font-sm">June 15, 2019</span>

                        </article>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <article class="post-grid mb-5">
                            <a class="post-thumb mb-4 d-block" href="blog-single.html">
                                <img src="<?php echo get_theme_file_uri('assets/images/news/f2.jpg') ?>" alt="" class="img-fluid w-100">
                            </a>
                            <span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Lifestyle</span>
                            <h3 class="post-title mt-1"><a href="blog-single.html">How to Make list for travelling alone</a></h3>

                            <span class="text-muted letter-spacing text-uppercase font-sm">September 15, 2019</span>

                        </article>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <article class="post-grid mb-5">
                            <a class="post-thumb mb-4 d-block" href="blog-single.html">
                                <img src="<?php echo get_theme_file_uri('assets/images/news/f3.jpg') ?>" alt="" class="img-fluid w-100">
                            </a>
                            <span class=" cat-name text-color font-sm font-extra text-uppercase letter-spacing">Food</span>
                            <h3 class="post-title mt-1"><a href="blog-single.html">5 ingredient cilantro vinaigrette</a></h3>

                            <span class="text-muted letter-spacing text-uppercase font-sm">September 15, 2019</span>

                        </article>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <article class="post-grid mb-5">
                            <a class="post-thumb mb-4 d-block" href="blog-single.html">
                                <img src="<?php echo get_theme_file_uri('assets/images/news/f4.jpg') ?>" alt="" class="img-fluid w-100">
                            </a>
                            <span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Explore</span>
                            <h3 class="post-title mt-1"><a href="blog-single.html">A Simple Way to Feel Like Home When You
                                    Travel</a></h3>

                            <span class="text-muted letter-spacing text-uppercase font-sm">March 20, 2019</span>

                        </article>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <article class="post-grid mb-5">
                            <a class="post-thumb mb-4 d-block" href="blog-single.html">
                                <img src="<?php echo get_theme_file_uri('assets/images/news/f5.jpg') ?>" alt="" class="img-fluid w-100">
                            </a>
                            <span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Travel</span>
                            <h3 class="post-title mt-1"><a href="blog-single.html">What Type of Traveller Are You?</a></h3>

                            <span class="text-muted letter-spacing text-uppercase font-sm">September 15, 2019</span>

                        </article>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <article class="post-grid mb-5">
                            <a class="post-thumb mb-4 d-block" href="blog-single.html">
                                <img src="<?php echo get_theme_file_uri('assets/images/news/f6.jpg') ?>" alt="" class="img-fluid w-100">
                            </a>
                            <span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Experience</span>
                            <h3 class="post-title mt-1"><a href="blog-single.html">A Road Trip Review of the 2018</a></h3>

                            <span class="text-muted letter-spacing text-uppercase font-sm">July 10, 2019</span>

                        </article>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <article class="post-grid mb-5">
                            <a class="post-thumb mb-4 d-block" href="blog-single.html">
                                <img src="<?php echo get_theme_file_uri('assets/images/news/f7.jpg') ?>" alt="" class="img-fluid w-100">
                            </a>
                            <span class=" cat-name text-color font-sm font-extra text-uppercase letter-spacing">music</span>
                            <h3 class="post-title mt-1"><a href="blog-single.html">Portugal’s Sunset summer vission</a></h3>

                            <span class="text-muted letter-spacing text-uppercase font-sm">September 15, 2019</span>

                        </article>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <article class="post-grid mb-5">
                            <a class="post-thumb mb-4 d-block" href="blog-single.html">
                                <img src="<?php echo get_theme_file_uri('assets/images/news/f8.jpg') ?>" alt="" class="img-fluid w-100">
                            </a>
                            <span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">beauty</span>
                            <h3 class="post-title mt-1"><a href="blog-single.html">The best soft Tropical Getaway</a></h3>

                            <span class="text-muted letter-spacing text-uppercase font-sm">March 12, 2019</span>

                        </article>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <article class="post-grid mb-5">
                            <a class="post-thumb mb-4 d-block" href="blog-single.html">
                                <img src="<?php echo get_theme_file_uri('assets/images/news/f9.jpg') ?>" alt="" class="img-fluid w-100">
                            </a>
                            <span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Travel</span>
                            <h3 class="post-title mt-1"><a href="blog-single.html">Memoriable Paris Girls Trip </a></h3>

                            <span class="text-muted letter-spacing text-uppercase font-sm">April 19, 2019</span>

                        </article>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <article class="post-grid mb-5">
                            <a class="post-thumb mb-4 d-block" href="blog-single.html">
                                <img src="<?php echo get_theme_file_uri('assets/images/news/f10.jpg') ?>" alt="" class="img-fluid w-100">
                            </a>
                            <span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Experience</span>
                            <h3 class="post-title mt-1"><a href="blog-single.html">How to Plan your Trip the Right Way</a></h3>

                            <span class="text-muted letter-spacing text-uppercase font-sm">February 15, 2019</span>

                        </article>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <article class="post-grid mb-5">
                            <a class="post-thumb mb-4 d-block" href="blog-single.html">
                                <img src="<?php echo get_theme_file_uri('assets/images/news/f11.jpg') ?>" alt="" class="img-fluid w-100">
                            </a>
                            <span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Travel</span>
                            <h3 class="post-title mt-1"><a href="blog-single.html">8 Powerful Ways to Add Vibrant Colour to Your
                                    Life</a></h3>

                            <span class="text-muted letter-spacing text-uppercase font-sm">August 15, 2019</span>

                        </article>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <article class="post-grid mb-5">
                            <a class="post-thumb mb-4 d-block" href="blog-single.html">
                                <img src="<?php echo get_theme_file_uri('assets/images/news/f12.jpg') ?>" alt="" class="img-fluid w-100">
                            </a>
                            <span class=" cat-name text-color font-sm font-extra text-uppercase letter-spacing">Lifestyle</span>
                            <h3 class="post-title mt-1"><a href="blog-single.html">The best to-do list to help boost your
                                    productivity</a></h3>

                            <span class="text-muted letter-spacing text-uppercase font-sm">October 2, 2019</span>

                        </article>
                    </div>
                </div>
            </div>

            <div class="m-auto">
                <div class="pagination mt-5 pt-4">
                    <ul class="list-inline ">
                        <li class="list-inline-item"><a href="#" class="active">1</a></li>
                        <li class="list-inline-item"><a href="#">2</a></li>
                        <li class="list-inline-item"><a href="#">3</a></li>
                        <li class="list-inline-item"><a href="#" class="prev-posts"><i class="ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>