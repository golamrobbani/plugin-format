<?php

namespace Grpf\Ctrl\Api;

use Grpf\Ctrl\Api\Type\Payment;
use Grpf\Ctrl\Api\Type\Taxonomy;

class ApiCtrl
{

	public function __construct()
	{
		new Payment();
		new Taxonomy();
	}
}
