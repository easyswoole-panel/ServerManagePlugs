<?php


namespace Siam\ServerManagePlugs\controller;


use EasySwoole\Component\TableManager;
use EasySwoole\EasySwoole\ServerManager;
use Siam\Plugs\common\PlugsServerHelper;
use Siam\Plugs\controller\BasePlugsController;

class ServerManage extends BasePlugsController
{
    public function stop()
    {
        PlugsServerHelper::getInstance()->stop();
    }

    public function reload()
    {
        PlugsServerHelper::getInstance()->reload();
        return $this->writeJson('200', [], 'ok');
    }

    public function restart()
    {
        PlugsServerHelper::getInstance()->restart();
    }

    public function check()
    {
        return $this->writeJson('200', [], 'ok');
    }

    public function get_info()
    {
        $info = ServerManager::getInstance()->getSwooleServer()->stats();
        $info['start_time'] = date("Y-m-d H:i:s", $info['start_time']);
        return $this->writeJson('200', [
            'info' => $info
        ]);
    }
}