<h3>Valiku tulemus</h3>
<?php 

    if(!empty($_GET)){
        echo'<p>Teie valik on salvestatud, valisite lemmikuks pildi number '.($_GET["photo"]).':</p>';
        echo '<img src="pildid/nameless'.($_GET["photo"]).'.jpg" alt=""/>';
    } else {
        echo "Palun valige pilt";
    }
?>