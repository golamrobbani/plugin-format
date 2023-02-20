<?php

namespace Grpf\Ctrl;

use Grpf\Ctrl\Ajax\AjaxCtrl;
use Grpf\Ctrl\Api\ApiCtrl;
use Grpf\Ctrl\Asset\AssetCtrl;
use Grpf\Ctrl\Hook\HookCtrl;
use Grpf\Ctrl\Meta\MetaCtrl;
use Grpf\Ctrl\Setting\SettingCtrl;

class MainCtrl
{

    public function __construct()
    {
        if (is_admin()) {
            new SettingCtrl();
        }
        new AssetCtrl();
        new AjaxCtrl();
        new HookCtrl();
        new MetaCtrl();
        new ApiCtrl();
    }
}
