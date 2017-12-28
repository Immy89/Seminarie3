<?php 
    session_start();
    include('Functions.php');
?>

<!DOCTYPE html>
<html>

    <head>
        <title>Smarriga Recept</title>
        <meta charset="UTF-8" />
        <link rel="Stylesheet" type="text/css" href="css/reset.css">
        <link rel="Stylesheet" type="text/css" href="css/index.css">
    </head>

    <body>
        <div class="pageSetup">
            <div class="header">
                <div class="logo">
                    <a href="index.php?content=startsidan.html">
                        <img src="images/PlateIcon.jpg" alt="PlateIcon.jpg" />
                    </a>
                </div>
                <h1 id="webName">Smarriga Recept</h1>
                <h4 id="slogan"> - Rätterna man vill sätta tänderna i
                    <img src="images/Emoji_Smarrigt.jpg" alt="Emoji_Smarrigt.jpg" />
                </h4>
            </div>

            <ul class="meny">
                <li class="dropdown">
                    <a class="button" href="index.php?content=Kalender/December2017.html">Kalender</a>
                </li>
                <li class="dropdown">
                    <span class="button">Recept</span>
                    <ul class="dropdown-content">
                        <li class="dropdownInside">
                            <a href="index.php?content=Recipes/Köttbullar_med_Mos.php">Gräddkokta viltköttbullar och rårörda lingon med pepparrot</a>
                        </li>
                        <li class="dropdownInside">
                            <a href="index.php?content=Recipes/Vietnamesiska_Pannkakor.php">Vietnamesiska Pannkakor</a>
                        </li>
                        <li class="dropdownInside">
                            <a href="index.php?content=Recipes/Veganska_Bananpannkakor.php">Veganska Bananpannkakor</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdownRight">
                    <?php
                        if (empty($_SESSION["loggedInUser"])) :
                    ?>
                    <a class="button" href="index.php?content=LoggaIn_Registrera.html">Logga in</a>
                    <?php
                        else :
                    ?>
                    <a class="button" href="index.php">Inloggad som 
                        <?php echo $_SESSION["loggedInUser"]; ?>
                    </a>
                    <ul class="dropdown-content">
                        <li class="dropdownInside">
                            <a href="LoggaUt.php">Logga ut</a>
                        </li>
                    </ul>
                    <?php
                        endif;
                    ?>
                </li>
            </ul>
        </div>
        <div id="content">
            <?php 
                $pageToInclude = "startsidan.html";
                if (isset($_GET['content'])){
                    $pageToInclude = $_GET['content'];
                }
                include($pageToInclude); 
            ?>
        </div>
        <div id="footer">
            <p>Vid fel på hemsidan kontakta: ksather@kth.se</p>
        </div>
    </body>

</html>