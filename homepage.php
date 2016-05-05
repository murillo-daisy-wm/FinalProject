<?php
$dbc = new PDO('mysql:host=localhost;dbname=Injection', 'root','root');
?>

<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="Css/style.css" type="text/css">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="css/NavBar.js"> </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body style="background-color: lightblue">
<div id="#text">
<!--NavBar-->
<nav>
    <div class="navToggle" id="AboutUs">
        <div class="icon"></div>
    </div>
    <ul>
        <li><a href="homepage.php">Home</a></li>
        <li><a href="Business%20Side/index.php">Doctor</a></li>
        <li><a href="Client%20Side/index.php">Patient</a></li>
        <li><a href="Css/FAQ.php">FAQs</a></li>
    </ul>
</nav>
</div>

<script>
    $(".navToggle").click (function(){
        $(this).toggleClass("open");
        $("nav").toggleClass("open");
    });
</script>
<!--------->

<div id="Text">
<h1 style="color: white"> Injection </h1>
<p style="color: white"> Established in 2016. Made For You. </p>
<br></br>
    <h2 style="color: white"> About Us </h2> <br>
    <h3 style="color: white"> Lorem ipsum dolor sit amet, vitae mauris pellentesque eu, sit vehicula
        scelerisque,vitae id esse varius molestie, diam odio natoque integer
        rutrum id, platea pede leo neque delectus. Sociis aliquam non non,
        volutpat nullam orci, tristique praesent, nunc tellus justo sed, donec
        quisque. Cursus viverra suspendisse vestibulum nostra nibh,justo semper
        irure consequatur nec debitis. Velit non vestibulum mauris wisi diam ac,
        magnis ante odio vestibulum, sed odio quam aliquet curabitur est. Quis
        morbi fringilla,lectus molestie et arcu augue. Eget consequat praesent
        congue pede donec, in augue eget vel mauris non, quam justo vivamus, eu
        in vitae luctus sollicitudin. At in mollis eurhoncus et, viverra integer
        in varius in bibendum morbi, vestibulum nec nulla mi enimfaucibus, sit
        ut non consequat dolor ipsum, vivamus a metus. Eu mattis sit id, semper sit
        placerat massa et, augue aliquam nonummy semper pellentesque, velit nec
        id, luctus quis amet.Id nibh curabitur tellus consectetuer, unde aptent
        feugiat amet sit aliquam eros, non sedporttitor massa imperdiet proin,
        bibendum dignissim egestas dapibus libero nunc pharetra.Morbi dignissim
        turpis dictum, tortor morbi eget nobis duis ornare eros, tincidunt
        praesent sapien quis habitasse, enim semper sodales vestibulum. Dolor
        egestas nibh, metus tempus neca, vestibulum gravida ante, est nunc mus
        id sed pharetra, nec fringilla pretium. Amet velproin, congue convallis
        laoreet a mollis euismod, tincidunt sollicitudin, ut euismod platea,
        vel bibendum diam praesent orci wisi. </h3>

</div>

<!--Testimonials-->
<div class="container">
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div id="Constrict">
        <div class="carousel-inner" role="listbox">

            <div class="item">
                <img src="img_chania2.jpg" alt="Chania" width="460" height="345">
                <div class="carousel-caption">
                    <h3>Chania</h3>
                    <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                </div>
            </div>

            <div class="item">
                <img src="img_flower.jpg" alt="Flower" width="460" height="345">
                <div class="carousel-caption">
                    <h3>Flowers</h3>
                    <p>Beatiful flowers in Kolymbari, Crete.</p>
                </div>
            </div>

            <div class="item">
                <img src="img_flower2.jpg" alt="Flower" width="460" height="345">
                <div class="carousel-caption">
                    <h3>Flowers</h3>
                    <p>Beatiful flowers in Kolymbari, Crete.</p>
                </div>
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
</div>
<!------------>

<center>
    <h2 style="color: white"> Contact Us  </h2>
    <h2 style="color: white"> Email: Injection@gmail.com </h2>
    <h2 style="color: white"> Phone #: 555-555-5555 </h2>
</center>
</div>
</body>
</html>