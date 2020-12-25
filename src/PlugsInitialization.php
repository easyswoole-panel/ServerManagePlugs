<?php
/**
* 插件初始化 只要引入composer 每次ES运行都会初始化
*/

use \Siam\ServerManagePlugs\controller\ServerManage;

\Siam\Plugs\common\PlugsRouterHelper::getInstance()->addAnyRouter([
    '/api/server-manage/stop' => [new ServerManage, 'stop'],
    '/api/server-manage/reload' => [new ServerManage, 'reload'],
    '/api/server-manage/restart' => [new ServerManage, 'restart'],
    '/api/server-manage/check' => [new ServerManage, 'check'],
]);