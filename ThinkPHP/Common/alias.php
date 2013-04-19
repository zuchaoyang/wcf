<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2010 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// $Id$

// 导入别名定义
alias_import(array(
    'Model'         => THINK_PATH.'/Lib/Think/Core/Model.class.php',
    'Dispatcher'    => THINK_PATH.'/Lib/Think/Util/Dispatcher.class.php',
    'HtmlCache'     => THINK_PATH.'/Lib/Think/Util/HtmlCache.class.php',
    'Db'            => THINK_PATH.'/Lib/Think/Db/Db.class.php',
    'ThinkTemplate' => THINK_PATH.'/Lib/Think/Template/ThinkTemplate.class.php',
    'Template'      => THINK_PATH.'/Lib/Think/Util/Template.class.php',
    'TagLib'        => THINK_PATH.'/Lib/Think/Template/TagLib.class.php',
    'Cache'         => THINK_PATH.'/Lib/Think/Util/Cache.class.php',
    'Debug'         => THINK_PATH.'/Lib/Think/Util/Debug.class.php',
    'Session'       => THINK_PATH.'/Lib/Think/Util/Session.class.php',
    'TagLibCx'      => THINK_PATH.'/Lib/Think/Template/TagLib/TagLibCx.class.php',
    'TagLibHtml'    => THINK_PATH.'/Lib/Think/Template/TagLib/TagLibHtml.class.php',
    'ViewModel'     => THINK_PATH.'/Lib/Think/Core/Model/ViewModel.class.php',
    'AdvModel'      => THINK_PATH.'/Lib/Think/Core/Model/AdvModel.class.php',
    'RelationModel' => THINK_PATH.'/Lib/Think/Core/Model/RelationModel.class.php',
    'Controller'    => WEB_ROOT_DIR.'/Control/Controller.class.php',
	'AmsController' => WEB_ROOT_DIR.'/Control/AmsController.class.php',
	'BmsController' => WEB_ROOT_DIR.'/Control/BmsController.class.php',
	'OaController'  => WEB_ROOT_DIR.'/Control/OaController.class.php',
	'SnsController' => WEB_ROOT_DIR.'/Control/SnsController.class.php',
	'WmsController' => WEB_ROOT_DIR.'/Control/WmsController.class.php',
	'UcController'  => WEB_ROOT_DIR.'/Control/UcController.class.php',
    'dBase'         => THINK_PATH.'/Lib/Think/Core/dBase.class.php',
    'mBase'         => THINK_PATH.'/Lib/Think/Core/mBase.class.php',
    'rBase'			=> THINK_PATH.'/Lib/Think/Core/rBase.class.php',
	'rBaseHash'		=> THINK_PATH.'/Lib/Think/Core/rBaseHash.class.php',
	'rBaseString'	=> THINK_PATH.'/Lib/Think/Core/rBaseString.class.php',
	'rBaseSet'		=> THINK_PATH.'/Lib/Think/Core/rBaseSet.class.php',
	'rBaseZset'		=> THINK_PATH.'/Lib/Think/Core/rBaseZset.class.php',
	'RedisIo'		=> THINK_PATH.'/Lib/Think/Core/RedisIo.class.php',
	'GearmanIo'		=> THINK_PATH.'/Lib/Think/Core/GearmanIo.class.php',
    )
);
?>
