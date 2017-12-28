<!DOCTYPE html>
<html>

    <head>
        <title>Vietnamesiska Pannkakor</title>
        <meta charset="UTF-8" />
        <link rel="Stylesheet" type="text/css" href="css/recept.php">
    </head>

    <body>
        <div id="title">
            <h2>Vietnamesiska Pannkakor</h2>
        </div>
        <div id="bild">
            <img src="images/Vietnamesiska_Pannkakor.jpg" alt="Vietnamesiska_Pannkakor.jpg" />
        </div>
        <div id="ingredienser">
            <h3>Ingredienser:</h3>
            <h4 class="header4">Pannkakor:</h4>
            <ul>
                <li>2,2 dl mjölk (3 %)</li>
                <li>1 ägg</li>
                <li>2 msk ljus soja (japansk)</li>
                <li>110 g rismjöl</li>
                <li>2 salladslök, strimlad</li>
                <li>jordnötsolja att steka i</li>
            </ul>
            <h4 class="header4">Fyllning:</h4>
            <ul>
                <li>ca 400 g handskalade räkor</li>
                <li>1 dl hackad holy basil eller thaibasilika</li>
                <li>1 dl hackad mynta</li>
                <li>1 dl hackad koriander</li>
                <li>3 dl färska mungbönsgroddar (ej konserv)</li>
                <li>0,5 gurka</li>
                <li>3-4 salladslökar</li>
                <li>ca 0,33 chili, urkärnad och finhackad</li>
                <li>0,5-1 msk rörsocker</li>
                <li>1 msk fisksås</li>
                <li>2,5 lime, saft från, (0,5 dl)</li>
            </ul>
            <h4 class="header4">Tillbehör:</h4>
            <ul>
                <li>friterad vitlök (finns i asiatiska butiker) eller rostad lök</li>
            </ul>
        </div>
        <div id="beskrivning">
            <h3>Så här gör du:</h3>
            <p>Börja med pannkakorna. Vispa samman ägg, mjölk och soja i en skål. Tillsätt rismjölet allt eftersom och slutligen
                finstrimlad salladslök.</p>
            <p>Hetta upp en stekpanna med lite jordnötsolja och häll i ca 2 msk av smeten. Vinkla pannan åt olika håll så att
                smeten rinner ut i en jämn och hyfsat rund liten pannkaka (storleksmässigt som en blandning mellan pannkaka
                och plättar).</p>
            <p>Grädda i ca 1-2 minuter eller tills pannkakan börjar få lite lätt färg på undersidan, vänd då på den och grädda
                den i ytterligare 1-2 minuter. Tänk på att pannkakan ska gräddas försiktigt så den inte får för mycket färg
                och blir ”krispig” för då kan man inte rulla den när man äter den sedan.</p>
            <p>Upprepa med resterande smet. Packa in färdiggräddade pannkakor i folie så de håller värmen och lägg dem åt sidan.</p>
            <p>Rör samman limesaft, finhackad chili, socker och fisksås tills sockret löst sig. Strimla vårlöken. Dela gurkan
                på längden och kärna ur den. Skär den sedan i fina strimlor. Sväng samman gurka, mungbönor, salladslök, örter
                och räkor med dressingen.</p>
            <p>Servera de varma pannkakorna med salladen och friterad vitlök på toppen. Vill du kan du även servera med örter
                att toppa med (mynta, holy basil och koriander).</p>
        </div>
        <div id="recensioner">
            <h3>Recensioner:</h3>
            <div id="SkapaRecensioner">
                <form action="SkapaRecension.php" method="POST">
                    <input type="hidden" name="receptId" value="2">
                    <input type="hidden" name="relocateTo" value="index.php?content=Recipes/Vietnamesiska_Pannkakor.php">
                    <div class="container">
                        <label>
                            <b>Kommentar</b>
                        </label>
                        <textarea placeholder="Kommentar" name="kommentar" required></textarea>
                        <button type="submit">Publicera</button>
                    </div>
                </form>
            </div>
            <div id="InlästaRecensioner">
            <?php
                    $conn = connectToDatabase();
                    fetchComments(2, 'index.php?content=Recipes/Vietnamesiska_Pannkakor.php', $conn);
                    $conn->close();
                ?>
            </div>
        </div>
    </body>

</html>