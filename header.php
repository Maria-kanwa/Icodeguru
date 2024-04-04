<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap Web</title>
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> 
  <link rel="stylesheet" href="style.css"> -->

  <?php
$my_option = get_option('my_data');
$font_color = $my_option['font_color'];
$font_family = $my_option['font_family'];
$disable_logo = $my_option['disable_logo'];

?>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <div class="custom-logo">
<?php 
if($disable_logo == 0){
    // for disapperaing logo 0 for disapperaing and 1 for apperaing logo
     echo get_custom_logo();
     

}
?>
         

        <!-- <?php echo get_custom_logo();?>for show logo on our website -->
        </div>
       <a class="navbar-brand" href="#">
        <h1 style= "font-family:<?php echo $font_family;?>"><?php bloginfo('name');?></h1><!-- for site tittle-->



        <p style="color:<?php echo $font_color;?>;font-family:<?php echo $font_family;?>"><?php bloginfo('description');?></p><!-- for Tagline -->
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#team">Team</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <button type="button" class="rounded-pill btn btn-outline-primary mx-4 text-light">Get Started</button>
        </ul>
      </div> -->
      <?php

wp_nav_menu(array(
  'theme_location' => 'primary',
  'menu_class' => 'navbar-2',//for the registration of class for styling navbar in style.css
 
))
?>
    </div>
  </nav>
  <?php
  wp_head();
  ?>
  </head>
