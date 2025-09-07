<style>
    ul {
    list-style: none;
    padding: 0;
}

ul li {
    display: inline !important;
    margin-right: 15px;
}
</style>
<?php
get_header();
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>Blog Posts</h1>
            <hr>

            <?php

            $categories = get_categories();
            echo '<ul>';
            foreach ($categories as $category) {
                echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
            }
            echo '</ul>';

            if (have_posts()):
                while (have_posts()):
                    the_post();
                    ?>
                    <a href="<?= the_permalink(); ?>">
                        <h2><?= the_title(); ?></h2>
                    </a>
                    <?php
                    echo get_the_date(); // the date() shows only once if there are multiple posts written on the same day
                    echo ' | ' .get_comments_number() . ' comments';
                    the_excerpt();
                    echo '<hr>';
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>