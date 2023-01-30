<?php

function getCentury($year) 
{
    return ceil($year / 100);
}

echo "The "  . getCentury(1952). "th Century";

?>