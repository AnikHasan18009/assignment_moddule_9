<?php
if($_SERVER['REQUEST_METHOD']==='POST')
{
  if (!empty($_POST['message'] ) && !empty( $_POST['email'] ) && !empty( $_POST['subject'] ) && !empty($_POST['name']) && 
  strlen(trim($_POST['message']))!=0 && strlen(trim($_POST['subject']))!=0 && strlen(trim($_POST['name']))!=0)  {
    if(!filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL ) ) 
  {$error='Error! Invalid email format.';}

    else{
 $confirm="Thank you for your interaction.";
   }  
  }
  else {
  $error="Error! Data missing.";

}
}
?>
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
        <li><a href="blogpage.php" target="_self">Blog Page</a></li>
        <li><a href="contact.php" target="_self">Contact</a></li>
        <li><a href="#home-footer">About</a></li>
      </ul>
    </nav>
  </header>
  <main class="contact">
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <table>
     <caption style="font-size: 2rem;">Contact Us</caption>
      <?PHP
        if(!empty($error)){
        echo "<tr><td style='color:red;'>$error</td></tr>";
        unset($error);
      }
        if(!empty($confirm)){
        echo "<tr><td style='color:green;'>$confirm</td></tr>";
        unset($confirm);
          }
        
        ?>
        <tr>
        <td><label for="name">Name</label></td>
      </tr>
        <tr>
        <td><input class="box" type="text" name="name" id="name" required></td>
      </tr>
        <tr>
        <td><label for="email">Email</label></td>
      </tr>
      <tr>
        <td><input class="box" type="email" name="email" id="email" required></td>
      </tr>
      <tr>
        <td><label for="subject">Subject</label></td>
      </tr>
      <tr>
        <td><input class="box" type="text" name="subject" id="subject" required></td>
      </tr>
      <tr>
        <td><label for="message">Message</label></td>
      </tr>
      <tr>
        <td><textarea style="margin-top:0px;"rows="7" cols="25"name="message" id="message" required placeholder="write something..."></textarea></td>
      </tr>
      <tr>
        <td style="Padding:10px;">
        <input type="reset" value="Reset">
         <input type="submit" value="Submit">
        </td>
      </tr>
    </table>
  </form>
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





