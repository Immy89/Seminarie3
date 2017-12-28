<?php

    function connectToDatabase(){

        $servername = "localhost";
        $username = "root";
        $password = "";
        $databasename = "recepthemsida";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $databasename);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $conn->set_charset("utf8");
        return $conn;
    }

    function fetchComments($recipeId, $relocateTo, $conn) {
        $conn->set_charset("utf8");
        $sql = "SELECT KommentarID, Användarnamn, Kommentar FROM kommentar WHERE ReceptID = '$recipeId'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
    
            echo "<hr />";
            while($row = $result->fetch_assoc()) {
                echo $row["Användarnamn"] . ": <br>" . $row["Kommentar"] . "<br>";
                if (isset($_SESSION["loggedInUser"])) {
                    if ($row["Användarnamn"] == $_SESSION["loggedInUser"]) {
                        echo "<a class='del' href='deleteComment.php?relocateTo=$relocateTo&KommentarID=" . $row['KommentarID'] . "'>Ta bort</a>" . "<br>" . "<br>" . "<br>";
                    }
                }
                echo "<hr />";
            }
        }
    }
?>