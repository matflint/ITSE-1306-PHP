<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}



CREATE TABLE `itse_1306`.`Groceries` ( `Title_ID` INT NOT NULL AUTO_INCREMENT , `Title` TEXT NOT NULL , `Gender_ID` INT NOT NULL AUTO_INCREMENT , `Gender` TEXT NOT NULL , `Ethnicity_ID` INT NOT NULL AUTO_INCREMENT , `Ethnicity` TEXT NOT NULL , `Address_ID` INT NOT NULL AUTO_INCREMENT , `Physical_Address_1` TEXT NOT NULL , `Physical_Address_2` TEXT NOT NULL , `Phy_State_ID` INT NOT NULL , `Phy_City` TEXT NOT NULL , `Phy_Zipcode` TEXT NOT NULL , `Mailing_Address_1` TEXT NOT NULL , `Mailing_Address_2` TEXT NOT NULL , `Mail_State_ID` INT NOT NULL , `Mail_City` TEXT NOT NULL , `Mail_Zipcode` TEXT NOT NULL , `State_ID` INT NOT NULL AUTO_INCREMENT , `State` TEXT NOT NULL , `Phone_ID` INT NOT NULL AUTO_INCREMENT , `Number` TEXT NOT NULL , `Type ID` INT NOT NULL , `Phone_Type_ID` INT NOT NULL AUTO_INCREMENT , `Short_Desc` TEXT NOT NULL , `Long_Desc` TEXT NOT NULL , `Customer_ID` INT NOT NULL AUTO_INCREMENT , `Title ID` INT NOT NULL , `First_Name` TEXT NOT NULL , `Middle_Name` TEXT NOT NULL , `Last_Name` TEXT NOT NULL , `Gender_ID` INT NOT NULL , `Ethnicity_ID` INT NOT NULL , `DOB` DATE NOT NULL , `Address_ID` INT NOT NULL , `Phone_ID` INT NOT NULL , `Type_ID` INT NOT NULL AUTO_INCREMENT , `Short_Desc` TEXT NOT NULL , `Long_Desc` TEXT NOT NULL , `Type_ID` INT NOT NULL , `Short_Desc` TEXT NOT NULL , `Long_Desc` TEXT NOT NULL , PRIMARY KEY (`Title_ID`, `Gender_ID`, `Ethnicity_ID`, `Address_ID`, `State_ID`, `Title`, `Phone_ID`, `Phone_Type_ID`, `Customer_ID`, `Type_ID`, `Gender`)) ENGINE = InnoDB;
Close
?>