<?php
// Mixed block template
?>

<div id="<?php the_field('mix_block_id');?>" class="mixed">

    <div class="mixed-inner container">

        <div class="img-block">
            <img src="<?php the_field('mix_img');?>" alt="image">
        </div>

        <div class="content-block">
            <div class="icon">
                <img src="<?php the_field('mix_icon');?>" alt="icon">
            </div>
            <h2 class="ttl"><?php the_field('mix_ttl');?></h2>
            <div class="txt">
                <?php the_field('mix_txt');?>
            </div>
            <div class="btn-block">
                <a href="<?php the_field('mix_btn_link');?>" class="btn"><?php the_field('mix_btn');?></a>
            </div>
        </div>

    </div>
    
</div>