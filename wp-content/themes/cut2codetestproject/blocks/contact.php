<?php
// Contact us block template
?>

<div id="<?php the_field('cont_block_id');?>" class="contact">

    <div class="contact-inner container">

        <h2 class="ttl"><?php the_field('cont_ttl');?></h2>
        <div class="sub"><?php the_field('cont_sub');?></div>
        <div class="btn-block">
            <a href="<?php the_field('cont_link');?>"><?php the_field('cont_btn');?></a>
        </div>

    </div>

</div>