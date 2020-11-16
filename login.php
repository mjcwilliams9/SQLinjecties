<?php

include "db.php";

// todo 1: print de ingevoerde username en wachtwoord op aparte regels. Geef duidelijk aan welk van de twee de username en het wachtwoord is.
echo "Enter username: " . $_GET["username"];
echo "<br>";
echo "Enter password: " . $_GET["password"];
echo "<br>";

// todo 2: maak twee variabele aan en sla de ingevoerde username en wachtwoord op in deze variabelen.
$username = $_GET["username"];
$password = $_GET["password"];

$myConn = new DB;

// todo 3: include de variabele met de username in de onderstaande query, zodat deze alle data kan ophalen voor de ingevoerde username.
$query = "SELECT * FROM users WHERE username='$username'";

$result = $myConn->executeSQL($query);

// todo 4: vermeldt wat de datatype van variabele $result is. Dit kun je met behulp van een ingebouwde php functie doen.
echo "De datatype is: ".gettype($result);

if (!empty($result)) { 
    echo "<br> Login as $username <br>";

    // todo 5: leg uit wat de ingebouwde php functie print_r() doet en gebruik het om de result-variabele te printen.
    //print_r print informatie op een makkelijk leesbare manier
    print_r($result);
} else {
    echo "<br> Invalid login! <br>";
}

?>