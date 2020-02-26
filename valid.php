
<?php      
$name = $_POST["name"];
$lastname = $_POST["lastname"];
$middlename = $_POST["middlename"];
$address = $_POST["address"];
$datebirth = $_POST["datebirth"];
$placebirth = $_POST["placebirth"];
$gender = $_POST["gender"];
$guardian = $_POST["guardian"];
$contactNumber = $_POST["contactNumber"];
$civilstat = $_POST["civilstat"];
$yearLevel = $_POST["yearLevel"];
$course = $_POST["course"];
$schoolyr = $_POST["schoolyr"];


function notNull($middlename, $address, $placebirth, $guardian, $civilstat, $schoolyr){
   $mnlength =  trim(strlen($middlename)); 
   $addlength =  trim(strlen($address)); 
   $pblength =  trim(strlen($placebirth)); 
   $glength =  trim(strlen($guardian)); 
   $cslength =  trim(strlen($civilstat)); 
   $sylength =  trim(strlen($schoolyr)); 

   return ($mnlength > 0) && ($addlength > 0) && ($pblength > 0) && ($glength > 0) && ($cslength > 0) && ($sylength > 0);

}

function isValidNumber($contactNumber){
    return preg_match_all('/(^\+?63(?!.*-.*-)(?!.*\+.*\+)(?:\d(?:-)?){10}$)|(^09(?!.*-.*-)(?!.*-.*-)(?:\d(?:-)?){9}$)/', $contactNumber);

}

function isValidName($name, $lastname){
    return trim(strlen($name) > 1) && trim(strlen($lastname));

}

if (!notNull($middlename, $address, $placebirth, $guardian, $contactNumber, $civilstat, $schoolyr)){

    echo "Empty inputs";
}

else if(!isValidNumber($contactNumber)){
    echo "InvalidNumber";

}
else if (!isValidName($name, $lastname)){
    echo "InvalidName";

}

else {
    echo "Success <br>";
    echo "Name: $name, $lastname, $middlename<br>";
    echo "Address: $address<br>";
    echo "Date Birth: $datebirth<br>";
    echo "Place Birth: $placebirth<br>";
    echo "Gender: $gender<br>";
    echo "Guardian: $gender<br>";
    echo "Contact num#: $contactNumber<br>";
    echo "Year level: $yearLevel<br>";
    echo "Course : $course<br>";
    echo "School year : $schoolyr<br>";

}

echo "<br><a href='index.php'>Go Back</a>"
?>