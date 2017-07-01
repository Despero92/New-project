<?php
showInfo( 'D:\program\openserver\openserver\domains\spalah-php\example folder\\' );
$wayToExampleFolder = 'D:\program\openserver\openserver\domains\spalah-php\example folder\\';
$wayToNewFolder = 'D:\program\openserver\openserver\domains\spalah-php\example folder\\';
//actionsWithFiles($wayToExampleFolder.'private page\\','move',$wayToNewFolder.'\New folder\\');
saveImage('https://d2lm6fxwu08ot6.cloudfront.net/img-thumbs/960w/H9HN4X9XMC.jpg', 'picture');
function showInfo( $wayString )
{
	$exampleFolder = scandir( $wayString );
	$results = $wayString . "\\scan_results.txt";
	$fp = fopen( $results, 'w' );
	for ( $i = 2; $i < count( $exampleFolder ); $i++ ) {
		$info = new SplFileInfo( $wayString .$exampleFolder[ $i ] );
		fwrite( $fp, "$i | " . $info->getFilename(). " | " . $info->getType(). " | " . $info->getExtension(). " | "
			  . $info->getSize(). "\n" );
		// . " | " . $info->getType() . " | " . $info->getExtension()
	}
}
function removeDirectory($dir) {
	if ($objs = glob($dir."/*")) {
		foreach($objs as $obj) {
			is_dir($obj) ? removeDirectory($obj) : unlink($obj);
		}
	}
	rmdir($dir);
}
function actionsWithFiles($wayString,$action,$newWayToFolder){
	$exampleFolder = scandir( $wayString );
	var_dump($exampleFolder);
	if(!file_exists($newWayToFolder)){
		mkdir($newWayToFolder, 0777);
	}
	for($i = 2; $i < count( $exampleFolder ); $i++){
		if($action ==='delete'){
			$info = new SplFileInfo( $wayString .$exampleFolder[ $i ] );
			if($info->getType() === "dir"){
				removeDirectory($wayString .$exampleFolder[ $i ]);
			}else{
				unlink($wayString .$exampleFolder[ $i ]);
			}
		}else{
			rename($wayString .$exampleFolder[ $i ],$newWayToFolder.$exampleFolder[ $i ]);
		}
	}
}
function saveImage($url,$name='image'){
	$file = file_get_contents($url);
	$fileName;
	for($i=1; ; $i++){
		if(!file_exists('D:\program\openserver\openserver\domains\spalah-php\example folder\img\\'.$name.'.jpg')){
			$fileName = 'D:\program\openserver\openserver\domains\spalah-php\example folder\img\\'.$name.'.jpg';
			break;
		}
		if(file_exists('D:\program\openserver\openserver\domains\spalah-php\example folder\img\\'.$name.$i.'.jpg')){
			continue;
		}else{
			$fileName = 'D:\program\openserver\openserver\domains\spalah-php\example folder\img\\'.$name.$i.'.jpg';
			break;
		}
	}
//	$fileName = 'D:\program\openserver\openserver\domains\spalah-php\example folder\img\image.jpg';
//	if(!file_exists('D:\program\openserver\openserver\domains\spalah-php\example folder\img\image.jpg')){
//		$fileName = 'D:\program\openserver\openserver\domains\spalah-php\example folder\img\image.jpg';
//	}else{
//		$i++;
//		$fileName = 'D:\program\openserver\openserver\domains\spalah-php\example folder\img\image'.$i.'.jpg';
//	}
//	echo $i;
	
	$fp = fopen($fileName, 'w');
	fwrite( $fp, $file);
	fclose($fp);
	//var_dump(utf8_encode($file));
}
?>