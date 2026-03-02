<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title('|',true,'right');bloginfo('name'); ?></title>
        <meta name="description" content="<?php echo wp_strip_all_tags(get_the_excerpt()); ?>">
        <?php wp_head(); ?>
</head>

<body <? php body_class(); ?>>
    <header class="site-header">
        <div class="container">
            <a href="<?php echo home_url(); ?>" class="logo">
                <?php bloginfo('name'); ?>
</a>
</div>
</header>