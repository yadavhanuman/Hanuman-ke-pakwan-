


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- required css -->
    <link rel="stylesheet" href="sidepanel.css">
    <link rel="stylesheet" href="get.css">
    <link rel="stylesheet" href="drink.css">
    <link rel="stylesheet" href="btn.css">
    <link rel="stylesheet" href="chefs.css">
    <link rel="stylesheet" href="our story.css">
    <link rel="stylesheet" href="footer.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS 5-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{background-color: black;}
     .container{
            /* border: 2px solid red; */
            display: flex;
            width: 100%;
            height: 40px;
            
        }  
        .container::before{
            content: "";
            position: absolute;left: 0;
            width: 100%;
            height: 40px;
            background-color: rgba(22, 21, 21, 0.33);
z-index: 0;
opacity: 0.7;
        }
        .topbar-item{
           
            /* border: 1px solid rgb(102, 58, 4); */
            margin: 0px 20px 0px 0px;
            padding-top: 0px;
            position: relative;
         bottom: 21px;
            right: -70px;
            color: rgba(240, 248, 255, 0.677);
        }
        .icon{
            position: relative;
            right: 19px;
            top: 23px;
        }
        .item-1{
            position: relative;
        right: 170px;
        top:-20px;
       

        }
        .item-3{
            position: relative;
            left: 392px;
            top:-20px;
            color: rgb(126, 105, 245);

        }
        .item-4{
            position: relative;
            left: 480px;
            top:-20px;
            color: rgb(174, 135, 241);
        }
        .separator{
            border: 2px solid red;
            width: 10px;
            height: 10px;
            transform: rotate(45deg);
        }
        .move-1{
            position: relative;
            top: 12px;
            right: 72px;
        }
        .move-2{
            position: relative;
            top: 12px;
            left: 420px;
        }
.navbar{
    /* border: 2px solid red; */
    height: 60px;
    width: 100%;
    position: relative;
    
}
.navbar::before{
    content: "";
    position: absolute;
    left: 0px;
    height: 100%;
    width: 100%;
    /* background-color: rgb(13, 47, 47); */
    background: linear-gradient(60deg,#e62565,#080000 15%);
    opacity: 0.6;
    z-index: -1;
}

.nav-logo{
  position: relative;
  top: 225px;
  filter: drop-shadow(10px 8px 6px rgb(9, 9, 9));
  z-index: -1;
}

        .nav-total{
            display: flex;
        
          margin-left: 20px;
        }
        .nav-li{
            display: flex;
            text-decoration: none;
            list-style: none;
            margin-bottom: 520px;
           margin-left: 200px;
           position: relative;top:210px;
        
        }
        .navbar-item{
            padding: 0px 10px;
            z-index: -1;
            
        }
        .tophead{
         position: relative;
         bottom: 100px;
        }
        .tophead h1{
          position: relative;
         bottom: 200px;
         font-size: 50px;
         color: #080000;
        }
        .tophead h6{
          position: relative;
         bottom: 300px;
        }
        .tophead p{
          position: relative;
         bottom: 100px;
        }
        .book{
          position: relative;left: 570px;
          top: 40px;
            height: 30px;
            width: 120px;
            border-radius: 5px;
            color: azure;
            background-color: rgb(16, 16, 1);
            box-shadow: 2px 2px 2px 3px orange;
        }
   
        .hover-underline{
    position: relative;
    top: 40px;
    left: 180px;
    max-width: max-content;
    color: rgb(248, 246, 246);
    font-weight: bolder;
   
    text-decoration: none;
}
.hover-underline:hover{
    color: rgb(175, 255, 3);
    text-decoration: dashed;
}
        .hover-underline::after{
    content: "";
    position: absolute;
    left: 0;
    top:20px;
    color: aliceblue;
    width: 100%;
    height: 5px;
    border-block: 1px solid rgb(252, 248, 252);
    transform:scaleX(0.2);
    opacity:0;
    transition: transform 0.3s ease-in;
    
}
.hover-underline:is(:hover,:focus-visible)::after{
    transform:scaleX(1);
    opacity: 1;
}
#signup{
  background-color: #080000;
  position: relative;left: 470px;
  color: white;
  border: 1px solid whitesmoke;
  border-radius: 10px;
  margin: 10px;
  font-size: 12px;

}
.feedback{
  border-radius:10px;
  border:2px solid white;

}
.feedback:hover{
  color:white;
  background-color:black;

}
.feedback a{
  text-decoration:none;
  color:black;
}
.carousel{
  z-index: -1;
}
    </style>
  </head>
  <body>
      
<!-- sidepanell
  
  <div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>
<button class="openbtn" onclick="openNav()">☰ </button> -->
    <div class="container">
        <address class="topbar-item item-1">
            <div class="icon">
                <i class="bi bi-geo-alt-fill"></i>
            </div>
            
            <span class="span"></span>
        
           Old Katra,Near carpentary Chauraha, Allahabad
       
        </address>
       
        <div class="separator move-1">
        </div>


     <div class="topbar-item item-2">
        <div class="icon">
            <i class="bi bi-alarm"></i></div>
       
        <span class="span">Daily : 8.00 am to 10.00 pm </span>
    
      </div>


      <a href="tel:+12314233423" class="topbar-item item-3">
      <div class="icon">     <i class="bi bi-telephone"></i></div>
     <span class="span">+1 231 423 3423</span>
    
    </a>

    <div class="separator move-2"></div>


    <a href="mailto:+12314233423" class="topbar-item item-4">
    <div class="icon">
        <i class="bi bi-bookmark-heart"></i></div>
    
    <span class="span">booking@tiffin</span>

</a>
    </div>
  



    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <!-- ----
      NAV LOGO--- -->
      <div class="nav-total">
          <div class="nav-logo">
              <img src="images/logo.png" width="90" height="90" alt="">
          </div>
  
      <!-- -----
      NAV LIST--- -->
          <ul class="nav-li">
              <li class="navbar-item">
                  <a href="#home" class="navbar-link hover-underline active">
                      <span class="span">Home</span>
                  </a>
              </li>
              <li class="navbar-item">
                  <a href="Menu.html" class="navbar-link hover-underline active">
  
                      <span class="span">Menu</span>
                  </a>
              </li>
              <li class="navbar-item">
                  <a href="About Us.html" class="navbar-link hover-underline active">
                      <span class="span">About Us</span>
                  </a>
              </li>
              <li class="navbar-item">
                  <a href="#Contact Us" class="navbar-link hover-underline active">
                      <span class="span">Contact Us</span>
                  </a>
              </li>
              <li class="navbar-item">
                  <a href="#Our Chef" class="navbar-link hover-underline active">
  
                      <span class="span">Our Chef</span>
                  </a>
              </li>
          </ul>
          <!-- ----
          NAV BUTTON--- -->
          <button class="book">Book Tiffin</button>
      </div>
     
     <a href="emailveri/signup.php"><button id="signup">Sign Up</button></a>
     <a href="emailveri/login.php"><button id="signup">Log In</button></a>
  </nav>
  <a href=""><button id="signup" class="profile"><?php echo $_SESSION['profile'];   ?></button></a>

   <!-- carousel -->
    
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        
      <div class="carousel-item active">
        <img class="d-block imageHover" src="z.jpg" alt="First slide" style="width: 100%; height: 47rem; opacity: 0.8;">
        <div class="carousel-caption d-none d-md-block">
         
        <div class="tophead">
          <!-- <img src="images/bg1.png" alt=""> -->
            <!-- <h6>Where Tiffin Perfection begins</h6> -->
            <h1 style="">Enjoy Homemade Goodness With Hanuman Ke Pakwan Tiffin</h1>
            <p class="text-dark">A Taste of Home, Deliverd to Your Doorstep</p>
            <button class="viewmenu"><a href="Menu.html">VIEW OUR MENU</a></button>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-80" src="a.jpg" alt="Second slide" style="width: 100%; height: 47rem; ">
        <div class="carousel-caption d-none d-md-block">
         
        <div class="tophead">
            <h6 class="topheading">From Sunrise to Sunset</h6>
            <h1 class="topbigheading">A Flavourful Journey with Hanuman Ke Pakwan Tiffin Service</h1>
            <p>Three Times the Delights-Crafting Exceptional Meals Throughout the day</p>
            <button class="viewmenu"><a href="Menu.html">VIEW OUR MENU</a></button>
            </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-0" src="c.jpg" alt="Third slide" style="width: 100%; height: 47rem;">
        <div class="carousel-caption d-none d-md-block">
         
        <div class="tophead">
            <!-- <h6>DRINKS MADE TO DELIGHT</h6> -->
            <h1 class="text-light">Enjoy Every Sip With Hanuman Ke Pakwan</h1>
            <p>A Celebration in Every Glass, Toast to Memorable Moments with our Specialty Drinks</p>
            <button class="viewmenu"><a href="Menu.html">VIEW OUR MENU</a></button>
            </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


<!-- --------
    OUR STORY -->
    <div class="OurStory">
        <h2 class="OurStoryhead">Our Story</h2>
        <div class="image-container">
          <div class="image-item">
            <img src="1.jpg" alt="Image 1" height="200" width="200">
            <div class="image-overlay">
              <span>Image 1</span>
            </div>
          </div>
          <div class="image-item">
            <img src="2.jpg" alt="Image 2" height="200" width="200">
            <div class="image-overlay">
              <span>Image 2</span>
            </div>
          </div>
          <div class="image-item">
            <img src="2.jpg" alt="Image 2" height="200" width="200">
            <div class="image-overlay">
              <span>Image 2</span>
            </div>
          </div>
      
        </div>
        <p class="StoryPara">At Hanuman Ke Pakwan, we believe in the power of homemade meals and the joy they bring. It all started with a passion for preserving the authentic flavors of Indian cuisine and sharing it with others.</p>
        <p class="StoryPara">Our journey began in a humble kitchen, where our skilled chefs carefully crafted each dish, using traditional recipes passed down through generations. With a commitment to quality and taste, our homemade tiffin service was born.</p>
        <p class="StoryPara">Today, we take pride in delivering nourishing and flavorful meals to our customers' doorsteps. We source the freshest ingredients, infuse every dish with love, and strive to create an experience that brings the comfort of home to each bite.</p>
        <p class="StoryPara">Come, join us on this culinary adventure as we continue to serve you the essence of homemade goodness, one tiffin at a time.</p>
      </div> 


<!-- drinks -->
<div id="drink-slide">
    <div id="drink1"><img src="images/drink1.png" alt="Drink 1"></div>
    <p id="drinkp">Refreshing drinks for a perfect meal. Our selection includes a variety of flavors, from fruit-infused waters to homemade lemonades, to complement your tiffin dishes and keep you hydrated throughout the day.</p>
   <div id="drink2"><img src="images/drink2.png" alt="Drink 2"></div> 

   <button class="drink-button">Order Drink</button>
  </div>
  <!-- ----

        <!-
    CHEF'S GALLERY -->
    <h1>Chefs Gallery</h1>

    <div class="chef-container">
      <div class="chef-card">
        <img src="1.jpg" alt="Chef 1">
        <div class="bio-overlay">
          <p>Chef 1</p>
          <div class="description">
            <p>Experience: 10 years</p>
            <p>Specialty: Italian Cuisine</p>
          </div>
        </div>
      </div>
      <div class="chef-card">
        <img src="2.jpg" alt="Chef 2">
        <div class="bio-overlay">
          <p>Chef 2</p>
          <div class="description">
            <p>Experience: 8 years</p>
            <p>Specialty: French Cuisine</p>
          </div>
        </div>
      </div>
      <div class="chef-card">
        <img src="3.jpg" alt="Chef 2">
        <div class="bio-overlay">
          <p>Chef 2</p>
          <div class="description">
            <p>Experience: 8 years</p>
            <p>Specialty: French Cuisine</p>
          </div>
        </div>
      </div>
      <div class="chef-card">
        <img src="4.jpg" alt="Chef 2">
        <div class="bio-overlay">
          <p>Chef 2</p>
          <div class="description">
            <p>Experience: 8 years</p>
            <p>Specialty: French Cuisine</p>
          </div>
        </div>
      </div>
      <div class="chef-card">
        <img src="5.jpg" alt="Chef 2">
        <div class="bio-overlay">
          <p>Chef 2</p>
          <div class="description">
            <p>Experience: 8 years</p>
            <p>Specialty: French Cuisine</p>
          </div>
        </div>
      </div>
    </div>


    <footer>
        <div class="footer-content">
          <div class="footer-section">
            <h3>About Us</h3>
            <p>At Hanuman Ke Pakwan, we are passionate about delivering delicious and nutritious meals right to your doorstep. Our team of experienced chefs prepares a variety of mouthwatering dishes using fresh ingredients.</p>
          </div>
          <div class="footer-section">
            <h3>Contact Us</h3>
            <p>Email: info@hanumankepakwan.com</p>
            <p>Phone: 123-456-7890</p>
            <p>Address: 123 ABC Street, City, State, ZIP</p>
          </div>
          <div class="footer-section">
            <h3>Follow Us</h3>
            <ul class="social-media-links">
              <li><a href="#"><i class="bi bi-facebook"></i></a></li>
              <li><a href="#"><i class="bi bi-twitter"></i></a></li>
              <li><a href="#"><i class="bi bi-instagram"></i></a></li>
              <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="footer-section">
            <h3>Customer Reviews</h3>
            <ul class="customer-reviews">
              <li>"The food from Hanuman Ke Pakwan is absolutely delicious! Highly recommended!" - Piyush Sharma</li>
              <li>"Great service and amazing variety of dishes. Always satisfied with my orders." - Atul Srivastava</li>
            </ul>

            <a href="emailveri/feedback.php"> <button class="feedback">Your Feedback</button></a>
          </div>
          <?php
// include 'emailveri/table.php';

?>
          <div class="footer-section">
            <h3>Join Our Newsletter</h3>
            <p>Subscribe to our newsletter to receive updates on our latest offers, new menu items, and more!</p>
            <form class="newsletter-form">
              <input type="email" name="email" placeholder="Enter your email" required>
              <button type="submit">Subscribe</button>
            </form>
          </div>
        </div>
        <div class="footer-bottom">
          <p>&copy; 2023 Hanuman Ke Pakwan. All rights reserved.</p>
        </div>
      </footer>
      
    <!-- Optional JavaScript -->
    <script>
        var drink=document.getElementById('drink-slide')
var drinkp=document.getElementById('drinkp')



drink.addEventListener('mouseenter',()=>{
drinkp.style.color='white';
})
drink.addEventListener('mouseout',()=>{
drinkp.style.color='black';
})
drinkp.addEventListener('mouseenter',()=>{
  drinkp.style.color='white';
})
drinkp.addEventListener('mouseleave',()=>{
  drinkp.style.color='white';
})


// // sidepanel script
// function openNav() {
//   document.getElementById("mySidepanel").style.width = "250px";
// }

// function closeNav() {
//   document.getElementById("mySidepanel").style.width = "0";
// }

    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>