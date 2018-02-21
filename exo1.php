<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>
<body>
	<a href="/exo1.php?message=Hello">afficher hello</a>
<?php
echo "Vous êtes sur la page ".$_GET["message"];
?>
</body>
</html>