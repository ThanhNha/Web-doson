<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php wp_title('| ', true, 'right');?></title>
    <?php wp_head(); ?>
    <script>
        var ajaxUrl = "<?php echo admin_url('admin-ajax.php') ?>";
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>

<body <?php body_class(); ?>>
    <?php get_template_part( 'site-structure/header/index' );?>