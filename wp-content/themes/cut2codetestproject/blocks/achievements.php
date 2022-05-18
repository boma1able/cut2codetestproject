<?php
// Achievements block template
?>

<div id="<?php the_field('ach_block_id');?>" class="achievements">

    <div class="container">
        <div class="achievements-inner">

            <?php if( have_rows('ach_rep') ): ?>
                <?php while( have_rows('ach_rep') ): the_row(); ?>

                <div class="counter-wrap">
                    <h2 class="ttl">
                        <span class="count" data-count="<?php the_sub_field('ach_rep_ttl');?>">0</span><?php the_sub_field('ach_rep_add');?>
                    </h2>
                    <div class="sub"><?php the_sub_field('ach_rep_sub');?></div>
                </div>

                <?php endwhile; ?>
            <?php endif; ?>
            
        </div>
    </div>

</div>

