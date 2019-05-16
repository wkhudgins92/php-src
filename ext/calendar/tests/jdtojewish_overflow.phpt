--TEST--
jdtojewish(): test overflow
--CREDITS--
neweracracker@gmail.com
--SKIPIF--
<?php
if (!extension_loaded('calendar')) die('skip ext/calendar required');
?>
--FILE--
<?php
for ($i=324542840; $i<324542850; $i++) {
	echo $i, ':', jdtojewish($i), PHP_EOL;
}
echo 'DONE', PHP_EOL;
?>
--EXPECT--
324542840:12/7/887605
324542841:12/8/887605
324542842:12/9/887605
324542843:12/10/887605
324542844:12/11/887605
324542845:12/12/887605
324542846:12/13/887605
324542847:0/0/0
324542848:0/0/0
324542849:0/0/0
DONE
