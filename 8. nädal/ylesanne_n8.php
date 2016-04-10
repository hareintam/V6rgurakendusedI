<?php
ini_set("display_errors", 1);

$text = "Siin kuvatakse kasutaja sisestatud tekst";
if (isset($_POST['tekst']) && $_POST['tekst']!="") {
    $text=htmlspecialchars($_POST['tekst']);
}
$bgcolor = "#9DB68C";
if (isset($_POST['taustav2rv']) && $_POST['taustav2rv']!="") {
    $bgcolor=htmlspecialchars($_POST['taustav2rv']);
}
$textcolor = "#838B8B";
if (isset($_POST['tekstiv2rv']) && $_POST['tekstiv2rv']!="") {
    $textcolor=htmlspecialchars($_POST['tekstiv2rv']);
}
$bwidth = 10;
if (isset($_POST['laius']) && $_POST['laius']!="") {
    $bwidth=htmlspecialchars($_POST['laius']);
}
$bstyle = "double";
if (isset($_POST['piirjoon']) && $_POST['piirjoon']!="") {
    $bstyle=htmlspecialchars($_POST['piirjoon']);
}
$bcolor = "#D9D9D9";
if (isset($_POST['joonev2rv']) && $_POST['joonev2rv']!="") {
    $bcolor=htmlspecialchars($_POST['joonev2rv']);
}
$bradius = 25;
if (isset($_POST['raadius']) && $_POST['raadius']!="") {
    $bradius=htmlspecialchars($_POST['raadius']);
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>IIX ylesanne</title>
<style>
     body{
         font-size: 12px;}
    #textbox {
        background: <?php echo $bgcolor; ?>;
		color: <?php echo $textcolor; ?>;
		border-width: <?php echo $bwidth; ?>px;
		border-style: <?php echo $bstyle; ?>;
		border-color: <?php echo $bcolor; ?>;
		border-radius: <?php echo $bradius; ?>px;
        min-height: 150px;
		width: 350px;
		text-align: center;
		padding: 20px 20px 20px 20px;}
    hr {
		width: 350px;
        margin-left: 0px;}
    select {
		border-radius: 3px;
        padding: 2px 2px 2px 2px;
        font-size: 12px;}
    input[type=submit], input[type=number],input[type=color]{
		margin: 2px;
        border-width: 1px;
        border-radius: 3px;
        font-size: 12px;}

</style>
</head>
<body>
<p id="textbox"><?php echo $text; ?></p>
<hr>
<form action="ylesanne_n8.php" method="POST">
	<textarea name="tekst" rows="5" cols="40" placeholder="Kirjuta siia tekst"></textarea><br>
	<input type="color" name="taustav2rv"> Taustavärv<br>
	<input type="color" name="tekstiv2rv"> Tekstivärv
    <hr/>
	<input type="number" name="laius" min="1" max="20"> Määra piirjoone laius (0-20px)<br>
	<select name="piirjoon">
        <option value="none">piirjooneta</option>
        <option value="hidden">peidetud</option>
        <option value="solid">joon</option>
		<option value="dashed">kriipsud</option>
        <option value="dotted">punktiir</option>
		<option value="double">kahekordne</option>
		<option value="ridge">3D efektiga</option>
	</select><br>
	<input type="color" name="piirjoonev2rv"> Piirjoone värvus<br>
	<input type="number" name="raadius" min="0" max="50"> Määra piirjoone nurga raadius (0-50px)
	<hr>
	<input type="submit" value="Kuva muudatused">
</form>

</body>
</html>