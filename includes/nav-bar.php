<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/nav-bar.css">
<style>
    /* Dropdown Button */
    .dropbtn {
        font-family: "Andale Mono";
        background-color: #6CD9FF;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        font-family: "Andale Mono";
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    nav div{
        display: inline-block;
        margin-left: 70px;
    }

    .dropdown::before{
        content:'';
        display: block;
        height: 5px;
        background-color: #444;
        top: 0;
        width: 0%;

        transition: all ease-in-out 150ms;
    }

    .dropdown:hover{
        color: black;
    }

    .dropdown:hover::before{
        width: 100%;
    }


    /*!* Change color of dropdown links on hover *!*/
    /*.dropdown-content a:hover {background-color: #ddd;}*/

    /*!* Show the dropdown menu on hover *!*/
    /*.dropdown:hover .dropdown-content {display: block; transition: ease-in 250ms;}*/

    /*!* Change the background color of the dropdown button when the dropdown content is shown *!*/
    /*.dropdown:hover .dropbtn {background-color: #6CC2FF; transition: ease-in 250ms;}*/
</style>
</head>
<header class="header">
    <!--NAVIGATION BAR-->
    <div class="container">
        <a href="../pages/home.php"><img src="../img/SClogo.png" alt="Spinning Cipher Logo" class="logo" width="133.33" height="60"></a>

        <nav>
            <div style="font-family: 'Andale Mono';">
                <ul>
                    <li><a href="../pages/home.php">Home</a></li>
                    <div class="dropdown">
                       <a href="../pages/ciphers.php"><button class="dropbtn" style="color: #444444;">CIPHERS</button></a>
                        <div class="dropdown-content">
                            <a href="../ciphers/ceaser-cipher.php">Caeser Cipher</a>
                            <a href="../ciphers/monoalphabetic-cipher.php">Monoalphabetic Cipher</a>
                        </div>
                    </div>
                    <li><a href="../pages/history.php">History</a></li>
                    <li><a href="../pages/about.php">About</a></li>
                </ul>
            </div>
        </nav>
    </div>




</header>
</html>
