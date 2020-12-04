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

namespace zetsoft\dbdata\chess;

use PhpOffice\PhpSpreadsheet\Shared\OLE\PPS\Root;
use zetsoft\models\shop\ShopCourier;
use zetsoft\models\user\UserCompany;
use zetsoft\service\cores\Langs;
use zetsoft\system\actives\ZData;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZFileHelper;
use zetsoft\system\helpers\ZInflector;

class SourceData extends ZData
{
    public function lang():array
    {
        $shop_courier = UserCompany::find()
        ->where([
            'type' => 'source'
        ])
        ->asArray()
        ->all();
        return ZArrayHelper::map($shop_courier, 'name', 'name');
    }
}
