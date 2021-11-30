<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
	<title>Gutenburg Practice</title>
</head>
<body>
<header>

<header>
        <nav class="navbar navbar-expand-lg my_navbar navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="<?php echo site_url(); ?>">
                <img class="mb-2" src="<?php echo get_theme_file_uri('/images/ublank.png'); ?>" alt="logo" width="90" height="80">
              </a>
              <h5 class="nav_tagline nomobile "> a brand about being you. </h5>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mt-4 ">
                  <li class="nav-item">
                    <a class="nav-link " href=" <?php echo site_url('/home')?> "><h2>Home</h2></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('/shop')?>"><h2>Shop</h2></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('about-us')?> "><h2>About Us</h2></a>
                  </li>
                
                </ul>
              </div>
            </div>
          </nav>
      </header>

    </header>

