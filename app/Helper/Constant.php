<?php

namespace Grpf\Helper;

class Constant
{
    public function __construct()
    {
        if (!defined('GRPF_VERSION')) {
            define('GRPF_VERSION', '0.1.0');
        }

        if (!defined('GRPF_PATH')) {
            define('GRPF_PATH', plugin_dir_path(GRPF_FILE));
        }

        if (!defined('GRPF_URL')) {
            define('GRPF_URL', plugins_url('', GRPF_FILE));
        }

        if (!defined('GRPF_SLUG')) {
            define('GRPF_SLUG', basename(dirname(GRPF_FILE)));
        }

        if (!defined('GRPF_TEMPLATE_DEBUG_MODE')) {
            define('GRPF_TEMPLATE_DEBUG_MODE', false);
        }
    }
}
