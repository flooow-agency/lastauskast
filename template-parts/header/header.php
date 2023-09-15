<?php
    $header_logo = get_field('header_logo', 'option');
?>

<header class="header">
    <div class="container--full">
        <div class="header__wrap">
            <?php if ($header_logo) : ?>
                <div class="header__logo">
                    <?php if (!is_home()) : ?>
                        <a href="<?php echo get_home_url(); ?>">
                            <img src="<?php echo $header_logo['url']; ?>"
                                 alt="<?php echo $header_logo['alt'] ?: $header_logo['title']; ?>">
                        </a>
                    <?php else : ?>
                        <img src="<?php echo $header_logo['url']; ?>"
                             alt="<?php echo $header_logo['alt'] ?: $header_logo['title']; ?>">
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="header__nav">
                <?php
                    wp_nav_menu([
                        'theme_location' => 'main-menu',
                        'container' => false,
                    ]);
                ?>
            </div>

            <div class="header__search">
                <div class="header__search-btn">
                    <button class="btn-search">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/search.svg'; ?>" alt="search">
                    </button>
                </div>
                <div class="header__search-form">
                    <div class="close--search">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/cross_icon.svg';?>" alt="close-icon">
                    </div>
                    <?php echo do_shortcode('[wpdreams_ajaxsearchlite]');?>
                </div>
            </div>

            <div class="header__toggle">
                <span></span>
            </div>

            <div class="header__side-panel">
                <div class="header__nav">
                    <div class="header__close">
                        <span></span>
                        <span></span>
                    </div>
                    <?php
                        wp_nav_menu([
                            'theme_location' => 'main-menu',
                            'container' => false,
                        ]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</header>
