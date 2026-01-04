<?php get_header(); ?>

<div class="search-results-page" style="padding-top: 100px; padding-bottom: 80px;">
    <div class="container">
        <!-- Search Header -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <div class="search-header">
                    <p class="section-subtitle">Hasil Pencarian</p>
                    <?php if (have_posts()) : ?>
                        <h1 class="section-title">
                            Hasil untuk: "<?php echo get_search_query(); ?>"
                        </h1>
                        <p style="color: var(--text-color); margin-top: 15px;">
                            Ditemukan <?php echo $wp_query->found_posts; ?> hasil
                        </p>
                    <?php else : ?>
                        <h1 class="section-title">
                            Tidak Ada Hasil untuk: "<?php echo get_search_query(); ?>"
                        </h1>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Search Results -->
        <div class="row g-4">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
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
                                    <?php if (get_post_type() !== 'post') : ?>
                                        <span style="margin-left: 10px;">
                                            <i class="far fa-file"></i> <?php echo get_post_type(); ?>
                                        </span>
                                    <?php endif; ?>
                                </p>
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p class="blog-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
                                <a href="<?php the_permalink(); ?>" class="read-more">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </article>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <div class="col-12">
                    <div class="no-results text-center" style="padding: 60px 20px;">
                        <i class="far fa-search" style="font-size: 4rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                        <h3 style="color: var(--secondary-color); margin-bottom: 15px;">Tidak Ada Hasil Ditemukan</h3>
                        <p style="color: var(--text-color); margin-bottom: 30px;">
                            Maaf, tidak ada hasil yang sesuai dengan pencarian Anda. Silakan coba kata kunci lain.
                        </p>

                        <div class="search-again" style="max-width: 500px; margin: 0 auto;">
                            <h5 style="margin-bottom: 20px; color: var(--secondary-color);">Coba Cari Lagi:</h5>
                            <?php get_search_form(); ?>
                        </div>

                        <div class="suggestions mt-5">
                            <h5 style="margin-bottom: 20px; color: var(--secondary-color);">Saran:</h5>
                            <ul style="list-style: none; padding: 0; color: var(--text-color);">
                                <li style="margin-bottom: 10px;">✓ Periksa ejaan kata kunci Anda</li>
                                <li style="margin-bottom: 10px;">✓ Gunakan kata kunci yang lebih umum</li>
                                <li style="margin-bottom: 10px;">✓ Coba gunakan sinonim atau kata kunci berbeda</li>
                                <li style="margin-bottom: 10px;">✓ Kurangi jumlah kata kunci</li>
                            </ul>
                        </div>

                        <div class="back-home mt-4">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary-custom">
                                <i class="fas fa-home"></i> Kembali ke Beranda
                            </a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <!-- Pagination -->
        <?php if (have_posts()) : ?>
            <div class="row mt-5">
                <div class="col-12">
                    <nav class="pagination-nav">
                        <?php
                        the_posts_pagination(array(
                            'mid_size'  => 2,
                            'prev_text' => '<i class="fas fa-arrow-left"></i> Sebelumnya',
                            'next_text' => 'Selanjutnya <i class="fas fa-arrow-right"></i>',
                            'class'     => 'pagination justify-content-center',
                        ));
                        ?>
                    </nav>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<style>
.pagination {
    display: flex;
    list-style: none;
    padding: 0;
    gap: 10px;
}

.pagination .page-numbers {
    display: inline-block;
    padding: 10px 18px;
    background: var(--white);
    border: 2px solid var(--primary-color);
    color: var(--primary-color);
    text-decoration: none;
    border-radius: 5px;
    transition: all 0.3s ease;
    font-weight: 500;
}

.pagination .page-numbers:hover,
.pagination .page-numbers.current {
    background: var(--primary-color);
    color: var(--white);
}

.pagination .dots {
    padding: 10px 18px;
    color: var(--text-color);
}
</style>

<?php get_footer(); ?>
