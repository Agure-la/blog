
<!DOCTYPE HTML>
<html>
<head>
    <title>Andromir Stone Shop</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/main.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
     <script src="https://ajax.google.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>

</head>
<body>
<!--creating navigation bar-->
<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
    <div class="container">
        <a href="/tutorial/Index.php" class="navbar-brand" id="text">Andromir Stone Shop</a>
        <ul class="nav navbar-nav">
            <!--creating dropdown menu-->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">Menu<span class="caret"></span> </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Shirts</a> </li>
                    <li><a href="#">Pants</a> </li>
                    <li><a href="#">Shoes</a> </li>
                    <li><a href="#">Accessories</a> </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<!--inserting images-->
<div id="background-image">
    <div id="image-1"></div>
    <div id="image-2"></div>
</div>

<!--creating featutred product-->
<div class="col-md-8">
<div class="row">
    <h2 class="text-center">Featured Products</h2>
    <div class="col-md-3">
        <h4>Levis Jeans</h4>
        <img src="images/jean.png" alt="Levis Jeans" id="images"/>
        <p class="list-price text-danger">List Price:<s>Ksh 1000</s></p>
        <p class="price">Our Price: Ksh 750</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="details-1">Details</button>
    </div>

    <!--creating 2nd featutred product-->
    <div class="col-md-3">
        <h4>Boots</h4>
        <img src="images/boot1.jpg" alt="Boots" id="images"/>
        <p class="list-price text-danger">List Price:<s>Ksh 2500</s></p>
        <p class="price">Our Price: Ksh 2000</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="details-2">Details</button>
    </div>

    <!--creating 3rd featutred product-->
    <div class="col-md-3">
        <h4>Football Kits</h4>
        <img src="images/kit1.png" alt="football kits" id="images"/>
        <p class="list-price text-danger">List Price:<s>Ksh 1800</s></p>
        <p class="price">Our Price: Ksh 1500</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="details-3">Details</button>
    </div>

    <!--creating 4th featutred product-->
    <div class="col-md-3">
        <h4>Sneakers</h4>
        <img src="images/sneak.png" alt="Sneakers" id="images"/>
        <p class="list-price text-danger">List Price:<s>Ksh 1200</s></p>
        <p class="price">Our Price: Ksh 800</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="details-4">Details</button>
    </div>

    <!--creating 5th featutred product-->
    <div class="col-md-3">
        <h4>Watch</h4>
        <img src="images/watch.png" alt="Watch" id="images"/>
        <p class="list-price text-danger">List Price:<s>Ksh 1300</s></p>
        <p class="price">Our Price: Ksh 1000</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="details-5">Details</button>
    </div>

    <!--creating 6th featutred product-->
    <div class="col-md-3">
        <h4>Official Shirts</h4>
        <img src="images/shirts.png" alt="Official Shirts" id="images"/>
        <p class="list-price text-danger">List Price:<s>Ksh 1200</s></p>
        <p class="price">Our Price: Ksh 950</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="details-6">Details</button>
    </div>

    <!--creating 7th featutred product-->
    <div class="col-md-3">
        <h4>T-Shirts</h4>
        <img src="images/Tshirts.png" alt="T-Shirts" id="images"/>
        <p class="list-price text-danger">List Price:<s>Ksh 800</s></p>
        <p class="price">Our Price: Ksh 450</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="details-7">Details</button>
    </div>

    <!--creating 8th featutred product-->
    <div class="col-md-3">
        <h4>Caps</h4>
        <img src="images/cap.png" alt="Caps" id="images"/>
        <p class="list-price text-danger">List Price:<s>Ksh 500</s></p>
        <p class="price">Our Price: Ksh 350</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="details-8">Details</button>
    </div>
</div>
    <br/>
    <br/>
    <p>
        Andromir Stores here for you
    </p>
    <footer class="text-center" id="footer">&copy; copyright 2020-2021 Andromir Stone Shop</footer>
</div>

<?php
include 'details-modal-jean.php';
'details-modal-boot1.php';
'details-modal-kit1.php';
'details-modal-sneak.php';
'details-modal-watch.php';
'details-modal-shirts.php';
'details-modal-Tshirts.php';
'details-modal-cap.php';


?>



</body>
</html>
