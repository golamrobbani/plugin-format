<?php

namespace Grpf\Ctrl\Hook;

use Grpf\Ctrl\Hook\Type\Filter;
use Grpf\Ctrl\Hook\Type\Action;

class HookCtrl
{
	public function __construct()
	{
		new Filter();
		new Action();
	}
}
