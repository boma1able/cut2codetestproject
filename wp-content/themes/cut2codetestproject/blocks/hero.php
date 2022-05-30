<?php
// Hero block template
?>

<div id="<?php the_field('hero_block_id');?>" class="hero">

    <div class="hero-inner container">

        <div class="content-side">
            <h2 class="ttl"><?php the_field('hero_ttl');?></h2>
            <div class="desc"><?php the_field('hero_desc');?></div>
            <div class="btns-block">

            <?php if( have_rows('hero_rep') ): ?>
                <?php while( have_rows('hero_rep') ): the_row(); ?>

                    <?php if( get_sub_field('hero_rep_sw') == 'down' ) :?>
                        <a href="<?php the_sub_field('hero_rep_url');?>" class="btn btn-white"><?php the_sub_field('hero_rep_btn');?></a>
                    <?php elseif( get_sub_field('hero_rep_sw') == 'vid' ) :?>
                        <a href="<?php the_sub_field('hero_rep_url');?>" class="btn btn-nobg btn-vid">
                            <?php if( get_sub_field('icher_rep_btn_icon') ): ?>
                                <img src="<?php the_sub_field('icher_rep_btn_icon');?>" alt="icon">
                            <?php endif; ?>
                            <?php the_sub_field('hero_rep_btn');?>
                        </a>
                    <?php endif;?>

                <?php endwhile; ?>
            <?php endif; ?>
                
                
            </div>
        </div>

        <div class="img-side">
            <img src="<?php the_field('hero_img');?>" alt="image">
        </div>

    </div>

    <div class="bottom-bg"></div>

</div>
