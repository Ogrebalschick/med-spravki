<?php
/*
Template Name: catalog

*/
?>
<?php get_header() ?>

<body>
    <section class="med_table">
        <div class="container">
            <div class="med_table-item">
                <div class="med_table-category">
                    <?php
                    $cat_name = get_the_category_by_ID(28);
                    echo $cat_name;
                    ?>
                </div>
                <div class="med_table-products">
                    <?php echo do_shortcode('[product_category category="28"]') ?>
                </div>
            </div>
            <div class="med_table-item">
                <div class="med_table-category">
                    <?php
                    $cat_name = get_the_category_by_ID(29);
                    echo $cat_name;
                    ?>
                </div>
                <div class="med_table-products">
                    <?php echo do_shortcode('[product_category category="29"]') ?>
                </div>
            </div>
            <div class="med_table-item">
                <div class="med_table-category">
                    <?php
                    $cat_name = get_the_category_by_ID(30);
                    echo $cat_name;
                    ?>
                </div>
                <div class="med_table-products">
                    <?php echo do_shortcode('[product_category category="30"]') ?>
                </div>
            </div>
            <div class="med_table-item">
                <div class="med_table-category">
                    <?php
                    $cat_name = get_the_category_by_ID(35);
                    echo $cat_name;
                    ?>
                </div>
                <div class="med_table-products">
                    <?php echo do_shortcode('[product_category category="35"]') ?>
                </div>
            </div>
            <div class="med_table-item">
                <div class="med_table-category">
                    <?php
                    $cat_name = get_the_category_by_ID(36);
                    echo $cat_name;
                    ?>
                </div>
                <div class="med_table-products">
                    <?php echo do_shortcode('[product_category category="36"]') ?>
                </div>
            </div>
            <div class="med_table-item">
                <div class="med_table-category">
                    <?php
                    $cat_name = get_the_category_by_ID(37);
                    echo $cat_name;
                    ?>
                </div>
                <div class="med_table-products">
                    <?php echo do_shortcode('[product_category category="37"]') ?>
                </div>
            </div>
            <div class="med_table-item">
                <div class="med_table-category">
                    <?php
                    $cat_name = get_the_category_by_ID(38);
                    echo $cat_name;
                    ?>
                </div>
                <div class="med_table-products">
                    <?php echo do_shortcode('[product_category category="38"]') ?>
                </div>
            </div>
            <div class="med_table-item">
                <div class="med_table-category">
                    <?php
                    $cat_name = get_the_category_by_ID(39);
                    echo $cat_name;
                    ?>
                </div>
                <div class="med_table-products">
                    <?php echo do_shortcode('[product_category category="39"]') ?>
                </div>
            </div>
        </div>
</section>
<section class="seo_text">
    <p>
        <?php the_field('seo-text'); ?>
    </p>
</section>
</body>


<?php get_footer(); ?>