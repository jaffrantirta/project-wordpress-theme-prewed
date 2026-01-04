<?php
/**
 * Template Name: Daftar Kategori
 * Template untuk menampilkan semua kategori
 */
get_header(); ?>

<div class="categories-page" style="padding-top: 100px; padding-bottom: 80px;">
    <div class="container">
        <!-- Page Header -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <p class="section-subtitle">Jelajahi Berdasarkan</p>
                <h1 class="section-title">Kategori Artikel</h1>
                <p style="max-width: 600px; margin: 20px auto 0; color: var(--text-color); font-size: 1.1rem;">
                    Temukan artikel yang Anda cari berdasarkan kategori
                </p>
            </div>
        </div>

        <!-- Categories Grid -->
        <div class="row g-4">
            <?php
            $categories = get_categories(array(
                'orderby'    => 'count',
                'order'      => 'DESC',
                'hide_empty' => true,
            ));

            if ($categories) :
                foreach ($categories as $category) :
                    // Get category image (dari featured image post pertama di kategori)
                    $category_posts = get_posts(array(
                        'category'       => $category->term_id,
                        'posts_per_page' => 1,
                        'post_status'    => 'publish',
                    ));

                    $category_image = '';
                    if ($category_posts && has_post_thumbnail($category_posts[0]->ID)) {
                        $category_image = get_the_post_thumbnail_url($category_posts[0]->ID, 'medium');
                    } else {
                        $category_image = get_template_directory_uri() . '/assets/images/default-blog.jpg';
                    }
            ?>
                <div class="col-lg-4 col-md-6">
                    <div class="category-card" style="position: relative; border-radius: 10px; overflow: hidden; height: 300px; cursor: pointer; transition: transform 0.3s ease, box-shadow 0.3s ease;"
                         onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 15px 40px rgba(0,0,0,0.2)';"
                         onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 5px 15px rgba(0,0,0,0.1)';">

                        <!-- Background Image -->
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('<?php echo esc_url($category_image); ?>'); background-size: cover; background-position: center;"></div>

                        <!-- Overlay -->
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0.3));"></div>

                        <!-- Content -->
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 30px; color: white;">
                            <div style="display: flex; align-items: center; margin-bottom: 10px;">
                                <i class="fas fa-folder" style="font-size: 1.5rem; color: var(--primary-color); margin-right: 10px;"></i>
                                <h3 style="color: white; margin: 0; font-size: 1.8rem;">
                                    <?php echo esc_html($category->name); ?>
                                </h3>
                            </div>

                            <?php if ($category->description) : ?>
                                <p style="margin-bottom: 15px; font-size: 0.95rem; opacity: 0.9;">
                                    <?php echo wp_trim_words($category->description, 12, '...'); ?>
                                </p>
                            <?php endif; ?>

                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <span style="background: var(--primary-color); padding: 5px 15px; border-radius: 20px; font-size: 0.9rem; font-weight: 500;">
                                    <?php echo $category->count; ?> Artikel
                                </span>
                                <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"
                                   style="color: white; text-decoration: none; font-weight: 500; display: flex; align-items: center; gap: 5px;">
                                    Lihat Semua <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                endforeach;
            else :
            ?>
                <div class="col-12">
                    <div class="no-categories text-center" style="padding: 60px 20px;">
                        <i class="far fa-folder-open" style="font-size: 4rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                        <h3 style="color: var(--secondary-color); margin-bottom: 15px;">Belum Ada Kategori</h3>
                        <p style="color: var(--text-color);">Kategori akan muncul setelah Anda membuat artikel.</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <!-- Statistics Section -->
        <?php if ($categories) : ?>
            <div class="row mt-5">
                <div class="col-12">
                    <div style="background: var(--light-bg); padding: 40px; border-radius: 10px; text-align: center;">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div style="padding: 20px;">
                                    <i class="fas fa-folder" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 10px;"></i>
                                    <h3 style="font-size: 2.5rem; color: var(--secondary-color); margin-bottom: 5px;">
                                        <?php echo count($categories); ?>
                                    </h3>
                                    <p style="color: var(--text-color); margin: 0;">Kategori</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div style="padding: 20px;">
                                    <i class="fas fa-file-alt" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 10px;"></i>
                                    <h3 style="font-size: 2.5rem; color: var(--secondary-color); margin-bottom: 5px;">
                                        <?php echo wp_count_posts()->publish; ?>
                                    </h3>
                                    <p style="color: var(--text-color); margin: 0;">Total Artikel</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div style="padding: 20px;">
                                    <i class="fas fa-tags" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 10px;"></i>
                                    <h3 style="font-size: 2.5rem; color: var(--secondary-color); margin-bottom: 5px;">
                                        <?php echo count(get_tags()); ?>
                                    </h3>
                                    <p style="color: var(--text-color); margin: 0;">Tag</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!-- Recent Posts from All Categories -->
        <div class="row mt-5">
            <div class="col-12 text-center mb-4">
                <h2 class="section-title">Artikel Terbaru</h2>
            </div>
        </div>

        <div class="row g-4">
            <?php
            $recent_posts = new WP_Query(array(
                'posts_per_page' => 6,
                'post_status'    => 'publish',
            ));

            if ($recent_posts->have_posts()) :
                while ($recent_posts->have_posts()) : $recent_posts->the_post();
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
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</div>

<style>
.category-card:hover {
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
}

.category-card a:hover {
    text-decoration: underline;
}
</style>

<?php get_footer(); ?>
