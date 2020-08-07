<?php
// // Include Composer autoloader if not already done.
 require __DIR__.'../../../../vendor/autoload.php';
 
/**
 * Exemple extract text from PDF document
 */
//get root path
$rootDir = realpath(dirname( __FILE__)."/../../../");

// Include Composer autoloader if not already done.
require $rootDir . "/vendor/autoload.php";

// Parse pdf file and build necessary objects.
$parser = new \Smalot\PdfParser\Parser();
// $pdf    = $parser->parseFile("/trabalhos/a.pdf");

// $text = $pdf->getText();

// echo $text;
// echo PHP_EOL;
// echo PHP_EOL;



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>