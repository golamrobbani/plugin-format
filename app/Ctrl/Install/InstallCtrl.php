<?php

namespace Grpf\Ctrl\Install;

use Grpf\Ctrl\Install\Type\DB;
use Grpf\Ctrl\Install\Type\Page;

class InstallCtrl
{
    public function __construct()
    {
        register_activation_hook(GRPF_FILE, array($this, 'plugin_activate'));

        //add_action('admin_init', array($this, 'insert_data'));
        //add_action('admin_init', array($this, 'plugin_redirect'));
    }


    public function plugin_activate()
    {
        add_option('grpf_active', true);
    }

    public function plugin_redirect()
    {
        if (get_option('grpf_active', false)) {
            delete_option('grpf_active');
            wp_redirect(admin_url('admin.php?page=grpf-welcome'));
        }
    }

    public function insert_data()
    {
        $version = get_option('grpf_version', '0.1.0');

        if (version_compare($version, GRPF_VERSION, '<')) {
            update_option('grpf_version', GRPF_VERSION);
        }

        new Page();
        new DB();
    }
}
