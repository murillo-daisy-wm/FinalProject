<?php
$dbc = new PDO('mysql:host=localhost;dbname=Injection', 'root','root');
?>
<!DOCTYPE html>
    <head>
    <link rel="stylesheet" href="Css/style.css">
</head>
    <body >
<input type="text">
<input type="button" value="submit">

    <script>
        var userInput = prompt('please enter a glucose level');
        if(userInput > 100)
        {
            alert('Your glucose level is high, please check our recommendations to normalize it');
        }
        else if(userInput < 100)
        {
            alert('Your glucose level is too low');
        }
        else if(userInput == 100)
        {
            alert('Your glucose level is normalized');
        }
        else{
            alert('Please enter a value');
        }
    </script>

    <script>

        if (value<100){
            prompt(' Your glucose level is too low');
        } else if(value>150){
            prompt('Your glucose level is too high, please see our reccomendations to normalize your level');
        }else{
            prompt(' ');
        }

    </script>



    </body>
    </html>
