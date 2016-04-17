<?php 
	require_once("head.html");
	$favourite = array (
		array("link" => "pildid/nameless1.jpg", "alt" => "nimetu 1"),
		array("link" => "pildid/nameless2.jpg", "alt" => "nimetu 2"),
		array("link" => "pildid/nameless3.jpg", "alt" => "nimetu 3"),
		array("link" => "pildid/nameless4.jpg", "alt" => "nimetu 4"),
		array("link" => "pildid/nameless5.jpg", "alt" => "nimetu 5"),
		array("link" => "pildid/nameless6.jpg", "alt" => "nimetu 6")
	);
?>
<h3>Vali oma lemmik :)</h3>
<form action="tulemus.php" method="GET">
	<?php foreach($favourite as $key => $photo): ?>
	<p>
		<?php $count = $key + 1; ?>
		<label for="<?php echo 'p{$count}'; ?>">
			<img src="<?php echo $photo['link']; ?>" alt="<?php echo $photo['alt']; ?>" height="100" />
		</label>
		<input type="radio" value="<?php echo $count; ?>" id="<?php echo 'p{$count}'; ?>" name="photo"/>
	</p>
	<?php endforeach; ?>
	<br/>
	<input type="submit" value="Valin!"/>
</form>
<?php
	require_once("foot.html");
?>