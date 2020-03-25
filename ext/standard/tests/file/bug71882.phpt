--TEST--
Bug #71882 (Negative ftruncate() on php://memory exhausts memory)
--FILE--
<?php
$fd = fopen("php://memory", "w+");
try {
    var_dump(ftruncate($fd, -1));
} catch (\ValueError $e) {
    echo $e->getMessage() . \PHP_EOL;
}
?>
--EXPECT--
Negative size is not supported
