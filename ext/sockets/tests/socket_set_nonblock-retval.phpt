--TEST--
Test socket_set_nonblock return values
--SKIPIF--
<?php
if (!extension_loaded('sockets')) {
    die('SKIP The sockets extension is not loaded.');
}
?>
--FILE--
<?php

$socket = socket_create_listen(31339);
var_dump(socket_set_nonblock($socket));
socket_close($socket);

$socket2 = socket_create_listen(31340);
socket_close($socket2);
try {
    var_dump(socket_set_nonblock($socket2));
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

?>
--EXPECT--
bool(true)
socket_set_nonblock(): supplied resource is not a valid Socket resource
--CREDITS--
Robin Mehner, robin@coding-robin.de
PHP Testfest Berlin 2009-05-09
