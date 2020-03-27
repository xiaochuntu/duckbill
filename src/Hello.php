<?php
namespace Tcx\Duckbill;
/**
 * Created by PhpStorm.
 * User: tcx
 * Date: 20-3-26
 * Time: 上午11:10
 */
class Hello
{
    // 声明属性
    public $var = 'Hello World!';

    // 声明方法
    public function say() {
        echo $this->var;
    }

    public static function __callStatic($name, $arguments)
    {
        // 注意: $name 的值区分大小写
        echo "Calling static method '$name' "
            . implode(', ', $arguments). "\n";
    }
}