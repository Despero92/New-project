<?php
$string = '<p>в том же 1990 году стартовал первый телесериал Линча — Твин Пикс.
В основе сюжета сериала — расследование загадочного убийства школьницы Лоры Палмер,
произошедшего в небольшом американском городке Твин Пикс. Сериал пользовался поначалу большим успехом,
но уже через год съёмки были свёрнуты из-за низких рейтингов.
Тем не менее сериал стал знаковым культурным явлением начала 1990-х.
Ежегодно под Сиэтлом проходит слёт поклонников Твин Пикса</p>';
$string = html_entity_decode( $string );
// 1 - 2 задание
$index = 0;
$pos = strpos( $string, "Твин Пикс", $index );
$amount = 0;
if ( $pos > $index ) {
	$index = $pos;
	$pos = strpos( $string, "Твин Пикс", $index + 1 );
	$amount = 1;
	//echo $index;
	//echo $pos;
}
if ( $pos > $index ) {
	$index = $pos;
	$pos = strpos( $string, "Твин Пикс", $index + 1 );
	$amount = 2;
	//echo $pos;
	//echo $index;
}
if ( $pos > $index ) {
	$index = $pos;
	$pos = strpos( $string, "Твин Пикс", $index + 1 );
	$amount = 3;
	//echo $pos;
	//echo $index;
}

echo "Количество совпадений: $amount </br>";

// 3 задание
$stringCopy = str_replace( 'Твин Пикс', 'Twin Peaks', $string );
echo "Замена Твин Пикс на Twin Peaks: </br>" . $stringCopy . "</br></br>";

// 4 задание
echo "Количество элементов в строке: " . strlen( $string );
echo "</br></br>";

// 5 задание
echo "Количество элементов в строке без пробелов: " . strlen( str_replace( " ", "", $string ) ) . "</br></br>";

// 6 задание
echo "Удаление html тегов из строки: </br>" . strip_tags( $string ) . "</br></br>";

// 7 задание
echo "Начало строки с большой буквы: </br>" . ucfirst( $string ) . "</br></br>"


?>
