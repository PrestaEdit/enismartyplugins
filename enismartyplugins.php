<?php
class EniSmartyPlugins extends Module
{
    public function __construct()
    {
        $this->name = 'enismartyplugins';

        parent::__construct();
    }
    public function install()
    {
        parent::install() && $this->registerHook(['displayHeader']);

        return true;
    }
    public function hookDisplayHeader()
    {
        $this->context->smarty->addPluginsDir(
            [_PS_MODULE_DIR_.'enismartyplugins/plugins/']
        );
    }
}