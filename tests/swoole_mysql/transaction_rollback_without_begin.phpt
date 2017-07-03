--TEST--
swoole_mysql: transaction rollback without begin
--SKIPIF--
<?php require __DIR__ . "/../include/skipif.inc"; ?>
--INI--
assert.active=1
assert.warning=1
assert.bail=0
assert.quiet_eval=0


--FILE--
<?php
require_once __DIR__ . "/../include/swoole.inc";

fork_exec(function() {
    require_once __DIR__ . "/../include/apitest/swoole_mysql/swoole_mysql_transaction_rollback_without_begin.php";
});
?>
--EXPECT--
SUCCESS