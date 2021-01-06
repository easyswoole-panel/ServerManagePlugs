<?php

use Siam\ServerManagePlugs\controller\ServerManage;

return [
    '/api/server-manage/stop' => [['GET','POST'], [new ServerManage, 'stop']],
    '/api/server-manage/reload' => [['GET','POST'], [new ServerManage, 'reload']],
    '/api/server-manage/restart' => [['GET','POST'], [new ServerManage, 'restart']],
    '/api/server-manage/check' => [['GET','POST'], [new ServerManage, 'check']],
    '/api/server-manage/get_info' => [['GET','POST'], [new ServerManage, 'get_info']],
];