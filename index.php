<?php
$string = "<p>в том же 1990 году стартовал первый телесериал Линча — Твин Пикс.
В основе сюжета сериала — расследование загадочного убийства школьницы Лоры Палмер,
произошедшего в небольшом американском городке Твин Пикс. Сериал пользовался поначалу большим успехом,
но уже через год съёмки были свёрнуты из-за низких рейтингов.
Тем не менее сериал стал знаковым культурным явлением начала 1990-х.
Ежегодно под Сиэтлом проходит слёт поклонников Твин Пикса</p>";

// 1 - 2 задание
$index = 0;
$pos = strpos( $string, "Твин Пикс", $index);
$amount = 0;
if( $pos > $index ){
	$index = $pos;
	$pos = strpos( $string, "Твин Пикс", $index + 1);
	$amount = 1;
	//echo $index;
	//echo $pos;
}
if( $pos > $index ){
	$index = $pos;
	$pos = strpos( $string, "Твин Пикс", $index+ 1);
	$amount = 2;
	//echo $pos;
	//echo $index;
}
if( $pos > $index ){
	$index = $pos;
	$pos = strpos( $string, "Твин Пикс", $index+ 1);
	$amount = 3;
	//echo $pos;
	//echo $index;
}
if( $pos > $index ){
	$index = $pos;
	$pos = strpos( $string, "Твин Пикс", $index+ 1);
	$amount = 4;
	//echo $pos;
	//echo $index;
}
if( $pos > $index ){
	$index = $pos;
	$pos = strpos( $string, "Твин Пикс", $index+ 1);
	$amount = 5;
	//echo "$pos</br>";
	//echo "$index</br>";
}
echo "$pos </br>";
echo "$index </br>";
echo "$amount </br>";


?>
