<?php
function vardump( $var )
{
	echo '<pre>';
	var_dump( $var );
	echo '</pre>';
}

$discography = array(
	  array( 'id' => '12', 'year' => '1994', 'band' => 'Pink Floyd', 'genre' => 'rock', 'name' => 'Division Bell', 'count_songs' => '10' ),
	  array( 'id' => '13', 'year' => '1989', 'band' => 'Nirvana', 'genre' => 'grunge', 'name' => 'Bleach', 'count_songs' => '11' ),
	  array( 'id' => '14', 'year' => '1991', 'band' => 'Nirvana', 'genre' => 'grunge', 'name' => 'Nevermind', 'count_songs' => '13' ),
	  array( 'id' => '15', 'year' => '1993', 'band' => 'Nirvana', 'genre' => 'grunge', 'name' => 'In Utero', 'count_songs' => '12' ),
	  array( 'id' => '16', 'year' => '1991', 'band' => 'Pearl Jam', 'genre' => 'grunge', 'name' => 'Ten', 'count_songs' => '12' ),
	  array( 'id' => '17', 'year' => '1993', 'band' => 'Pearl Jam', 'genre' => 'grunge', 'name' => 'Vs.', 'count_songs' => '10' ),
	  array( 'id' => '18', 'year' => '1994', 'band' => 'Pearl Jam', 'genre' => 'grunge', 'name' => 'Vitalogy', 'count_songs' => '12' ),
	  array( 'id' => '19', 'year' => '1996', 'band' => 'Pearl Jam', 'genre' => 'grunge', 'name' => 'No Code', 'count_songs' => '9' ),
	  array( 'id' => '20', 'year' => '1993', 'band' => 'Radiohead', 'genre' => 'rock', 'name' => 'Pablo Honey', 'count_songs' => '12' ),
	  array( 'id' => '21', 'year' => '1995', 'band' => 'Radiohead', 'genre' => 'rock', 'name' => 'The Bends', 'count_songs' => '12' ),
	  array( 'id' => '22', 'year' => '1997', 'band' => 'Radiohead', 'genre' => 'rock', 'name' => 'OK Computer', 'count_songs' => '19' ),
	  array( 'id' => '23', 'year' => '2000', 'band' => 'Radiohead', 'genre' => 'rock', 'name' => 'Kid A ', 'count_songs' => '14' ),
	  array( 'id' => '24', 'year' => '1994', 'band' => 'Portishead', 'genre' => 'trip-hop', 'name' => 'Dummy', 'count_songs' => '8' ),
	  array( 'id' => '25', 'year' => '1997', 'band' => 'Portishead', 'genre' => 'trip-hop', 'name' => 'Portishead', 'count_songs' => '9' ),
	  array( 'id' => '26', 'year' => '1991', 'band' => 'Massive Attack', 'genre' => 'trip-hop', 'name' => 'Blue Lines', 'count_songs' => '12' ),
	  array( 'id' => '27', 'year' => '1994', 'band' => 'Massive Attack', 'genre' => 'trip-hop', 'name' => 'Protection', 'count_songs' => '15' ),
	  array( 'id' => '28', 'year' => '1998', 'band' => 'Massive Attack', 'genre' => 'trip-hop', 'name' => 'Mezzanine', 'count_songs' => '9' ),
	  array( 'id' => '29', 'year' => '1995', 'band' => 'Tricky', 'genre' => 'trip-hop', 'name' => 'Maxinquaye', 'count_songs' => '11' ),
	  array( 'id' => '30', 'year' => '1998', 'band' => 'Tricky', 'genre' => 'trip-hop', 'name' => 'Angels with Dirty Faces', 'count_songs' => '10' ),
	  array( 'id' => '31', 'year' => '1993', 'band' => 'The Roots', 'genre' => 'hip-hop', 'name' => 'Organix!', 'count_songs' => '11' ),
	  array( 'id' => '32', 'year' => '1995', 'band' => 'The Roots', 'genre' => 'hip-hop', 'name' => 'From the Ground Up', 'count_songs' => '13' ),
	  array( 'id' => '33', 'year' => '1996', 'band' => 'The Roots', 'genre' => 'hip-hop', 'name' => 'Illadelph Halflife', 'count_songs' => '15' ),
	  array( 'id' => '34', 'year' => '1999', 'band' => 'The Roots', 'genre' => 'hip-hop', 'name' => 'Things Fall Apart', 'count_songs' => '14' ),
	  array( 'id' => '35', 'year' => '1999', 'band' => 'The Roots', 'genre' => 'hip-hop', 'name' => 'The Legendary', 'count_songs' => '7' ),
	  array( 'id' => '36', 'year' => '1994', 'band' => 'Oasis', 'genre' => 'rock', 'name' => 'Definitely Maybe', 'count_songs' => '12' ),
	  array( 'id' => '37', 'year' => '1995', 'band' => 'Oasis', 'genre' => 'rock', 'name' => '(What\'s the Story) Morning Glory?', 'count_songs' => '11' ),
	  array( 'id' => '38', 'year' => '1997', 'band' => 'Oasis', 'genre' => 'rock', 'name' => 'Be Here Now', 'count_songs' => '10' ),
	  array( 'id' => '39', 'year' => '2000', 'band' => 'Oasis', 'genre' => 'rock', 'name' => 'Standing on the Shoulder of Giants', 'count_songs' => '13' )
);
$genre = array();
$band = array();
$name = array();
$tripHop = array();
$songs = array();
$discographyNew = array();

foreach ( $discography as $key => $value ) {
	$discographyNew[ $value[ 'year' ] ] [ $value[ 'genre' ] ][$value['band']. " + " . $value['name']] = $value[ 'count_songs' ];
	$genre[ $value[ 'genre' ] ] = $value[ 'genre' ];
	$name [ $value[ 'name' ] ] = $value[ 'name' ];
	$band[ $value[ 'band' ] ] = $value[ 'band' ];
	if ( $value[ 'year' ] == '2000' ) {
		array_splice( $discography, $key, 1 );
	}
	if ( !( isset( $songs ) ) ) {
		echo "Пусто";
	} else {
		$songs[ $key ] = $value[ 'count_songs' ];
	}
	if ( $value[ 'genre' ] == 'trip-hop' ) {
		$tripHop[ $value[ 'genre' ] ][ $value[ 'band' ] ] = $value;
		$tripHopCounter = ++$tripHopCounter;
	}
	if ( $value[ 'year' ] != '1994' ) {
		continue;
	} else {
		$counter1994 = ++$counter1994;
	}
	
}
echo "Количество жанров:  " . count( $genre ) . "</br>";
echo "Количество групп:  " . count( $band ) . "</br>";
echo "Количество заходов в trip-hop:  " . $tripHopCounter . "</br>";
echo "Количество всех исполнителей которые выпускали альбомы в 1994 году:  " . $counter1994 . "</br>";
sort( $songs );
echo "Наибольшее количество песен:  " . end( $songs ) . "</br>";
rsort( $songs );
echo "Наименьшее количество песен:  " . end( $songs ) . "</br>";

vardump( $discographyNew );
//vardump( count($genre) );
//vardump( $songs );
//vardump( $band );
//vardump( $tripHop );


?>

