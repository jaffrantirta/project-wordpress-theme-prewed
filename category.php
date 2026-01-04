<?php
/**
 * Category Template
 * Template untuk menampilkan artikel berdasarkan kategori
 */
get_header(); ?>

<div class="category-page" style="padding-top: 100px; padding-bottom: 80px; background: var(--light-bg);">
    <div class="container">
        <!-- Category Header -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <div class="category-header">
                    <p class="section-subtitle">Kategori</p>
                    <h1 class="section-title"><?php single_cat_title(); ?></h1>

                    <?php if (category_description()) : ?>
                        <p class="category-description" style="max-width: 700px; margin: 20px auto 0; color: var(--text-color); font-size: 1.1rem; line-height: 1.7;">
                            <?php echo category_description(); ?>
                        </p>
                    <?php endif; ?>

                    <!-- Post Count -->
                    <p style="margin-top: 15px; color: var(--primary-color); font-weight: 500;">
                        <i class="far fa-file-alt"></i> <?php echo $wp_query->found_posts; ?> Artikel Ditemukan
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Main Content Area -->
            <div class="col-lg-8">
                <!-- Category Posts -->
                <div class="row g-4">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="col-md-6">
                                <article id="post-<?php the_ID(); ?>" <?php post_class('blog-card'); ?>>
                                    <?php if (has_post_thumbnail()) : ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('medium', array('class' => 'img-fluid')); ?>
                                        </a>
                                    <?php else : ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/default-blog.jpg'); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                                        </a>
                                    <?php endif; ?>

                                    <div class="blog-content">
                                        <p class="blog-meta">
                                            <i class="far fa-calendar"></i> <?php echo get_the_date('d F Y'); ?>
                                            <span style="margin-left: 10px;">
                                                <i class="far fa-user"></i> <?php the_author(); ?>
                                            </span>
                                            <?php if (get_comments_number() > 0) : ?>
                                                <span style="margin-left: 10px;">
                                                    <i class="far fa-comment"></i> <?php comments_number('0', '1', '%'); ?>
                                                </span>
                                            <?php endif; ?>
                                        </p>

                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                                        <p class="blog-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>

                                        <a href="<?php the_permalink(); ?>" class="read-more">
                                            Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </article>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <div class="col-12">
                            <div class="no-posts text-center" style="padding: 60px 20px; background: var(--white); border-radius: 10px;">
                                <i class="far fa-folder-open" style="font-size: 4rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                                <h3 style="color: var(--secondary-color); margin-bottom: 15px;">Tidak Ada Artikel</h3>
                                <p style="color: var(--text-color); margin-bottom: 20px;">Belum ada artikel yang dipublikasikan di kategori ini.</p>
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary-custom">
                                    <i class="fas fa-home"></i> Kembali ke Beranda
                                </a>
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

            <!-- Sidebar -->
            <div class="col-lg-4">
                <aside class="category-sidebar">

                    <!-- Search Widget -->
                    <div class="sidebar-widget" style="background: var(--white); padding: 30px; border-radius: 10px; margin-bottom: 30px;">
                        <h4 style="color: var(--secondary-color); margin-bottom: 20px; font-size: 1.3rem;">
                            <i class="fas fa-search"></i> Cari Artikel
                        </h4>
                        <?php get_search_form(); ?>
                    </div>

                    <!-- Categories Widget -->
                    <div class="sidebar-widget" style="background: var(--white); padding: 30px; border-radius: 10px; margin-bottom: 30px;">
                        <h4 style="color: var(--secondary-color); margin-bottom: 20px; font-size: 1.3rem;">
                            <i class="fas fa-folder"></i> Kategori Lainnya
                        </h4>
                        <ul class="category-list" style="list-style: none; padding: 0;">
                            <?php
                            $categories = get_categories(array(
                                'orderby' => 'count',
                                'order'   => 'DESC',
                                'number'  => 10,
                            ));

                            foreach ($categories as $category) :
                                $is_current = (is_category() && $category->term_id == get_queried_object_id());
                            ?>
                                <li style="margin-bottom: 12px; padding-bottom: 12px; border-bottom: 1px solid #e0e0e0;">
                                    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"
                                       style="display: flex; justify-content: space-between; align-items: center; text-decoration: none; color: <?php echo $is_current ? 'var(--primary-color)' : 'var(--text-color)'; ?>; font-weight: <?php echo $is_current ? '600' : '400'; ?>;">
                                        <span>
                                            <i class="far fa-folder" style="margin-right: 8px;"></i>
                                            <?php echo esc_html($category->name); ?>
                                        </span>
                                        <span class="badge" style="background: var(--primary-color); color: white; padding: 3px 10px; border-radius: 20px; font-size: 0.8rem;">
                                            <?php echo $category->count; ?>
                                        </span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Recent Posts Widget -->
                    <div class="sidebar-widget" style="background: var(--white); padding: 30px; border-radius: 10px; margin-bottom: 30px;">
                        <h4 style="color: var(--secondary-color); margin-bottom: 20px; font-size: 1.3rem;">
                            <i class="fas fa-clock"></i> Artikel Terbaru
                        </h4>
                        <ul class="recent-posts-list" style="list-style: none; padding: 0;">
                            <?php
                            $recent_posts = new WP_Query(array(
                                'posts_per_page' => 5,
                                'post_status'    => 'publish',
                            ));

                            if ($recent_posts->have_posts()) :
                                while ($recent_posts->have_posts()) : $recent_posts->the_post();
                            ?>
                                <li style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #e0e0e0;">
                                    <div style="display: flex; gap: 15px;">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <div style="flex-shrink: 0;">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_post_thumbnail('thumbnail', array('style' => 'width: 80px; height: 80px; object-fit: cover; border-radius: 5px;')); ?>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        <div style="flex: 1;">
                                            <h6 style="margin-bottom: 8px; font-size: 0.95rem; line-height: 1.4;">
                                                <a href="<?php the_permalink(); ?>" style="color: var(--secondary-color); text-decoration: none;">
                                                    <?php echo wp_trim_words(get_the_title(), 8, '...'); ?>
                                                </a>
                                            </h6>
                                            <p style="font-size: 0.85rem; color: var(--primary-color); margin: 0;">
                                                <i class="far fa-calendar"></i> <?php echo get_the_date('d M Y'); ?>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>
                        </ul>
                    </div>

                    <!-- Tags Widget -->
                    <?php
                    $tags = get_tags(array('number' => 20));
                    if ($tags) :
                    ?>
                    <div class="sidebar-widget" style="background: var(--white); padding: 30px; border-radius: 10px; margin-bottom: 30px;">
                        <h4 style="color: var(--secondary-color); margin-bottom: 20px; font-size: 1.3rem;">
                            <i class="fas fa-tags"></i> Tag Populer
                        </h4>
                        <div class="tags-cloud">
                            <?php foreach ($tags as $tag) : ?>
                                <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"
                                   style="display: inline-block; padding: 6px 15px; margin: 5px; background: var(--light-bg); color: var(--text-color); text-decoration: none; border-radius: 20px; font-size: 0.9rem; transition: all 0.3s ease;"
                                   onmouseover="this.style.background='var(--primary-color)'; this.style.color='white';"
                                   onmouseout="this.style.background='var(--light-bg)'; this.style.color='var(--text-color)';">
                                    #<?php echo esc_html($tag->name); ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                </aside>
            </div>
        </div>
    </div>
</div>

<style>
/* Category Page Styles */
.category-list li a:hover {
    color: var(--primary-color) !important;
}

.recent-posts-list h6 a:hover {
    color: var(--primary-color) !important;
}

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

/* Responsive */
@media (max-width: 991px) {
    .category-sidebar {
        margin-top: 40px;
    }
}
</style>

<?php get_footer(); ?>
