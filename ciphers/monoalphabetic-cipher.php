<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Monoalphabetic Cipher</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/monoalphapetic_style.css">

</head>

<span style="font-family: 'Andale Mono'"><?php include "../includes/nav-bar.php" ?></span>

<!--MAIN FRAMEWORK-->
<h1 class="cipher_title"><u>Monoalphabetic Cipher</u></h1>

<body>

<!--ABOUT THE CIPHER-->
<h2 class="cipher_title" style="text-align: left; padding: 10px;">About the Monoalphabetic Cipher</h2>

<div class="p">
    <p>As Caesar cipher and a modified version of Caesar cipher is easy to break, monoalphabetic cipher comes into the
        picture. In monoalphabetic, each alphabet in plain text can be replaced by any other alphabet except the
        original alphabet. That is, A can be replaced by any other alphabet from B to Z. B can be replaced by A or C to
        Z. C can be replaced by A, B, and D to z, etc. Mono alphabetic cipher causes difficulty to crack the message as
        there are random substitutions and a large number of permutation and combination are available.</p>
</div>

<!--ENCODING THE CIPHER-->
<h2 class="cipher_title" style="text-align: left; padding: 10px;">Encoding Text Using the Monoalphabetic Cipher</h2>
<p class="p">Here is an encoder that I made using JavaScript. Enter the words (without spaces only!) to get your
    encryption :)</p>

<br>
<textarea rows="4" cols="50" id="textbox" class="textarea">ENTER ORIGINAL MESSAGE HERE</textarea>

<button id="btn" class="btn" style="margin-right: 25%; background-color: #6CD9FF;">Cipher</button>
<button id="debtn" class="btn" style="margin-right: 5%; background-color: #6CD9FF;">Decipher</button>
<br>
<hr style="width: 97%;display: block; height: 1px; border: 0; border-top: 3px solid gray; padding: 0;">

<h3 style="font-family: 'Andale Mono'; padding-left: 30px;">Key Used</h3>

<textarea rows="1" cols="50" id="Key" class="textarea"></textarea>

<h3 style="font-family: 'Andale Mono'; padding-left: 30px;">Result</h3>

<textarea rows="4" cols="50" id="result" class="textarea"></textarea>

</center>
<script>
    let shuffledArr;
    let alphabetArr = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];

    function shuffle(array) {
        let shuffledArray = array.slice(0, array.length)
        let currentIndex = shuffledArray.length;
        let temporaryValue, randomIndex;

        while (0 !== currentIndex) {
            randomIndex = Math.floor(Math.random() * currentIndex);
            currentIndex -= 1;

            temporaryValue = shuffledArray[currentIndex];
            shuffledArray[currentIndex] = shuffledArray[randomIndex];
            shuffledArray[randomIndex] = temporaryValue;
        }

        return shuffledArray;
    }

    function cipher() {
        shuffledArr = shuffle(alphabetArr);
        document.getElementById("Key").innerHTML = shuffledArr.join().replace(/,/g, '')

        let textArr = document.getElementById("textbox").value.split("");
        for (let k = 0; k < textArr.length; k++) {
            if ((textArr[k] == ' ') || (textArr[k] == '\t') || (textArr[k] == '\n' || alphabetArr.indexOf(textArr[k].toUpperCase()) == -1)) {
                continue;

            } else
                textArr[k] = shuffledArr[alphabetArr.indexOf(textArr[k].toUpperCase())];
        }
        document.getElementById("result").innerHTML = textArr.join().replace(/,/g, '')
    }

    <!--DECODE-->
    function decipher() {
        let textArr = document.getElementById("result").value.split("");
        for (let k = 0; k < textArr.length; k++) {
            if ((textArr[k] == ' ') || (textArr[k] == '\t') || (textArr[k] == '\n' || alphabetArr.indexOf(textArr[k].toUpperCase()) == -1)) {
                continue;

            } else
                textArr[k] = alphabetArr[shuffledArr.indexOf(textArr[k].toUpperCase())];
        }
        document.getElementById("result").innerHTML = textArr.join().replace(/,/g, '')
    }

    <!--FUNCTION CALL-->

    document.getElementById("debtn").onclick = function () {
        decipher();
    }

    document.getElementById("btn").onclick = function () {
        cipher();
    }

</script>

<hr style="width: 10%; display: block; height: 1px; border: 0; border-top: 3px solid #6CD9FF; padding: 0;">
<!--CIPHER LINKS-->
<?php include "../includes/cipher-list.php"; ?>

<!--FOOTER-->
<?php include "../includes/footer.php";?>

</body>



</html>
