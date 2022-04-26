<?php 
    global $post;
    $post_slug = $post->post_name;
?>
<main id="page">
    <div class="<?php if($post_slug != 'home') { echo 'pageSpacing';}?>">
        <?php the_content(); ?>
    </div>
</main>