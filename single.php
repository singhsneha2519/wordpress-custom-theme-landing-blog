<?php get_header(); ?>

<main class="blog-content container">

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<!-- breadcrumb -->

<div class="breadcrumb">
    <a href="<?php echo home_url(); ?>"> Home </a> 
    <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>"> Blog </a>
    <span><?php the_title(); ?></span>
</div>

<!--post title -->
<h1><?php the_title(); ?> </h1>

<!-- post meta -->
 <p>
    By<?php the_author(); ?> |
    <?php echo get_the_date(); ?>
</p>

<!-- featured Image -->

<?php if(has_post_thumbnail()) : ?>
    <?php the_post_thumbnail('large'); ?>
<?php endif; ?>

<!-- Content -->

<?php the_content(); ?>

<!-- internal link section -->

<div class="internal-links">
    <h3>Related Resources</h3>
    <ul>
        <li><a href="#"> Best Diet Plans</a></li>
        <li><a href="#"> Healthy Meal Prep Guide</a></li>
        <li><a href="#"> Weight Loss Tips</a></li>

</ul>
</div>

<!-- Autor box-->
 <div class="author-box">
    <?php echo get_avatar(get_the_author_meta('ID'),80); ?>
    <div>
        <h4><?php the_author(); ?></h4>
        <p><?php echo get_the_author_meta('description'); ?></p>

</div>
</div>

<!-- Related posts -->
 <div class="related-posts">
    <h3> Related Post </h3>
    <ul>
        <?php
        $related = new WP_Query(array(
            'category__in' => wp_get_post_categories(get_the_ID()),
            'post__not__in' => array(get_the_ID()),
            'post__per__page' =>3
        ));

        if($related->have_posts()):
        while($related->have_posts()) : $related->the_post();
        ?>

        <li>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
</a>
</li>

<?php 
endwhile;
wp_reset_postdata();
endif;
?>

</ul>
</div>

<?php endwhile; endif; ?>

<!-- FAQ schema -->

<script type="application/ld+json">
    {
        "@context":"https://schema.org",
        "@type":"FAQPage",
        "mainEntity":[{
            "@type":"Question",
            "name":"How Long will it take to lose weight?",
            "acceptedAnswer":{
                "@type":"Answer",
                "text":"Healthy weight loss typically takes 4-12 weeks depending on consistency and metabolism."
            }
        },
        
        {
            "@type":"Question",
            "name":"Should i do cardio or strength training?",
            "acceptedAnswer":{
                "@type":"Answer",
                "text":"A combination works best. Strength training preserves muscles,while cardio increases calorie burn."
        }
},

{
            "@type":"Question",
            "name":"Is dieting safe for beginners?",
            "acceptedAnswer":{
                "@type":"Answer",
                "text":"A balanced calorie deficit is generally safe for healthy adults. People with medical conditions should consult a doctor."
        }
}

        ]
    }
</script>

<?php get_footer(); ?>

