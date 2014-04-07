<?php  
require_once __DIR__ . '/globals.php';
require_once SMARTY_PHP;


class MySmarty extends Smarty {
    public function __construct() {
        parent::__construct();
        
        $this->setTemplateDir(SMARTY_TEMPLATES);
        $this->setCompileDir(SMARTY_TEMPLATES_COMPILE);
        
        //$this->assign('SITE_URL', SITE_URL);
        //$this->assign('WEB_METALAND', WEB_METALAND);    $this->assign('WEB_CONTENTS', WEB_CONTENTS);
        //$this->assign('WEB_LANDSCAPES', WEB_LANDSCAPES);
        //$this->assign('SISTER_SITE', SISTER_SITE);      $this->assign('SISTER_URL', SISTER_URL);
        //$this->assign('ADMIN', ADMIN);                  $this->assign('ADMIN_CONTACT', ADMIN_CONTACT);
        //$this->assign('WEBHOST', WEBHOST);              $this->assign('WEBHOST_CONTACT', WEBHOST_CONTACT);
        $this->assign('DEVELOPPER', DEVELOPPER);//        $this->assign('DEVELOPPER_CONTACT', DEVELOPPER_CONTACT);
 
        
        $hexCodes = array('5475A8', 'E29E8C', 'FF0000', 'B50000',
            '85C77E', '38814E', 'D4E7B0', 'DCCA8F',
            'FDE9AA', 'FBF65D','CA9146', 'C8E6F8',
            '64B3D5');
        $this->assign('hexArray', $hexCodes);
        
        
        //$landscapes = array();
        //$this->assign('landscapeArr', $landscapes);

         

    }
}