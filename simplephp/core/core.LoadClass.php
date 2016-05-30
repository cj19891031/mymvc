<?php

//实现自动引入
namespace simplephp\core;

class Loader{
	
	protected $_map=[];

	public static function register($autoload = '')
    {
        // 注册系统自动加载
        spl_autoload_register($autoload ? $autoload : 'simplephp\core\Loader::autoload');
        
    }


    public static function autoload($class){
    	
        list($name, $file) = explode('\\', $class, 2);
        echo $name;exit;

    }


}
