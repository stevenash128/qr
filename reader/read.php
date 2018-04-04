<?php 

require 'lib/QrReader.php';

/*$included_files = get_included_files();

foreach ($included_files as $filename) {
    echo "$filename\n";
}*/

$files = scandir('tests/qrcodes');

print_r($files);

foreach ($files as $file) {
	if($file == '.' || $file == '..'){
		continue;
	}else{
		$qrcode = new QrReader('tests/qrcodes/'.$file);
		$text = $qrcode->text();
		echo $text;
	}
}

/*
$txt = new QrReader('hello_wold.png'.$files);

echo $txt;*/

 ?>