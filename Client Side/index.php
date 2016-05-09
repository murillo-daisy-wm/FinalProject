<?php
$dbc = new PDO('mysql:host=localhost;dbname=Injection', 'root','root');
?>
<!DOCTYPE html>
    <head>
<link rel="stylesheet" href="Css/style.css">

    <script>
        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            m = checkTime(m);
            document.getElementById('txt').innerHTML =
                h + ":" + m ;
            var t = setTimeout(startTime, 500);
        }
        function checkTime(i) {
            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
            return i;
        }
    </script>


</head>
    <body>
    <body onload="startTime()">

    <div id="txt"></div>



    </body>
</html>