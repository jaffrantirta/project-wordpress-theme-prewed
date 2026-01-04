<?php
/**
 * Front Page Template
 * This template will be used for the home page
 */

get_header(); ?>

<!-- Hero Carousel Section -->
<section class="hero-carousel">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url('<?php echo esc_url(get_theme_mod('hero_slide_1_image', get_template_directory_uri() . '/assets/images/hero1.jpg')); ?>');">
                <div class="hero-content">
                    <div class="container">
                        <h1><?php echo esc_html(get_theme_mod('hero_slide_1_title', 'Abadikan Momen Indah Anda')); ?></h1>
                        <p><?php echo esc_html(get_theme_mod('hero_slide_1_subtitle', 'Fotografer Wedding & Prewedding Profesional di Bali')); ?></p>
                        <a href="<?php echo esc_url(get_theme_mod('hero_button_link', '#contact')); ?>" class="btn-primary-custom">
                            <?php echo esc_html(get_theme_mod('hero_button_text', 'Hubungi Kami')); ?>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url('<?php echo esc_url(get_theme_mod('hero_slide_2_image', get_template_directory_uri() . '/assets/images/hero2.jpg')); ?>');">
                <div class="hero-content">
                    <div class="container">
                        <h1><?php echo esc_html(get_theme_mod('hero_slide_2_title', 'Cerita Cinta Anda')); ?></h1>
                        <p><?php echo esc_html(get_theme_mod('hero_slide_2_subtitle', 'Dalam Setiap Frame yang Sempurna')); ?></p>
                        <a href="<?php echo esc_url(get_theme_mod('hero_button_link', '#contact')); ?>" class="btn-primary-custom">
                            <?php echo esc_html(get_theme_mod('hero_button_text', 'Hubungi Kami')); ?>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url('<?php echo esc_url(get_theme_mod('hero_slide_3_image', get_template_directory_uri() . '/assets/images/hero3.jpg')); ?>');">
                <div class="hero-content">
                    <div class="container">
                        <h1><?php echo esc_html(get_theme_mod('hero_slide_3_title', 'Keindahan Bali')); ?></h1>
                        <p><?php echo esc_html(get_theme_mod('hero_slide_3_subtitle', 'Sebagai Latar Belakang Pernikahan Impian Anda')); ?></p>
                        <a href="<?php echo esc_url(get_theme_mod('hero_button_link', '#contact')); ?>" class="btn-primary-custom">
                            <?php echo esc_html(get_theme_mod('hero_button_text', 'Hubungi Kami')); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- Why Us Section -->
<section class="why-us-section section-padding" id="why-us">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <p class="section-subtitle"><?php echo esc_html(get_theme_mod('whyus_subtitle', 'Mengapa Memilih Kami')); ?></p>
                <h2 class="section-title"><?php echo esc_html(get_theme_mod('whyus_title', 'Alasan Memilih Jasa Kami')); ?></h2>
            </div>
        </div>

        <div class="row g-4">
            <!-- Feature 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas <?php echo esc_attr(get_theme_mod('whyus_feature_1_icon', 'fa-camera')); ?>"></i>
                    </div>
                    <h3><?php echo esc_html(get_theme_mod('whyus_feature_1_title', 'Fotografer Profesional')); ?></h3>
                    <p><?php echo esc_html(get_theme_mod('whyus_feature_1_desc', 'Tim fotografer berpengalaman lebih dari 10 tahun di industri wedding photography.')); ?></p>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas <?php echo esc_attr(get_theme_mod('whyus_feature_2_icon', 'fa-award')); ?>"></i>
                    </div>
                    <h3><?php echo esc_html(get_theme_mod('whyus_feature_2_title', 'Kualitas Terbaik')); ?></h3>
                    <p><?php echo esc_html(get_theme_mod('whyus_feature_2_desc', 'Menggunakan peralatan fotografi terkini untuk hasil foto berkualitas tinggi.')); ?></p>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas <?php echo esc_attr(get_theme_mod('whyus_feature_3_icon', 'fa-heart')); ?>"></i>
                    </div>
                    <h3><?php echo esc_html(get_theme_mod('whyus_feature_3_title', 'Pelayanan Ramah')); ?></h3>
                    <p><?php echo esc_html(get_theme_mod('whyus_feature_3_desc', 'Kami memberikan pelayanan terbaik dengan penuh kehangatan dan profesionalisme.')); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section section-padding" id="services">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <p class="section-subtitle"><?php echo esc_html(get_theme_mod('services_subtitle', 'Layanan Kami')); ?></p>
                <h2 class="section-title"><?php echo esc_html(get_theme_mod('services_title', 'Paket Fotografi Kami')); ?></h2>
            </div>
        </div>

        <div class="row g-4">
            <?php for ($i = 1; $i <= 3; $i++) :
                $service_image = get_theme_mod("service_{$i}_image", get_template_directory_uri() . "/assets/images/service{$i}.jpg");
                $service_title = get_theme_mod("service_{$i}_title");
                $service_desc = get_theme_mod("service_{$i}_desc");

                if ($service_title) :
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <img src="<?php echo esc_url($service_image); ?>" alt="<?php echo esc_attr($service_title); ?>">
                    <div class="service-overlay">
                        <h3><?php echo esc_html($service_title); ?></h3>
                        <p><?php echo esc_html($service_desc); ?></p>
                    </div>
                </div>
            </div>
            <?php
                endif;
            endfor;
            ?>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section class="blog-section section-padding" id="blog">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <p class="section-subtitle"><?php echo esc_html(get_theme_mod('blog_subtitle', 'Blog Kami')); ?></p>
                <h2 class="section-title"><?php echo esc_html(get_theme_mod('blog_title', 'Tips & Inspirasi')); ?></h2>
            </div>
        </div>

        <div class="row g-4">
            <?php
            $blog_posts_count = get_theme_mod('blog_posts_count', 3);
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => $blog_posts_count,
                'post_status'    => 'publish',
            );
            $blog_query = new WP_Query($args);

            if ($blog_query->have_posts()) :
                while ($blog_query->have_posts()) : $blog_query->the_post();
            ?>
                <div class="col-lg-4 col-md-6">
                    <article class="blog-card">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium', array('class' => 'img-fluid')); ?>
                            </a>
                        <?php else : ?>
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/default-blog.jpg'); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>

                        <div class="blog-content">
                            <p class="blog-meta">
                                <i class="far fa-calendar"></i> <?php echo get_the_date('d F Y'); ?>
                            </p>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="blog-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
                            <a href="<?php the_permalink(); ?>" class="read-more">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>
                <div class="col-12 text-center">
                    <p>Belum ada artikel yang dipublikasikan.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Testimonies Section -->
<section class="testimonies-section section-padding" id="testimonies">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <p class="section-subtitle"><?php echo esc_html(get_theme_mod('testimonies_subtitle', 'Testimoni')); ?></p>
                <h2 class="section-title"><?php echo esc_html(get_theme_mod('testimonies_title', 'Apa Kata Klien Kami')); ?></h2>
            </div>
        </div>

        <div class="row g-4">
            <?php for ($i = 1; $i <= 3; $i++) :
                $testimony_text = get_theme_mod("testimony_{$i}_text");
                $testimony_author = get_theme_mod("testimony_{$i}_author");
                $testimony_role = get_theme_mod("testimony_{$i}_role");

                if ($testimony_text) :
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="testimony-card">
                    <div class="testimony-quote">"</div>
                    <p class="testimony-text"><?php echo esc_html($testimony_text); ?></p>
                    <h5 class="testimony-author"><?php echo esc_html($testimony_author); ?></h5>
                    <p class="testimony-role"><?php echo esc_html($testimony_role); ?></p>
                </div>
            </div>
            <?php
                endif;
            endfor;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
