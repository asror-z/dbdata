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

use zetsoft\service\cores\Langs;
use zetsoft\system\actives\ZData;
use zetsoft\system\helpers\ZArrayHelper;

class LangData extends ZData
{
    public function lang():array
    {
        return Langs::lang;
    }
}
