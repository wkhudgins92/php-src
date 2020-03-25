--TEST--
Test preg_match_all() function : error conditions
--FILE--
<?php
/*
* proto int preg_match_all(string pattern, string subject, array subpatterns [, int flags [, int offset]])
* Function is implemented in ext/pcre/php_pcre.c
*/
/*
* Testing how preg_match_all reacts to being passed the wrong type of subpatterns array argument
*/
echo "*** Testing preg_match_all() : error conditions ***\n";
$regex = '/[a-z]/';
$subject = 'string';
var_dump(preg_match_all($regex, $subject, 'test'));
echo "Done";
?>
--EXPECTF--
*** Testing preg_match_all() : error conditions ***

Fatal error: Uncaught Error: Cannot pass parameter 3 by reference in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
