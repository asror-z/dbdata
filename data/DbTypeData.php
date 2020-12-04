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

namespace zetsoft\dbdata\data;

use zetsoft\system\actives\ZData;
use zetsoft\system\helpers\ZArrayHelper;

class DbTypeData extends ZData
{
    public function lang():array
    {
        return dbType;
    }
}
