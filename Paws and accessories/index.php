<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/logo" href="./assets/logo.png" />
    <title>Paws and accessories shop</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./index.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo">
            <img src="./assets/logo.png" alt="">
        </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#menu">Accessories</a>
            <a href="#products">products</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
            <a href="#blogs">blogs</a>
        </nav>

        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>

        <div class="cart-items-container">
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <div class="cart">
                    <h2>Shopping Cart</h2>
                    <div id="cart-items"></div>
                    <div id="total">Total: ₱0.00</div>
                    <button class="btn" id="checkout-btn" onclick="checkout()">Checkout Now</button>
                </div>
            </div>
        </div>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>Hi! <br>
                Welcome to our Paws and accessories shop</h3>
            <p>
            </p>
            <a href="#menu" class="btn">Order now</a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="./assets/Speacial.webp" alt="">
            </div>

            <div class="content">
                <h3>what makes our paws shop special?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus qui ea ullam, enim tempora
                    ipsum fuga alias quae ratione a officiis id temporibus autem? Quod nemo facilis cupiditate. Ex, vel?
                </p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit amet enim quod veritatis, nihil
                    voluptas culpa! Neque consectetur obcaecati sapiente?</p>
                <a href="#" class="btn">learn more</a>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- menu section starts  -->

    <section class="menu" id="menu">

        <h1 class="heading"> our <span>Accessories</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="./assets/1.jpg" alt="">
                <h3>nice and good</h3>
                <div class="price">Price: ₱700.00 <span>1000</span></div>
                <button class="btn" onclick="addToCart('Product 1', 700.00, './assets/1.jpg')">Add to Cart</button>
            </div>
            <div class="box">
                <img src="./assets/2.jpg" alt="">
                <h3>nice and good</h3>
                <div class="price">Price: ₱700.00 <span>1000</span></div>
                <button class="btn" onclick="addToCart('Product 2', 700.00, './assets/2.jpg')">Add to Cart</button>
            </div>
            <div class="box">
                <img src="./assets/3.jpg" alt="">
                <h3>nice and good</h3>
                <div class="price">Price: ₱700.00 <span>1000</span></div>
                <button class="btn" onclick="addToCart('Product 3', 700.00, './assets/3.jpg')">Add to Cart</button>
            </div>
            <div class="box">
                <img src="./assets/4.jpg" alt="">
                <h3>nice and good</h3>
                <div class="price">Price: ₱700.00 <span>1000</span></div>
                <button class="btn" onclick="addToCart('Product 4', 700.00, './assets/4.jpg')">Add to Cart</button>
            </div>
            <div class="box">
                <img src="./assets/5.jpg" alt="">
                <h3>nice and good</h3>
                <div class="price">Price: ₱700.00 <span>1000</span></div>
                <button class="btn" onclick="addToCart('Product 5', 700.00, './assets/5.jpg')">Add to Cart</button>
            </div>
            <div class="box">
                <img src="./assets/6.webp" alt="">
                <h3>nice and good</h3>
                <div class="price">Price: ₱700.00 <span>1000</span></div>
                <button class="btn" onclick="addToCart('Product 6', 700.00, './assets/6.webp')">Add to Cart</button>
            </div>
        </div>

    </section>

    <!-- menu section ends -->

    <section class="products" id="products">

        <h1 class="heading"> our <span>products</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="icons">
                    <a onclick="addToCart('Product 7', 700.00, './assets/product_1.jpg')" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="./assets/product_1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Shampoo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">Price: ₱700.00 <span>₱1000</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a onclick="addToCart('Product 8', 700.00, './assets/product_2.webp')" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="./assets/product_2.webp" alt="">
                </div>
                <div class="content">
                    <h3>Shampoo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">Price: ₱700.00 <span>₱1000</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a onclick="addToCart('Product 9', 700.00, './assets/product_3.jpg')" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="./assets/product_3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Shampoo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">Price: ₱700.00 <span>₱1000</span></div>
                </div>
            </div>
            <div id="total-amount"></div>
        </div>

    </section>

    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading"> customer's <span>review</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="./assets/quote-img.png" alt="" class="quote">
                <p>Nice kaayo ilang mga item dohh kyutt kaayo.</p>
                <img src="./assets/robert.jpg" class="user" alt="">
                <h3>Divine Kritz Reyes Absin</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="./assets/quote-img.png" alt="" class="quote">
                <p>Kyutttt ang ilang mga accessories for pets</p>
                <img src="./assets/ramos.jpg" class="user" alt="">
                <h3>Alchen Ramos</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="./assets/quote-img.png" alt="" class="quote">
                <p>Wow this website is so nice and wonderful items</p>
                <img src="./assets/ancero.jpg" class="user" alt="">
                <h3>Roselyn Ancero</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>

        <div class="row">

            <iframe class="map" src="./assets/map.PNG" allowfullscreen="" loading="lazy"></iframe>

            <form action="">
                <h3>get in touch</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="name">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" placeholder="number">
                </div>
                <input type="submit" value="contact now" class="btn">
            </form>

        </div>

    </section>

    <!-- contact section ends -->

    <!-- blogs section starts  -->

    <section class="blogs" id="blogs">

        <h1 class="heading"> our <span>blogs</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="./assets/blogs_1.webp" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">tasty and refreshing coffee</a>
                    <span>by admin / 21st may, 2021</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="./assets/blogs_2.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">tasty and refreshing coffee</a>
                    <span>by admin / 21st may, 2021</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="./assets/blogs_3.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">tasty and refreshing coffee</a>
                    <span>by admin / 21st may, 2021</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

        </div>

    </section>

    <!-- blogs section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="links">
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">menu</a>
            <a href="#">products</a>
            <a href="#">review</a>
            <a href="#">contact</a>
            <a href="#">blogs</a>
        </div>

        <div class="credit">created by <span>Cielo gwapo</span> | all rights reserved</div>

    </section>

    <!-- footer section ends -->

    <!-- custom js file link  -->
    <script src="./js/index.js"></script>
    <script src="./js/addcart.js"></script>
</body>

</html>