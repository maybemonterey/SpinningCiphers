<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ciphers</title>
    <link rel="stylesheet" href="../styles/style.css">
    <style>
        .footer{
            font-size: 13px;
            text-align: center;
            color: #444444;
            font-weight: 30;
            font-family: "Andale Mono";
            padding-left: 10px;
        }
    </style>
</head>

<span style="font-family: 'Andale Mono'"><?php include "../includes/nav-bar.php" ?></span>

<!--MAIN FRAMEWORK-->
<h1 class="cipher_title"><u>Ciphers</u></h1>

<body>
<h2 class="cipher_title" style="text-align: left; padding: 10px;">Types of Ciphers</h2>
<p class="p">There are many kind of ciphers in cybersecurity. All of them have their own areas of difficulty and have their own rule. Here are a few commonly found in the world of cybersecurity.</p>

<h2 class="cipher_title" style="text-align: left; padding: 10px;">What is a Cipher?</h2>
<p class="p">Ciphers, also called encryption algorithms, are systems for encrypting and decrypting data. A cipher converts the original message, called plaintext, into ciphertext using a key to determine how it is done.</p>

<p class="p">Ciphers are generally categorized according to how they work and by how their key is used for encryption and decryption. Block ciphers accumulate symbols in a message of a fixed size (the block), and stream ciphers work on a continuous stream of symbols. When a cipher uses the same key for encryption and decryption, they are known as symmetric key algorithms or ciphers. Asymmetric key algorithms or ciphers use a different key for encryption/decryption.</p>

<p class="p">Ciphers can be complex algorithms or simple ones. A common cipher, ROT13 (or ROT-13), is a basic letter substitution cipher, shorthand for “rotate by 13 places” in the alphabet. In a message, ROT13 replaces each letter of the alphabet with the letter that is thirteen places ahead of it.</p>

<!--CIPHER LINKS-->
<?php include "../includes/cipher-list.php";?>


<!--FOOTER-->
<div class="footer" style="font-family: 'Andale Mono'">
    <hr style="width: 10%; display: block; height: 1px; border: 0; border-top: 3px solid #6CD9FF; padding: 10px; margin: auto;">
    All information relating to Ciphers has been taken from <a href="https://www.educba.com/types-of-cipher/">EDUCBA</a>.
</div>


</body>

</html>
