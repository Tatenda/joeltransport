<?php get_header() ?>
<div class="slider">
    <h1>SLIDE</h1>
</div>
<article class="container">
    <div class="services row">
        <?php
            if (have_posts()) {
                while(have_posts()) {
                    the_post();
                    the_content();
                }
            }
        ?>
    </div>
</article>
<?php get_footer() ?>
