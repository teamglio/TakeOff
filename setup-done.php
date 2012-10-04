<?php



$setup = '<?php 

$apikey = "'. $_POST["apikey"]. '";

$listId = "'. $_POST["listid"]. '";



$ideaname = "'. $_POST["ideaname"]. '";

$ideatag = "'. $_POST["ideatag"]. '";

$ideatext = "'. $_POST["ideatext"]. '";

$facebook = "'. $_POST["facebook"]. '";

$twitter = "'. $_POST["twitter"]. '";

$plus = "'. $_POST["googleplus"]. '";

$copyrightyear = "'. $_POST["copyrightyear"]. '";

$color= "'. $_POST["color"]. '";

$logo= "'. $_POST["logo"]. '";

?>';



$fp = fopen("config.php", "w");

fwrite($fp, $setup);

fclose($fp);

$deletesetup = "setup.php";
unlink($deletesetup);
$deleteupload = "upload.html";
unlink($deleteupload);

header( 'Location: index.php' ) ;

?>