<?php get_header(); ?>

<main class="site-main">

<!-- Hero Section -->
<section class="hero">
<div class="hero-container">
<h1>Find Your Dream Property</h1>
<p>Browse the best properties available on the West Coast.</p>
<a href="#properties" class="btn">View Listings</a>
</div>
</section>

<!-- Design 1: Featured Properties 3-column grid -->
<section class="properties" id="properties">
<div class="container">
<h2>Featured Properties</h2>
<div class="posts-grid">
<?php
$featured_properties = array(
    array('title'=>'Beautiful Suburban Apartment','desc'=>'Modern 2-bedroom apartment with stunning views.','img'=>'https://aqua-mule-376304.hostingersite.com/wp-content/uploads/2025/11/the-beautiful-scene-in-the-suburbs-of-apartment-bu-2025-10-16-05-22-50-utc-scaled.jpg'),
    array('title'=>'Spacious Family Home','desc'=>'Large 4-bedroom home with new roof, surrounded by trees.','img'=>'https://aqua-mule-376304.hostingersite.com/wp-content/uploads/2025/11/aerial-view-of-large-home-with-new-roof-on-wooded-2024-12-06-01-25-36-utc-scaled.jpg'),
    array('title'=>'Luxury Downtown Condo','desc'=>'3-bedroom condo in the city center with balcony view.','img'=>'https://aqua-mule-376304.hostingersite.com/wp-content/uploads/2025/11/outdoor-swimming-pool-bordered-by-rows-of-cedar-tr-2024-10-18-08-42-52-utc-scaled.jpg')
);
foreach($featured_properties as $property):
?>
<article class="post-item">
<div class="post-thumbnail"><img src="<?php echo $property['img']; ?>" alt="<?php echo $property['title']; ?>"></div>
<h3><?php echo $property['title']; ?></h3>
<p><?php echo $property['desc']; ?></p>
</article>
<?php endforeach; ?>
</div>
</div>
</section>

<!-- Design 2: Reviews slider 3-column -->
<section class="reviews">
<div class="container">
<h2>Client Reviews</h2>
<div class="reviews-slider">
<?php
$reviews = array(
    array('name'=>'Alice','text'=>'Excellent service and friendly team!'),
    array('name'=>'Bob','text'=>'Highly recommend them for property sales.'),
    array('name'=>'Carol','text'=>'Very professional and efficient.'),
    array('name'=>'David','text'=>'Smooth experience from start to finish.'),
    array('name'=>'Eva','text'=>'Fantastic communication and guidance.'),
    array('name'=>'Frank','text'=>'The properties they list are top quality.')
);
foreach($reviews as $review):
?>
<div class="review-item">
<p>"<?php echo $review['text']; ?>"</p>
<h4>- <?php echo $review['name']; ?></h4>
</div>
<?php endforeach; ?>
</div>
</div>
</section>

<!-- Features / Amenities -->
<section class="features">
<div class="container">
<h2>Property Highlights</h2>
<div class="features-grid">
<div class="feature-item"><h3>Ocean View</h3><p>Properties with stunning sea views.</p></div>
<div class="feature-item"><h3>Modern Interiors</h3><p>Fully renovated and stylish finishes.</p></div>
<div class="feature-item"><h3>Prime Locations</h3><p>Close to schools, shopping, and beaches.</p></div>
</div>
</div>
</section>

</main>

<?php get_footer(); ?>
