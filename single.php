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
        the_category();
        the_content();
        edit_post_link();
        echo '<hr>';
        comments_template();
        ?>
    </div>
</div>
</div>
<?php
get_footer();
?>