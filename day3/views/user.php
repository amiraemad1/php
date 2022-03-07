<?php
echo "<center>  User Profile Page   </center>";
///////
$counter = file("log.txt");
echo "<h2>Counted Unique Visitors:</h2>".$counter[0];