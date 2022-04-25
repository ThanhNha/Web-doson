<section id="spc_spacing">
    <?php if( have_rows('spc_spacing') ): ?>
        <?php while( have_rows('spc_spacing') ): the_row(); ?>
            <?php if(get_sub_field("spc_on_desktop")):?>
                <div class="spc_on_desktop" style="height:<?php the_sub_field("spc_on_desktop");?>px;"></div>
            <?php endif;?>

            <?php if(get_sub_field("spc_on_tablet")):?>
                <div class="spc_on_tablet" style="height:<?php the_sub_field("spc_on_tablet");?>px;"></div>
            <?php endif;?>

            <?php if(get_sub_field("spc_on_mobile")):?>
                <div class="spc_on_mobile" style="height:<?php the_sub_field("spc_on_mobile");?>px;"></div>
            <?php endif;?>
            
        <?php endwhile; ?>
    <?php endif; ?>
</section>