<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style2.css">
  <title>Blog page</title>
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
  <main class="blog-main">
    <section class="blogs">
      <?php
      include_once "blogs.php";
      for($i=0;$i<count($blogs);$i++):
     $img=$blogs[$i][1];
     $head=$blogs[$i][0];
     $exc=$blogs[$i][4];
     echo <<<EOD
     <div class="blog">
     <div><img src='{$img}' alt="none">
     </div>
     <div>
     <h2>{$head}</h2>
     <p>{$exc}</p>
     <button type="button"><a href="singleblog.php?number={$i}">Read More</a></button>
     </div>
     </div>
     EOD;
      endfor;
    ?>
    </section>
    <aside class="sidedbar">
      <input type="text" id="search" name="search" placeholder="search">
      
      <h3 style="margin:15px;border-bottom:1px solid black ;">Categories</h3>
      <ul class="categories">
       <li>Phones</li>
       <li>Computers</li>
       <li>Car Techs</li>
       <li>Smart Home</li>
       <li>Appliances</li>
      </ul>
    </aside>
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