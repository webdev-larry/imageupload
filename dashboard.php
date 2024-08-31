<?php require ('authentication.php') ;
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"> 
    </script>
   </head>
<body>
      <header id="header" class="header">
        <div class="container">
            <nav class="nav">
                <a href="index.html" class="nav__brand">
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
                            <a href="photogallery.php" class="nav__link">Photo Album</a>
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
     <main class="main">
        <!--=================== Hero ====================-->
        <section id="hero" class="hero">
            <div class="container">
                <div class="d-grid hero__wrapper">
                    <div class="hero__content">
                        <h1 class="hero__title"><br>AMINN</h1>
                        <p class="hero__description">Please post your picture below to add to the abulm.
                        </p>
                        <!-- <div class="hero__info">
                            <div class="hero__info-wrapper">
                                <p class="hero__info-number">25+</p>
                                <h2 class="hero__info-title">Years<br>Experience</h2>
                            </div> -->
                            <div class="hero__info-wrapper">
                                <form action="<?php echo htmlspecialchars($_SERVER ["PHP_SELF"]);?>" method="post"  enctype="multipart/form-data" >
              <input class="file-input" type="file" id="file" name="file" class="file">
              <button type="submit" name="submit">POST</button>
                    </form>
                            </div>
                            <?php
                  $file = $_FILES["file"];
                  $target_dir = "upload/";
                  $target_file = $target_dir . basename($_FILES["file"]["name"]);
                  $uploadOk = 1;
                  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    // Check if image file is a actual image or fake image
                  if(isset($_POST["submit"])) {
                    
                      $check = getimagesize($_FILES["file"]["tmp_name"]);
                      if($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                      } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
                      }
                      if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                      && $imageFileType != "gif")
                      {
                        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk=0;}
                    }
                    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                      echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
                      
                    } else {
                      echo "Sorry, there was an error uploading your file.";
                    }
                   if($_SERVER["REQUEST_METHOD"]== "POST") {
                     $user_id = $_SESSION["id"];
                     $time = date("h:i:s"); 
                     
                      $SQL = "insert into Postimage (user_id, image, time ) Values( '$user_id','$target_file', '$time' )";
                        if ($conn->query($SQL) === TRUE){
                    echo '<p style="color:white;text-align:center">Posted</P>';
                     }else{
                  echo "Error:" .$SQL."<br/>" .$conn->error;
                     }}?>
                        </div>
                        <div>
          <button><a href="photogallery.php">View album</a></button>
        </div>
                    
            </div>
        </section>
        
        

   </main>

    
    
       <!--=================== SwiperJS  ====================-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!--=================== ScrollReveal ==================-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--=================== Main JS ====================-->
    <script src="assets/js/main.js"></script>
    
</body>
</html>