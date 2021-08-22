<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Caeser Cipher</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/caeser_style.css">
</head>

<span style="font-family: 'Andale Mono'"><?php include "../includes/nav-bar.php"?></span>

<!--MAIN FRAMEWORK-->
<h1 class="cipher_title"><u>Caesar Cipher</u></h1>

<body>

<!--ABOUT THE CIPHER-->

<h2 class="cipher_title" style="text-align: left; padding: 10px;">About the Caeser Cipher</h2>

<div class="p">
    <p>In Caesar cipher, the set of plain text characters is replaced by any other character, symbols or numbers. It is a very weak technique of hiding text. In Caesar’s cipher, each alphabet in the message is replaced by three places down. Let’s see one example. The plain text is EDUCBA. As a Caesar cipher, each alphabet is replaced by three-place down so that E will replace by H, D will replace by G, U will replace by X, C will replace by F, B will replace by E, and A will replace by D. So here the plain text is EDUCBA and ciphertext Is HGXFED.</p>

<!--    <p>Caesar cipher algorithm is as follows:</p>-->
<!---->
<!--    <ul>-->
<!--        <li>Read each alphabet of plain text.</li>-->
<!--        <li>Replace each alphabet with 3 places down.</li>-->
<!--        <li>Repeat the process for all alphabet in plain text.</li>-->
<!--    </ul>-->
<!---->
<!--    <p>A Modified Version of Caesar Cipher: This cipher works the same as Caesar cipher; the only difference is – in Caesar cipher, each alphabet is replaced by three-place down wherein a modified version of Caesar cipher, a user decides the number to replace the alphabet, and this number will be constant. For example, EDUCBA and number for the replacement are 1, so E will replace by F, D will replace by E, U will replace by V, C will replace by D, B will replace by C, and A will replace by B. So here, the plain text is EDUCBA, and ciphertext Is FEVDCB.</p>-->
<!---->
<!--    <p>A modified version of the Caesar cipher algorithm is as follows.</p>-->
<!---->
<!--    <ul>-->
<!--        <li>Read each alphabet of plain text.</li>-->
<!--        <li>Take the number for replacement.</li>-->
<!--        <li>Replace each alphabet with a specified number down.</li>-->
<!--        <li>Repeat the process for all alphabet in plain text.</li>-->
<!--    </ul>-->
</div>

<!--ENCODING THE CIPHER-->
<h2 class="cipher_title" style="text-align: left; padding: 10px;">Encrypting Your Text Using the Caeser Cipher</h2>
<p class="p">Here is an encoder that I made using JavaScript. Enter the words (without spaces only!) to get your encryption :)</p>

<div class="mainContainer">

    <label for="original" class="p">Original Message</label>
    <input id="original" type="text" value="bluesocksrock">

    <label for="shift" class="p">Shift</label>
    <input id="shift" type="number" value="7" placeholder="0">

    <hr style="width: 95%; margin-left:2% !important;">

    <label for="encrypted" class="p">Encrypted Message</label>
    <input id="encrypted" type="text" value="" style="background-color: #6CD9FF" readonly>
</div>
<script>
    let originalInput = document.querySelector("#original");
    let shiftInput = document.querySelector("#shift");
    let encryptedInput = document.querySelector("#encrypted");

    let originalMessage = originalInput.value;

    originalInput.addEventListener("input", characterEntered, false);

    function characterEntered(e) {
        // Ensure we only deal with lowercase letters
        originalMessage = e.target.value;
        originalMessage = originalMessage.toLowerCase();
        originalMessage = originalMessage.replace(/[^a-z]/, '');

        e.target.value = originalMessage;

        // Let's get the party started!
        startEncryption();
    }

    function startEncryption() {
        let encryptedMessage = "";
        let shift = 7;

        for (letter of originalMessage) {
            encryptedMessage += shiftLetter(letter, shift);
        }

        console.log(encryptedMessage);
        encryptedInput.value = encryptedMessage;
    }
    startEncryption();

    function shiftLetter(letter, shift) {
        let newLetter = "";

        let letterCode = letter.charCodeAt(0);
        let newLetterCode = letterCode + (shift % 26);

        if (newLetterCode < 97) {
            // If new letter goes below "a" aka character code 97
            newLetterCode += 26;
        } else if (newLetterCode > 122) {
            // If new letter goes past "z" aka character code 122
            newLetterCode -= 26;
        }

        newLetter = String.fromCharCode(newLetterCode);

        return newLetter;
    }
</script>
<br>
<!--DECODING THE CIPHER-->

<h2 class="cipher_title" style="text-align: left; padding: 10px;">Decrypting Your Text</h2>
<p class="p">Here is a decryptor that I made using JavaScript. Enter the original message (without spaces only!) to get your decryption.<b><u>(This is still under construction)</u></b></p>


<div class="mainContainer">

    <label for="original-message" class="p">Encrypted Message</label>
    <input id="original" type="text" value="bluesocksrock">

    <hr style="width: 95%; margin-left:2% !important;">

    <label for="decrypted" class="p">
        Decrypted Message</label>
    <input id="decrypted" type="text" value="" readonly style="display: block; border-color: black;background-color: #6CD9FF; color: black;">

    <label for="shift" class="p">Shift</label>
    <input id="d-shift" type="number" value="" placeholder="0" style="display: block; border-color: black;background-color: #6CD9FF; color: black;">

</div>

<script>
    let originalInput = document.querySelector("#original-message");
    originalInput.addEventListener(originalMessage, characterEntered, false);

    function characterEntered(e) {
        // Ensure we only deal with lowercase letters
        originalMessage = e.target.value;
        originalMessage = originalMessage.toLowerCase();
        originalMessage = originalMessage.replace(/[^a-z]/, '');

        e.target.value = originalMessage;

        decipher();
    }

    function decipher() {
        let caesarCipher=>(str, key){
            return str.toUpperCase().replace(/[A-Z]/g, c => String.fromCharCode((c.charCodeAt(0) - 65 + key) % 26 + 65));
        }
        console.log(decipher());
        encryptedInput.value = decipher();
    }
    decipher();
</script>

<br>
<hr style="width: 10%; display: block; height: 1px; border: 0; border-top: 3px solid #6CD9FF; padding: 10px; margin: auto;">
<!--CIPHER LINKS-->
<?php include "../includes/cipher-list.php";?>
</body>
</html>
