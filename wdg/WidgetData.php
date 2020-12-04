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

namespace zetsoft\dbdata\wdg;

use PhpOffice\PhpSpreadsheet\Shared\OLE\PPS\Root;
use zetsoft\models\user\User;
use zetsoft\system\actives\ZData;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZFileHelper;
use zetsoft\system\helpers\ZStringHelper;

class WidgetData extends ZData
{

    public function lang():array
    {
        $files = ZFileHelper::findFiles(Root . '/widgets', [
            'filter' => function ($path) {

                if (ZStringHelper::find($path, '@') || ZStringHelper::find($path, '.txt'))
                    return false;

                return true;
            }
        ]);

        return Az::$app->utility->mains->getAllWidget($files);

    }


}
