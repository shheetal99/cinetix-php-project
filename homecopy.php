<?php
$servername='localhost';
$user='root';
$pass='';
$db='cinema_db';
$link = mysqli_connect($servername, $user, $pass, $db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="cinetix.png" type="image/png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style/homecopy.css" >
  <link rel="stylesheet" href="style/footer.css">
  
<title>CineTix - Get Your Tickets in clicks </title>
</head>
<body>

<div id="myNav" class="overlay">
 <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<!-- Overlay content -->
  <div class="overlay-content">
    <a href="#nowshow" onclick="closeNav()">Now Showing</a>
    <a href="#soon" onclick="closeNav()">Coming Soon</a>
    <a href="#offers" onclick="closeNav()">Offers and Gift Cards</a>
    <a href="#contact" onclick="closeNav()">Contact Us</a>
  </div>
</div>

<div class="top">
<span style="font-size:24px; cursor:pointer; margin-left: 15px;  " onclick="openNav()">&#9776; MENU</span>
<a href="homecopy.php"><img src="cinetix.png" style="width:125px; height:62px; margin-left:37%;"></a>
<a href="login.php"><button class="btn">LOG IN</button></a>
</div>

<script>
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
</script>

<br>
<div class="main">
<!-- Slideshow -->
<div class="slideshow-container">
<div class="mySlides fade">
   <img src="gunjan.jpg" width=100% height=530px>
   </div>
<div class="mySlides fade">
  <img src="fantasy.jpg" width=100% height=530px>
</div>
<div class="mySlides fade">
  <img src="bhoot.jpg" width=100% height=530px>
 </div>
<div class="mySlides fade">
   <img src="quietplace.jpg" width=100% height=530px>
  </div>
<div class="mySlides fade">
   <img src="jamesbond.jpg" width=100% height=530px>
  </div>
<div class="mySlides fade">
   <img src="ff9.jpg" width=100% height=530px>
  </div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span>
</div>

<script>
var slideIndex = 1;
   showSlides(slideIndex);
function plusSlides(n) {
   showSlides(slideIndex += n);
}
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<br><br>
<!-- Now -->
<div id="nowshow" style="background:#3a4660;"><br><br>
<center><font size=34px color=white>Now Showing</font>
<br>
<div id="home-section-2" class="movie-show-container">
<div class="movies-container">

<?php
$sql = "SELECT * FROM movieTable";
            if($result = mysqli_query($link, $sql)){
                if(mysqli_num_rows($result) > 0){
                    for ($i = 0; $i <=11 ; $i++){
                        $row = mysqli_fetch_array($result);
                         echo '<div class="movie-box">';
                        echo '<img src="'. $row['movieImg'] .'" alt=" ">';
                         echo '<div class="movie-info ">';
                        echo '<h3>'. $row['movieTitle'] .'</h3>';
                        echo '<a href="booking.php?id='.$row['movieID'].'"><i class="fas fa-ticket-alt"></i> Book a seat</a>';
                         echo '</div>';
                         echo '</div>';
                    }
                    mysqli_free_result($result);
                } else{
                    echo '<h4 class="no-annot">No Booking to our movies right now</h4>';
                }
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
            ?>
</div></div>
<br><br><br>
</center>
</div>
<br><br><br>

<!-- Coming Soon -->
<div id="soon" style="background:white;"><br><br>
<center><font size=34px>Coming Soon</font>
<br>
<div id="home-section-3" class="movie-show-container">
<div class="movies-container">
<?php
$sql = "SELECT * FROM coming_soon";
            if($result = mysqli_query($link, $sql)){
                if(mysqli_num_rows($result) > 0){
                    for ($i = 0; $i <=11 ; $i++){
                        $row = mysqli_fetch_array($result);
                         echo '<div class="movie-box">';
                        echo '<img src="'. $row['movieImg'] .'" alt=" ">';
                         echo '<div class="movie-info ">';
                         echo '<h3>'. $row['movieName'] .'</h3>';
                         echo '<h3>'. $row['language'] .'</h3>';
                        echo '<a href="#"><i class="fas fa-ticket-alt"></i> More Info</a>';                      
                         echo '</div>';
                         echo '</div>';
                    }
                    mysqli_free_result($result);
                } else{
                    echo '<h4 class="no-annot">No Booking to our movies right now</h4>';
                }
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
            // Close connection
            mysqli_close($link);
            ?>
</div></div>
<br><br><br>
</center>
</div>
<br><br><br>

<!-- Offers -->
<div id="offers" style="background:#3d5467;"><br><br>
<center><font size=34px color=white>Offers And Gift Cards</font>
<br>
<font style="size:10px; color:white;">To enjoy our Offers and Gifts you must be our Member. Login Now!</font>
<br><br>
<table>
<tr>
<td width=40px height=160>  </td>
<td><a href="#"><img src="offer1.jpg" height=270 width=250></a></td>
<td width=40px height=270>  </td>
<td><img src="offer2.jpg" height=270 width=250></td>
<td width=40px height=160>  </td>
<td><img src="offer3.jpg" height=270 width=250></td>
<td width=40px height=160>  </td>
<td><img src="offer4.jpg" height=270 width=250></td>
<td width=40px height=160>  </td>
</tr>
<tr>
<td>  </td>
<td width=250><font color=white ><p>Use the above promotional code and get discount on group ticket over</p></td>
<td>  </td>
<td width=250> <font color=white ><p>Buy the tickets in advance and get a chance to meet the cast</p></td>
<td>  </td>
<td width=250> <font color=white > <p>Watch the movie with your friends and win the Exculsive Poster!</p></td>
<td>  </td>
<td width=250> <font color=white > <p>Buy the membership card and get discounts on movies and food</p></td>
<td>  </td>
</font>
</tr>
<tr height=50px width=350>
<td>  </td>
<td><button class="book"><b> Valid till 13 Apr '20 </b></button></td>
<td>  </td>
<td><button class="book"><b> Valid till 1 Apr '20 </b></button></td>
<td>  </td>
<td><button class="book"><b> Buy Now </b></button></td>
<td>  </td>
<td><button class="book"><b> Buy Now </b></button></td>
<td>  </td>
</tr>
<tr height=30px>  </tr>
</table>
</center>
</div>

<br><br>
<!-- footer -->
<footer id="contact">
<div class="wrapper footer">
<ul>
<li class="main">
   <ul><LI>
   <h2>COMPANY</h2>    
     <li><a href="#">About Us</a></li>
     <li><a href="#">Press</a></li>
    <li><a href="#">Careers</a></li>
     <li><a href="#">Affiliate Program</a></li>
   </ul></li>
<li class="main">
   <ul><LI><h2>CONTACT US</h2>
     <li><a href="#">&#9742; +91 84546 37426</a></li>
     <li><a href="#">&#9993; contact@cinetix.com</a></li>
      <li><a href="#">&#9755; FAQs</a></li>
     </ul>
</li>
<li class="social"><ul><li>
 <h2>CONNECT SOCIALLY </h2>
    
<a href="http://facebook.com" class="fa fa-facebook"></a>
<a href="http://twitter.com" class="fa fa-twitter"></a>
<a href="http://plus.google.com" class="fa fa-google"></a>
<a href="http://instagram.com" class="fa fa-instagram"></a>
<a href="http://pinterest.com" class="fa fa-pinterest"></a>
<a href="http://snapchat.com" class="fa fa-snapchat-ghost"></a>
    </ul>
</li>
</ul>
</div>
<div class="copy">
<p>Copyright &copy; <?php echo date("Y") ?> Cine Tix LLC., All Rights Reserved<br>
   Privacy Policy  | Terms & Conditions |  Purchase Team  | Promo Terms  </p>     
</div>
</footer>
</div>
</body>
</html> 