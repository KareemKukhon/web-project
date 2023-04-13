
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="244045494_4444413118973348_6341370727680401580_n.png">
    <title>Palestine Store</title>
</head>

<body onload="slider()">
<header id="main">
    <div class="banner">
        <div class="slider">
            <img src="shop-01.jpg" id="slide">
        </div>
    <nav>
        <div class="logo">
            <h1>Palestine Store</h1>
        </div>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#service">Service</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="signup-user.html">Sign Up</a></li>
        </ul>
        <box-icon name='menu' color="whitesmoke" size="lg" id="menu"></box-icon>
    </nav>
    <div class="header-content">
        <h1>Welcome to Palestine Store</h1>
        <p>Join us to make your life easy, here you can buy or sale anything you want</p>
        <form>
            <input type="email" placeholder="Enter your Email">
            <input type="text" placeholder="Enter your Password">
            <input type="submit" value="LogIn">
        </form>

    </div>
    </div>
    <script>
        var slide=document.getElementById("slide");
        var images = ["shop-01.jpg",
            "mobile_version_ownastore.jpg",
            "581183_81_61636_ioxgCosqp.jpg",
            "brand-1.jpg",
            "shop-home-message-wooden-dices-credit-card-small-cart-clear-background-online-shopping-hom-concept-181245381.jpg"];
        var len = images.length;
        var i=0;
        function slider(){
            if(i > len-1){
                i=0;
            }
            slide.src=images[i]
            i++;
            setTimeout('slider()',3000);
        }
    </script>
</header>

<section class="about2" id="about">
    <div class="row">
        <div class="about2-left">
            <h2>What we can do for you</h2>
            <h1>About Us</h1>
           <p> What is Palestine Store?<br> Its a website that help in shopping, here you can join us and buy anything you want from your home
            we will send it to you very fast.<br>
            Are you a store owner? here you can view your store's merchandise.</p>
        </div>
        <div class="about2-right">
            <div class="row">
                <div class="card">
                    <div class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
                    <h2>Buyer </h2>
                </div>
                <div class="card">
                    <div class="icon"><i class="fa fa-home" aria-hidden="true"></i></div>
                    <h2>Owner</h2>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <div class="icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                    <h2>Delivery</h2>
                </div>
                <div class="card">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                    <h2>Contact</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- process -->
<section class="process" id="service">
    <div class="row">
        <h1>Service</h1>
    </div>
    <div class="row">
        <div class="process-content">
            <div class="progress-bar">
                <div class="c1"></div>
                <div class="c2"></div>
                <div class="c3"></div>
            </div>
            <div class="row">
                <div class="box1">
                    <h2>Owner</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, iure saepe. Ducimus quae tempore enim alias, esse rem assumenda impedit!</p>
                </div>
                <div class="box2">
                    <h2>Buyer</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, iure saepe. Ducimus quae tempore enim alias, esse rem assumenda impedit!</p>
                </div>
                <div class="box3">
                    <h2>Delivery</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, iure saepe. Ducimus quae tempore enim alias, esse rem assumenda impedit!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<div class="cont">
<section class="contact" id="contact">
    <div class="cont2">
    <div class="row">
        <h1>Contact Us</h1>
    </div>
    <div class="row">
        <form action="" method="post">
            <input type="text" placeholder="Enter your name" name="username">
            <input type="email" placeholder="Enter your email" name="email">
            <textarea placeholder="Enter your message" name="message"></textarea>
            <input type="submit" value="Send" name="send">
        </form>
    </div>
    </div>
</section></div>

<!-- Footer -->
<footer>
        <div class="content2">
            <h2 >Contact Us</h2>
            <p>If you have any questions or inquiries, you can contact us through one of these interfaces</p>
        </div>
        <div class="contact-continer">
            <div class="contact-box">
                <div class="boxinfo">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="contacttext">
                        <h3>Address</h3>
                        <p>contry,num region<br>city,street </p>
                    </div>
                </div>
                <div class="boxinfo">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                    <div class="contacttext">
                        <h3>Email</h3>
                        <p>labus1249@gmail.com </p>
                    </div>
                </div>
                <div class="boxinfo">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="contacttext">
                        <h3>Phone</h3>
                        <p>+972-568760266</p>
                    </div>
                </div>
            </div>
        </div>
</footer>

<script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
<script src="app.js"></script>

</body>

</html>