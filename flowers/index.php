<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Flowers Store</title>
    <?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
}
?>

</head>
<body>
<header>
    <div class="test"></div>
    <div class="header">
        <div class="logo">
            <a href="#">Flowers <span>.</span></a>
        </div>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#products">products</a>
            <a href="#contact">Contact</a>
        </nav>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-user"></a>
        </div>
    </div>
</header>
<div id="home" class="home">
        <div class="home-content">
            <h1>Fresh Flowers</h1>
            <h2>Natural & Beautiful Flowers</h2>
            <p>
            Lorem ipsum dolor sit amet, consectetur poris non. Unde, ab? Nemo provident enim explicabo, amet unde, ratione fuga cum vel excepturi asperiores sunt.
            </p>
            <a href="#" class="btn"> Shop Now</a>
         </div>
</div>
<div id="about" class="about">
        <div class="about-title">
            <h2><span>About</span> Us</h2>
        </div>
        <div class="about-infos">
            <video loop muted autoplay>
                <source src="WhatsApp Video 2024-04-03 at 10.55.46 PM.mp4" type="video/mp4">
            </video>
            <div class="description">
                <br>
                <h4>
                    Why Choose Us
                </h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit. Obcaecati, adipisci quia. 
                    Quo architecto porro aspernatur rerum debitis 
                    doloribus, est consequuntur quia pariatur, 
                    reprehenderit atque ipsam tenetur unde molestiae 
                    incidunt ullam.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt nostrum molestiae similique nemo tenetur quod excepturi, itaque voluptas ea enim.
                </p>
                <a href="#" class="btn"> Learn More</a>
            </div>
        </div>
</div>
<section id="products" class="products">
    <div class="products-title">
        <h2> Latest<span> Products</span></h2>
    </div>
    <div class="products-menu ">

        <div class="card " style="width: 18rem;">
            <img src="img1.jpg" class="card-img-top" alt="..." height="290px">
            <div class="card-body">
                <div class="card-title-div">
                    <h5 class="card-title">Tulips</h5>
                    <span>50.00$
                    </span>
                  </div>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn">Buy It Now</a>
            </div>
          </div>

          <div class="card " style="width: 18rem;">
            <img src="tulips.jpg" class="card-img-top" alt="..." height="290px">
            <div class="card-body">
                <div class="card-title-div">
                    <h5 class="card-title">Tulips</h5>
                    <span>50.00$
                    </span>
                    <span class="old-price">99.00$</span>
                  </div>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn">Buy It Now</a>
            </div>
          </div>
          
          <div class="card " style="width: 18rem;">
            <img src="img.jpg" class="card-img-top" alt="..." height="290px">
            <div class="card-body">
              <div class="card-title-div">
                <h5 class="card-title">Tulips</h5>
                <span>50.00$
                </span>
              </div>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn">Buy It Now</a>
            </div>
          </div>
          <!-- test -->
          <div class="card " style="width: 18rem;">
            <img src="img2.webp" class="card-img-top" alt="..." height="290px">
            <div class="card-body">
                <div class="card-title-div">
                    <h5 class="card-title">Tulips</h5>
                    <span>50.00$
                    </span>
                  </div>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn">Buy It Now</a>
            </div>
          </div>

          <div class="card " style="width: 18rem;">
            <img src="img3.webp" class="card-img-top" alt="..." height="290px">
            <div class="card-body">
                <div class="card-title-div">
                    <h5 class="card-title">Tulips</h5>
                    <span>50.00$
                    </span>
                    <span class="old-price">99.00$</span>
                  </div>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn">Buy It Now</a>
            </div>
          </div>
          
          <div class="card " style="width: 18rem;">
            <img src="img4.webp" class="card-img-top" alt="..." height="290px">
            <div class="card-body">
              <div class="card-title-div">
                <h5 class="card-title">Tulips</h5>
                <span>50.00$
                </span>
              </div>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn">Buy It Now</a>
            </div>
          </div>

    </div>
</section>
<section class="shop-infos">
    <div class="details">
        <i class="fas fa-shipping-fast"></i>
        <div>
            <h3>Free Shipping</h3>
            <span>On all orders</span>
        </div>
    </div>  
    <div class="details">
        <i class="fas fa-undo-alt"></i>
        <div>
            <h3>10 Days Returns</h3>
            <span>Moneyback Guarantee</span>
        </div>
    </div>
    <div class="details">
        <i class="fas fa-gift"></i>
        <div>
            <h3>Offer & Gift</h3>
            <span>On all orders</span>
        </div>
    </div> 
    <div class="details">
        <i class="fas fa-lock"></i>
        <div>
            <h3>Secure Payment</h3>
            <span>Protected by paypal</span>
        </div>
    </div>     
</section>
<section id="contact">
    <div  class="contact-us">
        <div class="contact-content1">
            <h3>CONTACT US</h3>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum distinctio ex repellendus facere omnis quo reprehenderit ipsam sed doloribus inventore. Nam veritatis autem repellat, provident aperiam atque in qui aliquid!</P>
        </div>
    <div class="contact-content2">
        <div class="contact-infos">
            <div class="contact-icon">
                <i class="fas fa-phone"></i>
                <a href="#">+212 654879148</a>
            </div>
            <div class="contact-icon">
                <i class="fas fa-envelope"></i>
                <a href="#">Sihamkalach3@gmail.com</a>
            </div>
            <div class="contact-icon">
                <i class="fas fa-map-marker-alt"></i>
                <a href="#">FlowersForYOU ,Avenue Abdelkrim Khattabi, 40000,Nador </a>
            </div>
        </div>
        <contact-form>
           <fieldset>
            <legend>Send Message</legend>
            <form>
            <label for="fullname">Full Name :</label> 
            <input type="text" placeholder="Enter Your Full Name" id="fullname" name="fullname" required>
            <hr>
            <label for="email">Email :</label>
            <input type="email" placeholder="Enter Your Email" id="email" name="email" required>
            <hr>
            <label for="message">Message :</label> 
            <input type="text" placeholder="Message" id="message" name="message" required>
            <br><br>
            <input type="submit" value="Send">
        </form>
           </fieldset>
        </contact-form>
    </div>
</div>
</section>
</body>
</html>