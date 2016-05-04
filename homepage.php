<?php
$dbc = new PDO('mysql:host=localhost;dbname=Injection', 'root','root');
?>

<!DOCTYPE html>


  <head>

    <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="Css/style.css" type="text/css">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="css/NavBar.js"> </script>

</head>

    <body>
<!--NavBar-->
    <nav>
    <div class="navToggle">
        <div class="icon"></div>
    </div>
    <ul>
        <li><a href="homepage.php">Home</a></li>
        <li><a href="Business%20Side/index.php">Doctor</a></li>
        <li><a href="Client%20Side/index.php">Patient</a></li>
        <li><a href="Css/FAQ.php">FAQs</a></li>
    </ul>
    </nav>

<script>
    $(".navToggle").click (function(){
        $(this).toggleClass("open");
        $("nav").toggleClass("open");
    });
</script>
<!--------->
<h1 style="align-content: center"> Injection </h1>
<p> Established in 2016. Made For You. </p>
<br></br>
<div id="#AboutUs">
<h2> About Us </h2> <br>
<h3> Lorem ipsum dolor sit amet, vitae mauris pellentesque eu, sit vehicula
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

            <div id="contactUs">
            <center>
            <h2 style="color: white"> Contact Us </h2>
            <h2 style="color: white"> Email: Injection@gmail.com </h2>
            <h2 style="color: white"> Phone #: 555-555-5555 </h2>
            </center>
            </div>
    </body>
</html>