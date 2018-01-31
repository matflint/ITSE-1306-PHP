<?php
echo <<<_END
	Matthew Flint
	ITSE-1306
	1/31/2018
	CH7 PHP Assignment
_END;

$text_contents;
$ExampleNumber = 5000 / 98;

sprintf("My ExampleNumber variable is %b with the binary specifier", $ExampleNumber);
sprintf("My ExampleNumber variable is %c with the binary specifier", $ExampleNumber);
sprintf("My ExampleNumber variable is %d with the binary specifier", $ExampleNumber);
sprintf("My ExampleNumber variable is %e with the binary specifier", $ExampleNumber);
sprintf("My ExampleNumber variable is %f with the binary specifier", $ExampleNumber);
sprintf("My ExampleNumber variable is %o with the binary specifier", $ExampleNumber);
sprintf("My ExampleNumber variable is %s with the binary specifier", $ExampleNumber);
sprintf("My ExampleNumber variable is %u with the binary specifier", $ExampleNumber);
sprintf("My ExampleNumber variable is %x with the binary specifier", $ExampleNumber);
sprintf("My ExampleNumber variable is %X with the binary specifier", $ExampleNumber);

$fh = fopen("CH7_Matthew.Flint_Practical.html",'w') or die("failed to create file");
	fclose($fh);










?>