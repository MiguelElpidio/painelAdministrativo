<?php

	function Redimensionar ($imagem, $name, $largura, $pasta) {
	$img = imagecreatefromjpeg ($imagem['tmp_name']);
	$x = imagesx($img);
	$y = imagesy($img);
	$altura = ($largura * $y) / $x;

	$nova = imagecreatetruecolor ($largura, $altura);
	imagecopyresampled($nova, $img, 0, 0, 0, 0, $largura, $altura, $x, $y);

	imagejpeg($nova, "$pasta/$name");
	imagedestroy($img);
	imagedestroy($nova);

	return $name;

}

function RedimensionaPng($tmp, $name, $largura, $pasta){
$img = imagecreatefrompng($tmp);
$x = imagesx($img);
$y = imagesy($img);
$altura = ($largura*$y) / $x;
$nova = imagecreatetruecolor($largura, $altura);
imagealphablending ($nova, true);
$transparente = imagecolorallocatealpha ($nova, 0, 0, 0, 127);
imagefill ($nova, 0, 0, $transparente);
imagecopyresampled($nova, $img, 0, 0, 0, 0, $largura, $altura, $x, $y);
imagesavealpha($nova, true);
imagepng($nova, "$pasta/$name");
imagedestroy($img);
imagedestroy($nova);
return($name);
}

?>