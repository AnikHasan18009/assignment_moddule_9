<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Home page</title>
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
  <main class="main-home">
    <h2>Trending</h2>
    <section class='featured'>
    <?php
    include_once "blogs.php";
    for($i=0;$i<4;$i++):
      $exc=$blogs[$i][4];
      $title=$blogs[$i][0];
      $image=$blogs[$i][1];
      echo <<<EOD
        <article>
        <img src='{$image}' alt="none">
        <h1>{$title}</h1>
        <p>$exc</p>
        </article>
        EOD;
    endfor;
       ?>
    </section>
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