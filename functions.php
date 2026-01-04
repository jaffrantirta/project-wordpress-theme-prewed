<?php
/**
 * Jaffran Prewed Theme Functions
 */

if (!defined('ABSPATH')) {
    exit;
}

// Theme Setup
function jaffranprewed_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('customize-selective-refresh-widgets');

    // Register Navigation Menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'jaffranprewed'),
        'footer' => __('Footer Menu', 'jaffranprewed'),
    ));
}
add_action('after_setup_theme', 'jaffranprewed_setup');

// Enqueue Scripts and Styles
function jaffranprewed_scripts() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', array(), '5.3.0');

    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap', array(), null);

    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');

    // Theme Stylesheet
    wp_enqueue_style('jaffranprewed-style', get_stylesheet_uri(), array(), '1.0.0');

    // Bootstrap JS
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array(), '5.3.0', true);

    // Theme JS
    wp_enqueue_script('jaffranprewed-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'jaffranprewed_scripts');

// Register Widget Areas
function jaffranprewed_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget 1', 'jaffranprewed'),
        'id'            => 'footer-1',
        'description'   => __('Appears in the footer area', 'jaffranprewed'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget 2', 'jaffranprewed'),
        'id'            => 'footer-2',
        'description'   => __('Appears in the footer area', 'jaffranprewed'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget 3', 'jaffranprewed'),
        'id'            => 'footer-3',
        'description'   => __('Appears in the footer area', 'jaffranprewed'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'jaffranprewed_widgets_init');

// Theme Customizer
function jaffranprewed_customize_register($wp_customize) {

    // Hero Section
    $wp_customize->add_section('hero_section', array(
        'title'    => __('Hero Carousel', 'jaffranprewed'),
        'priority' => 30,
    ));

    // Hero Slide 1
    $wp_customize->add_setting('hero_slide_1_image', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_slide_1_image', array(
        'label'    => __('Slide 1 - Gambar', 'jaffranprewed'),
        'section'  => 'hero_section',
        'settings' => 'hero_slide_1_image',
    )));

    $wp_customize->add_setting('hero_slide_1_title', array(
        'default'   => 'Abadikan Momen Indah Anda',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('hero_slide_1_title', array(
        'label'    => __('Slide 1 - Judul', 'jaffranprewed'),
        'section'  => 'hero_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('hero_slide_1_subtitle', array(
        'default'   => 'Fotografer Wedding & Prewedding Profesional di Bali',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('hero_slide_1_subtitle', array(
        'label'    => __('Slide 1 - Subjudul', 'jaffranprewed'),
        'section'  => 'hero_section',
        'type'     => 'textarea',
    ));

    // Hero Slide 2
    $wp_customize->add_setting('hero_slide_2_image', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_slide_2_image', array(
        'label'    => __('Slide 2 - Gambar', 'jaffranprewed'),
        'section'  => 'hero_section',
        'settings' => 'hero_slide_2_image',
    )));

    $wp_customize->add_setting('hero_slide_2_title', array(
        'default'   => 'Cerita Cinta Anda',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('hero_slide_2_title', array(
        'label'    => __('Slide 2 - Judul', 'jaffranprewed'),
        'section'  => 'hero_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('hero_slide_2_subtitle', array(
        'default'   => 'Dalam Setiap Frame yang Sempurna',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('hero_slide_2_subtitle', array(
        'label'    => __('Slide 2 - Subjudul', 'jaffranprewed'),
        'section'  => 'hero_section',
        'type'     => 'textarea',
    ));

    // Hero Slide 3
    $wp_customize->add_setting('hero_slide_3_image', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_slide_3_image', array(
        'label'    => __('Slide 3 - Gambar', 'jaffranprewed'),
        'section'  => 'hero_section',
        'settings' => 'hero_slide_3_image',
    )));

    $wp_customize->add_setting('hero_slide_3_title', array(
        'default'   => 'Keindahan Bali',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('hero_slide_3_title', array(
        'label'    => __('Slide 3 - Judul', 'jaffranprewed'),
        'section'  => 'hero_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('hero_slide_3_subtitle', array(
        'default'   => 'Sebagai Latar Belakang Pernikahan Impian Anda',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('hero_slide_3_subtitle', array(
        'label'    => __('Slide 3 - Subjudul', 'jaffranprewed'),
        'section'  => 'hero_section',
        'type'     => 'textarea',
    ));

    // Hero Button
    $wp_customize->add_setting('hero_button_text', array(
        'default'   => 'Hubungi Kami',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('hero_button_text', array(
        'label'    => __('Teks Tombol', 'jaffranprewed'),
        'section'  => 'hero_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('hero_button_link', array(
        'default'   => '#contact',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('hero_button_link', array(
        'label'    => __('Link Tombol', 'jaffranprewed'),
        'section'  => 'hero_section',
        'type'     => 'url',
    ));

    // Why Us Section
    $wp_customize->add_section('whyus_section', array(
        'title'    => __('Mengapa Memilih Kami', 'jaffranprewed'),
        'priority' => 31,
    ));

    $wp_customize->add_setting('whyus_subtitle', array(
        'default'   => 'Mengapa Memilih Kami',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('whyus_subtitle', array(
        'label'    => __('Subjudul', 'jaffranprewed'),
        'section'  => 'whyus_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('whyus_title', array(
        'default'   => 'Alasan Memilih Jasa Kami',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('whyus_title', array(
        'label'    => __('Judul', 'jaffranprewed'),
        'section'  => 'whyus_section',
        'type'     => 'text',
    ));

    // Feature 1
    $wp_customize->add_setting('whyus_feature_1_icon', array(
        'default'   => 'fa-camera',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('whyus_feature_1_icon', array(
        'label'       => __('Fitur 1 - Icon (Font Awesome)', 'jaffranprewed'),
        'section'     => 'whyus_section',
        'type'        => 'text',
        'description' => __('Contoh: fa-camera, fa-heart, fa-star', 'jaffranprewed'),
    ));

    $wp_customize->add_setting('whyus_feature_1_title', array(
        'default'   => 'Fotografer Profesional',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('whyus_feature_1_title', array(
        'label'    => __('Fitur 1 - Judul', 'jaffranprewed'),
        'section'  => 'whyus_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('whyus_feature_1_desc', array(
        'default'   => 'Tim fotografer berpengalaman lebih dari 10 tahun di industri wedding photography.',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('whyus_feature_1_desc', array(
        'label'    => __('Fitur 1 - Deskripsi', 'jaffranprewed'),
        'section'  => 'whyus_section',
        'type'     => 'textarea',
    ));

    // Feature 2
    $wp_customize->add_setting('whyus_feature_2_icon', array(
        'default'   => 'fa-award',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('whyus_feature_2_icon', array(
        'label'       => __('Fitur 2 - Icon (Font Awesome)', 'jaffranprewed'),
        'section'     => 'whyus_section',
        'type'        => 'text',
    ));

    $wp_customize->add_setting('whyus_feature_2_title', array(
        'default'   => 'Kualitas Terbaik',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('whyus_feature_2_title', array(
        'label'    => __('Fitur 2 - Judul', 'jaffranprewed'),
        'section'  => 'whyus_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('whyus_feature_2_desc', array(
        'default'   => 'Menggunakan peralatan fotografi terkini untuk hasil foto berkualitas tinggi.',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('whyus_feature_2_desc', array(
        'label'    => __('Fitur 2 - Deskripsi', 'jaffranprewed'),
        'section'  => 'whyus_section',
        'type'     => 'textarea',
    ));

    // Feature 3
    $wp_customize->add_setting('whyus_feature_3_icon', array(
        'default'   => 'fa-heart',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('whyus_feature_3_icon', array(
        'label'       => __('Fitur 3 - Icon (Font Awesome)', 'jaffranprewed'),
        'section'     => 'whyus_section',
        'type'        => 'text',
    ));

    $wp_customize->add_setting('whyus_feature_3_title', array(
        'default'   => 'Pelayanan Ramah',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('whyus_feature_3_title', array(
        'label'    => __('Fitur 3 - Judul', 'jaffranprewed'),
        'section'  => 'whyus_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('whyus_feature_3_desc', array(
        'default'   => 'Kami memberikan pelayanan terbaik dengan penuh kehangatan dan profesionalisme.',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('whyus_feature_3_desc', array(
        'label'    => __('Fitur 3 - Deskripsi', 'jaffranprewed'),
        'section'  => 'whyus_section',
        'type'     => 'textarea',
    ));

    // Services Section
    $wp_customize->add_section('services_section', array(
        'title'    => __('Layanan Kami', 'jaffranprewed'),
        'priority' => 32,
    ));

    $wp_customize->add_setting('services_subtitle', array(
        'default'   => 'Layanan Kami',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('services_subtitle', array(
        'label'    => __('Subjudul', 'jaffranprewed'),
        'section'  => 'services_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('services_title', array(
        'default'   => 'Paket Fotografi Kami',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('services_title', array(
        'label'    => __('Judul', 'jaffranprewed'),
        'section'  => 'services_section',
        'type'     => 'text',
    ));

    // Define default service content
    $service_defaults = array(
        1 => array(
            'title' => 'Prewedding Photography',
            'desc'  => 'Sesi foto prewedding di lokasi eksotis Bali dengan berbagai pilihan paket.',
        ),
        2 => array(
            'title' => 'Wedding Photography',
            'desc'  => 'Dokumentasi lengkap hari pernikahan Anda dari persiapan hingga resepsi.',
        ),
        3 => array(
            'title' => 'Cinematic Video',
            'desc'  => 'Video sinematik berkualitas tinggi untuk mengabadikan momen spesial Anda.',
        ),
    );

    // Service 1-3
    for ($i = 1; $i <= 3; $i++) {
        $wp_customize->add_setting("service_{$i}_image", array(
            'default'   => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "service_{$i}_image", array(
            'label'    => sprintf(__('Layanan %d - Gambar', 'jaffranprewed'), $i),
            'section'  => 'services_section',
            'settings' => "service_{$i}_image",
        )));

        $wp_customize->add_setting("service_{$i}_title", array(
            'default'   => $service_defaults[$i]['title'],
            'transport' => 'refresh',
        ));
        $wp_customize->add_control("service_{$i}_title", array(
            'label'    => sprintf(__('Layanan %d - Judul', 'jaffranprewed'), $i),
            'section'  => 'services_section',
            'type'     => 'text',
        ));

        $wp_customize->add_setting("service_{$i}_desc", array(
            'default'   => $service_defaults[$i]['desc'],
            'transport' => 'refresh',
        ));
        $wp_customize->add_control("service_{$i}_desc", array(
            'label'    => sprintf(__('Layanan %d - Deskripsi', 'jaffranprewed'), $i),
            'section'  => 'services_section',
            'type'     => 'textarea',
        ));
    }

    // Testimonies Section
    $wp_customize->add_section('testimonies_section', array(
        'title'    => __('Testimoni', 'jaffranprewed'),
        'priority' => 33,
    ));

    $wp_customize->add_setting('testimonies_subtitle', array(
        'default'   => 'Testimoni',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('testimonies_subtitle', array(
        'label'    => __('Subjudul', 'jaffranprewed'),
        'section'  => 'testimonies_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('testimonies_title', array(
        'default'   => 'Apa Kata Klien Kami',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('testimonies_title', array(
        'label'    => __('Judul', 'jaffranprewed'),
        'section'  => 'testimonies_section',
        'type'     => 'text',
    ));

    // Define default testimony content
    $testimony_defaults = array(
        1 => array(
            'text'   => 'Hasil foto prewedding kami sangat memuaskan! Tim yang profesional dan sangat membantu selama sesi foto.',
            'author' => 'Andi & Sari',
            'role'   => 'Prewedding Package - Juli 2023',
        ),
        2 => array(
            'text'   => 'Dokumentasi pernikahan kami sempurna! Setiap momen terabadikan dengan indah. Sangat recommend!',
            'author' => 'Budi & Rina',
            'role'   => 'Wedding Package - Agustus 2023',
        ),
        3 => array(
            'text'   => 'Pelayanan yang luar biasa! Fotografer sangat sabar dan kreatif. Hasil foto melebihi ekspektasi kami.',
            'author' => 'Made & Dewi',
            'role'   => 'Full Package - September 2023',
        ),
    );

    // Testimony items
    for ($i = 1; $i <= 3; $i++) {
        $wp_customize->add_setting("testimony_{$i}_text", array(
            'default'   => $testimony_defaults[$i]['text'],
            'transport' => 'refresh',
        ));
        $wp_customize->add_control("testimony_{$i}_text", array(
            'label'    => sprintf(__('Testimoni %d - Teks', 'jaffranprewed'), $i),
            'section'  => 'testimonies_section',
            'type'     => 'textarea',
        ));

        $wp_customize->add_setting("testimony_{$i}_author", array(
            'default'   => $testimony_defaults[$i]['author'],
            'transport' => 'refresh',
        ));
        $wp_customize->add_control("testimony_{$i}_author", array(
            'label'    => sprintf(__('Testimoni %d - Nama', 'jaffranprewed'), $i),
            'section'  => 'testimonies_section',
            'type'     => 'text',
        ));

        $wp_customize->add_setting("testimony_{$i}_role", array(
            'default'   => $testimony_defaults[$i]['role'],
            'transport' => 'refresh',
        ));
        $wp_customize->add_control("testimony_{$i}_role", array(
            'label'    => sprintf(__('Testimoni %d - Keterangan', 'jaffranprewed'), $i),
            'section'  => 'testimonies_section',
            'type'     => 'text',
        ));
    }

    // Blog Section
    $wp_customize->add_section('blog_section', array(
        'title'    => __('Section Blog', 'jaffranprewed'),
        'priority' => 34,
    ));

    $wp_customize->add_setting('blog_subtitle', array(
        'default'   => 'Blog Kami',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('blog_subtitle', array(
        'label'    => __('Subjudul', 'jaffranprewed'),
        'section'  => 'blog_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('blog_title', array(
        'default'   => 'Tips & Inspirasi',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('blog_title', array(
        'label'    => __('Judul', 'jaffranprewed'),
        'section'  => 'blog_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('blog_posts_count', array(
        'default'   => '3',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('blog_posts_count', array(
        'label'    => __('Jumlah Post Ditampilkan', 'jaffranprewed'),
        'section'  => 'blog_section',
        'type'     => 'number',
    ));

    // WhatsApp Section
    $wp_customize->add_section('whatsapp_section', array(
        'title'    => __('Tombol WhatsApp', 'jaffranprewed'),
        'priority' => 35,
    ));

    $wp_customize->add_setting('whatsapp_number', array(
        'default'   => '6281234567890',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('whatsapp_number', array(
        'label'       => __('Nomor WhatsApp', 'jaffranprewed'),
        'section'     => 'whatsapp_section',
        'type'        => 'text',
        'description' => __('Masukkan nomor dengan format: 6281234567890 (tanpa tanda +)', 'jaffranprewed'),
    ));

    $wp_customize->add_setting('whatsapp_message', array(
        'default'   => 'Halo, saya tertarik dengan jasa fotografi Anda',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('whatsapp_message', array(
        'label'    => __('Pesan Default WhatsApp', 'jaffranprewed'),
        'section'  => 'whatsapp_section',
        'type'     => 'textarea',
    ));

    $wp_customize->add_setting('whatsapp_show', array(
        'default'   => true,
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('whatsapp_show', array(
        'label'    => __('Tampilkan Tombol WhatsApp', 'jaffranprewed'),
        'section'  => 'whatsapp_section',
        'type'     => 'checkbox',
    ));

    // ========================================
    // ABOUT US PAGE CUSTOMIZER
    // ========================================

    $wp_customize->add_section('about_page_section', array(
        'title'    => __('About Us Page', 'jaffranprewed'),
        'priority' => 40,
    ));

    // Statistics
    $wp_customize->add_setting('about_stat_1_number', array(
        'default'   => '10+',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('about_stat_1_number', array(
        'label'    => __('Statistik 1 - Angka', 'jaffranprewed'),
        'section'  => 'about_page_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('about_stat_1_label', array(
        'default'   => 'Tahun Pengalaman',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('about_stat_1_label', array(
        'label'    => __('Statistik 1 - Label', 'jaffranprewed'),
        'section'  => 'about_page_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('about_stat_2_number', array(
        'default'   => '500+',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('about_stat_2_number', array(
        'label'    => __('Statistik 2 - Angka', 'jaffranprewed'),
        'section'  => 'about_page_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('about_stat_2_label', array(
        'default'   => 'Pasangan Bahagia',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('about_stat_2_label', array(
        'label'    => __('Statistik 2 - Label', 'jaffranprewed'),
        'section'  => 'about_page_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('about_stat_3_number', array(
        'default'   => '50+',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('about_stat_3_number', array(
        'label'    => __('Statistik 3 - Angka', 'jaffranprewed'),
        'section'  => 'about_page_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('about_stat_3_label', array(
        'default'   => 'Penghargaan',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('about_stat_3_label', array(
        'label'    => __('Statistik 3 - Label', 'jaffranprewed'),
        'section'  => 'about_page_section',
        'type'     => 'text',
    ));

    // Values Section
    for ($i = 1; $i <= 3; $i++) {
        $wp_customize->add_setting("about_value_{$i}_icon", array(
            'default'   => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control("about_value_{$i}_icon", array(
            'label'       => sprintf(__('Nilai %d - Icon Font Awesome', 'jaffranprewed'), $i),
            'section'     => 'about_page_section',
            'type'        => 'text',
            'description' => __('Contoh: fa-heart, fa-award, fa-star', 'jaffranprewed'),
        ));

        $wp_customize->add_setting("about_value_{$i}_title", array(
            'default'   => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control("about_value_{$i}_title", array(
            'label'    => sprintf(__('Nilai %d - Judul', 'jaffranprewed'), $i),
            'section'  => 'about_page_section',
            'type'     => 'text',
        ));

        $wp_customize->add_setting("about_value_{$i}_desc", array(
            'default'   => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control("about_value_{$i}_desc", array(
            'label'    => sprintf(__('Nilai %d - Deskripsi', 'jaffranprewed'), $i),
            'section'  => 'about_page_section',
            'type'     => 'textarea',
        ));
    }

    // Set default values
    $wp_customize->get_setting('about_value_1_icon')->default = 'fa-heart';
    $wp_customize->get_setting('about_value_1_title')->default = 'Passion';
    $wp_customize->get_setting('about_value_1_desc')->default = 'Kami mencintai apa yang kami lakukan dan memberikan yang terbaik dalam setiap momen yang kami abadikan.';

    $wp_customize->get_setting('about_value_2_icon')->default = 'fa-award';
    $wp_customize->get_setting('about_value_2_title')->default = 'Profesionalisme';
    $wp_customize->get_setting('about_value_2_desc')->default = 'Standar tinggi dalam setiap aspek pekerjaan kami, dari konsultasi hingga hasil akhir.';

    $wp_customize->get_setting('about_value_3_icon')->default = 'fa-handshake';
    $wp_customize->get_setting('about_value_3_title')->default = 'Kepercayaan';
    $wp_customize->get_setting('about_value_3_desc')->default = 'Membangun hubungan jangka panjang dengan klien berdasarkan kepercayaan dan kejujuran.';

    // Team Section
    for ($i = 1; $i <= 4; $i++) {
        $wp_customize->add_setting("about_team_{$i}_image", array(
            'default'   => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "about_team_{$i}_image", array(
            'label'    => sprintf(__('Team %d - Foto', 'jaffranprewed'), $i),
            'section'  => 'about_page_section',
            'settings' => "about_team_{$i}_image",
        )));

        $wp_customize->add_setting("about_team_{$i}_name", array(
            'default'   => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control("about_team_{$i}_name", array(
            'label'    => sprintf(__('Team %d - Nama', 'jaffranprewed'), $i),
            'section'  => 'about_page_section',
            'type'     => 'text',
        ));

        $wp_customize->add_setting("about_team_{$i}_position", array(
            'default'   => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control("about_team_{$i}_position", array(
            'label'    => sprintf(__('Team %d - Posisi', 'jaffranprewed'), $i),
            'section'  => 'about_page_section',
            'type'     => 'text',
        ));

        $wp_customize->add_setting("about_team_{$i}_instagram", array(
            'default'   => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control("about_team_{$i}_instagram", array(
            'label'    => sprintf(__('Team %d - Instagram URL', 'jaffranprewed'), $i),
            'section'  => 'about_page_section',
            'type'     => 'url',
        ));

        $wp_customize->add_setting("about_team_{$i}_facebook", array(
            'default'   => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control("about_team_{$i}_facebook", array(
            'label'    => sprintf(__('Team %d - Facebook URL', 'jaffranprewed'), $i),
            'section'  => 'about_page_section',
            'type'     => 'url',
        ));
    }

    // Set default team data
    $team_defaults = array(
        1 => array('name' => 'Jaffran', 'position' => 'Lead Photographer'),
        2 => array('name' => 'Sarah', 'position' => 'Wedding Photographer'),
        3 => array('name' => 'Mike', 'position' => 'Videographer'),
        4 => array('name' => 'Dewi', 'position' => 'Photo Editor'),
    );

    foreach ($team_defaults as $i => $team) {
        $wp_customize->get_setting("about_team_{$i}_name")->default = $team['name'];
        $wp_customize->get_setting("about_team_{$i}_position")->default = $team['position'];
    }

    // ========================================
    // CONTACT PAGE CUSTOMIZER
    // ========================================

    $wp_customize->add_section('contact_page_section', array(
        'title'    => __('Contact Page', 'jaffranprewed'),
        'priority' => 41,
    ));

    // Address
    $wp_customize->add_setting('contact_address_line1', array(
        'default'   => 'Jl. Raya Ubud No. 123',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('contact_address_line1', array(
        'label'    => __('Alamat Baris 1', 'jaffranprewed'),
        'section'  => 'contact_page_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('contact_address_line2', array(
        'default'   => 'Ubud, Gianyar',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('contact_address_line2', array(
        'label'    => __('Alamat Baris 2', 'jaffranprewed'),
        'section'  => 'contact_page_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('contact_address_line3', array(
        'default'   => 'Bali, Indonesia 80571',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('contact_address_line3', array(
        'label'    => __('Alamat Baris 3', 'jaffranprewed'),
        'section'  => 'contact_page_section',
        'type'     => 'text',
    ));

    // Phone
    $wp_customize->add_setting('contact_phone_1', array(
        'default'   => '+62 812-3456-7890',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('contact_phone_1', array(
        'label'    => __('Telepon 1', 'jaffranprewed'),
        'section'  => 'contact_page_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('contact_phone_2', array(
        'default'   => '+62 812-3456-7891',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('contact_phone_2', array(
        'label'    => __('Telepon 2 (Optional)', 'jaffranprewed'),
        'section'  => 'contact_page_section',
        'type'     => 'text',
    ));

    // Email
    $wp_customize->add_setting('contact_email_1', array(
        'default'   => 'info@jaffranprewed.com',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('contact_email_1', array(
        'label'    => __('Email 1', 'jaffranprewed'),
        'section'  => 'contact_page_section',
        'type'     => 'email',
    ));

    $wp_customize->add_setting('contact_email_2', array(
        'default'   => 'booking@jaffranprewed.com',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('contact_email_2', array(
        'label'    => __('Email 2 (Optional)', 'jaffranprewed'),
        'section'  => 'contact_page_section',
        'type'     => 'email',
    ));

    // Social Media
    $wp_customize->add_setting('contact_facebook', array(
        'default'   => 'https://facebook.com/jaffranprewed',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('contact_facebook', array(
        'label'    => __('Facebook URL', 'jaffranprewed'),
        'section'  => 'contact_page_section',
        'type'     => 'url',
    ));

    $wp_customize->add_setting('contact_instagram', array(
        'default'   => 'https://instagram.com/jaffranprewed',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('contact_instagram', array(
        'label'    => __('Instagram URL', 'jaffranprewed'),
        'section'  => 'contact_page_section',
        'type'     => 'url',
    ));

    $wp_customize->add_setting('contact_twitter', array(
        'default'   => 'https://twitter.com/jaffranprewed',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('contact_twitter', array(
        'label'    => __('Twitter URL', 'jaffranprewed'),
        'section'  => 'contact_page_section',
        'type'     => 'url',
    ));

    $wp_customize->add_setting('contact_youtube', array(
        'default'   => 'https://youtube.com/jaffranprewed',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('contact_youtube', array(
        'label'    => __('YouTube URL', 'jaffranprewed'),
        'section'  => 'contact_page_section',
        'type'     => 'url',
    ));

    // Operating Hours
    $wp_customize->add_setting('contact_hours_weekday', array(
        'default'   => '09:00 - 18:00',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('contact_hours_weekday', array(
        'label'    => __('Jam Kerja Senin-Jumat', 'jaffranprewed'),
        'section'  => 'contact_page_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('contact_hours_saturday', array(
        'default'   => '09:00 - 15:00',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('contact_hours_saturday', array(
        'label'    => __('Jam Kerja Sabtu', 'jaffranprewed'),
        'section'  => 'contact_page_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('contact_hours_sunday', array(
        'default'   => 'By Appointment',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('contact_hours_sunday', array(
        'label'    => __('Jam Kerja Minggu', 'jaffranprewed'),
        'section'  => 'contact_page_section',
        'type'     => 'text',
    ));

    // Google Maps
    $wp_customize->add_setting('contact_google_maps', array(
        'default'   => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126214.40214184406!2d115.1885838!3d-8.4095178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd141d3e8100fa1%3A0x24910fb14b24e690!2sUbud%2C%20Gianyar%20Regency%2C%20Bali!5e0!3m2!1sen!2sid!4v1234567890',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('contact_google_maps', array(
        'label'       => __('Google Maps Embed URL', 'jaffranprewed'),
        'section'     => 'contact_page_section',
        'type'        => 'textarea',
        'description' => __('Paste Google Maps embed URL dari iframe src=""', 'jaffranprewed'),
    ));
}
add_action('customize_register', 'jaffranprewed_customize_register');

// Excerpt Length
function jaffranprewed_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'jaffranprewed_excerpt_length');

// Excerpt More
function jaffranprewed_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'jaffranprewed_excerpt_more');

// Contact Form Handler
function jaffranprewed_handle_contact_form() {
    // Check nonce
    if (!isset($_POST['contact_nonce']) || !wp_verify_nonce($_POST['contact_nonce'], 'contact_form_nonce')) {
        wp_send_json_error(['message' => 'Security check failed']);
        wp_die();
    }

    // Sanitize form data
    $name = sanitize_text_field($_POST['contact_name']);
    $email = sanitize_email($_POST['contact_email']);
    $phone = sanitize_text_field($_POST['contact_phone']);
    $service = sanitize_text_field($_POST['contact_service']);
    $date = sanitize_text_field($_POST['contact_date']);
    $message = sanitize_textarea_field($_POST['contact_message']);

    // Validate
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        wp_send_json_error(['message' => 'Please fill all required fields']);
        wp_die();
    }

    if (!is_email($email)) {
        wp_send_json_error(['message' => 'Invalid email address']);
        wp_die();
    }

    // Prepare email
    $to = get_option('admin_email');
    $subject = 'New Contact Form Submission - ' . get_bloginfo('name');
    $body = "New contact form submission:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Service: $service\n";
    $body .= "Event Date: $date\n";
    $body .= "Message:\n$message\n";

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . get_bloginfo('name') . ' <' . get_option('admin_email') . '>',
        'Reply-To: ' . $name . ' <' . $email . '>'
    );

    // Send email
    $sent = wp_mail($to, $subject, $body, $headers);

    if ($sent) {
        // Send auto-reply to customer
        $customer_subject = 'Terima kasih telah menghubungi kami - ' . get_bloginfo('name');
        $customer_body = "Halo $name,\n\n";
        $customer_body .= "Terima kasih telah menghubungi kami. Kami telah menerima pesan Anda dan akan segera menghubungi Anda kembali.\n\n";
        $customer_body .= "Detail pesan Anda:\n";
        $customer_body .= "Layanan: $service\n";
        $customer_body .= "Tanggal Acara: $date\n\n";
        $customer_body .= "Salam hangat,\n";
        $customer_body .= get_bloginfo('name');

        wp_mail($email, $customer_subject, $customer_body, $headers);

        wp_send_json_success(['message' => 'Message sent successfully']);
    } else {
        wp_send_json_error(['message' => 'Failed to send message']);
    }

    wp_die();
}
add_action('admin_post_contact_form_submit', 'jaffranprewed_handle_contact_form');
add_action('admin_post_nopriv_contact_form_submit', 'jaffranprewed_handle_contact_form');
