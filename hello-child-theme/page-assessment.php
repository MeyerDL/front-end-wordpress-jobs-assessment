<?php
/* Template Name: Assessment Page */
get_header();
?>
<div class="container py-5">
<section class="my-5">
<h2 class="text-center mb-4">Our Featured Listing</h2>
<div class="row g-4">
<?php for($i=1;$i<=3;$i++): ?>
<div class="col-md-4">
<div class="card h-100 shadow-sm">
<img src="https://via.placeholder.com/600x400" class="card-img-top" alt="">
<div class="card-body">
<h4>£<?php echo 1000*$i; ?> <span class="badge bg-warning">Status</span></h4>
<p class="mb-1">Demo Address <?php echo $i; ?></p>
<p class="text-muted">3 Beds · 2 Baths</p>
</div>
</div>
</div>
<?php endfor; ?>
</div>
</section>

<section class="bg-warning py-5">
<h2 class="text-center mb-4 text-white">Google Reviews ★★★★★</h2>
<div id="reviewCarousel" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-inner">
<?php for($s=0;$s<2;$s++): ?>
<div class="carousel-item <?php echo $s==0?'active':''; ?>">
<div class="row g-4">
<?php for($r=1;$r<=3;$r++): ?>
<div class="col-md-4">
<div class="p-4 bg-dark text-white rounded">
<p>“Lorem ipsum dolor sit amet…”</p>
<p class="fw-bold mb-0"><i class="fa-solid fa-user"></i> Reviewer <?php echo ($s*3+$r); ?></p>
</div>
</div>
<?php endfor; ?>
</div>
</div>
<?php endfor; ?>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#reviewCarousel" data-bs-slide="prev">
<span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#reviewCarousel" data-bs-slide="next">
<span class="carousel-control-next-icon"></span>
</button>
</div>
</section>

</div>
<?php get_footer(); ?>
