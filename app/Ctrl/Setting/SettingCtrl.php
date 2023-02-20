<?php

namespace Grpf\Ctrl\Setting;

use Grpf\Ctrl\Setting\Type\Dashboard;
use Grpf\Ctrl\Setting\Type\Welcome;

class SettingCtrl
{

	public function __construct()
	{
		if (is_admin()) {
			new Dashboard();
			new Welcome();
		}
	}
}
