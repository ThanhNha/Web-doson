<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head(); ?>
    <script>
    var ajaxUrl = "<?php echo admin_url('admin-ajax.php') ?>";
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    gray: {
                        0: '#FFFFFF',
                        100: '#F4F5F6',
                        200: '#EBEEF2',
                        300: '#DEE0E3',
                        400: '#9298A0',
                        500: '#686F78',
                        600: '#5D6168',
                        700: '#393C41',
                        800: '#4c4c4d',
                        black: '#090A0B',
                    },
                    green: {
                        0: '#FFFFFF',
                        200: '#46eba4',
                        500: '#3baf7e',
                        black: '#090A0B',
                    },
                    red: {
                        0: '#FFFFFF',
                        200: '#f8836f',
                        500: '#a82a14',
                        800: '#a33421',
                    },
                }
            }
        }
    }
    </script>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part( 'site-structure/header/index' );?>