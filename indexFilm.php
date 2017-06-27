<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Exo 1</h1>
	
<?php
// $string = file_get_contents('films.json');
// $brut = json_decode($string,true);
// $top = $brut["feed"]["entry"];


$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"];


$topTen = [];
for ($i=0; $i <9 ; $i++) { 
	array_push($topTen, $top[$i]);
	 echo $topTen[$i]{"title"}["label"],'<br />';
}
?>
<h1>Exo2</h1>
<?php
var_dump($top{"title"}["gravity"])

?>

</body>
</html>