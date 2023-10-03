<!DOCTYPE html>
<html>
<body>

<?php 

$str = "
halloween castle
halloween night
halloween
pumpkin
halloween pumpkin
haunted
festival
celebrate
greeting
castle
night
halloween party
halloween illustration
halloween banner
halloween poster
pumpkin illustration
halloween
halloween background
spooky
horror poster
halloween pumpkin
spooky background
pumpkin

halloween party
party poster
party flyer
halloween poster
Halloween flyer
halloween invitation
halloween night party
halloween party flyer
halloween shirt
halloween t shirt
halloween graphic
halloween tshirt design
halloween t shirt design
halloween tshirt
halloween tee
halloween t shirts for adults
vintage halloween t shirt
halloween svg t shirt
halloween graphic tshirt
halloween svg tshirt
womens halloween shirt
trick or treat clipart
horor halloween poster
funny halloween tshirt
trick or treat shirt
halloween t shirt design amazon uk
girls halloween shirt
halloween kids shirt
vintage halloween shirt
halloween t shirt design vector

halloween pumpkin
halloween party
halloween
trick or treat
halloween witch
halloween logo
halloween costume
creepy
happy halloween
scary
terrorism
witch
halloween dog
costume party
";

$lowerCaseString = strtolower($str);

$str_toa = array_unique(explode(" ", $lowerCaseString));  

echo implode(", ",$str_toa);
 

?>

</body>
</html>
