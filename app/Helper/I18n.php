<?php

namespace Grpf\Helper;

class I18n
{
    static function dashboard()
    {
        return [
            //modules
            "db" => esc_html__("Dashboard", "plugin-format"),
        ];
    }
}
