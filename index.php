<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlyTik-India's Biggest Sale</title>
    <link rel="icon" href="title2.png" type="image/icon type">
    <link id="themeStyleSheet" rel="stylesheet" href="<?= getTheme() ?>.css">
    <style>
    .logo {
        color: black;
        animation-name: blink;
        animation-iteration-count: infinite;
        animation-duration: 2s;
        animation-delay: 0.6s;
        padding-bottom: 1vh;
        padding: 2VH;
        display: inline-block;
    }

    .sb {
        /* search bar*/
        height: 2vw;
        width: 45vw;
        padding: 2vh;
        margin-bottom: 2vh;
        display: inline-block;
    }

    .sbb {
        /* search bar button*/
        width: 8vh;
        height: 4.5vh;

        font-weight: bold;
    }

    .login {
        /* login  button*/
        height: 2.2vw;
        width: 4vw;
        float: right;
        display: inline;
        position: relative;
        top: 3.5vw;
        margin-right: 2vh;
    }


    .content {
        /* photos (actual content)*/
        transition: transform;
        transition-duration: .2s;
        height: 22vh;
        margin: 4vh;
        border: 0.4vh orange solid;
        animation-name: bup;

    }

    .content:hover {
        transform: scale(1.1);
    }

    @keyframes blink {

        /* logo blinking animation*/
        0% {
            color: black;
        }

        33% {
            color: orange;
        }

        66% {
            color: black;
        }

        100% {
            color: orange;
        }
    }

    .container {
        height: 70vh;
    }

    #themeSelect {
        height: 2.2vw;
        width: 4vw;
        float: right;
        display: inline;
        position: relative;
        top: 3.5vw;
        margin-right: 2vh;
    }
    #themeSave{
        height: 2.2vw;
        width: 4vw;
        float: right;
        display: inline;
        position: relative;
        top: 3.5vw;
        margin-right: 2vh;
    }
    </style>
  
    </head>

<body class="body">
<?php
function getTheme(){
        return trim(file_get_contents("selectedThemes.txt"));
    }
    function setTheme($theme){
        file_put_contents("selectedThemes.txt",$theme);
    }
    
     if(isset($_POST["themeSelect"])) {
        setTheme($_POST["themeSelect"]);
     }

    ?>
    <a href="index.html" class="logo">OnlyTik</a>
    <input class="sb" type="search" placeholder="what do you want to search?"><button type="reset"
        class="sbb">Search</button>
    <a href="login.html"><button class="login">Login</button></a>
     <form action="./" method="post" >
    <select name="themeSelect" id="themeSelect">

        <option value="Light" <?= getTheme() == "Light" ? "selected" : "" ?>>Light</option>
        <option value="default" <?= getTheme() == "default" ? "selected" : "" ?>>Dark</option>
        
    </select><button type="submit" id="themeSave"  onclick="setTimeout(rel, 3000);">Save</button></form>
    <hr color="white">
    <nav>
        <ul>
            <li>Home</li>
            <li>Category</li>
            <li>trending</li>
            <li>Shop</li>
        </ul>
    </nav><br>
    <hr color="white"><br>
    <div class="container">
        <img class="content" src="thumbnail 1.jpg">
        <img class="content" src="thumbnail 1.jpg">
        <img class="content" src="thumbnail 2.jpg">
        <!-- add more images with content class,and it will get set autumatically -->

    </div>
    <hr color="white">
    <footer>
        <p>
            Copyright &copy; OnlyTik-India - All Right Reserved
        </p>
    </footer>


    
</body>
<script>
const themeSelect = document.getElementById("themeSelect");
const themeStyleSheet = document.getElementById("themeStyleSheet");
const themeSave =document.getElementById("themeSave");


themeSelect.addEventListener("change", function() {
    themeStyleSheet.setAttribute("href", this.value + ".css");
    alert("We are Suggesting You to Reload this page to Save Your Settings")
})
function rel(){
    location.reload();}

    


</script>

</html>