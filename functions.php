<?php
//goods( 61 );
//myStrRev('Hello Denis!');
//myArrayUnique( array( 34, 56, 'hello', 'denis', 34, 79, 'denis' ) );
//myArrayChunk( array( 23, 56, 91, 70, 15 ), 2 );
//myArrayDiff( array( 5, 12, 27, 14, 58 ), array( 14, 27, 5,34,71 ) );
//shortName( "Чернышев Денис Андреевич" );
//phoneOperator( +380957957402 );
function goods( $number )
{
	for ( $a = 1, $b = 5; $b < 100; $a += 10, $b += 10 ) {
		if ( $b > $number && $number > $a ) {
			echo "$number товара";
			break;
		}
		if ( $number === $a ) {
			echo "$number товар";
			break;
		}
		if ( $number >= $b && $number <= ( $a + 9 ) ) {
			echo "$number товаров";
			break;
		}
		continue;
	}
}

function myStrRev( $str )
{
	$stringArray = str_split( $str );
	krsort( $stringArray );
	$string = implode( $stringArray );
	echo $string;
}

function myArrayUnique( $array )
{
	foreach ( $array as $key => $value ) {
		if ( !isset( $newArray ) ) {
			$newArray[ $key ] = $value;
			continue;
		}
		if ( in_array( $value, $newArray ) ) {
			continue;
		} else {
			$newArray[] = $value;
		}
	}
}

function myArrayDiff( $array1, $array2 )
{
	$newArray = array();
	foreach ( $array1 as $value ) {
		if ( in_array( $value, $array1 ) === in_array( $value, $array2 ) ) {
			continue;
		} else {
			$newArray[] = $value;
		}
	}
	var_dump( $newArray );
	//return $newArray;
}

function shortName( $string )
{
	$array = explode( " ", $string );
	$firstLetter = strtoupper( iconv_substr( $array[ 1 ], 0, 1 ) );
	$secondLetter = strtoupper( iconv_substr( $array[ 2 ], 0, 1 ) );
	echo $array[ 0 ] . " " . $firstLetter . "." . $secondLetter . ".";
}

function phoneOperator( $number )
{
	$string = strval( $number );
	$operators = array(
		  "Киевстар" => array(
				'097',
				'067',
				'068',
				'098'
		  ),
		  "Life" => array(
				'093',
				'063',
				'073',
		  ),
		  "Vodafon" => array(
				'095',
				'065'
		  )
	);
	foreach ( $operators as $key => $value ) {
		foreach ( $value as $key2 => $value2 ) {
			$pos = strpos( $string, $value2 );
			if ( $pos === false ) {
				continue;
			} else {
				echo $key;
				break;
			}
		}
	}
}
//function myArrayChunk( $array, $num){
//	$newArray;
//	$i=0;
//	foreach ($array as $key =>$value){
//		if( $key< $num ){
//			$newArray[$key][$i] = $value;
//			$i++;
//			continue;
//		}
//	}
//	var_dump($newArray);
//	//return $newArray;
//}


?>