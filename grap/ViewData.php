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

namespace zetsoft\dbdata\grap;

use PhpOffice\PhpSpreadsheet\Shared\OLE\PPS\Root;
use zetsoft\models\user\User;
use zetsoft\system\actives\ZData;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZFileHelper;
use zetsoft\system\helpers\ZStringHelper;

class ViewData extends ZData
{
    public function lang():array
    {
        $files = ZFileHelper::findFiles(Root . '/binary/views');

        foreach ($files as $file) {

            $name = bname($file, '.php');
            $return[$name] = $name;
        }

        return $return;

    }
}
