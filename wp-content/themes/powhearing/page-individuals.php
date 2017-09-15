
<?php /* Template Name: individuals */ ?>
<?php echo 'page-individuals.php' ?>
    <div>
    <?php
        get_template_part('template-parts/comp/success-story');
    ?>
</div>

<?php while ( have_posts() ) : the_post();

    get_template_part( 'template-parts/comp/description', 'detail' );

endwhile; // End of the loop.
?>

<?php
if(get_field('indiv-title'))
{ ?>

    <h1 class="organi-title">
    <?php echo '<p>' . get_field('indiv-title') . '</p>'; ?>
    </h1>

    <p class="organi-content">
    <?php echo '<p>' . get_field('indiv-content') . '</p>'; ?>
    </p>

<?php } ?>

