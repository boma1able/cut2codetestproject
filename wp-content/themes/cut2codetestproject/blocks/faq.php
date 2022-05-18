<?php
// FAQ block template
?>

<div id="<?php the_field('faq_block_id');?>" class="faq">

    <div class="faq-inner container">

        <div class="content-block">
            <div class="icon">
                <img src="<?php the_field('faq_icon');?>" alt="icon">
            </div>
            <h2 class="ttl"><?php the_field('faq_ttl');?></h2>
            <div class="txt">
                <?php the_field('faq_txt');?>
            </div>
            
            <div class="accordion acc">

                <?php if( have_rows('faq_rep') ): ?>
                    <?php while( have_rows('faq_rep') ): the_row();?>
                        <div class="acc__card">
                            <div class="acc__title"><?php the_sub_field('faq_rep_q'); ?></div>
                            <div class="acc__panel" ><?php the_sub_field('faq_rep_a'); ?></div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            
            </div>

        </div>

        <div class="img-block">
            <img src="<?php the_field('faq_img');?>" alt="image">
        </div>

    </div>

</div>