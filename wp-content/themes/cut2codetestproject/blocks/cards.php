<?php
// Cards block template
?>

<div  id="<?php the_field('cards_block_id');?>" class="cards">

    <div class="cards-inner container">

        <div class="cards-list">

            <?php if( have_rows('cards_rep') ): ?>
                <?php while( have_rows('cards_rep') ): the_row(); ?>

                <div class="card">
                    <div class="inner-content">
                        <div class="img-block">
                            <img src="<?php the_sub_field('cards_rep_icon');?>" alt="icon">
                        </div>
                        <h3 class="ttl"><?php the_sub_field('cards_rep_ttl');?></h3>
                        <div class="desc"><?php the_sub_field('cards_rep_desc');?></div>
                    </div>
                </div>

                <?php endwhile; ?>
            <?php endif; ?>
            
        </div>

    </div>

</div>