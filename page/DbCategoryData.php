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
use zetsoft\models\ALL;
use zetsoft\models\drag\DragConfigDb;
use zetsoft\models\page\PageAction;
use zetsoft\models\user\User;
use zetsoft\system\actives\ZData;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZFileHelper;
use zetsoft\system\helpers\ZStringHelper;
use function Dash\where;

class DbCategoryData extends ZData
{

    public function lang():array
    {

        $data = ALL::run();
        $lang = ALL::lang();
        $return = [];

        foreach ($data as $key => $item) {
            $return[$key] = $lang[$key];
        }

        return $return;

    }


}
