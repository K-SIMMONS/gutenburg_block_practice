<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gutenburg-practice
 */

?>

<footer>
    <div class="container-fluid footer_color mt-5 bg-dark">
      <div class="row text-start text-light">
        <div class=" col ">
          <a href = "<?php echo site_url('/home')?>"><h1 class="footer_nav px-1 py-2">Home</h1> </a>
          <a href = "<?php echo site_url('/shop')?>"><h1 class="footer_nav px-1 py-2">Shop</h1></a>
          <a href = "<?php echo site_url('/about-us')?>"><h1 class="footer_nav px-1 py-2">About us</h1></a>
        
        </div>
        
       
        <div class="col">
          <h1 class="text-start footer_font form_text ">Ready to become a member? Join us:</h1>
          <div class="form-floating mt-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <button type="button" class="btn btn-lg bg-secondary text-light mt-3">Submit</button>
          <div class="row text-end mt-5 "><h1 class="font_color footer_company_text nomobile">U © 2021</h1></div>
        </div>
      </div>
    </div>
  </footer>

<?php wp_footer(); ?>

</body>
</html>
