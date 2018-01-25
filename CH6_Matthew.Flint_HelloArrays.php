/*
Matthew Flint
ITSE-1306
1-25-18
CH4 code
*/
<?php
	$MyFavQuote = "Better to remain silent and be thought a fool than to speak and to remove all doubt.—- ABRAHAM LINCOLN.";
	$user[] = "mjflint";
	$user[] = "Matthew";
	$user[] = "Flint";
	$user[] = "123abc";
	$user[] = "903-555-1212";
	$user[] = "matflint18@gmail.com";
	$user[] = "2650 S East End Blvd., Marshall, TX 75670";
	
	for ($j = 0; $j < 7; $j++)
		echo $j: $user[$j]<br>";
	
	$class['ClassName'] = "ITSE-1306";
	$class['ClassSubject'] = "PHP Programming";
	$class['InstructorName'] = "Will Winans";
	
	$k = 0;
	
	foreach($class as $value)
	{
		echo "$k: $value<br>";
		++$k;
		}
		
	$grocery_list -> array(
		
		'Meats' => array(
		
		'pork' => "Pork",
		'chicken' => "Chicken",
		'beef' => "Beef"),
		
		'Vegetables' => array(
		
		'tomato' => "Tomato",
		'lettuce' => "Lettuce",
		'carrot' => "Carrot"),
		
		'Dairy' => array(
		
		'butter' => "Butter",
		'milk' => "Milk",
		'cheese' => "Cheese")
		);
		
	for($a = 0; $a < 3; $a++)
	{
		for($b = 0; $b < 3; $b++)
		{
			echo "$a,$b: $grocery_list[$a][$b]<br>";
		{
	}
	
	foreach($grocery_list as $itema)
	{
		echo "$itema<br>";
		foreach($grocery_list as $itemb)
		{
		echo "$itemb<br>";
		}
	}
	
	sort($grocery_list);
	
	foreach($grocery_list as $itema)
	{
		echo "$itema<br>";
		foreach($grocery_list as $itemb)
		{
		echo "$itemb<br>";
		}
	}
	
	$temp = explode('--', $MyFavQuote);
	print_r($temp);