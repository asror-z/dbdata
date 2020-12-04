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
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZFileHelper;

class SettingData extends ZData
{
    public function lang():array
    {
        parent::lang();

        $return = [];

        $all = ZFileHelper::findFiles(Root . '/former/conf', [
            'recursive' => false
        ]);

//        $app = ZFileHelper::findFiles(Root . '/former/' . App, [
//            'recursive' => false
//        ]);

//        $merged = ZArrayHelper::merge($all, $app);


        foreach ($all as $item) {
            $item = str_replace('.php', '', $item);
            $cleanVal = bname($item);

            $class = strtr($item, [
                Az::getAlias('@zetsoft') => 'zetsoft',
                '/' => '\\'
            ]);

            $return[$class] = $cleanVal;
        }

        return $return;
    }


}
