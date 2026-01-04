<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: rgba(0, 0, 0, 0.8); backdrop-filter: blur(10px);">
        <div class="container">
            <?php if (has_custom_logo()) : ?>
                <div class="navbar-brand">
                    <?php the_custom_logo(); ?>
                </div>
            <?php else : ?>
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" style="font-family: 'Playfair Display', serif; font-size: 1.5rem; font-weight: 600; color: var(--primary-color);">
                    <?php bloginfo('name'); ?>
                </a>
            <?php endif; ?>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'navbar-nav ms-auto',
                    'fallback_cb'    => false,
                    'depth'          => 2,
                    'walker'         => new class extends Walker_Nav_Menu {
                        function start_lvl(&$output, $depth = 0, $args = null) {
                            $output .= '<ul class="dropdown-menu">';
                        }
                        function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
                            $classes = empty($item->classes) ? array() : (array) $item->classes;
                            $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));

                            if (in_array('menu-item-has-children', $classes)) {
                                $class_names .= ' dropdown';
                            }

                            $output .= '<li class="nav-item ' . esc_attr($class_names) . '">';

                            $atts = array();
                            $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
                            $atts['target'] = !empty($item->target) ? $item->target : '';
                            $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
                            $atts['href']   = !empty($item->url) ? $item->url : '';
                            $atts['class']  = 'nav-link';

                            if (in_array('menu-item-has-children', $classes)) {
                                $atts['class'] .= ' dropdown-toggle';
                                $atts['data-bs-toggle'] = 'dropdown';
                            }

                            $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

                            $attributes = '';
                            foreach ($atts as $attr => $value) {
                                if (!empty($value)) {
                                    $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                                    $attributes .= ' ' . $attr . '="' . $value . '"';
                                }
                            }

                            $item_output = '<a' . $attributes . '>';
                            $item_output .= apply_filters('the_title', $item->title, $item->ID);
                            $item_output .= '</a>';

                            $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
                        }
                    }
                ));
                ?>
            </div>
        </div>
    </nav>
</header>
