<?php


/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\dbdata\core;

use zetsoft\system\actives\ZData;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZFileHelper;
use zetsoft\system\helpers\ZInflector;

class RuleData extends ZData
{
    public function lang():array
    {
        $validators = ZArrayHelper::merge(validator, $this->getCustomValidators());

        return [];
    }

 
    public function getCustomValidators() {

        $files = ZFileHelper::scanFilesPHP(Root . '/system/validate');

        $items = [];

        foreach ($files as $file)
            $items[ZInflector::classAll($file)] = ZInflector::classAll($file, true);

        return $items;
    }

}
