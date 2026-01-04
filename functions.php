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

    // Service 1
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
            'default'   => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control("service_{$i}_title", array(
            'label'    => sprintf(__('Layanan %d - Judul', 'jaffranprewed'), $i),
            'section'  => 'services_section',
            'type'     => 'text',
        ));

        $wp_customize->add_setting("service_{$i}_desc", array(
            'default'   => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control("service_{$i}_desc", array(
            'label'    => sprintf(__('Layanan %d - Deskripsi', 'jaffranprewed'), $i),
            'section'  => 'services_section',
            'type'     => 'textarea',
        ));
    }

    // Default service content
    $wp_customize->get_setting('service_1_title')->default = 'Prewedding Photography';
    $wp_customize->get_setting('service_1_desc')->default = 'Sesi foto prewedding di lokasi eksotis Bali dengan berbagai pilihan paket.';
    $wp_customize->get_setting('service_2_title')->default = 'Wedding Photography';
    $wp_customize->get_setting('service_2_desc')->default = 'Dokumentasi lengkap hari pernikahan Anda dari persiapan hingga resepsi.';
    $wp_customize->get_setting('service_3_title')->default = 'Cinematic Video';
    $wp_customize->get_setting('service_3_desc')->default = 'Video sinematik berkualitas tinggi untuk mengabadikan momen spesial Anda.';

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

    // Testimony items
    for ($i = 1; $i <= 3; $i++) {
        $wp_customize->add_setting("testimony_{$i}_text", array(
            'default'   => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control("testimony_{$i}_text", array(
            'label'    => sprintf(__('Testimoni %d - Teks', 'jaffranprewed'), $i),
            'section'  => 'testimonies_section',
            'type'     => 'textarea',
        ));

        $wp_customize->add_setting("testimony_{$i}_author", array(
            'default'   => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control("testimony_{$i}_author", array(
            'label'    => sprintf(__('Testimoni %d - Nama', 'jaffranprewed'), $i),
            'section'  => 'testimonies_section',
            'type'     => 'text',
        ));

        $wp_customize->add_setting("testimony_{$i}_role", array(
            'default'   => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control("testimony_{$i}_role", array(
            'label'    => sprintf(__('Testimoni %d - Keterangan', 'jaffranprewed'), $i),
            'section'  => 'testimonies_section',
            'type'     => 'text',
        ));
    }

    // Default testimony content
    $wp_customize->get_setting('testimony_1_text')->default = 'Hasil foto prewedding kami sangat memuaskan! Tim yang profesional dan sangat membantu selama sesi foto.';
    $wp_customize->get_setting('testimony_1_author')->default = 'Andi & Sari';
    $wp_customize->get_setting('testimony_1_role')->default = 'Prewedding Package - Juli 2023';

    $wp_customize->get_setting('testimony_2_text')->default = 'Dokumentasi pernikahan kami sempurna! Setiap momen terabadikan dengan indah. Sangat recommend!';
    $wp_customize->get_setting('testimony_2_author')->default = 'Budi & Rina';
    $wp_customize->get_setting('testimony_2_role')->default = 'Wedding Package - Agustus 2023';

    $wp_customize->get_setting('testimony_3_text')->default = 'Pelayanan yang luar biasa! Fotografer sangat sabar dan kreatif. Hasil foto melebihi ekspektasi kami.';
    $wp_customize->get_setting('testimony_3_author')->default = 'Made & Dewi';
    $wp_customize->get_setting('testimony_3_role')->default = 'Full Package - September 2023';

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
