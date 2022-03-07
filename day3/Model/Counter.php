<?php

class Counter
{
    
    public static function countVisitors()
    {   
        if (!isset($_SESSION["is_visited"])) {
            $_SESSION["is_visited"] = true;
            $counter = file("log.txt");
            $counter = $counter[0] + 1;
            $fp = fopen("log.txt", "w+");
            fwrite($fp, $counter);
            fclose($fp);

        }
    }

}