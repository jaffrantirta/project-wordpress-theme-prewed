<?php
/**
 * Template Name: About Us
 * Template untuk halaman Tentang Kami
 */
get_header(); ?>

<div class="about-page" style="padding-top: 100px; padding-bottom: 80px;">
    <!-- Hero Section -->
    <section class="about-hero" style="background: linear-gradient(135deg, var(--light-bg), #fff); padding: 80px 0;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <?php while (have_posts()) : the_post(); ?>
                        <p class="section-subtitle">Tentang Kami</p>
                        <h1 class="section-title" style="text-align: left; display: block;"><?php the_title(); ?></h1>
                        <div class="about-content" style="font-size: 1.1rem; line-height: 1.8; color: var(--text-color); margin-top: 30px;">
                            <?php
                            // Tampilkan excerpt atau konten awal
                            if (has_excerpt()) {
                                the_excerpt();
                            } else {
                                echo wp_trim_words(get_the_content(), 50, '...');
                            }
                            ?>
                        </div>
                    <?php endwhile; ?>

                    <!-- Stats -->
                    <div class="stats-row" style="margin-top: 40px; display: flex; gap: 30px; flex-wrap: wrap;">
                        <div class="stat-item">
                            <h3 style="font-size: 3rem; color: var(--primary-color); margin-bottom: 5px; font-weight: 700;">10+</h3>
                            <p style="color: var(--text-color); margin: 0;">Tahun Pengalaman</p>
                        </div>
                        <div class="stat-item">
                            <h3 style="font-size: 3rem; color: var(--primary-color); margin-bottom: 5px; font-weight: 700;">500+</h3>
                            <p style="color: var(--text-color); margin: 0;">Pasangan Bahagia</p>
                        </div>
                        <div class="stat-item">
                            <h3 style="font-size: 3rem; color: var(--primary-color); margin-bottom: 5px; font-weight: 700;">50+</h3>
                            <p style="color: var(--text-color); margin: 0;">Penghargaan</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="about-image" style="border-radius: 10px; overflow: hidden; box-shadow: 0 20px 60px rgba(0,0,0,0.15);">
                            <?php the_post_thumbnail('large', array('class' => 'img-fluid', 'style' => 'width: 100%; height: auto;')); ?>
                        </div>
                    <?php else : ?>
                        <div class="about-image-placeholder" style="background: var(--light-bg); height: 500px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-camera" style="font-size: 5rem; color: var(--primary-color); opacity: 0.3;"></i>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="our-story-section section-padding" style="background: var(--white);">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <p class="section-subtitle">Cerita Kami</p>
                    <h2 class="section-title">Perjalanan Kami</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="story-content" style="font-size: 1.05rem; line-height: 1.9; color: var(--text-color);">
                        <?php
                        // Reset post data
                        rewind_posts();
                        while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section class="values-section section-padding" style="background: var(--light-bg);">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <p class="section-subtitle">Nilai-Nilai Kami</p>
                    <h2 class="section-title">Apa yang Kami Yakini</h2>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="value-card" style="background: var(--white); padding: 40px 30px; border-radius: 10px; text-align: center; height: 100%; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                        <div class="value-icon" style="width: 80px; height: 80px; margin: 0 auto 20px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-heart" style="font-size: 2rem; color: var(--white);"></i>
                        </div>
                        <h3 style="font-size: 1.5rem; margin-bottom: 15px; color: var(--secondary-color);">Passion</h3>
                        <p style="color: var(--text-color); line-height: 1.7;">Kami mencintai apa yang kami lakukan dan memberikan yang terbaik dalam setiap momen yang kami abadikan.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card" style="background: var(--white); padding: 40px 30px; border-radius: 10px; text-align: center; height: 100%; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                        <div class="value-icon" style="width: 80px; height: 80px; margin: 0 auto 20px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-award" style="font-size: 2rem; color: var(--white);"></i>
                        </div>
                        <h3 style="font-size: 1.5rem; margin-bottom: 15px; color: var(--secondary-color);">Profesionalisme</h3>
                        <p style="color: var(--text-color); line-height: 1.7;">Standar tinggi dalam setiap aspek pekerjaan kami, dari konsultasi hingga hasil akhir.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card" style="background: var(--white); padding: 40px 30px; border-radius: 10px; text-align: center; height: 100%; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                        <div class="value-icon" style="width: 80px; height: 80px; margin: 0 auto 20px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-handshake" style="font-size: 2rem; color: var(--white);"></i>
                        </div>
                        <h3 style="font-size: 1.5rem; margin-bottom: 15px; color: var(--secondary-color);">Kepercayaan</h3>
                        <p style="color: var(--text-color); line-height: 1.7;">Membangun hubungan jangka panjang dengan klien berdasarkan kepercayaan dan kejujuran.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section section-padding" style="background: var(--white);">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <p class="section-subtitle">Tim Kami</p>
                    <h2 class="section-title">Fotografer Profesional</h2>
                    <p style="max-width: 600px; margin: 20px auto 0; color: var(--text-color);">
                        Tim kami terdiri dari fotografer berpengalaman yang passionate dalam mengabadikan momen spesial Anda
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="team-card" style="text-align: center; position: relative; overflow: hidden; border-radius: 10px;">
                        <div class="team-image" style="position: relative; overflow: hidden; border-radius: 10px;">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/team-placeholder.jpg'); ?>" alt="Team Member" style="width: 100%; height: 350px; object-fit: cover; transition: transform 0.3s ease;">
                            <div class="team-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); padding: 30px 20px; color: white; transform: translateY(70%); transition: transform 0.3s ease;">
                                <h4 style="color: white; margin-bottom: 5px;">Jaffran</h4>
                                <p style="margin-bottom: 10px; opacity: 0.9;">Lead Photographer</p>
                                <div class="social-links">
                                    <a href="#" style="color: white; margin: 0 5px;"><i class="fab fa-instagram"></i></a>
                                    <a href="#" style="color: white; margin: 0 5px;"><i class="fab fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add more team members as needed -->
                <div class="col-lg-3 col-md-6">
                    <div class="team-card" style="text-align: center; position: relative; overflow: hidden; border-radius: 10px;">
                        <div class="team-image" style="position: relative; overflow: hidden; border-radius: 10px;">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/team-placeholder.jpg'); ?>" alt="Team Member" style="width: 100%; height: 350px; object-fit: cover;">
                            <div class="team-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); padding: 30px 20px; color: white; transform: translateY(70%); transition: transform 0.3s ease;">
                                <h4 style="color: white; margin-bottom: 5px;">Sarah</h4>
                                <p style="margin-bottom: 10px; opacity: 0.9;">Wedding Photographer</p>
                                <div class="social-links">
                                    <a href="#" style="color: white; margin: 0 5px;"><i class="fab fa-instagram"></i></a>
                                    <a href="#" style="color: white; margin: 0 5px;"><i class="fab fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-card" style="text-align: center; position: relative; overflow: hidden; border-radius: 10px;">
                        <div class="team-image" style="position: relative; overflow: hidden; border-radius: 10px;">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/team-placeholder.jpg'); ?>" alt="Team Member" style="width: 100%; height: 350px; object-fit: cover;">
                            <div class="team-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); padding: 30px 20px; color: white; transform: translateY(70%); transition: transform 0.3s ease;">
                                <h4 style="color: white; margin-bottom: 5px;">Mike</h4>
                                <p style="margin-bottom: 10px; opacity: 0.9;">Videographer</p>
                                <div class="social-links">
                                    <a href="#" style="color: white; margin: 0 5px;"><i class="fab fa-instagram"></i></a>
                                    <a href="#" style="color: white; margin: 0 5px;"><i class="fab fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-card" style="text-align: center; position: relative; overflow: hidden; border-radius: 10px;">
                        <div class="team-image" style="position: relative; overflow: hidden; border-radius: 10px;">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/team-placeholder.jpg'); ?>" alt="Team Member" style="width: 100%; height: 350px; object-fit: cover;">
                            <div class="team-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); padding: 30px 20px; color: white; transform: translateY(70%); transition: transform 0.3s ease;">
                                <h4 style="color: white; margin-bottom: 5px;">Dewi</h4>
                                <p style="margin-bottom: 10px; opacity: 0.9;">Photo Editor</p>
                                <div class="social-links">
                                    <a href="#" style="color: white; margin: 0 5px;"><i class="fab fa-instagram"></i></a>
                                    <a href="#" style="color: white; margin: 0 5px;"><i class="fab fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section section-padding" style="background: linear-gradient(135deg, var(--primary-color), #a88c58); color: white; text-align: center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 style="color: white; font-size: 2.5rem; margin-bottom: 20px;">Siap Mengabadikan Momen Spesial Anda?</h2>
                    <p style="font-size: 1.2rem; margin-bottom: 30px; opacity: 0.95;">
                        Hubungi kami hari ini untuk konsultasi gratis dan dapatkan penawaran terbaik untuk paket fotografi Anda.
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-primary-custom" style="background: white; color: var(--primary-color); border-color: white;">
                        <i class="fas fa-phone"></i> Hubungi Kami Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
.value-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
}

.team-card:hover .team-image img {
    transform: scale(1.1);
}

.team-card:hover .team-overlay {
    transform: translateY(0) !important;
}

@media (max-width: 768px) {
    .stats-row {
        justify-content: space-between;
    }

    .stat-item h3 {
        font-size: 2rem !important;
    }

    .about-hero {
        padding: 40px 0 !important;
    }
}
</style>

<?php get_footer(); ?>
