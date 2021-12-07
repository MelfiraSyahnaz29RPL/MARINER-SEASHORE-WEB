<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEASHORE</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body>
    <div class="header">
        <nav>
            <ul>
                <li><a href="#index">Home</a></li>
                <li><a href="#creatures">Creatures</a></li>
                <li><a href="#About Us">About Us</a></li>
                <li><a href="#Merchandise">Merch</a></li>
            </ul>
        </nav>
<h1>SEASHORE</h1>
<P>OUR OCEAN,AN OCEAN FOR LIFE</P> 

    </div>
    <!-- main course -->
    <section id = "creatures"  class="course">
        <h2>UNDERWATER</h2>
        <h3>Take a look for what's on the ocean. There is a lot of amazing creature and ecosystem.</h3>
    </div>
    <div class="container">
    <div class="box box1">
        <h5>SeaHorse</h5>
        <p>Seahorses are tiny fishes that are named for the shape of their head.</p>
    </div>
<div class="box box2">
    <h5>Sharks</h5>
    <p>Sharks are a group of fish with a complete cartilaginous skeleton and a slender body.</p>
</div>
<div class="box box3">
    <h5>Plants</h5>
    <p>Marine plants and algae provide food and shelter to fish and other marine life.</p>
</div>
<div class="box box4">
    <h5>Microorganisms</h5>
    <p>Marine microbes are tiny organisms that live in marine environments and can only be seen under a microscope.</p>
</div>
<div class="box box5">
    <h5>Coral</h5>
    <p>Corals are marine invertebrates within the class Anthozoa of the phylum Cnidaria. </p>
</div>
<div class="box box6">
    <h5>fishes</h5>
    <p>Fish are aquatic, craniate, gill-bearing animals that lack limbs with digits.</p>
</div>
    </div>
</section>

<div class="exp">

</div>


<!-- MERCHANDISE -->







<!-- foooteeerrr -->
<section id = "About Us"  class="footer"></section>
<div class="footer-dark">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>Company Name</h3>
                    <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                </div>
                <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
            </div>
            <p class="copyright">Company Name © 2018</p>
        </div>
    </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>