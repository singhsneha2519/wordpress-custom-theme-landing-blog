<?php 
/*Template name: weight-loss landing*/
get_header();
?>

<main class="landing-page">
    <section class="hero">
        <div class="container">
            <h1> Personalized Weight Loss Diet Plan </h1>
            <p> Achieve Healthy weight loss with expert-designed meal plans made just for you.</p>
            <a href="#lead-form" class="cta-btn"> Get Your Free Plan</a>
</div>
</section>

<section class="benefits">
    <div class="container">
        <h2> Why our Diet Plan Works</h2>
        <ul>
            <li>Customized meal plans</li>
            <li>Nutritionist approved</li>
            <li>Easy to follow lifestyle changes</li>
</ul>
</div>
</section>

<section class="testimonials">
    <div class="container">
        <h2>Success Stories</h2>
        <blockquote>"I lost 10kg in just 2 months following this plan."</blockquote>
        <blockquote>"Simple meals and great results"</blockquote>
        <blockquote>"Really helped me manage my eating habits "</blockquote>

        <div>
</section>

<section class="faq">
    <div class="container">
        <h2>Frequently Asked Questions</h2>

        <h3>is this diet safe?</h3>
        <p>yes,it is designed by certified nutrition experts.</p>

        <h3>How soon will I see results?</h3>
        <p>Most people begin to see changes within a few weeks.</p>

</div>
</section>

<section class="lead" id="lead-form">
    <div class="container">
        <h2> Start Your Journey Today</h2>

        <form method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="tel" name="phone" placeholder="Phone Number " required>
            <input type="text" name="goal" placeholder="Your Weight Loss Goal" required>
            <button type="submit"> Get Started </button>

</form>
</div>
</section>

</main>


<!-- FAQ Schema Markup -->
 <script type="application/ld+json">
    {
        "@context":"https://schema.org",
        "@type":"FAQPage",
        "mainEntity":[{
            "@type":"Question",
            "name":"Is this diet safe?",
            "acceptedAnswer":{
                "@type":"Answer",
                "text":"yes,it is designed by certified nutrition experts."
            }
        },
        
        {
            "@type":"Question",
            "name":"How soon will I see the results?",
            "acceptedAnswer":{
                "@type":"Answer",
                "text":"Most people begin to see changes within a few weeks."
        }
}
        ]
    }
</script>

<?php get_footer(); ?>