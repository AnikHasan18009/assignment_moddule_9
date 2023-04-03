<?php
include_once "blogs.php";
if(empty($_GET['number']))
  $bid=0;
else
 $bid=(int)$_GET['number'];  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Single Blog</title>
</head>
<body>
<header>
    <figure >
      <img  class="logo"src="./images/techtoday-1.jpg" alt="image missing">
    </figure>
    <nav>
      <ul class="navi">
        <li><a href="homepage.php" target="_self">Home</a></li>
        <li><a href="blogpage.php">Blog Page</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="#home-footer">About</a></li>
      </ul>
    </nav>
  </header>
  <main class="single-blog-main">
    <div><h2><?php echo $blogs[$bid][0]?></h2>
      <h5 style="margin-left:15px;">By<?php echo " ".$blogs[$bid][2]?></h5>
    <div><img src="<?php echo $blogs[$bid][1]?>" alt="none"></div>
      <p><?php echo " ".$blogs[$bid][3]?></p>
  </div>
    <div class="share-links">
       <h3>Share on:</h3>
       <ul>
        <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a></li>
        <li><a href="https://twitter.com/?lang=en"  target="_blank"><i class="fab fa-twitter"></i></a></li>
        <li><a href="https://www.pinterest.com/"  target="_blank"><i class="fab fa-pinterest"></i></a></li>
        <li><a href="https://www.linkedin.com/"  target="_blank"><i class="fab fa-linkedin"></i></a></li>
       </ul>
    </div>
  </main>
  <footer id="home-footer" class="about">
     <p>TechToday is part of Future US Inc, an international media group and leading digital publisher. </p>
     <hr>
     <table>
      <tr><td>About Us</td><td>Contact Us</td><td>Privacy Policy</td>
      </tr>
      <tr><td>Cookie Policy</td><td>Terms and Conditions</td><td>Careers</td></tr>
     </table>
     <hr>
     <p>© Future US, Inc. Full 7th Floor, 130 West 42nd Street, New York, NY 10036.</p>
  </footer>
</body>
</html>
