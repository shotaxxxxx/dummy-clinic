<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>みなみ歯科クリニック</title>
    <meta name="description" content="デスクリプションです">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="//unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css<?php echo '?' .filemtime( get_template_directory() . '/style.css'); ?>">

    <?php wp_enqueue_script( 'jquery' ); ?>
    <?php wp_head(); ?>