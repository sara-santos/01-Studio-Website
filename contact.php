<?php

        $result = false;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            require_once("connection.php");
          
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $selection = htmlspecialchars($_POST["selection"]);
        $message = htmlspecialchars($_POST["message"]);

        $id = mt_rand();
        $today = date("Y-m-d");

        $queryInsert = "INSERT INTO user (iduser, name, email, selection, message, date_created) VALUES ($id, '$name', '$email', '$selection', '$message', '$today')";

       //echo $queryInsert;

      $result = mysqli_query($connection, $queryInsert);

            }  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ac347ff3ba.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="src/contact.css" />
    <link rel="stylesheet" href="src/contactMobile.css" />
    <title>01'Studio</title>
</head>
<body>
    <div class="content">  
    <div class="header">   
            <div class="menu">
                <nav>
                <div class="response">
    <div class="mobile">
        <input id="responsive-menu" type="checkbox">
        <label for="responsive-menu">   <a href="index.html"> <img src="media/logo.png" alt="logo" class="logo"></a><span id="menu-icon"></span></label>
        <div id="overlay"></div>
        <ul>
            <li>
                <a href="index.html">Home</a> 
            </li>
            <li>
                <a href="projects.html">Projects</a> 
             </li>
             <li>
                <a href="about.html">About</a> 
             </li>
             <li>
                <a href="contact.php">Contact</a> 
             </li>
        </ul>
        <ul id="social-media">
            <li>
                <a href="https://www.instagram.com/01studioo/" target="_blank">
                    <i class="fab fa-linkedin"></i>
                    <span class="screen-reader-text">LinkedIn</span>
                </a>
            </li>
            <li>
                <a href="https://www.facebook.com/01-Studio-102590084822434" target="_blank">
                    <i class="fab fa-facebook-square"></i>
                    <span class="screen-reader-text">Facebook</span>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/01studioo/" target="_blank">
                    <i class="fab fa-instagram-square"></i>
                    <span class="screen-reader-text">Instagram</span>
                </a>
                 </li>
                    </ul>
                </div>
            </div>
            </nav>
            </div>
                            <div class="desktop">
                        <div class="row">
                         <div class="col">
                         <a href="index.html"> <img src="media/logo.png" alt="logo" class="logo"></a>
                         </div>
                        <div class="col">
                        <div class=menuItems>
                       <ul>
                       <li>
                            <a href="index.html">Home</a> 
                        </li>
                        <li>
                            <a href="projects.html">Projects</a> 
                         </li>
                         <li>
                            <a href="about.html">About</a> 
                         </li>
                         <li>
                            <a href="contact.php">Contact</a> 
                         </li>
                       </ul>            
                    </div>
                    </div>
                        </div>
                    </div>               
                    </div>
                
           <div class="form">
            <h3 class="heading3">Contact</h3>
            <div class="container">
                <div class="row">
                  <div class="col-lg">
                    <form method="post">

                    <?php 

        if ($result == true) {

            echo '<div class="alert alert-success" role="alert">';
            echo "Thank you for submiting! Soon we'll be in touch with you";
          echo "</div>";

        }


      ?>

                        <p class="formText">If you want to work with us, fill in the form bellow</p>
                        <input type="text" class="name" id="name" aria-describedby="nameHelp" placeholder="Name"  name="name" value=""> 
                            <input type="email" class="email" placeholder="Email" id="email" aria-describedby="emailHelp" name="email" value="">
                            <select id="inputState" class="selection" aria-describedby="selectionHelp" name="selection" value="">
                              <option selected>What can I help you with?</option>
                              <option>Web Design</option>
                              <option>Web Development</option>
                              <option>Branding</option>
                              <option>Website Maintenance</option>
                              <option>Not sure</option>
                              <option>More than one</option>
                            </select>
                            <p class="formText">Is there anything more you want to say?</p>
                            <input type="text" class="message" placeholder="Message" id="message" aria-describedby="messageHelp" name="message" value="">
                        <button type="submit" class="btn2">Submit</button>
                      </form>
                  </div>
                  <div class="col-lg">
                    <p class="contacts"><strong>Or just use our contacts</strong><br>+351 000 000 000 <br>
                        hello01studio@gmail.com</p>
                        <p class="contacts"><strong>You can also find us on social media</strong><br>Instagram <br>
                            Facebook <br>
                            Linked In</p>
                  </div>
                </div>
              </div>
           </div>
    <footer class="footer">
        <div class="container">
        <h5 class="heading5">Work with us   <a href="contact.php"> <i class="fas fa-arrow-right"></i></a></h5>
    <div class="row">
        <div class="col"><p class="mail">hello01studio@gmail.com</p></div>
        <div class="col"><p class="tag">@01Studio</p></div>
    </div>
    <div class="row">
        <div class="col"><p class="number">+351 000 000 000</p></div>
        <div class="col"><p class="terms">Privacy & Terms</p></div>
    </div>
    <div class="row">
    <div class="col"><a href="https://www.instagram.com/01studioo/" target="_blank"  class="linkedin"><i class="fab fa-linkedin"></i></a></div>
        <div class="col"><a href="https://www.facebook.com/01-Studio-102590084822434" target="_blank"  class="facebook"><i class="fab fa-facebook-square"></i></a></div>
        <div class="col"><a href="https://www.instagram.com/01studioo/" target="_blank" class="instagram" class="instagram"><i class="fab fa-instagram-square"></i></i></a></div>
    </div>
</div>
</div>
</footer>
</body>
</html>