<div style='font-size:30; text-align:center;'>
<?php

$kopek = rand(0, 20) - 5;
if($kopek < 0) $kopek = 0;

if(rand(0,10) < 7) {
	echo "<div>Yeşil Tik beklet</div>";
}
else {
	echo "<div>Mavi tik beklet</div>";
}

echo "<div>" . $kopek . "dk sonra cevap ver. </div>";

$bitir = rand(0,100);
if($bitir <= 30){
	echo "<div>Yaz bitir</div>";
}
?>
<button onClick='window.location.reload()'>Yenile</button>
</div>
