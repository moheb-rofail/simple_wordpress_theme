<?php
get_header();
?>
<div class="container">
    <div class="row">
        <h1>Blog Posts</h1>

        <?php

        $categories = get_categories();
        echo '<ul class="categories-list text-center">';
        echo '<li><a href="'.get_site_url().'">All</a></li>';
        foreach ($categories as $category) {
            echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
        }
        echo '</ul>';
        ?>
        <div class="row">
            <?php
            if (have_posts()):
                while (have_posts()):
                    the_post();
                    ?>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card p-2 m-1">
                            <div class="card-title">
                                <a class="postURL" href='${post_url}' rel="dofollow">
                                    <h5><a href="<?= the_permalink(); ?>">
                                            <?= the_title(); ?>
                                        </a></h5>
                                </a>
                            </div>
                            <div class="card-body">
                                <p><?= the_excerpt(); ?></p>
                                <a class="postURL float-end" href='<?= the_permalink(); ?>' rel="dofollow">
                                    Read More
                                </a>
                            </div>
                            <div class="card-footer">
                                <span class="comments_number"><?= get_comments_number() . ' comments'; ?></span>
                                <span class="postDate"><?= get_the_date(); ?></span>                      
                            </div>
                        </div>
                    </div>

                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>