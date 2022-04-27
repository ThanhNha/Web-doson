<?php
/*
 * Create blocks for site
 */
add_filter( 'block_categories_all', 'shin_block_category', 10, 2);
function shin_block_category( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'shin-blocks',
                'title' => __( 'The Shin Blocks', 'shin-blocks' ),
            ),
        )
    );
}


add_action('acf/init', 'shin_acf_init_block_types');
function shin_acf_init_block_types() {
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        acf_register_block_type(array(
            'name'              => 'Spacing',
            'title'             => __('Spacing'),
            'description'       => __('A custom Spacing block.'),
            'render_template'   => 'site-structure/blocks/spacing/index.php',
            'category'          => 'shin-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'space', 'spacing'),
            'mode'              => 'edit', // auto, preview, edit
        ));

        acf_register_block_type(array(
            'name' => 'blockOne',
            'title' => __('blockOne'),
            'description' => __('A custom blockOne block.'),
            'render_template' => 'site-structure/blocks/blockOne/index.php',
            'category' => 'shin-blocks',
            'icon' => 'admin-customizer',
            'keywords' => array('one', '1'),
            'mode' => 'auto',
        ));
        acf_register_block_type(array(
            'name' => 'blockValue',
            'title' => __('blockValue'),
            'description' => __('A custom blockValue block.'),
            'render_template' => 'site-structure/blocks/blockValue/index.php',
            'category' => 'shin-blocks',
            'icon' => 'admin-customizer',
            'keywords' => array('value', '2'),
            'mode' => 'auto',
        ));
        acf_register_block_type(array(
            'name' => 'blockWelcome',
            'title' => __('blockWelcome'),
            'description' => __('A custom blockWelcome block.'),
            'render_template' => 'site-structure/blocks/blockWelcome/index.php',
            'category' => 'shin-blocks',
            'icon' => 'admin-customizer',
            'keywords' => array('blockWelcome', '2'),
            'mode' => 'auto',
        ));
        acf_register_block_type(array(
            'name' => 'blockFeature',
            'title' => __('blockFeature'),
            'description' => __('A custom blockFeature block.'),
            'render_template' => 'site-structure/blocks/blockFeature/index.php',
            'category' => 'shin-blocks',
            'icon' => 'admin-customizer',
            'keywords' => array('blockFeature', '2'),
            'mode' => 'auto',
        ));
        acf_register_block_type(array(
            'name' => 'blockMap',
            'title' => __('blockMap'),
            'description' => __('A custom blockMap block.'),
            'render_template' => 'site-structure/blocks/blockMap/index.php',
            'category' => 'shin-blocks',
            'icon' => 'admin-customizer',
            'keywords' => array('blockMap', '2'),
            'mode' => 'auto',
        ));
        acf_register_block_type(array(
            'name' => 'blockAbout',
            'title' => __('blockAbout'),
            'description' => __('A custom blockAbout block.'),
            'render_template' => 'site-structure/blocks/blockAbout/index.php',
            'category' => 'shin-blocks',
            'icon' => 'admin-customizer',
            'keywords' => array('blockAbout', '2'),
            'mode' => 'auto',
        ));

    }
}