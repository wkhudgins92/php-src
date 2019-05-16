--TEST--
Testing null byte injection in imagegd2
--SKIPIF--
<?php
        if(!extension_loaded('gd')){ die('skip gd extension not available'); }
?>
--CLEAN--
$tempdir = sys_get_temp_dir(). '/php-gdtest';
foreach (glob($tempdir . "/test*") as $file ) { unlink($file); }
rmdir($tempdir);
--FILE--
<?php
$image = imagecreate(1,1);// 1px image


$tempdir = sys_get_temp_dir(). '/php-gdtest';
if (!file_exists($tempdir) && !is_dir($tempdir)) {
	mkdir ($tempdir, 0777, true);
}

$userinput = "1\0"; // from post or get data
$temp = $tempdir. "/test" . $userinput .".tmp";

echo "\nimagegd2 TEST\n";
try {
    imagegd2($image, $temp);
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
var_dump(file_exists($tempdir. "/test1"));
var_dump(file_exists($tempdir. "/test1.tmp"));
foreach (glob($tempdir . "/test*") as $file ) { unlink($file); }
--EXPECT--
imagegd2 TEST
imagegd2() expects parameter 2 to be a valid path, string given
bool(false)
bool(false)
