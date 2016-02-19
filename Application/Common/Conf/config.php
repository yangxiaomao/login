<?php
return array(
	//'配置项'=>'配置值'
    //数据库配置
    'DB_TYPE'   =>  'mysql',
    'DB_HOST'   =>  '127.0.0.1',
    'DB_USER'   =>  'root',
    'DB_PWD'    =>  'root',
    'DB_NAME'   =>  'tp',
    'DB_PREFIX' =>  'tp_',
    
    //自定义success和error的提示页面模板
    'TMPL_ACTION_SUCCESS' => 'Public:dispatch_jump',
    'TMPL_ACTION_ERROR' => 'Public:dispatch_jump',
);