<?php get_header(); ?>

<div class="container-fluid">
       <div class="row">
           <div class="col-3 text-center ms-3">
               <h1 class="all_reports">Welcome to the shop</h1>
            </div>
        </div>
    </div>

<div class = "container mt-5">
<div class = "row">

<?php while(have_posts()) { 
    
    the_post();

    $category = get_the_category(); ?>

    <div class = "col-sm-6 col-md-3">
		<a class = "shop-links" href = "<?php the_permalink(); ?>">
        <?php the_post_thumbnail('full' , array('class' => 'img-fluid'));?>
        <p class = "shop-links mt-2"><?php echo $category[0]->name ?></p>
        <h1 class = "shop-links"><?php the_title();?></h1>
		</a>
    </div>




<?php } ?> 




</div>
</div>





<?php get_footer();?>