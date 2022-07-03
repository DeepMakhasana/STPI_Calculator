<?php
require_once("include/component.php");

function head($title)
{
    $header = "<!DOCTYPE html>
        <html lang=\"en\">
        <head>
            <meta charset=\"UTF-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <title>$title</title>
            <!-- Google Fonts -->
            <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
            <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
            <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans&display=swap\" rel=\"stylesheet\">
            <!-- CSS Fill -->
            <link rel=\"stylesheet\" href=\"css/style.css\">
            
        </head>
        <body>
            <h1><a href=\"index.php\">$title<a></h1>";

    echo $header;
}

?>