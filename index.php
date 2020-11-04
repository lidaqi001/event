<?php
/**
 * Created by PhpStorm.
 * User: qinshikuan
 * Date: 2020/11/4
 * Time: 16:01
 */

use EventCenter\MyPack\Pack;

require 'vendor/autoload.php';

try {
    $obj = new Pack();
    print_r($obj->index());
    return;
}catch (Exception $e){
    echo $e->getMessage();
    return;
}catch (Error $error){
    echo $error->getMessage().','.$error->getFile().','.$error->getLine();
    return;
}
