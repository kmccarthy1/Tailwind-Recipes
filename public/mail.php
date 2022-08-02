<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From: ".$name."<".$email.">\r\n";

$recipient = "devtesting3541@gmail.com";

mail($recipient, $subject, $message, $mailheader)
or die("Error!");

echo '
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Windy Contact</title>
            <link rel="stylesheet" href="styles.css">
        </head>
        <body class="text-black">
        <!-- 
            START CONTACT FORM
            md:col-span-3
        -->
        <div class="">
            <div class="container border-red-300 border-2 p-5 m-5">
                <h1 class="">Thank you for your message. I actually received it! 
                </h1>
                <p>
                    However, I propbably will not respond. But everyone loves getting mail, so thanks again!
                    CLick <a href="index.html">here</a> to return to the main page 
                </p>


            </div>



        </div>
            </body>
        </html>
        





';



?>
