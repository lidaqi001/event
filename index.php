<?php
/**
 * Created by PhpStorm.
 * User: qinshikuan
 * Date: 2020/11/4
 * Time: 16:01
 */

use Ldq\EventCenter\Event;

require 'vendor/autoload.php';

try {
    $obj = new Event();
    $msg = $obj->show();
    echo $msg;
    file_put_contents('./log.log', $msg . PHP_EOL, FILE_APPEND);
} catch (Exception $e) {
    $msg = $e->getMessage();
    echo $msg;
    file_put_contents('./log.log', $msg . PHP_EOL, FILE_APPEND);
    return;
} catch (Error $error) {
    $msg = $error->getMessage() . ',' . $error->getFile() . ',' . $error->getLine();
    echo $msg;
    file_put_contents('./log.log', $msg . PHP_EOL, FILE_APPEND);
    return;
}
echo PHP_EOL . 'end';