<?php
/**
 *
 * @package Legacy
 * @version $Id: BlockInstallEditForm.class.php,v 1.3 2008/09/25 15:11:17 kilica Exp $
 * @copyright Copyright 2005-2007 XOOPS Cube Project  <https://github.com/xoopscube/legacy>
 * @license https://github.com/xoopscube/legacy/blob/master/docs/GPL_V2.txt GNU GENERAL PUBLIC LICENSE Version 2
 *
 */

if (!defined('XOOPS_ROOT_PATH')) {
    exit();
}

require_once XOOPS_ROOT_PATH . "/modules/legacy/admin/forms/BlockEditForm.class.php";

class Legacy_BlockInstallEditForm extends Legacy_BlockEditForm
{
    public function getTokenName()
    {
        return "module.legacy.BlockInstallEditForm.TOKEN" . $this->get('bid');
    }
    
    public function update(&$obj)
    {
        parent::update($obj);
        $obj->set('visible', true);
    }
}
