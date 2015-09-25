<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Keep Snow Everywhere!</title>
        <meta charset="utf-8">
        <meta name="author" content="Benjamin Citrin">
        <meta name="description" content="testdev!">

        
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

<?php

function Greeting($hrs) {
    if ($hrs > 0 && $hrs < 12) {
        return 'Good morning';
    }
    else if ($hrs == 12 || $hrs  > 12 && $hrs < 17) {
        return 'Good Afternoon';
    }
    else if ($hrs < 20 && $hrs > 17 || $hrs == 17 ) {
        return 'Good Evening';
    } 
    else if ($hrs < 24 && $hrs > 20 || $hrs == 20) {
        return 'Good night';
    }
    
}
 $hrs = 11;
 print Greeting($hrs);

?>
</html>