<?php
get_header();
the_post();
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">

            <h1><a href="<?= the_permalink(); ?>">
                    <?= the_title(); ?>
                </a></h1>
            <?php
            the_date();
            get_the_category();?>
            <div class="post-content"><?=the_content();?></div>
            <?php edit_post_link();?>
            <div class="next-previous-posts">
                <span class='prev-post'><?= previous_post_link(); ?></span>
                <span class='next-post'><?= next_post_link(); ?></span>
                
            </div>
            <br><hr>
            <?php
            comments_template();
            ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>