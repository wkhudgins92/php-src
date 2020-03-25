--TEST--
Bug #72085 (SEGV on unknown address zif_xml_parse)
--SKIPIF--
<?php
if (!extension_loaded('xml')) die('skip xml extension not available');
?>
--FILE--
<?php
$var1 = xml_parser_create_ns();
xml_set_element_handler($var1, new Exception(""), 4096);
xml_parse($var1,  str_repeat("<a>", 10));
?>
--EXPECTF--
Warning: Invalid callback Exception in %s%ebug72085.php:%d
Stack trace:
#0 {main}, no array or string given in %s%ebug72085.php on line %d

Warning: xml_parse(): Unable to call handler in %s%ebug72085.php on line %d

Warning: Invalid callback Exception in %s%ebug72085.php:%d
Stack trace:
#0 {main}, no array or string given in %s%ebug72085.php on line %d

Warning: xml_parse(): Unable to call handler in %s%ebug72085.php on line %d

Warning: Invalid callback Exception in %s%ebug72085.php:%d
Stack trace:
#0 {main}, no array or string given in %s%ebug72085.php on line %d

Warning: xml_parse(): Unable to call handler in %s%ebug72085.php on line %d

Warning: Invalid callback Exception in %s%ebug72085.php:%d
Stack trace:
#0 {main}, no array or string given in %s%ebug72085.php on line %d

Warning: xml_parse(): Unable to call handler in %s%ebug72085.php on line %d

Warning: Invalid callback Exception in %s%ebug72085.php:%d
Stack trace:
#0 {main}, no array or string given in %s%ebug72085.php on line %d

Warning: xml_parse(): Unable to call handler in %s%ebug72085.php on line %d

Warning: Invalid callback Exception in %s%ebug72085.php:%d
Stack trace:
#0 {main}, no array or string given in %s%ebug72085.php on line %d

Warning: xml_parse(): Unable to call handler in %s%ebug72085.php on line %d

Warning: Invalid callback Exception in %s%ebug72085.php:%d
Stack trace:
#0 {main}, no array or string given in %s%ebug72085.php on line %d

Warning: xml_parse(): Unable to call handler in %s%ebug72085.php on line %d

Warning: Invalid callback Exception in %s%ebug72085.php:%d
Stack trace:
#0 {main}, no array or string given in %s%ebug72085.php on line %d

Warning: xml_parse(): Unable to call handler in %s%ebug72085.php on line %d

Warning: Invalid callback Exception in %s%ebug72085.php:%d
Stack trace:
#0 {main}, no array or string given in %s%ebug72085.php on line %d

Warning: xml_parse(): Unable to call handler in %s%ebug72085.php on line %d

Warning: Invalid callback Exception in %s%ebug72085.php:%d
Stack trace:
#0 {main}, no array or string given in %s%ebug72085.php on line %d

Warning: xml_parse(): Unable to call handler in %s%ebug72085.php on line %d
