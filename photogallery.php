<?php require ('authentication.php') ;?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Photos  Gallery</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,300' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="assets/css/gallery.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <!--=================== Google Fonts ====================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">


    <!--=================== Remixicons ====================-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- AJAX  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!--=================== SwiperJS CSS ====================-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
</head>
<body>
   <!--=================== Header ====================-->
    <header id="header" class="header">
        <div class="container">
            <nav class="nav">
                <a href="index.php" class="nav__brand">
                    <i class="fa-solid fa-scissors"></i>AAMIN
                </a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="index.php" class="nav__link">Home</a>
                        </li>
                        <!-- <li class="nav__item">
                            <a href="#about" class="nav__link">About</a>
                        </li> -->
                        <li class="nav__item">
                            <a href="dashboard.php" class="nav__link">POST HERE</a>
                        </li>
                        <!-- <li class="nav__item">
                            <a href="#service" class="nav__link">Services</a>
                        </li> -->
                        <!-- <li class="nav__item">
                            <a href="#project" class="nav__link">Projects</a>
                        </li> -->
                        <!-- <li class="nav__item">
                            <a href="#contact"  class="nav__link">Contact</a>
                        </li> -->
                    </ul>
                </div>
                <div class="nav__toggle">
                    <i id="nav-toggle" class="ri-menu-3-line"></i>
                </div>
            </nav>
        </div>
    </header>
    <!-- gallery -->
    <div class="gallery">
        <div class="gallery-item">
            <?php
                $myQuery = "SELECT * from postimage";
                $result = $conn->query($myQuery);
                if ($result->num_rows > 0) 
                {
                  while ($row = $result->fetch_assoc())  {
                     $images = $row['image'];
           
                
                ?>
        
        <img src="<?php echo $images;?>" />

        <?php   }}?>
        </div>
    </div>
    



    <!--=================== SwiperJS  ====================-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!--=================== ScrollReveal ==================-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--=================== Main JS ====================-->
    <script src="assets/js/main.js"></script>

<!-- partial -->
  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/45226/material-photo-gallery.min.js'></script>
</body>
</html>