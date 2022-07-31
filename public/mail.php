<?php

$name = $_POST['name']
$email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']

$mailheader = "From: ".$name."<".$email.">\r\n"

$recipient = "devtesting3541@gmail.com";

mail($recipient, $subject, $message, $mailheader)
or die("Error! Try again idiot");

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
    <div class="grid md:grid-cols-4"> <!-- content wrapper -->

        <div class=" md:col-span-1 md:flex md:justify-end">
            <nav class="text-right">
                <div class="flex justify-between items-center">
                    <h1 class="uppercase font-bold p-4 font-fromGoogle text-2xl">
                        <a href="/" class="hover:text-gray-400">Windy Recipes</a>
                    </h1>
                    <div class="px-4 cursor-pointer md:hidden" id="burger">
                        <svg class="w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    </div>
                </div>
                <!-- START UNORDERED LIST-->
                <ul class="text-sm mt-6 hidden md:block" id="menu">
                    <li class="font-bold font-sans py-1">
                        <a href="index.html" class="px-4 flex justify-end border-r-4 border-red-400">
                            <span>Home</span>
                            <svg class="w-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        </a>
                    </li>
                    <li class="py-1">
                        <a href="about.html" class="px-4 flex justify-end border-r-4 border-black">
                            <span>About</span>
                            <svg class="w-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </a>
                    </li>
                    <li class="py-1">
                        <a href="contact.html" class="px-4 flex justify-end border-r-4 border-black">
                            <span>Contact</span>
                            <svg class="w-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div><!--end navigation 
            Raslak the Damned, Arch-Revenant of the Endless Abyss
         -->

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
