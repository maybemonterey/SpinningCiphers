<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Spinning Ciphers</title>
    <link rel="stylesheet" href="../styles/style.css">
    <style>
        .btn{
            margin-left: 10px;
            display: block;
            font-family: "Andale Mono";
            font-size: 17px;
            font-weight: 100;
            border: 2px solid black;
            background-color: #6CD9FF;
            width: 15%;
            text-decoration: none
        }

        .btn:hover{
            background-color: #55d6aa;
            transition: ease-in 250ms;
        }
    </style>
</head>

<!--NAVBAR!--> <?php include "../includes/nav-bar.php" ?>

<!--MAIN FRAMEWORK-->
<h1 class="cipher_title"><u>Welcome to Spinning Ciphers Inc.</u></h1>

<body class="body">

<!--WHAT IS SPINNING CIPHERS-->
<p class="p" style="text-align: justify">Spinning Ciphers is a website made to encode and decode pieces of text. It aims to educate the general public about how and why ciphers are important. The art of cryptography is one that requires extreme skill and patience and not many people are aware of how it works. I hope to be able to bring information of how basic ciphers work to a larger audience. Interested to understand about ciphers? <a href="ciphers.php" style="color: #4E96FF">Learn more</a> here!</p>

<!--<a href="ciphers.php"><button id="debtn" class="btn">Learn More</button></a>-->
<!--<br>-->

<table><tr><td><video autoplay loop controls width="500" height="300" style="margin-left: 20px"><source src="https://ak.picdn.net/shutterstock/videos/28839565/preview/stock-footage--k-animation-security-lock-with-loading-connection-line-for-futuristic-cyber-technology-network.webm">Your browser does not support the video tag.</video></td><td>


<h2 class="cipher_title" style="text-align: left; padding: 10px;">Why we use Ciphers</h2>

<p class="p"style="text-align: justify">In today's world, digital transactions, passwords, and contact information are all sent around the world vitually. In these situations, the general public has <i>no</i> way to check whether someone was eavesdropping their conversation or has stolen their information. The best way a company/website can send information back and forth without any fancy tech, is through encryption.</p>

<p class="p"> The three main reasons why ciphers are used today are:</p>
<ul class="p" style="margin-left: 30px">
    <li>Safety</li>
    <li>Data Integrity Checks</li>
    <li>Authentication</li>
</ul>

        </td></tr></table>


<p class="p" style="text-align: justify">While ciphers are pretty fun to play around with, if you make a difficult one to crack, it is really hard get the message you're sending. Transactions, credet card numbers, social security numbers, and many other pieces of valuable information travel this way. Ciphers also allow those cool hooded hackers who sip on coffee had have fingers that fly over the keyboard with a green background...exist!</p>


</body>


<?php include "../includes/copyright_footer.php"?>
<!--<footer>-->
<!--    <div class="footer">Copyright © <a href="about.php">Aarushi Purohit</a> 2021</div>-->
<!--</footer>-->
</html>