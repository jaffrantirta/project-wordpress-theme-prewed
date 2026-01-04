<?php get_header(); ?>

<div class="archive-page" style="padding-top: 100px; padding-bottom: 80px;">
    <div class="container">
        <!-- Archive Header -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <div class="archive-header">
                    <?php if (is_category()) : ?>
                        <p class="section-subtitle">Kategori</p>
                        <h1 class="section-title"><?php single_cat_title(); ?></h1>
                        <?php if (category_description()) : ?>
                            <p class="archive-description" style="max-width: 600px; margin: 20px auto 0; color: var(--text-color);">
                                <?php echo category_description(); ?>
                            </p>
                        <?php endif; ?>
                    <?php elseif (is_tag()) : ?>
                        <p class="section-subtitle">Tag</p>
                        <h1 class="section-title"><?php single_tag_title(); ?></h1>
                    <?php elseif (is_author()) : ?>
                        <p class="section-subtitle">Penulis</p>
                        <h1 class="section-title"><?php echo get_the_author(); ?></h1>
                    <?php elseif (is_date()) : ?>
                        <p class="section-subtitle">Arsip</p>
                        <h1 class="section-title"><?php echo get_the_date('F Y'); ?></h1>
                    <?php else : ?>
                        <h1 class="section-title">Arsip Blog</h1>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Archive Posts -->
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
                                    <?php if (has_category()) : ?>
                                        <span style="margin-left: 10px;">
                                            <i class="far fa-folder"></i> <?php the_category(', '); ?>
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
                    <div class="no-posts text-center" style="padding: 60px 20px;">
                        <i class="far fa-folder-open" style="font-size: 4rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                        <h3 style="color: var(--secondary-color); margin-bottom: 15px;">Tidak Ada Post</h3>
                        <p style="color: var(--text-color);">Belum ada post yang dipublikasikan di kategori ini.</p>
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
