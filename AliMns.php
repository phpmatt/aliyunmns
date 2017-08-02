<?php
namespace phpmatt\aliyunmns;
require_once(__DIR__.'/src/mns-autoloader.php');

use yii\base\Widget;

class AliMns extends Widget
{
    public function run()
    {
        return "Hello!";
    }
}
