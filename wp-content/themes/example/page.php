<?php get_header() ?>

<article class="container">
    <div class="row">
        <h1>PAGE</h1>
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
